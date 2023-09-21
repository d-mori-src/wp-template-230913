# WordPressテンプレート
version： 1.0.0<br>
time: 2023.9.13

## ファイル構成
```
root
    |- screenshot.jpg
    |- functions.php
    |- style.scss
    |- style.css
    |- index.php
    |- page.php
    |- archive.php
    |- single.php
    |- header.php
    |- footer.php
    |- sass
    |- meta
    |- js
    |- img
    |- fonts
    |- pages
        |- contact
    |- components
        |- Layout
            |- header
            |- footer
        |- parts
```

## header.php
- 主にhead内metaデータ
- ヘッダーは部品ファイルとして管理する。`components/Layout/header/〜`に集約（今後いろんなパターンを作って切り替え可能にする予定）

使い方
```php
<?php get_template_part('components/Layout/header/header01'); ?>
```

## footer.php
- 主にjs読み込み
- フッターは部品ファイルとして管理する。`components/Layout/footer/〜`に集約（今後いろんなパターンを作って切り替え可能にする予定）

使い方
```php
<?php get_template_part('components/Layout/footer/footer01'); ?>
```

# components
- 主に共通部品を作成し、格納しておくフォルダ
- `Layout`にはheaderとfooterやあとサイドバーなど入れる
- その他パーツは`parts`に入れる

使い方
```php
<?php get_template_part('components/parts/drawer/drawer01'); ?>
```

# page.php
- 固定ページの動的ファイル化

```
    * 例
    * 固定ページがcontactの場合
    * pages/contact/index.php

    * 固定ページがcontactを親にしてconfirmの場合
    * pages/contact/confirm.php
    
    * 固定ページがcontactを親にしてthanksの場合
    * pages/contact/thanks.php
```

# スタイリング
```
root
    |- style.scss
    |- style.css
    |- style.min.css
    |- sass
        |- _base.scss
        |- _fonts.scss
        |- _reset.scss
        |- _settings.scss
        |- utils
            |- _responsive.scss
            |- _utils.scss
            |- _variables.scss
        |- parts
        |- page
        |- layout
```

### style.scss
- @useを使って「sass」内を読み込んでいく
- 読み込む際は「_」は入れなくてOK
- WordPressを使う場合_setting.scssは必須で、必ず1番上に読み込む
- 最終的にこのファイルをコンパイルしてstyle.cssを作成し、html側で読み込む
- 本番サイトではstyle.cssをmin化することでさらにデータを圧縮してパフォーマンスが向上する

```scss
@use "sass/~";
```

### style.css
- 開発・テストサーバーで読み込むファイル
- VS CodeのLive Sass Copilerでコンパイル

### style.min.css
- 本番サーバーで読み込むファイル
- VS Codeでミニファイ化

### style.cssとstyle.min.cssの自動切り分け
```php
// functions.php
// 本番環境を整合させるための関数
function is_production_environment() {
	return strpos(get_site_url(), 'https//www.example.co.jp') !== false; // 本番環境のURLを指定
}
```
```html
<?php if (!is_production_environment()): ?>
    <!-- 開発・テストサーバー時はstyle.css -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>?<?php echo date('YmdHis'); ?>">
<?php else:?>
    <!-- 本番公開時はstyle.min.css -->
    <link rel="stylesheet" href="<?php echo $uri ?>/style.min.css?<?php echo date('YmdHis'); ?>">
<?php endif;?>
```

### _settings.scss
- WordPressのテーマ情報を書く
- style.scssの一番上に読み込む
- WordPressを使和ない場合は不要かも？

### _reset.scss
- リセットCSSを書く
- ひとまず`normalize.css`入れているので適宜入れ替え
- cf.[【2023年版】おすすめのリセットCSSまとめ！基本知識と使い方を解説](https://webdesign-trends.net/entry/8137)

### _fonts.scss
- `@font-face`でフォントを読み込む場合、このファイルに書き込む
- safariでは@font-faceで読み込んだフォントがうまく表示されないのが確認できているため、safariのみhtml側でフォント読み込みをおこなう必要がある。(なぜsafariで適用されないのか不明)

### _base.scss
- 全てのページで使用する共通のスタイルを各ファイル
- 主にベースフォントサイズ、メインカラー、リンクやリストの不要スタイルの削除に利用
- 人によっては共通パーツをここに書いてもいいが、できれば、partsフォルダに分割した方が管理はしやすい

### _variables.scss
* カラー変数をまとめるファイル
* 「$変数名: カラーコード;」で書く
* 色設定の例
  * ベースカラー
  * ホワイトカラー
  * グレイカラー
  * プライマリーカラー
  * セカンダリーカラー
  * デンジャーカラー

```scss
// カラー定義
$base-color: #333;
$white-color: #fff;
$gray-color-thin: #eee;
$primary-color: #75CC00;
$secondary-color: #11aadd;
$danger-color: #e31c1c;
```

### @mixin
- SASSにはmixinという機能が用意されている
- Mixinとはコンポーネント（専用の名前をつけたパーツ）のことで、好きな場所で呼び出すことができる
- 複数回使い回すプロパティや処理を設定する場合に使うと非常に便利
- 「@mixin <mixin名> { 処理 }」と書く

### @forward
- @forwardを使うと複数のscssファイルをまとめられる
- 「@use “../utils/utils” as *;」な感じで1行で呼び出せるので、コードの簡素化につながる
- 当プロジェクトではmixinとvariablesを取りまとめている
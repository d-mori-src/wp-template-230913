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
    |- contact
    |- components
```

## header.php
- 主にhead内metaデータ
- ヘッダーは部品ファイルとして管理する。`components/Layout/header/〜`に集約（今後いろんなパターンを作って切り替え可能にする予定）

読み込み
```php
<?php get_template_part('components/Layout/header/header01'); ?>
```

## footer.php
- 主にjs読み込み
- フッターは部品ファイルとして管理する。`components/Layout/footer/〜`に集約（今後いろんなパターンを作って切り替え可能にする予定）

読み込み
```php
<?php get_template_part('components/Layout/footer/footer01'); ?>
```

# components
- 主に共通部品を作成し、格納しておくフォルダ
- `Layout`にはheaderとfooterやあとサイドバーなど入れる
- その他パーツは`parts`に入れる

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
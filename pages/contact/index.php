<?php
    $uri = get_theme_file_uri(); 
    $site_url = site_url();
?>

<?php get_header(); ?>

<main class="contact">
    <section class="intro">
        <ul>
            <li class="active"><div class="icon"></div><div class="text">入力<div></li>
            <li class="border"></li>
            <li class=""><div class="icon"></div><div class="text">確認<div></li>
            <li class="border"></li>
            <li class=""><div class="icon"></div><div class="text">完了<div></li>
        </ul>

        <p>
            当社の採用のページをご覧いただきまして<br class="sp" />
            ありがとうございます。<br />
            ご応募は下記のフォームよりお願いいたします。<br class="sp" />
            必要事項をご記入の上、<br />
            「入力内容を確認する」を押してください。
        </p>
    </section>

    <section class="form">
        <form action="" method="post">
            <div class="formSet">
                <div class="label">お名前<span>必 須</span></div>
                <div class="inputWrap">
                    <input class="input" type="text" name="fullname" placeholder="（例） " />
                    <p class="error">入力必須です</p>
                </div>
            </div>
            
            <div class="formSet">
                <div class="label no-relative">性別<span>必 須</span></div>
                <div class="inputWrap">
                    <div class="radioItemWrap">
                        <div class="radioItem">
                            <input type="radio" name="gender" value="女性" id="female" checked/>
                            <label for="female">女性</label>
                        </div>
                        <div class="radioItem">
                            <input type="radio" name="gender" value="男性" id="man" />
                            <label for="man">男性</label>
                        </div>
                    </div>
                    <p class="error">選択必須です</p>
                </div>
            </div>

            <div class="formSet">
                <div class="label">メールアドレス<span>必 須</span></div>
                <div class="inputWrap">
                    <input class="input" type="text" name="email" placeholder="（例） mail@example.jp" />
                    <p class="error">入力必須です</p>
                </div>
            </div>

            <div class="formSet">
                <div class="label">電話番号<span>必 須</span></div>
                <div class="inputWrap">
                    <input class="input" type="text" name="tel" placeholder="（例） 0781234567 ※ハイフン不要" />
                    <p class="error">入力必須です</p>
                </div>
            </div>   

            <div class="formSet">
                <div class="label">お住まい<span>必 須</span></div>
                <div class="inputWrap">
                    <select name="prefectures" id="prefectures">
                        <option value="" selected>都道府県を選択</option>
                    </select>
                    <input class="input" type="text" name="municipalities" placeholder="市区町村" />
                    <p class="error">入力必須です</p>
                </div>
            </div>
            
            <div class="formSet lastFormSet">
                <div class="label">お問い合わせ<span class="any">任 意</span></div>
                <div class="inputWrap">
                    <textarea class="textarea" name="inquiry" placeholder="お問い合わせ"></textarea>
                </div>
            </div>
            
            <button type="submit">
                入力内容を確認する
                <span><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg></span>
            </button>
        </form>
    </section>
</main>

<?php get_footer(); ?>
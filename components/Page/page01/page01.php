<?php
    $uri = get_theme_file_uri(); // ルートpath
    global $post;
    $slug = $post->post_name;
    $site_url = site_url(); // サイトURL
    $server_uri = $_SERVER['REQUEST_URI'];
    $server_uri_trimed = substr($server_uri, 0, strcspn($server_uri,'?')); 
?>

<main class="page01">
    <div class="leftHeader">
        <a href="">
            <img src="<?=$uri?>/img/page/page01/logo.svg" class="logoImage" alt="logo">
        </a>
        <ul class="mainNav">
            <li><a href="#art">art</a></li>
            <li><a href="#stay">stay</a></li>
            <li><a href="#food">food</a></li>
            <li><a href="#event">event</a></li>
        </ul>
        <ul class="subNav">
            <li><a href="">access</a></li>
            <li><a href="">privacy</a></li>
        </ul>
    </div>
    
    <div class="rightContents">
        <img src="https://picsum.photos/id/238/800/600" class="mainImage" alt="main1">
        <div class="headButton">
            <a href="">contact<span>お問い合わせ</span></a>
        </div>
        <p class="jp">
            わたしたちは、非日常の贅沢ではなく、暮らしの中でアートを身近に感じられる<br>
            アートコレクターの住まいのようなホテルを、理想の暮らしを体験する場所として作りました。<br>
            シンプルな佇まいの中に、アートが存在感を放ちながらも調和し、オーセンティックな家具や装飾品が洗練された空間を演出します。<br>
            暮らしの中でアートを身近に感じる豊かな時間をお過ごしください。
        </p>
        <div class="titleCopy bottomSlidein">
            authentic and contemporary
        </div>
        <p class="en bottomSlidein">
            At node hotel, we believe that hotels should be spaces designed<br>
            for ideal living experiences rather than extraordinary luxury.<br>
            We’ve streamlined all the excess detail to create a simple,<br>
            high-quality building with classic furnishings and decorative elements.<br>
            The result is a refined space tastefully paired with memorable art pieces for authentic beauty.<br>
            <br>
            “Like the home of an art collector”<br cla３ss="pc">
            We create rich spaces where art feels like a natural part of life.
        </p>

        <div class="content">
            <div class="contentTitle bottomSlidein" id="art"><p>art</p></div>
            <div class="contentComponent bottomSlidein">
                <img src="https://picsum.photos/id/239/800/600" class="contentImage" alt="img1">
                <p class="jp">
                    客室はグレーを基調とした落ち着いたトーンに、クラシカルな中にもモダンを感じさせる家具と洗練された現代アートを展示した<br>
                    空間構成となっています。快適性を兼ね備えたファブリック、アメニティ、ルームウェアもご用意しており、<br>
                    10m²のシングルタイプから、50m²超のジュニアスイートタイプまで、<br>
                    様々なシチュエーションに合わせたニーズに対応しています。
                </p>
                <p class="en en2 bottomSlidein">
                    We believe that art is an essential part of the ideal life.<br>
                    We display pieces that we’ve collected from our partner galleries and<br>
                    art fairs around the world-works<br>
                    by Barry McGee, Bernard Frize, Tomoo Gokita,<br>
                    Shinro Ohtake and Nobuyoshi Araki, to name a few.
                </p>
            </div>
        </div>

        <div class="content">
            <div class="contentTitle bottomSlidein" id="stay"><p>stay</p></div>
            <div class="contentComponent bottomSlidein">
                <img src="https://picsum.photos/id/240/800/600" class="contentImage" alt="img2">
                <p class="jp">
                    客室はグレーを基調とした落ち着いたトーンに、クラシカルな中にもモダンを感じさせる家具と洗練された現代アートを展示した<br>
                    空間構成となっています。快適性を兼ね備えたファブリック、アメニティ、ルームウェアもご用意しており、<br>
                    10m²のシングルタイプから、50m²超のジュニアスイートタイプまで、<br>
                    様々なシチュエーションに合わせたニーズに対応しています。
                </p>
                <p class="en en2 bottomSlidein">
                    Hotels are places to restore the mind and body during travel.<br>
                    Our guestrooms are decorated in soothing gray tones and fitted with original furniture and art pieces,<br>
                    while our oversized beds, amenities, and loungewear<br>
                    have been thoughtfully selected with guest comfort in mind.
                </p>
            </div>
        </div>

        <div class="content">
            <div class="contentTitle bottomSlidein" id="food"><p>food</p></div>
            <div class="contentComponent bottomSlidein">
                <img src="https://picsum.photos/id/241/800/600" class="contentImage" alt="img3">
                <p class="jp">
                    京都で暮らすわたしたちが本当にオススメできるものを集めました。<br>
                    朝食はローカルの美味しいパンと、“farm to table”をコンセプトに地元京都の食材が彩りをそえます。<br>
                    ディナーは、世界中のあらゆる食文化が混ざり合ったジャンルレスなスペシャリテとセレクトしたワインが楽しめます。<br>
                    またカフェ、バーにも利用でき、過ごす時間によってゲストに心地よいサービスを提供します。
                </p>
                <p class="en en2 bottomSlidein">
                    As Kyoto natives, we are passionate about curating exceptional ingredients for our guests.<br>
                    For breakfast we offer delicious, locally-baked bread<br>
                    and a variety of locally-sourced, farm-to-table Kyoto fare.<br>
                    For dinner, we specialize in dishes that defy categorization,<br>
                    blending the best of food cultures from around the world<br>
                    and pairing them with a delightful selection of wines.<br>
                    We also have a café and bar available to ensure that our guests have everything<br>
                    they need for a relaxing and comfortable experience with us.
                </p>
            </div>
        </div>

        <div class="content">
            <div class="contentTitle bottomSlidein" id="event"><p>event</p></div>
            <div class="contentComponent bottomSlidein">
                <img src="https://picsum.photos/id/242/800/600" class="contentImage" alt="img4">
                <p class="jp">
                    アーティストやギャラリーとコラボレーションした展覧会やポップアップストアなど、<br>
                    アート、デザイン、ファッション、音楽、フードを基軸にした企画や積極的な情報発信を行い、<br>
                    文化や人々の交わる場を創造します。
                </p>
                <p class="en en2 bottomSlidein">
                    We are passionate about creating places for cultural and<br>
                    human exchange through a variety of events<br>
                    designed to actively communicate information through art, design, fashion, music, and food.<br>
                    Join us for collaborative exhibitions<br>
                    with artists and galleries, pop-up shops, and more.
                </p>
            </div>
        </div>
    </div>
</main>
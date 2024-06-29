<div class="intro">
    <ul>
        <li class=""><div class="icon"></div><div class="text">入力<div></li>
        <li class="border"></li>
        <li class="active"><div class="icon"></div><div class="text">確認<div></li>
        <li class="border"></li>
        <li class=""><div class="icon"></div><div class="text">完了<div></li>
    </ul>
</div>

<section class="form">
    <form method="post" action="">
        <ul class="formWrap">
            <li class="formSet">
                <div class="label">お問い合わせ種別</div>
                <div class="inputWrap"><?php echo $esc['inquiry'] ?></div>
            </li>
            <li class="formSet">
                <div class="label">姓名（漢字）</div>
                <div class="inputWrap"><?php echo $esc['fullname'] ?></div>
            </li>
            <li class="formSet">
                <div class="label">姓名（フリガナ）</div>
                <div class="inputWrap"><?php echo $esc['furigananame'] ?></div>
            </li>
            <li class="formSet">
                <div class="label">メールアドレス</div>
                <div class="inputWrap"><?php echo $esc['email'] ?></div>
            </li>
            <li class="formSet">
                <div class="label">電話番号</div>
                <div class="inputWrap"><?php echo $esc['tel'] ?></div>
            </li>
            <li class="formSet">
                <div class="label">お問い合わせ内容</div>
                <div class="inputWrap"><?php echo $esc['publicrelations'] ?></div>
            </li>

            <?php if( !empty($esc['attachment_file']) ): ?>
                <li class="formSet">
                    <div class="label">画像ファイルの添付</div>
                    <div class="inputWrap"><?php echo $esc['attachment_file']; ?></div>
                </li>
            <?php endif; ?>
        </ul>
        <ul class="submitWrap">
            <li><input type="submit" name="back" value="修正する"></li>
            <li class="send"><input type="submit" name="submit" value="入力内容を送信する"></li>
        </ul>

        <!-- データを受け渡すために一時的に保存 -->
        <input type="hidden" name="inquiry" value="<?php echo $esc['inquiry'] ?>">
        <input type="hidden" name="fullname" value="<?php echo $esc['fullname'] ?>">
        <input type="hidden" name="furigananame" value="<?php echo $esc['furigananame'] ?>">
        <input type="hidden" name="email" value="<?php echo $esc['email'] ?>">
        <input type="hidden" name="tel" value="<?php echo $esc['tel'] ?>">
        <input type="hidden" name="publicrelations" value="<?php echo $esc['publicrelations'] ?>">
        <?php if( !empty($esc['attachment_file']) ): ?>
            <input type="hidden" name="attachment_file" value="<?php echo $esc['attachment_file']; ?>">
        <?php endif; ?>
        <input type="hidden" name="agree" value="<?php echo $esc['agree'] ?>">
    </form>
</section>
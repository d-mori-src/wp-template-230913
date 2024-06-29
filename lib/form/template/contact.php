<?php
    $site_url = site_url();
?>

<div class="intro">
    <ul>
        <li class="active"><div class="icon"></div><div class="text">入力<div></li>
        <li class="border"></li>
        <li class=""><div class="icon"></div><div class="text">確認<div></li>
        <li class="border"></li>
        <li class=""><div class="icon"></div><div class="text">完了<div></li>
    </ul>
</div>
<section class="form">
    <form method="post" action="" enctype="multipart/form-data">
        <ul class="formWrap">
            <li class="formSet">
                <div class="label">お問い合わせ種別<span>必須</span></div>
                <div class="inputWrap selectWrap">
                    <select name="inquiry">
                        <option value="お問い合わせ" <?php echo $esc['inquiry'] == 'お問い合わせ' ? 'selected' : ''  ?>>お問い合わせ</option>
                        <option value="資料請求" <?php echo $esc['inquiry'] == '資料請求' ? 'selected' : ''  ?>>資料請求</option>
                    </select>
                </div>
            </li>

            <li class="formSet">
                <div class="label">姓名（漢字）<span>必須</span></div>
                <div class="inputWrap">
                    <input type="text" name="fullname" id="fullname" value="<?php if(!empty($esc['fullname'])) {echo $esc['fullname'];} ?>" placeholder="（例）山田 太郎">
                    <?php echo !empty($error['fullname']) ? '<p class="error">'.$error['fullname'].'</p>' : ''; ?>
                </div>
            </li>

            <li class="formSet">
                <div class="label">姓名（フリガナ）<span>必須</span></div>
                <div class="inputWrap">
                    <input type="text" name="furigananame" id="furigananame" value="<?php if(!empty($esc['furigananame'])) {echo $esc['furigananame'];} ?>" placeholder="（例）やまだ たろう">
                    <?php echo !empty($error['furigananame']) ? '<p class="error">'.$error['furigananame'].'</p>' : ''; ?>
                </div>
            </li>

            <li class="formSet">
                <div class="label">メールアドレス<span>必須</span></div>
                <div class="inputWrap">
                    <input type="text" name="email" value="<?php if(!empty($esc['email'])) {echo $esc['email'];} ?>" placeholder="（例）example@mail.com">
                    <?php echo !empty($error['email']) ? '<p class="error">'.$error['email'].'</p>' : ''; ?>
                    <?php echo !empty($error['email_format']) ? '<p class="error">'.$error['email_format'].'</p>' : ''; ?>
                </div>
            </li>

            <li class="formSet">
                <div class="label">電話番号<span>必須</span></div>
                <div class="inputWrap">
                    <input type="tel" name="tel" value="<?php if(!empty($esc['tel'])) {echo $esc['tel'];} ?>" placeholder="（例）0901234568 ※ハイフンなしでも可">
                    <?php echo !empty($error['tel']) ? '<p class="error">'.$error['tel'].'</p>' : ''; ?>
                    <?php echo !empty($error['tel_format']) ? '<p class="error">'.$error['tel_format'].'</p>' : ''; ?>
                </div>
            </li>

            <li class="formSet">
                <div class="label">お問い合わせ内容<span>必須</span></div>
                <div class="inputWrap">
                    <textarea name="publicrelations" placeholder="お問い合わせ内容をご入力ください" maxlength="400"><?php if(!empty($esc['publicrelations'])) {echo $esc['publicrelations'];} ?></textarea>
                    <?php echo !empty($error['publicrelations']) ? '<p class="error">'.$error['publicrelations'].'</p>' : ''; ?>
                </div>
            </li>

            <li class="formSet">
                <div class="label">ファイル添付<span>必須</span></div>
                <div class="inputWrap fileWrap">
                    <input type="file" name="attachment_file" class="upload-limit">
                    <ul class="explanation">
                        <li><span>※</span>ファイルは5MBまでにしてください</li>
                        <li><span>※</span>pdf形式のファイルを添付してください</li>
                    </ul>
                    <?php echo !empty($error['attachment_file']) ? '<p class="error">'.$error['attachment_file'].'</p>' : ''; ?>
                    <?php if( !empty($esc['attachment_file']) ): ?>
                        <p class="result">現在の添付ファイル: <?php echo $esc['attachment_file']; ?></p>
                        <input type="hidden" name="attachment_file" value="<?php echo $esc['attachment_file']; ?>">
                    <?php endif; ?>
                </div>
            </li>
        </ul>

        <div class="agree">
            <div class="privacy-policy">
                <h3>プライバシーポリシーについて</h3>
                <p>
                    当ホームページが収集する氏名・メールアドレス・電話番号などの特定個人を識別できる情報（以下、個人情報）は、利用者ご本人の意思による提供・登録を原則とします。 
                    当ホームページを通じて提供された個人情報は、当ホームページの管理者が厳重に管理し、採用活動のみ利用されます。 
                    また、提供いただいたすべての個人情報は、利用者ご本人の許可なしに第三者へ開示または提供されることはありません。
                </p>
            </div>
            <ul class="checkbox">
                <li>
                    <input type="checkbox" name="agree" id="agree" value="プライバシーボリシーに同意" <?php echo !empty($esc['agree']) ? 'checked' : ''  ?>>
                    <label for="agree" class="agreeLabel">プライバシーボリシーに同意</label>
                </li>
            </ul>
            <?php echo !empty($error['agree']) ? '<p class="error">'.$error['agree'].'</p>' : ''; ?>
        </div>
        <ul class="submitWrap">
            <li class="send"><input type="submit" name="confirm" value="入力内容を確認する"></li>
        </ul>
    </form>
</section>

<script>
    const fileLimit = 1024 * 1024 * 5;
    const fileUploads = document.querySelectorAll('.upload-limit');
    fileUploads.forEach(fileUpload => {
        fileUpload.addEventListener('change', () => {
            const files = fileUpload.files;
            for (const file of files) {
                if (file.size > fileLimit) {
                    alert('ファイルサイズが5MBを超えています');
                    fileUpload.value = "";
                    return;
                }
            }
        })
    });
</script>
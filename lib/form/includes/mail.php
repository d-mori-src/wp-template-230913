<?php

// 変数一覧
$header = null;
$body = null;
$reply_subject = null;
$reply_text = null;
$notice_subject = null;
$notice_text = null;
$admin_mail = 'example@email.com';
$admin_name = 'admin name';

// メールヘッダー情報
$header = "MIME-Version: 1.0\n";
$header .= "Content-Type: multipart/mixed;boundary=\"__BOUNDARY__\"\n";
$header .= "From:$admin_name <$admin_mail>\n";
$header .= "Reply-To: <$admin_mail>\n";
// $header .= "Cc: example@email.com\n";
// $header .= "Bcc: example@email.com\n";
$header .= "Organization: " . $admin_name . " \r\n";
$header .= "X-Sender: " . $admin_mail . " \r\n";
$header .= "X-Priority: 3 \r\n";

// 自動返信メール件名
$reply_subject = "お問い合わせいただきありがとうございます";
$encoded_reply_subject = mb_encode_mimeheader($reply_subject, "UTF-8");

// 自動返信メール本文
$reply_text = "下記の内容でお問い合わせを受け付けました。後日担当者よりご連絡いたします。"."\n\n";
$reply_text .= "お問い合わせ受付日時：".date('Y-m-d H:i')."\n";
$reply_text .= "お問い合わせ種別：".$esc['inquiry']."\n";
$reply_text .= "姓名（漢字）：".$esc['fullname']."\n";
$reply_text .= "姓名（フリガナ）：".$esc['furigananame']."\n";
$reply_text .= "メールアドレス：".$esc['email']."\n";
$reply_text .= "電話番号：".$esc['tel']."\n";
$reply_text .= "お問い合わせ内容:".$esc['publicrelations']."\n\n";
$reply_text .= "送信元: ホームページ管理者<$admin_mail>";

// テキストメッセージをセット
$reply_body = "--__BOUNDARY__\n";
$reply_body .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n\n";
$reply_body .= mb_convert_encoding($reply_text, "ISO-2022-JP") . "\n";
// $reply_body .= mb_convert_encoding($reply_text, "UTF-8") . "\n"; // 古いメールソフトだと文字化けする
$reply_body .= "--__BOUNDARY__--";

// 自動返信メールの送信
mail($esc['email'], $encoded_reply_subject, $reply_body, $header);



// 管理者通知メールの件名
$notice_subject = "ホームページからメッセージがありました";
$encoded_notice_subject = mb_encode_mimeheader($notice_subject, "UTF-8");

// 管理者通知メールの本文
$notice_text = "管理者宛メール"."\n\n";
$notice_text .= "お問い合わせ受付日時：".date('Y-m-d H:i')."\n";
$notice_text .= "お問い合わせ種別：".$esc['inquiry']."\n";
$notice_text .= "姓名（漢字）：".$esc['fullname']."\n";
$notice_text .= "姓名（フリガナ）：".$esc['furigananame']."\n";
$notice_text .= "メールアドレス：".$esc['email']."\n";
$notice_text .= "電話番号：".$esc['tel']."\n";
$notice_text .= "お問い合わせ内容:".$esc['publicrelations']."\n";
$notice_text .= "プライバシーポリシー：".$esc['agree']."\n";

// テキストメッセージをセット
$notice_body = "--__BOUNDARY__\n";
$notice_body .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n\n";
$notice_body .= mb_convert_encoding($notice_text, "ISO-2022-JP") . "\n";
// $notice_body .= mb_convert_encoding($notice_text, "UTF-8") . "\n"; // 古いメールソフトだと文字化けする
$notice_body .= "--__BOUNDARY__\n";

// ファイルを添付
$notice_body .= "Content-Type: application/octet-stream; name=\"{$esc['attachment_file']}\"\n";
$notice_body .= "Content-Disposition: attachment; filename=\"{$esc['attachment_file']}\"\n";
$notice_body .= "Content-Transfer-Encoding: base64\n";
$notice_body .= "\n";
$notice_body .= chunk_split(base64_encode(file_get_contents(FILE_DIR.$esc['attachment_file'])));
$notice_body .= "--__BOUNDARY__\n";

// 管理者通知メールの送信
mail($admin_mail, $encoded_notice_subject, $notice_body, $header);
<?php
   if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit;
   }

   function postText(string $key): string
   {
    $value = $_POST[$key] ?? '';
    return is_string($value) ? trim($value) : '';
   }

    $name = postText('name');
    $companyName = postText('companyName');
    $email = postText('email');
    $age = postText('age');
    $message = postText('message');

    mb_language('Japanese');
    mb_internal_encoding('UTF-8');

    $subject = 'お問い合わせがありました';
    $body = "名前: {$name}\n" .
            "会社名: {$companyName}\n" .
            "メールアドレス: {$email}\n" .
            "年齢: {$age}\n\n" .
            "お問い合わせ内容:\n{$message}\n";
    $to = 'fuyongzaoxue@gmail.com';
    $from = 'fuyongzaoxue@gmail.com';
    $headers = "From: {$from}";

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $headers .= "\r\nReply-To: {$email}";
    }

    $sent = mb_send_mail($to, $subject, $body, $headers);
    ?>

<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>お問い合わせフォーム - 送信完了画面</title>
 </head>

 <body>
    <h1>お問い合わせフォーム-送信完了画面</h1>
    <?php if($sent): ?>
        <p>お問い合わせが完了しました。ありがとうございます！</p>
    <?php else: ?>
        <p>メール送信に失敗しました。</p>  
    <a href="contact.php">お問合せフォームに戻る</a>
<?php endif; ?>
</body>
</html>

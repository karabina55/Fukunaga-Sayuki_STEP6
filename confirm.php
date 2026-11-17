<?php
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('Location: contact.php');
        exit;
    }

    function e(string $value): string
    {
        return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }
    
    $name = $_POST['name'] ?? '';
    $companyName = $_POST['companyName'] ?? '';
    $email = $_POST['email'] ?? '';
    $age = $_POST['age'] ?? '';
    $message = $_POST['message'] ?? '';
    
    $name = is_string($name) ? $name : '';
    $companyName = is_string($companyName) ? $companyName: '';
    $email = is_string($email) ? $email: '';
    $age = is_string($age) ? $age: '';
    $message = is_string($message) ? $message: '';

    $errors = [];
    $fields = [
        'お名前' => $name,
        '会社名' => $companyName,
        'メールアドレス' => $email,
        '年齢' => $age,
        'お問い合わせ内容' => $message
    ];

    foreach ($fields as $label => $value) {
        if (trim($value) === '') {
            $errors[] = "{$label}が未入力です。";
        }
    }
    ?>

<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>お問い合わせフォーム - 確認画面</title>

 <link rel="stylesheet" href="style.css">
</head>

<body>

<?php if ($errors): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?= e($error) ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="contact.php">お問い合わせフォームに戻る</a>
<?php else: ?>

<header>
       <h2>お問い合わせフォーム - 確認画面</h2>
</header>

<aside>
<nav>
    <ul>
        <li><a href="section1">トップページ</a></li><br>
        <li><a href="section2">人気投稿</a></li><br>
        <li><a href="section3">エンジニアおすすめ商品</a></li><br>
        <li><a href="section4">エンジニアおすすめ記事</a></li><br>
        <li><a href="contact.php#section5">投稿ページ</a></li>
    </ul>
</nav>
</aside>

    <table border="2">
        <tr>
            <th scope="row">お名前</th>
            <td><?= e($name) ?></td>
        </tr>
        <tr>
            <th scope="row">会社名</th>
            <td><?= e($companyName) ?></td>
        </tr>
        <tr>
            <th scope="row">メールアドレス</th>
            <td><?= e($email) ?></td>
        </tr>
        <tr>
            <th scope="row">年齢</th>
            <td><?= e($age) ?></td>
        </tr>
        <tr>
            <th scope="row">お問い合わせ内容</th>
            <td><?= nl2br(e($message)) ?></td>
        </tr>
    </table>

<form method="post" action="send.php">
    <input type="hidden" name="name" value="<?= e($name) ?>">
    <input type="hidden" name="companyName" value="<?= e($companyName) ?>">
    <input type="hidden" name="email" value="<?= e($email) ?>">
    <input type="hidden" name="age" value="<?= e($age) ?>">
    <input type="hidden" name="message" value="<?= e($message) ?>">

    <input type="submit" value="送信"><br><br>
    <button type="button" onclick="history.back()">戻る</button>

</form>
<?php endif; ?>
<script src="style.js"></script>
</body>
</html>


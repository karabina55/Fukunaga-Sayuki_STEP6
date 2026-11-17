<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>お問い合わせフォーム</title>

 <link rel="stylesheet" href="style.css">
</head>

<body>
<header>
       <h2>お問い合わせフォーム</h2>
</header>

<aside>
<nav>
    <ul>
        <li><a href="section1">トップページ</a></li><br>
        <li><a href="section2">人気投稿</a></li><br>
        <li><a href="section3">エンジニアおすすめ商品</a></li><br>
        <li><a href="section4">エンジニアおすすめ記事</a></li><br>
        <li><a href="section5">投稿ページ</a></li>
    </ul>
</nav>
</aside>

<form action="confirm.php" method="POST">

<section id="section5">
    <table border="2">
        <tr>
            <th>お名前</th>
            <td><input type="text" id="name" name="name"></td>
        </tr>
        <tr>
            <th>会社名</th>
            <td><input type="text" id="companyName" name="companyName"></td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td><input type="text" id="email" name="email"></td>
        </tr>
        <tr>
            <th>年齢</th>
            <td><input type="text" id="age" name="age"></td>
        </tr>
        <tr>
            <th>お問い合わせ内容</th>
            <td><textarea id="message" name="message" rows="4"></textarea></td>
        </tr>
    </table>

    <input type="submit" value="送信">
</section>

<aside>
    <p>横のボタンを押すとfooterの背景色が変わります。</p>
</aside>

<footer>
    <button id="colorButton" type="button">押してみてね！</button><br><br>
</footer>

<script src="style.js"></script>
</form>
</body>
</html>




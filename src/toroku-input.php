<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/toroku-input.css">
    <title>作品登録画面</title>
</head>
<body>
    <div id="content">
    <h1>作品登録</h1>
    <button class="modoru" onclick="location.href='index.php'">トップに戻る</button>
    <br>
    <br>
    <br>
    <form action="toroku-output.php" method="post">
    作品番号<input type="text" name="drama_id"></form><br>
    作品名<input type="text" name="name"></form><br>
    　　年<input type="text" name="year"></form><br>
<br>
    <button type="submit">登録</button></div>
    <button class="toroku" onclick="location.href='toroku-output.php'">登録</button>
</body>
</html>
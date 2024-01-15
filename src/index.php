<?php require 'db-connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/search.css">
    <title>Document</title>
</head>
<body>
    <h1>韓国ドラマ管理メニュー</h1>

    <form action="ichiran.php" method="post">
    <input type="submit" value="一覧"></form>

    <form action="toroku-input.php" method="post">
    <input type="submit" value="登録"></form>

    <form action="update.php" method="post">
    <input type="submit" value="更新"></form>

    <form action="delete.php" method="post">
    <input type="submit" value="削除"></form>
</body>
</html>
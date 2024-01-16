<?php require 'db-connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>
    <div id="content">
    <h1>韓国ドラマ管理メニュー</h1>

    <form action="ichiran.php" method="post">
    <input type="submit" value="一覧"></form><br>

    <form action="toroku-input.php" method="post">
    <input type="submit" value="登録"></form><br>

    <form action="update-input.php" method="post">
    <input type="submit" value="更新"></form><br>

    <form action="delete-input.php" method="post">
    <input type="submit" value="削除"></form>
</body>
</html>
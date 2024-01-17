<?php require 'db-connect.php';?>
<form action="detail.php" method="post">

foreach ($sql as $row){
echo '<p><img alt="image" src="image/', $row['id'], '.jpg"></p>';
echo '<form action="index.php" method="post">';
echo '<p>番号:', $row['drama_id'], '</p>';
echo '<p>作品名:', $row['name'], '</p>';
echo '<p>年:', $row['year'], '</p>';
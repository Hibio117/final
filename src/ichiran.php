<?php require 'db-connect.php';?>


    韓国ドラマ一覧
    <a href="index.php" >トップに戻る</a>
<hr>
<h1>作品一覧</h1>
    <table>
        <tr><th>番号</th><th>作品名</th><th>年</th></tr>
    <?php
    $pdo=new PDO($connect, USER, PASS);

    foreach($pdo->query('select * from drama') as $row){
        echo '<tr>';
        echo '<td>',$row['drama_id'],'</td>';
        echo '<td>',$row['name'],'</td>';
        echo '<td>',$row['year'],'</td>';
        echo '</tr>';
        echo "\n";
     }
?>
    </table>
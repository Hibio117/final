<?php require 'db-connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/delete-output.css">
    <title>Document</title>
</head>
<body>
    <?php
        $pdo=new PDO($connect, USER, PASS);
        $sql=$pdo->prepare('delete from drama where drama_id=?');
        if($sql->execute([$_GET['drama_id']])){
            echo '削除しました。';
        }else{
            echo '削除できませんでした。';
        }
    ?>
        <br><hr><br>
        <table>
            <tr><th>作品番号</th><th>作品名</th><th>年</th></tr>

        <?php
            foreach ($pdo->query('select * from drama') as $row){
                echo '<tr>';
                echo '<td>',$row['drama_id'],'</td>';
                echo '<td>',$row['name'],'</td>';
                echo '<td>',$row['year'],'</td>';
                echo '</tr>';
                echo "\n";
            }
        ?>
        </table>
            <form action="delete-input.php" method="post">
                <button type="submit">削除画面へ戻る</button>
        </form>
        <button class="modoru" onclick="location.href='delete-input.php'">削除画面へ戻る</button>
</body>
</html>
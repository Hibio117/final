<?php require 'db-connect.php';?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/toroku-output.css">
    <title>作品登録画面</title>
</head>
<body>
<button onclick="location.href='index.php'">トップへ戻る</button>
<?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('insert into drama(drama_id, name, year)values(?,?,?)');
    if(empty($_POST['drama_id'])){
        echo '番号を入力してください。';
    }else if(empty($_POST['name'])){
        echo '作品名を入力してください';
    }else if(empty($_POST['year'])){
        echo '年を入力してください';
    }else if($sql->execute([ $_POST['drama_id'],$_POST['name'],$_POST['year'] ]) ){
        echo '<font color="red">追加しました。</font>';
    }else{
        echo '<font color="red">追加できませんした。</font>';
    }
?>
    <br><hr><br>

<table border="1">
    <tr><th>　作品ID　</th><th>　作品名　</th><th>　年　</th></tr>

<?php
    foreach($pdo->query('select * from drama') as $row){
    echo'<tr>';
    echo'<td>',$row['drama_id'],'</td>';
    echo'<td>',$row['name'],'</td>';
    echo'<td>',$row['year'],'</td>';
    echo'</tr>';
    echo"\n";
}
?>
</table>
    <br>
    <button onclick="location.href='toroku-input.php'">追加画面へ戻る</button>
</body>
</html>
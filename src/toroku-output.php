<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>作品登録画面</title>
</head>
<body>
<button onclick="location.href='index.php'">トップへ戻る</button>
<?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('insert into drama(name,year)values(?,?)');
    if(empty($_POST['name'])){
        echo'商品名を入力してください。';
    }else if($sql->execute([$_POST['name'],$_POST['year']]){
        echo '<font color="red">追加しました。</font>';
    }else{
        echo '<font color="red">追加できませんした。</font>';
    }
?>
    <br><hr><br>

<table border="1">
    <tr><th>　商品ID　</th><th>　商品名　</th><th>　説明文　</th><th>　単価　</th><th>　画像パス　</th><th>　登録日　</th><th>　更新日　</th></tr>

<?php
foreach($pdo->query('select * from LipLip') as $row){
    echo'<tr>';
    echo'<td>',$row['shohin_id'],'</td>';
    echo'<td>',$row['shohin_mei'],'</td>';
    echo'<td>',$row['explanation'],'</td>';
    echo'<td>',$row['shohin_tanka'],'</td>';
    echo'<td>',$row['img_pass'],'</td>';
    echo'<td>',$row['torokubi'],'</td>';
    echo'<td>',$row['kosinbi'],'</td>';
    echo'</tr>';
    echo"\n";
}
?>
</table>
    <br>
    <button onclick="location.href='insert-input.php'">追加画面へ戻る</button>
</body>
</html>
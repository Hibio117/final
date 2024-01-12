<?php require 'db-connect.php';?>


    韓国ドラマ一覧
<hr>
<?php
echo '<table>';
echo '<tr><th>番号</th><th>作品名</th><th>年</th></tr>';

foreach($sql as $row){
    $id=$row['drama_id'];
    echo '<tr>';
    echo '<td>',$id,'</td>';
    echo '<td>';
    echo '<a href="detail.php?id=',$id,'">',$row['name'],'</a>';
    echo '</td>';
    echo '<td>',$row['year'],'</td>';
    echo '</tr>';
}
echo '</table>';
?>
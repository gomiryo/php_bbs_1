<?php

/* ステートメントハンドラを取得 */
try{
  // トランザクション開始
  $pdo->beginTransaction();
  // SQL文を発行
  $sql = "SELECT * FROM thread1";
  // ステートメントハンドラを取得
  $stmh = $pdo->prepare($sql);
  // 実行
  $stmh->execute();
  // 書き込み件数を取得
  $count = $stmh->rowCount();
  // トランザクション終了
  $pdo->commit();

}catch(PDOException $Exception){
  print "エラー：".$Exception->getMessage();
}

/* 書き込み件数を表示 */
if($count == 0){
  // 書き込みがないとき
  print "書き込みがありません。<br>";
}else{
  // 書き込み件数を表示
  print "書き込み件数は".$count."件です。<br><br><br>";
}
?>

<?php
/* 書き込みを表示する */
while($row = $stmh->fetch(PDO::FETCH_ASSOC)){
?>

番号：<?php print $row['number']; ?><br>
名前：<?php print $row['name']; ?><br>
時間：<?php print $row['time']; ?><br>
内容：<?php print $row['content']; ?><br>

<br>
<br>

<?php
}
?>

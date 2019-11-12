<?php
/* データベースの秘密情報 */
$db_user = "root";  // ユーザ名
$db_pass = "Root@12345@";   // パスワード
$db_host = "localhost";   // ホスト名
$db_name = "db_bbs1";  // データベース名
$db_type = "mysql";       // データベースの種類
?>

<?php

/* DSN組み立て */
$dsn = "$db_type:host=$db_host;dbname=$db_name;charset=utf8";

/* データベース接続 */
try{
  /* データベース接続 */
  $pdo = new PDO($dsn, $db_user, $db_pass);
  /* エラーモード設定 */
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
}catch(PDOException $Exception){
  /* エラーメッセージ */
  die('接続エラー:'.$Exception->getMessage());
}
?>

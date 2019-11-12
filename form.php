<?php
// $isNameと$isContentが存在するとき
if(isset($isName, $isContent)){

  // 名前が空のとき
  if(!$isName){
    print '名前が入力されていません。<br>';
  }

  // 内容が空のとき
  if(!$isContent){
    print '内容が入力されていません。<br><br>';
  }
}
?>

<form name="post" method="post" action="index.php">
  名前：<input type="text" name="name"><br><br>
  内容：<br>
  <textarea name="content" rows="10" cols="30"></textarea><br>
  <input type="submit" value="送信">
</form>

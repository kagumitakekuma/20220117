<?php
session_start();

if(!empty($POST)){
//エラー項目確認
if($_POST['name'] == ''){
     $error['name'] = 'blank';
}
if($_POST['email'] == ''){
    $error['email'] = 'blank';
}
if(strlen($_POST['password']) <4 ){
   $error['password']='length';
}
if($_POST['password'] == ''){
    $error['password']= 'blank';
}

if(empty($error)){
    $_SESSION['join'] = $_POST;
    header('Location: check.php');
    exit();
}
}

?>





<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>◆chat◆</title>
  <link href="css/style.css" rel="stylesheet">
</head>
<body>





<p>次のフォームに必要事項をご記入ください。</p>
<form action="" method="post" enctype="multopart/from-data">
<dl>
 <dt>ニックネーム<span class="required">必須</span></dt>
 <dd><input type="text" name="name" size="35" maxlength="255" />
 <?php if($error['name'] == 'blank'): ?>
 <p class="error">* ニックネームを入力してください</p>
 <?php endif; ?>
</dd>


 <dt>メールアドレス<span class="required">必須</span></dt>
 <dd><input type="text" name="email" size="35" maxlength="255" /></dd>
 <dt>パスワード<span class="required">必須</span></dt>
 <dd><input type="password" name="password" size="10" maxlength="20" /></dd>
 <dt>写真など</dt>
 <dd><input type="file" name="image" size="35" /></dd>
</dl> 
<div><input type="submit" value="入力内容を確認する"/></div>
</form>

</body>
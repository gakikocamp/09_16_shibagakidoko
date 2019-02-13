<?php

include('functions.php');

// //DB接続

$pdo=db_conn();

// 入力チェック

if(
    !isset($_POST['name'])||$_POST['name']==''||
    !isset($_POST['zip'])||$_POST['zip']==''||
    !isset($_POST['address'])||$_POST['address']==''||
    !isset($_POST['tel'])||$_POST['tel']==''||
    !isset($_POST['comment'])||$_POST['comment']==''
){
    exit('ParamError');
}

//POSTデータ取得
$id=$POST['id'];
$name=$_POST['name'];
$zip=$_POST['zip'];
$address=$_POST['address'];
$tel=$_POST['tel'];
$comment=$_POST['comment'];

//データ登録SQL作成
$sql ='INSERT INTO gs_bm_table(id,name,zip,address,tel,comment,indate)VALUES(NULL,:a1,:a2,:a3,:a4,:a5,sysdate())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $name, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $zip, PDO::PARAM_STR);   //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $address, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a4', $tel, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a5', $comment, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if ($status==false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit('sqlError:'.$error[2]);
} else {
    //５．index.phpへリダイレクト
    header('Location: index.php');
}

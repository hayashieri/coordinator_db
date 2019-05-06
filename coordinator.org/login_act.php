<?php
session_start();
$name   = $_POST["name"];
$email  = $_POST["email"];
$pw    = $_POST["pw"];
$prof_photo = $_POST["prof_photo"];
$secure = 'secure';

//DB接続
include('funcs.php');
$pdo = db_con();

//データ登録
$sql ="SELECT * FROM user_table WHERE email=:email AND pw=:pw";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':pw', $pw);
$res = $stmt->execute(); //SQLを実行する

//SQLでエラーが出た場合の処理
if($res==false){
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}

$val = $stmt->fetch(); //fech関数で１レコードを拾う

//もしidが空(該当するもの)でなければセッションidを持って指定したデータを保持する
if($val["id"] !=""){
    $_SESSION["chk_ssid"] = session_id();
    $_SESSION["name"] = $name;
    $_SESSION["prof_photo"] =$prof_photo;
    //ログイン処理OK mypage.phpに遷移
    header("Location: mypage.php");
}else{
    //ログイン処理NG　終了
    header("Location: login.php");

}
    exit();
//抽出データ
?>
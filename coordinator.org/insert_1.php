<?php
session_start();
//1. POSTデータ取得
$name   = $_POST["name"];
$email  = $_POST["email"];
$pw    = $_POST["pw"];
$prof_photo = $_POST["prof_photo"];
$secure = 'secure';


//2. DB接続(エラー処理追加)

try {

  $pdo = new PDO('mysql:host=localhost;dbname=coordinator_db;charset=utf8','root','');

} catch (PDOException $e) {

  exit('DbConnectError:'.$e->getMessage());

}

var_dump("test");


//３．データ登録SQL作成

$stmt = $pdo->prepare("INSERT INTO user_table( id, pw, name, email, prof_photo, indate, date , secure )VALUES(null, :pw, :name, :email, :prof_photo, sysdate(), sysdate(), :secure)");

$stmt->bindValue(':pw', $pw, PDO::PARAM_STR);//bindValue SQL文字列に変数を渡す

$stmt->bindValue(':name', $name, PDO::PARAM_STR);

$stmt->bindValue(':email', $email, PDO::PARAM_STR);

$stmt->bindValue(':prof_photo', $prof_photo, PDO::PARAM_STR);

$stmt->bindValue(':secure', $secure, PDO::PARAM_STR);

$status = $stmt->execute(); //SQLの実行


//
//
////４．データ登録処理後

if($status==false){ //SQLの書き込み時にエラーがある時

	function sqlError($stmt){

    $error = $stmt->errorInfo(); //エラー文をだすerrorInfo

   exit("ErrorSQL:".$error[2]); 

 } //exitは処理を止めるため
	sqlError($stmt);

}else{//エラーがない時、セッションにデータを保存してform03.htmlへリダイレクト
  $_SESSION["chk_ssid"]= session_id(); 
  $_SESSION["name"]= $name; //引き継ぎたい情報
  $_SESSION["prof_photo"]= $prof_photo; //引き継ぎたい情報
  header("Location: form03.php");
}
?>


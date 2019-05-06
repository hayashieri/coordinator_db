<?php
session_start();
//DB接続
include('funcs.php');
$pdo = db_con();

//データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM user_table");
$status = $stmt->execute(); //SQL実行

?>

<html>
<head>
<meta charset="UTF-8">
<title>ユーザー登録フォーム | Myコーディネーター</title>
	<link rel="stylesheet" href="assets/css/main.css">
	<script src="assets/js/"></script>
</head>

<body>
	
	<header id="header">
		<a href="index.html" class="logo"><strong>My Coordinator</strong> </a>
		<ul class="icons">
		<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
		<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
		<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
		<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
		<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
		</ul>
	</header>
	
<!--登録フォームここから-->
    
登録完了しました

<a href="mypage.php">マイページへ</a>

<!--登録フォームここまで-->
</body>
</html>
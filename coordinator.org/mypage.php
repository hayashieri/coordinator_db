<?php
session_start();
//セッション情報があるかどうかをチェック
if(!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"]!= session_id()){
	echo "LOGIN Error!";
	exit();
};

//DBに接続する
include('funcs.php');
$pdo = db_con();

//データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM user_table");
$status = $stmt->execute(); //SQL実行

//データの取得
$name = $_SESSION["name"];
$prof_photo = $_SESSION["prof_photo"];

?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="assets/css/main.css">
     <title><?php echo $name;?>さんのマイページ</title>
</head>
	 <body> 
	 <header id="header">
		<a href="index.html" class="logo"><strong>My Coordinator</strong>ロゴ画像入れる</a>
		<ul class="icons">
			<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
			<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
			<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
			<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
			<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
		</ul>
	</header>
	<section>
	<header class="main">
		<ul>
	 <?php echo $name;?>さん
	
	<img src ="<?php echo $prof_photo;?>">
		</ul>
	 </header>
	</section>
		 <!--sidebar-->
	<div id="sidebar">
		<div class="inner">

			<!-- Search -->
				<section id="search" class="alt">
					<form method="post" action="#">
						<input type="text" name="query" id="query" placeholder="Search" />
					</form>
				</section>

			<!-- Menu -->
				<nav id="menu">
					<header class="major">
						<h2>Menu</h2>
					</header>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="generic.html">コーディネーター一覧</a></li>
						<li><a href="elements.html">コーディネート一覧</a></li>
						<li>
							<span class="opener">My Closet</span>
							<ul>
								<li><a href="#">すべて</a></li>
								<li><a href="#">トップス</a></li>
								<li><a href="#">ボトムス</a></li>
								<li><a href="#">アウター</a></li>
								<li><a href="#">アクセサリー</a></li>
							</ul>
						</li>
						
						<li>
							<span class="opener">My Room</span>
							<ul>
								<li><a href="#">すべて</a></li>
								<li><a href="#">リビング</a></li>
								<li><a href="#">寝室</a></li>
								<li><a href="#">洋室</a></li>
								<li><a href="#">キッチン</a></li>
								<li><a href="#">洗面所</a></li>
							</ul>
							<ul class="actions">
						<li><a href="#" class="button">More</a></li>
					  		</ul>
						</li>
						<li>ログアウト</li>
					</ul>
				</nav>

			<!-- Section -->
				<section>
					<header class="major">
						<h2>Ante interdum</h2>
					</header>
					<div class="mini-posts">
						<article>
							<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
							<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
						</article>
						<article>
							<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
							<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
						</article>
						<article>
							<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
							<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
						</article>
					</div>
					<ul class="actions">
						<li><a href="#" class="button">More</a></li>
					</ul>
				</section>

			<!-- Section -->
				<section>
					<header class="major">
						<h2>Get in touch</h2>
					</header>
					<p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
					<ul class="contact">
						<li class="fa-envelope-o"><a href="#">information@untitled.tld</a></li>
						<li class="fa-phone">(000) 000-0000</li>
						<li class="fa-home">1234 Somewhere Road #8254<br />
						Nashville, TN 00000-0000</li>
					</ul>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
				</footer>

		</div>
					</div>
 <!-- ▽js-->
		 <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
 </body>
 </html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="assets/css/main.css">
    <title>ログインフォーム</title>
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
<form method="post" action="login_act.php">
    <p>メールアドレス</p>
<input type ="text" name="email" placeholder="メールアドレス">
<p>パスワード</p>
<input type ="text" name="pw" placeholder="パスワード">

<input type="submit" value="ログイン" class="button primary fit">

</form>


    
<!-- ▽js -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>

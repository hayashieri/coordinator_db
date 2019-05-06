<!doctype html>
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
<form method="post" action="form02.php" enctype="multipart/form-data">
	<div class="">
	<p>ユーザーネーム</p>
	<input type="text" name="name" placeholder="ユーザーネーム">
	<p>メールアドレス</p>
	<input type="text" name="email" placeholder="メールアドレス">
	<p>パスワード</p>
	<input type="text" name="pw" placeholder="パスワード">
	</div>
	
	<div class="">
		<p>プロフィール画像</p>
		<input type="file" accept="image/*" capture="camera" name="prof_photo" placeholder="プロフィール画像">
	</div>
	
	<input type="submit" value="確認する" class="">
<!--登録フォームここまで-->
</form>
</body>
</html>
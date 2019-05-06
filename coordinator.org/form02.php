
<?php
$name   = $_POST["name"];
$email  = $_POST["email"];
$pw    = $_POST["pw"];
$prof_photo = $_FILES["prof_photo"];
$file_dir_path ='images/prof/';

var_dump($_FILES["prof_photo"]);

// issetはデータの有無を確認するための関数
if(isset($_FILES["prof_photo"])&& $_FILES["prof_photo"]["error"]==0){
	$file_name = $_FILES["prof_photo"]["name"];
	$temp_path = $_FILES["prof_photo"]["tmp_name"];
}else{
}

if(is_uploaded_file($temp_path)){ //temp_pathというファイルがHTTP POSTでアップされたファイルである場合にtrueで返す
if(move_uploaded_file($temp_path,$file_dir_path.$file_name)){
	chmod($file_dir_path.$file_name,0644);
}else{ echo "error!";
}
}
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
	<form method="post" action="insert_1.php">
	<div class="">
	<p>ユーザーネーム</p>
	<input type="hidden" name="name" value="<?php echo $name;?>">
	<?php echo $name; ?>
	<p>メールアドレス</p>
	<input type="hidden" name="email" value="<?php echo $email; ?>">
	<?php echo $email; ?>
	<p>パスワード</p>
	<input type="hidden" name="pw" value="<?php echo $pw; ?>">
	<?php echo $pw; ?>
	</div>
	
	<div class="">
		<p>プロフィール画像</p>
	<input type="hidden" name="prof_photo" placeholder="プロフィール画像" value="<?php echo $file_dir_path.$file_name;?>">
	<img src="<?php echo $file_dir_path.$file_name;?>" >
	</div>
	<button type="button" onclick = history.back()>戻る</button>
	<input type="submit" value="登録する" class="">
	</div>
	</form>
<!--登録フォームここまで-->
</body>
</html>

<!doctype html>
<html>
<head>
	<title>모멘트시네마</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>로그인</h1>
	<?php
	session_start();
	//$name = $_SESSION['name'];
	//echo "$name<br>";
	if(!isset($_SESSION['id'])) {
		echo "<p><a href='member.php'>회원가입</a><br>";
	    echo "<a href='login.php'>로그인</a><br>";
		echo "<a href='logout.php'>로그아웃</a><br>";
		echo "</p>";
	}
	else {
		echo "<p><a href='member.php'>회원가입</a><br>";
		echo "</p>";
	}
	?>
</body></html>
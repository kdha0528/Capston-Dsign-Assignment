<!DOCTYPE HTML PUBLIC >
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type"  content="text/html" /> 
 
<title>회원정보 저장</title>
</head>


<?php
	# DB 연결하기
	
include_once('dbconn.php');
# 데이터 가져오기
	
	
    $id = $_POST['id'];
    $pw =$_POST['pw'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$age = $_POST['age'];
	$point = 0;
	date_default_timezone_set("Asia/Seoul");
	$date = date("Y/m/d");
	$email = $_POST['email'];
	

	# SQL 작성하기
	$sql = "insert into users values('$id','$pw','$name','$phone','$age',$point,'$date','$email')";
# SQL 실행하기
if($conn->query($sql)) {
	echo "<script type='text/javascript'>alert('회원가입에 성공했습니다.');</script>"
	echo "<script>location.href='MomentCinema.html'</script>";
}else {
	echo "<script type='text/javascript'>alert('회원가입 중에 오류가 발생하였습니다. $conn->error');</script>";
	echo "<script>location.href='signup.html'</script>";
}
?>
<!DOCTYPE HTML >
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type"  content="text/html" /> 
 
<title>회원정보 저장</title>
</head>


<?php
	# DB 연결하기
	
include_once('dbconn.php');
# 데이터 가져오기
	
	
    $id = $_POST["id"];
    $password =$_POST["password"];
	$name = $_POST["name"];
	$phone = $_POST["phone"];
	$age = $_POST["age"];

	//date_default_timezone_set("Asia/Seoul");
	//$date = date("Y/m/d");
	$email = $_POST["email"];

	

# SQL 실행하기

$sql = "select * from users where id = '$id'";
$result = $conn->query($sql);
if($result->num_rows > 0) {
	echo "<script>alert('ID가 중복되었습니다.')</script>";
	echo "<script>location.href='signup.php'</script>";
}	

$sql = "insert into users values('$id','$password','$name','$phone','$age','$email', 0)";

if($conn->query($sql)) {
	echo "<script>alert('$name 회원의 신규가입이 완료되었습니다')</script>";
	echo "<script>location.replace('momentCinema.php');</script>";
}

else {
	echo "<script>alert('회원가입중 오류가 발생했습니다')</script>";
	echo "DB 연결에 실패했습니다 " . mysqli_connect_error();
	echo "<script>location.replace('momentCinema.php');</script>";
}
?>
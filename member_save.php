<!DOCTYPE HTML PUBLIC >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
<title>회원정보 저장</title>
</head>


<?php
	# DB 연결하기
include_once('dbconn.php');
# 데이터 가져오기
	$name = $_POST["name"];
	$phone1 = $_POST["phone"];
	$phone2 = $_POST["phone2"];
	$phone3 = $_POST["phone3"];
	$address = $_POST["address"];
    $id = $_POST[“id”];
    $password =$_POST[“password”];
	$phone = $phone1."-".$phone2."-".$phone3;
	# SQL 작성하기
$sql = "insert into member_info values('$name','$phone','$address',‘$id’,‘password’)";
# SQL 실행하기
if($conn->query($sql)) {
	echo "$name 회원의 신규등록이 성공하였습니다.<br>";
	echo "<a href='memeber.php'></a>";
}
else 
	echo "회원가입 중에 오류가 발생하였습니다.". $conn->error;
?>
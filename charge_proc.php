<?php
    session_start();
	# DB 연결하기
	
    include_once('dbconn.php');

   $charge = $_POST["charge"];
   $id = $_SESSION['id'];
   
   $sql = "update users set point = '$charge' where id = '$id' ";

   if($conn->query($sql)) {
       echo "<script>alert('충전이 완료되었습니다')</script>";
       echo "<script>location.replace('mypage.php');</script>";
   }
   
   else {
       echo "<script>alert('오류가 발생했습니다')</script>";
       echo "DB 연결에 실패했습니다 " . mysqli_connect_error();
   }

 ?>
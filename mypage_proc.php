<?php
    session_start();
	# DB 연결하기
	
    include_once('dbconn.php');

 //   if(!isset($_SESSION['id']) || !isset($_SESSION['password'])){
 //       echo "<script>alert('비회원입니다!')";
 //   }
    //    echo "window.location.href=\"../login.html\";</script>";
   // }

   


   $id = $_POST["id"];
   $name =$_POST["name"];
   $sql = "SELECT * FROM users where id = '$id' and name = '$name'";
   $res = mysqli_fetch_array(mysqli_query($conn, $sql));  
   $result = $conn->query($sql);
   if($result->num_rows > 0) {  
   $password =$_POST["password"];
   $phone = $_POST["phone"];
   $age = $_POST["age"];
   $email = $_POST["email"];

   $sql = "UPDATE users SET password = '$password',  phone = '$phone', age = '$age', email = '$email' ";    
  // $sql = "UPDATE users SET phone = '$phone'";  
   //$sql = "UPDATE users SET age = '$age'";  
   //$sql = "UPDATE users SET email = '$email'";

   //$sql = "UPDATE users SET values('$id','$password','$name','$phone','$age','$email')";
  
   if($conn->query($sql)) {
       echo "<script>alert('$name 회원의 개인정보수정이 완료되었습니다')</script>";
       echo "<script>location.replace('momentCinema.php');</script>";
   }
   
   else {
       echo "<script>alert('회원정보수정중 오류가 발생했습니다')</script>";
       echo "DB 연결에 실패했습니다 " . mysqli_connect_error();
      // echo "<script>location.replace('momentCinema.php');</script>";
   }

}
 ?>
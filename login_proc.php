<?php
session_start();
	# DB 연결하기
	
    //if(!isset($_SESSION['name'])){ 
      //  echo "<script>alert('$name 님은 이미로그인중입니다')";   
    //    $count=0;
        # if( !isset($_SESSION['name'])) {
            
include_once('dbconn.php');
# 데이터 가져오기

	$id = $_POST["id"];
    $password =$_POST["password"];
   
    # sql 작성
    $sql = "SELECT * FROM users where id = '$id' and password = '$password'";
  
    #sql 실행 
    
    $result = $conn->query($sql);
    if($result->num_rows > 0) {   
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $_SESSION['id'] = $row['id'];  
        $_SESSION['name'] = $row['name'];    
        
       
        #  $sql = "select count(*) rowcnt from user where id = '$id'";
        #  $result = $conn->query($sql);
        #  if($result->num_rows > 0){
        #      $row = $result->fetch_assoc();
        #      $count = $row['rowcnt'];
        
       
        echo "<script>alert('$name 님의 로그인에 성공했습니다!');";
        echo "window.location.replace('MomentCinema.php');</script>";
        exit;
    }
    else{
       echo "<script>alert('아이디 혹은 비밀번호가 잘못되었습니다.');";
       echo "window.location.replace('login.php');</script>";
    }
?>

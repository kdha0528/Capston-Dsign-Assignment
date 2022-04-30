<!DOCTYPE HTML PUBLIC >
<head>
<meta http-equiv="Content-Type" content="text/html"; charset= "utf-8">
<title>mypage</title>
</head>
<bod
  

 
     
      
            
              <?php
              #session_start();
              #include_once('dbconn.php');
              #if( !isset($_SESSION['name']) ) {  #!isset($_SESSION['id']) ||
              #echo "<meta http-equiv='refresh' content='0;url=login.html'>";
              #exit;#
              #}
              #else


             # $user_id = $_SESSION['id'];
             # $user_name = $_SESSION['name'];
             # echo "<p>안녕하세요. $name($id)님</p>";
             # echo "<p><a href='logout.php'>로그아웃</a></p>";
             # echo "<p><a href='MomentCinema.html'>돌아가기</a></p>";
             # echo "<p>회원정보를 확인합니다.</p>";
      
              include_once('dbconn.php');
              # 데이터 가져오기
              $id = $_POST["id"];
              $password =$_POST["password"];
	            $name = $_POST["name"];
	            $phone = $_POST["phone"];
	            $age = $_POST["age"];
	            #date_default_timezone_set("Asia/Seoul");
	            $date = date("Y/m/d");
            	$email = $_POST["email"];
                
              # sql 데이터 수정하기
              $sql = "update users set id = '$id', password = '$password', name = '$nmae' phone = '$phone',
              age = '$age', date = '$date' email = '$email' ";
                
              
        
              # SQL 실행하기
              if($conn->query($sql)) {
               #$_SESSION['name']= $name;
               echo "<script>location.replace('momentCinema.html');</script>";
               echo "<script>alert('회원정보의 수정이 완료되었습니다')</script>";
              }else {
                echo "<script>alert('회원정보 수정중 오류가 발생했습니다')</script>";
                echo "<script>location.replace('mypage.html');</script>";
              }
              ?>


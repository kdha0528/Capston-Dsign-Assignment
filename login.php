<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>로그인</title>
    </head>
    <body>
    <?php
 session_start(); 
 include_once('dbconn.php');
#    $count=0;
# if( !isset($_SESSION['name'])) {
#  $id = $_SESSION['id'];
#  $sql = "select count(*) rowcnt from user where id = '$id'";
#  $result = $conn->query($sql);
#  if($result->num_rows > 0){
#      $row = $result->fetch_assoc();
#      $count = $row['rowcnt'];
 # }
#}
#
   # {?
    #    <form method="POST" action="mypage.php">
     #       <p>아이디: <input type="id" name="id" /></p>
      #      <p>비밀번호: <input type="password" name="pw" /></p>
       #     <p><input type="submit" value="로그인" /></p>
       # </form>
 #}     
 //login.html에서 입력받은 id, password
 $username = $_POST['id'];
 $password = $_POST['password'];


 $query = "SELECT * FROM users WHERE id = '$username' AND pass = '$password'";
# $result = $mysqli->query($q);($conn->query($sql))
$result = $conn->query('$sql');  #if($conn->query($sql))
# $row = $result->fetch_array(MYSQLI_ASSOC);


  //결과가 존재하면 세션 생성
  if ($row != null) {
    $_SESSION['username'] = $row['id'];
    $_SESSION['name'] = $row['name'];
    echo "<script>alert( '$name 고객님 환영합니다')</script>";
    echo "<script>location.replace('MomentCinema.html');</script>";
    exit;
 }
 //결과가 존재하지 않으면 로그인 실패
 if($row == null){
    echo "<script>alert('아이디 또는 비밀번호가 틀렸습니다')</script>";
    echo "<script>location.replace('login.html');</script>";
    exit;
 }
          #  $id = $_SESSION['id'];
          #  $name = $_SESSION['name'];
          #  echo "<p><strong>$id</strong>($id)님은 이미 로그인하고 있습니다. ";
          #  echo "<a href=\"MomentCinema.html\">[돌아가기]</a> ";
          #  echo "<a href=\"logout.php\">[로그아웃]</a></p>";
        #}
    
        ?>
 
    </body>
    
    </html>



<?php
#mysql서버의 특정데이터베이스로 연결하기 
$server = "database-1.cgar2fdlk4le.us-west-1.rds.amazonaws.com";//mysql서버가 동작하는 호스트 컴퓨터의 ip주소 또는 도메인명
$user = "daejin";        //mysql서버의 접속 계정 
$passwd = "daejin1234";    //비밀번호  #(root) 
$dbname = "momentcinema_db"; //연결할 데이터베이스명

$conn = new mysqli($server,$user,$passwd,$dbname); //서버에 접속요청 

$filtered = array(
     'id'=>mysqli_real_escape_string($conn, $_POST['id']),
     'pw'=>mysqli_real_escape_string($conn, $_POST['pw']),
     'name'=>mysqli_real_escape_string($conn, $_POST['name']),
     'phone'=>mysqli_real_escape_string($conn, $_POST['phone']),
     'age'=>mysqli_real_escape_string($conn, $_POST['age']),
     'point'=> intval($_POST['point']),
     'date'=>mysqli_real_escape_string($conn, $_POST['date']),
     'email'=>mysqli_real_escape_string($conn, $_POST['email'])
);

$sql = "
  INSERT INTO topic
    (id, pw, name, phone, age, point, date, email)
    VALUES(
      '{$filtered['id']}',
      '{$filtered['pw']}',
      '{$filtered['name']}',
      '{$filtered['phone']}',
      '{$filtered['age']}',
      '{$filtered['point']}',
      '{$filtered['date']}',
      '{$filtered['email']}'
        NOW()
    )
";

$result = mysqli_query($conn, $sql);
if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
  error_log(mysqli_error($conn));
} else {
  echo '성공했습니다. <a href="create.php">돌아가기</a>';
}
	
?>	 


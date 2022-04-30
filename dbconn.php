<?php
#mysql서버의 특정데이터베이스로 연결하기 
$server = "localhost";//mysql서버가 동작하는 호스트 컴퓨터의 ip주소 또는 도메인명
$user = "root";        //mysql서버의 접속 계정 
$passwd = "";    //비밀번호  #(root) 
$dbname = "momentcinema_db"; //연결할 데이터베이스명

$conn = new mysqli($server,$user,$passwd,$dbname); //서버에 접속요청 
if($conn->connect_error)
     die(" 접속 오류");
	
	
?>	 


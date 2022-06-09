<!DOCTYPE HTML >
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type"  content="text/html" /> 
 
<title></title>
</head>


<?php

session_start();
include_once('dbconn.php');
if(isset($_SESSION['name'])){
    $id = $_SESSION['id'];
}

$movie_index = $_GET['movie_index'];
$showtimes_index = $_GET['showtimes_index'];

$sql = "insert into book values(NULL, '$id', $movie_index, $showtimes_index)";
if($conn->query($sql)){
    $sql2 = "select * from book where user_index = '$id' order by book_index desc limit 1  ";
    $result = $conn->query($sql2);
    $row = $result->fetch_assoc();
    $book_index = $row['book_index'];
    echo "<script>location.href='seat_selection.php?book_index=$book_index&showtimes_index=$showtimes_index'</script>";
}else{
    echo "<script type='text/javascript'>alert('오류가 발생하였습니다.$conn->error');</script>";
    echo "<script>location.href='MomentCinema.php'</script>";
}

?>
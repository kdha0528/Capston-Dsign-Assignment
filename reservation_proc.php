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

$sql = "select age from users where id = '$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$age = $row['age'];

$sql = "select left('$age', 4) as age";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$age4 = $row['age'];
$age4_int = (int)$age4;
$user_age = 2023-$age4_int;

$sql = "select age from movie where movie_index= '$movie_index'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$movie_age = $row['age'];

if($user_age < $movie_age){
    echo "<script type='text/javascript'>alert('연령이 맞지 않습니다.$conn->error');</script>";
    echo "<script>location.href='reservation.php'</script>";
}
else{
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
}
?>
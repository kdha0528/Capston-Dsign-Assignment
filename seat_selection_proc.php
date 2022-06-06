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
$book_index = $_GET['book_index'];
$seats = $_POST['sit'];

foreach($seats as $v){
    $sql = "insert into seat values(NULL, $book_index, '$v')";
    if($conn->query($sql)){       
    }else{
        echo "<script type='text/javascript'>alert('오류가 발생하였습니다.$conn->error');</script>";
        echo "<script>location.href='MomentCinema.php'</script>";
    }
}

echo "<script>location.href='pay.php?book_index=$book_index'</script>";
?>
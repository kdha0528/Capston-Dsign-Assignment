<?php
    session_start();
	
	
    include_once('dbconn.php');

   $total = $_GET["total"];
   $book_index = $_GET['book_index'];
   $id = $_SESSION['id'];
   $sql = "select * from users where id = '$id'";
   $result = $conn->query($sql);
   $user = $result->fetch_assoc();

   if($total > $user['point']){
    echo "<script type='text/javascript'>alert('잔액이 부족합니다');</script>";
    echo "<script>location.href='MomentCinema.php'</script>";
   }
   else{
        $sql = "update users set point = point-$total where id = '$id' ";

        if($conn->query($sql)) {
            $headcount = $total/15000;
            $sql = "insert into paid values(NULL, $book_index, $headcount)";
            if($conn->query($sql)){
                    echo "<script>alert('결제가 완료되었습니다')</script>";
                    echo "<script>location.replace('mymovie.php');</script>";
            }else{
                echo "<script>alert('오류가 발생했습니다')</script>";
                echo "<script>location.href='reservation.php'</script>";
            }
        }
        
        else {
            echo "<script>alert('오류가 발생했습니다')</script>";
            echo "<script>location.href='reservation.php'</script>";
        }
    }
 ?>
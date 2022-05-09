<?php
    session_start();
	# DB 연결하기
	
    include_once('dbconn.php');

    $id = $_SESSION['id'];
    $comment =$_POST['comment'];
    $date = date("Y/m/d");
    $rate = $_POST['rate'];


    if(!isset($_SESSION['name'])) {
        echo "<script type='text/javascript'>alert('로그인을 하고 이용해주세요.');</script>";
        echo "<script>location.replace('login.php');</script>";
    }
    else{
        $sql = "insert into comment values('$comment','$date','$rate')";
        //$sql2 = "update user set comment = (select comment from user where id = '$id')+1 where id = '$id'";
        //$sql3 = "update board set commentnum = (select commentnum from board where b_idx = '$b_idx')+1 where b_idx = '$b_idx'";
    

        if($conn->query($sql)) {
            echo "<script>alert('댓글이 작성되었습니다')</script>";
            echo "<script>location.replace('movie.php');</script>";
        }        
        else {
            echo "<script>alert('댓글작성중 오류가 발생했습니다')</script>";       
           //이전 화면으로 돌아가는 명령어? echo "<script>location.replace('momentCinema.php');</script>";
        }
    }
        ?>



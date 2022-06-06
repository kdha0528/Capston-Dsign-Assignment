<?php

    session_start();

    include_once('dbconn.php');
    $id = $_SESSION['id'];

    $sql = "delete from users where id='$id'";

    if($conn->query($sql)){
        echo "<script>location.href='MomentCinema.php'</script>";
        session_destroy();
    }
    else{
        echo "<script type='text/javascript'>alert('회원탈퇴 도중에 오류가 발생하였습니다.$conn->error</script>";
        echo "<script>location.href='MomentCinema.php'</script>";
} 
?>

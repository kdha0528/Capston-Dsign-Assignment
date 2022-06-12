<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8">

    <!--CSS-->
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/leftMenu.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/sub.css">
  </head>
  
  <body>
  <?php
      session_start();
      include_once('dbconn.php');
      if(isset($_SESSION['name'])){
          $id = $_SESSION['id'];
          $sql = "select * from users where id = '$id'";
          $result = $conn->query($sql);
          $row = $result->fetch_assoc();
      }
    ?>
    <div id="wrap">
      <div id="leftMenu">
        <div class="inner">
        <p class="copyright">Copyright  모멘트시네마  All Rights Reserved.</p>
        </div>
      </div>
    </div>
    <div id="header">
      <div class="inner">
        <div class="logo">
          <a href="MomentCinema.php">
            <img src="img/logo.png"alt="logo" style="width: 150px">
          </a>
        </div>
        <div class="menu">
          <ul>
            <li>
              <a href="reservation.php">예매</a>
            </li>
            <li>
              <a href="movie.php">영화</a>
            </li>
        </div>
        <div class="top_menu">
          <div class="login" style="margin-right: 0;">
            <ul>
              <?php if(!isset($_SESSION['name'])){ ?>
                <li>
                  <a href="login.php">로그인</a>
                </li>
                <li>
                  <a href="signup.php">회원가입</a>
                </li>
                <?php }else{ ?>
                <li>
                  <a href="mypage.php">마이페이지</a>
                </li>
                <li>
                  <a href="logout.php">로그아웃</a>
                </li>
                <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="content" class="main_box">
      <div style="margin:auto; margin-top:100px; text-align:center;">
        <h1 style="color:white; font-size:50px;">마이페이지</h1>      
        <p style="color:white; font-size:28px; margin-top:50px;"><?=$id?>님의&nbsp; 포인트 &nbsp; : &nbsp; <?=$row['point']?>P</p>
        <form action="charge_proc.php" method="post"  style="margin-top:100px;">
            <input type="number" name="charge" min="0" max="10000000" style="text-indent: 1em; width:500px; height:60px;  border-radius: 5px; font-size: 20px; letter-spacing:5px;">
            <input type="submit" value="충전" class="charge_btn"; style="width:65px; height:65px; font-size:2em; letter-spacing:1px;">
        </form>            
      </div>
    </div>
    <div id="footer">
    </div>
  </body>
</html>
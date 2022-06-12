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
        <div style="width:60%; display:flex; flex-column:row; justify-content:space-around; margin:80px auto 0 auto;">
          <div class="btn22" style="width:220px; height:75px; line-height:75px;">
            <a href="mymovie.php" style="font-size:28px;">예약 영화 확인</a>
          </div>
          <div class="btn22"style="width:220px; height:75px; line-height:75px;">
            <a href="edit_myinfo.php" style="font-size:28px;">개인정보 수정</a>
          </div>
          <div class="btn22"style="width:220px; height:75px; line-height:75px;">
            <a href="charge.php" style="font-size:28px;">포인트 충전</a>
          </div>
        </div>
      </div>
    </div>
    <div id="footer">
    </div>
  </body>
</html>
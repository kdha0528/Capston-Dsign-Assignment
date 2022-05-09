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
    <link rel="stylesheet" href="css/sub.css" type="text/css" />
  </head>
  <body>
    <?php
      session_start();
      include_once('dbconn.php');
      if(isset($_SESSION['name'])){
          $id = $_SESSION['id'];
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
            <img src="images/logo.png"alt="logo" style="width: 150px">
          </a>
        </div>
        <div class="menu">
          <ul>
            <li>
              <a href="reservation.html">예매</a>
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
      <div class="inner">
        <div id="Wrapper">
          <div id="Main" style="height:100%">
            <section>
              <div class="layout_box scroll_box">
                <div class="inner">
                  <div class="login_contents" style="margin-top:150px;">
                    <div class="inner">
                      <p class="main">로그인</p>
                      <p class="sub">아이디, 비밀번호를 입력하신 후, 로그인 버튼은 눌러주세요.</p>
                      <div class="tab_btn">
                          <button type="button" class="acive"><a href="login.php">로그인</a></button>
                          <button type="button"><a href="signup.php">회원가입</a></button> 
                      </div>
                      <form class="form_area" action="login_proc.php" method="POST" name="form">
                        <input type="text" name="id" //id="id" //placeholder="id">
                        <input type="password" name="password" //id="password" //placeholder="password">
                        <label for="keepid" style="float:left;color:#fff;">
                        </label>
                        <button type="submit" class="full_btn big submit">로그인</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
    <div id="footer">

    </div>
  </body>
</html>
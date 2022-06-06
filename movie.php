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
      }
      $sql = "select * from movie";
      $result = $conn->query($sql);
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
            <a href="momentCinema.php">
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
          <div id="Wrapper">
            <div id="main">
              <div class="layout_box scroll_box">
                <div class="inner">
                  <div class="event_contents" style="max-width:12800px; margin:0 auto">
                    <p class="page_tit" style="margin:30px;">현재 상영작</p>
                    <ul class="event-list-body">
                      <?php while($row = $result->fetch_assoc()) { ?>
                      <li>
                        <div style="width:200px; height:auto; border:1px solid #fff; overflow: hidden;">
                          <a href="movie_detail.php?idx=<?=$row['movie_index']?>">
                            <img src="img/movie_poster_<?=$row['movie_index']?>.jpg" style="width:200px; height: auto;">
                          </a>
                        </div>
                        <dl>
                          <dt>
                            <a href="movie_detail.php?idx=<?=$row['movie_index']?>">
                              <?=$row['title']?>
                            </a>
                          </dt>
                        </dl>
                      </li>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="footer">

        </div>
    
  </body>
</html>
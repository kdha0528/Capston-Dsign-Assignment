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
    +          <div id="Wrapper">
            <div id="main">
              <div class="layout_box scroll_box">
                <div class="inner">
                  <div class="event_contents" style="max-width:12800px; margin:0 auto">
                    <p class="page_tit" style="margin:30px;">현재 상영작</p>
                    <ul class="event-list-body">
                      <li>
                        <div style="width:200px; height:auto; border:1px solid #fff; overflow: hidden;">
                          <a href="movie_detail_00.php">
                            <img src="img/movie_poster_02.jpg" style="width:200px; height: auto;">
                          </a>
                        </div>
                        <dl>
                          <dt>
                            <a href="movie_detail_00.php">
                              신비한 동물들과 덤블도어의 비밀
                            </a>
                          </dt>
                        </dl>
                      </li>
                      <li>
                        <div style="width:200px; height:auto; border:1px solid #fff; overflow: hidden;">
                          <a href="movie_detail_01.php">
                            <img src="img/movie_poster_03.jpg" style="width:200px; height: auto;">
                          </a>
                        </div>
                        <dl>
                          <dt>
                            <a href="movie_detail_01.php">
                              로스트 시티
                            </a>
                          </dt>
                        </dl>
                      </li>
                      <li>
                        <div style="width:200px; height:auto; border:1px solid #fff; overflow: hidden;">
                          <a href="movie_detail_02.php">
                            <img src="img/movie_poster_04.jpg" style="width:200px; height: auto;">
                          </a>
                        </div>
                        <dl>
                          <dt>
                            <a href="movie_detail_02.php">
                              앵커
                            </a>
                          </dt>
                        </dl>
                      </li>
                      <li>
                        <div style="width:200px; height:auto; border:1px solid #fff; overflow: hidden;">
                          <a href="movie_detail_03.php">
                            <img src="img/movie_poster_05.jpg" style="width:200px; height: auto;">
                          </a>
                        </div>
                        <dl>
                          <dt>
                            <a href="movie_detail_03.php">
                              소설가의 영화
                            </a>
                          </dt>
                        </dl>
                      </li>
                      <li>
                        <div style="width:200px; height:auto; border:1px solid #fff; overflow: hidden;">
                          <a href="movie_detail_04.php">
                            <img src="img/movie_poster_06.jpg" style="width:200px; height: auto;">
                          </a>
                        </div>
                        <dl>
                          <dt>
                            <a href="movie_detail_04.php">
                              헝거
                            </a>
                          </dt>
                        </dl>
                      </li>
                      <li>
                        <div style="width:200px; height:auto; border:1px solid #fff; overflow: hidden;">
                          <a href="movie_detail_05.php">
                            <img src="img/movie_poster_07.jpg" style="width:200px; height: auto;">
                          </a>
                        </div>
                        <dl>
                          <dt>
                            <a href="movie_detail_05.php">
                              공기 살인
                            </a>
                          </dt>
                        </dl>
                      </li>
                      <li>
                        <div style="width:200px; height:auto; border:1px solid #fff; overflow: hidden;">
                          <a href="movie_detail_06.php">
                            <img src="img/movie_poster_08.jpg" style="width:200px; height: auto;">
                          </a>
                        </div>
                        <dl>
                          <dt>
                            <a href="movie_detail_06.php">
                              내가 처음으로 사랑한 소녀
                            </a>
                          </dt>
                        </dl>
                      </li>
                      <li>
                        <div style="width:200px; height:auto; border:1px solid #fff; overflow: hidden;">
                          <a href="movie_detail_07.php">
                            <img src="img/movie_poster_09.jpg" style="width:200px; height: auto;">
                          </a>
                        </div>
                        <dl>
                          <dt>
                            <a href="movie_detail_07.php">
                              니 부모 얼굴이 보고싶다
                            </a>
                          </dt>
                        </dl>
                      </li>
                      <li>
                        <div style="width:200px; height:auto; border:1px solid #fff; overflow: hidden;">
                          <a href="movie_detail_08.php">
                            <img src="img/movie_poster_10.jpg" style="width:200px; height: auto;">
                          </a>
                        </div>
                        <dl>
                          <dt>
                            <a href="movie_detail_08.php">
                              달빛 그림자
                            </a>
                          </dt>
                        </dl>
                      </li>
                      <li>
                        <div style="width:200px; height:auto; border:1px solid #fff; overflow: hidden;">
                          <a href="movie_detail_09.php">
                            <img src="img/movie_poster_11.jpg" style="width:200px; height: auto;">
                          </a>
                        </div>
                        <dl>
                          <dt>
                            <a href="movie_detail_09.php">
                              봄날
                            </a>
                          </dt>
                        </dl>
                      </li>
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
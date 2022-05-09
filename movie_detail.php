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
            <section>
                <!--영화 정보-->
                <div class="movie_info_box bg_box_full" style="bottom:0;">
                    <div class="movie_scroll_box scroll_box">
                        <div class="inner">
                            <p class="movie_tit">영화정보</p>
                            <div class="movie_info">
                                <div class="movie_poster">
                                    <div class="poster"><div id="poster_image" class="img">
                                        <!---포스터 이미지 주소-->
                                        <img src="images/movie_poster_01.jpg" >
                                    </div></div>
                                    <div class="movie_info_txt">
                                        <p class="tit">패러렐 마더스</p>
                                        <p class="eng_tit"></p>

                                        <div class="info_box">
                                            <div class="info_list">
                                                <p class="th">장르</p>
                                                <p class="td info">
                                                    <span>"멜로/로맨스, 스릴러"</span>
                                                    <span>"2022-03-31개봉"</span>
                                                    <span>123분</span>
                                                </p>
                                            </div>
                                            <div class="info_list">
                                                <p class="th">감독</p>
                                                <p class="td director">"메드로 알모도바르"</p>
                                            </div>
                                            <div class="info_list">
                                                <p class="th">출연</p>
                                                <p class="td actor">"페넬로페 크루즈(재니스), 밀레나 스밋(안나), 로시 드 팔마, 아이타나 산체스-기욘"</p>
                                            </div>
                                        </div>
                                        <!--예매사이트와 연동-->
                                        <button class="movie_btn"><a href="reservation.html">예매하기</a></button>
                                    </div>
                                </div>
                                <div class="movie_info_text">
                                    <div class="tit">패러렐 마더스</div>
                                    <div class="con">
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                내 아이를 낳은 그녀에게 이끌리기 시작했다
                                            </span>
                                        </p>
                                        <p>
                                            <br>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                홀로 출산을 준비 중인 사진 작가 야니스는 같은 병실에서 어린 산모 아나를 만난다.
                                            </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                같은 날, 같은 시간에 딸을 낳은 두 사람은 짧지만 깊은 우정을 나눈다.
                                            </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                야니스는 아나와 자신의 딸이 뒤바뀌었다는 사실을 알게 되지만, 
                                            </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                진실을 알리지 못한 채 아나와 점점 더 가까워져만 가느데...
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </section> 
        </div>
        <div id="footer">

        </div>
    </div>
  </body>
</html>
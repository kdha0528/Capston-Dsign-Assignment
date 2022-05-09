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
                <a href="reservation.html">예매</a>
              </li>
              <li>
                <a href="movie.html">영화</a>
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
                                    <div class="poster"><div id="poster_image"  class="img">
                                        <!---포스터 이미지 주소-->
                                        <img src="images/movie_poster_04.jpg" >
                                    </div></div>
                                    <div class="movie_info_txt">
                                        <p class="tit">앵커</p>
                                        <p class="eng_tit"></p>

                                        <div class="info_box">
                                            <div class="info_list">
                                                <p class="th">장르</p>
                                                <p class="td info">
                                                    <span>"스릴러"</span>
                                                    <span>"2022-04-20개봉"</span>
                                                    <span>111분</span>
                                                </p>
                                            </div>
                                            <div class="info_list">
                                                <p class="th">감독</p>
                                                <p class="td director">"정지연"</p>
                                            </div>
                                            <div class="info_list">
                                                <p class="th">프로듀서</p>
                                                <p class="td actor">"이종석,  정준혁"</p>
                                            </div>
                                            <div class="info_list">
                                                <p class="th">출연</p>
                                                <p class="td actor">"천우희 ,  신하균 ,  이혜영"</p>
                                            </div>
                                        </div>
                                        <!--예매사이트와 연동-->
                                        <button class="movie_btn"><a href="reservation.html">예매하기</a></button>
                                    </div>
                                </div>
                                <div class="movie_info_text">
                                    <div class="tit">앵커</div>
                                    <div class="con">
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                “제 죽음이 정세라 앵커의 입을 통해 보도되면 너무 기쁠 것 같아요”
                                            </span>
                                        </p>
                                        <p>
                                            <br>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                생방송 5분 전, 방송국 간판 앵커 ‘세라’(천우희)에게
                                            </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                자신이 살해될 것이라며 죽음을 예고하는 제보전화가 걸려온다.
                                            </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                장난전화로 치부하기에는 찝찝한 마음을 감출 수 없는 ‘세라’.
                                            </span>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85, 85, 85);">
                                            진짜 앵커가 될 기회라는 엄마 ‘소정’(이혜영)의 말에
                                          </span>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85, 85, 85);">
                                            ‘세라’는 제보자의 집으로 향하고 제보자인 ‘미소’와 그녀의 딸의 시체를 목격한다.
                                          </span>
                                        </p>
                                        <p>
                                            <br>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85,85, 85);">
                                            그날 이후, ‘세라’의 눈앞에 죽은 ‘미소’의 모습이 자꾸만 떠오르기 시작한다.
                                          </span>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85,85, 85);">
                                            사건 현장에서 미소의 주치의였던 정신과 의사 ‘인호’(신하균)를 마주하게 되며
                                          </span>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85,85, 85);">
                                            그에 대한 ‘세라’의 의심 또한 깊어지는데…
                                          </span>
                                        </p>
                                        <p>
                                            <br>
                                        </p>
                                        <p>
                                            <span style="color:rgb(85, 85, 85)">
                                                완벽했던 앵커를 뒤흔들 충격적인 진실을 확인하라! 
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <link rel="stylesheet" href="css/sub.css" type="text/css" />
                        <div clas="inner">
                          <div class="comment_contents" style="margin-top:150px;">
                              <div class="inner">
                                <p class="main">댓글</p>
                                <br>
                                  <form class="form_area">
                                      <input type="text" name="txtUserComment" id="txtUserComment" placeholder="댓글을 입력하시오">
                                      <button type="button" class="comment_submit">등록</button>
                                  </form>
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
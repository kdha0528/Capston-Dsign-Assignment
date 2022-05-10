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
            <a href="momentCinema.html">
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
                <li>
                  <a href="login.html">로그인</a>
                </li>
                <li>
                  <a href="register_f.html">회원가입</a>
                </li>
                <li>
                  <a href="mypage.html">마이페이지</a>
                </li>
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
                                        <img src="images/movie_poster_10.jpg" >
                                    </div></div>
                                    <div class="movie_info_txt">
                                        <p class="tit">달빛 그림자</p>
                                        <p class="eng_tit">Moonlight Shadow</p>

                                        <div class="info_box">
                                            <div class="info_list">
                                                <p class="th">장르</p>
                                                <p class="td info">
                                                    <span>"드라마, 로맨스, 멜로"</span>
                                                    <span>"2022-04-27개봉"</span>
                                                    <span>93분</span>
                                                </p>
                                            </div>
                                            <div class="info_list">
                                                <p class="th">감독</p>
                                                <p class="td director">"에드문드 여"</p>
                                            </div>
                                            <div class="info_list">
                                                <p class="th">출연</p>
                                                <p class="td actor">"고마츠 나나, 미야자와 하오"</p>
                                            </div>
                                        </div>
                                        <!--예매사이트와 연동-->
                                        <button class="movie_btn"><a href="reservation.html">예매하기</a></button>
                                    </div>
                                </div>
                                <div class="movie_info_text">
                                    <div class="tit">달빛 그림자</div>
                                    <div class="con">
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                보름달 밤의 끝 
                                            </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                ‘달 그림자 현상’
                                            </span>
                                        </p>
                                        <p>
                                            <br>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                행복한 날들이 무심코 지나가던 중
                                            </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                ‘사츠키’의 연인 ‘히토시’에게 갑작스런 사고가 일어난다.
                                            </span>
                                        </p>
                                        <p>
                                            <br>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85, 85, 85);">
                                            사고 이후 ‘사츠키’는 깊은 슬픔에 짓눌려 지내는데…
                                          </span>
                                        </p>
                                        <p>
                                            <br>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85,85, 85);">
                                            일상을 되찾아 가는 그녀 앞에 나타난 ‘우라라’
                                          </span>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85,85, 85);">
                                            그녀에게 이끌려 ‘달 그림자 현상’에 조금씩 다가간다.
                                          </span>
                                        </p>
                                        <p>
                                            <br>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85,85, 85);">
                                            과연 그들에게 기적은 찾아올까?
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
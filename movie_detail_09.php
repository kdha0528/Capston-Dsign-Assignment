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
                                        <img src="images/movie_poster_11.jpg" >
                                    </div></div>
                                    <div class="movie_info_txt">
                                        <p class="tit">봄날</p>
                                        <p class="eng_tit"></p>

                                        <div class="info_box">
                                            <div class="info_list">
                                                <p class="th">장르</p>
                                                <p class="td info">
                                                    <span>"드라마, 액션"</span>
                                                    <span>"2022-04-27개봉"</span>
                                                    <span>102분</span>
                                                </p>
                                            </div>
                                            <div class="info_list">
                                                <p class="th">감독</p>
                                                <p class="td director">"이돈구"</p>
                                            </div>
                                            <div class="info_list">
                                                <p class="th">출연</p>
                                                <p class="td actor">"손현주 ,  박혁권 ,  정석용 ,  박소진 ,  정지환 ,  손숙"</p>
                                            </div>
                                        </div>
                                        <!--예매사이트와 연동-->
                                        <button class="movie_btn"><a href="reservation.html">예매하기</a></button>
                                    </div>
                                </div>
                                <div class="movie_info_text">
                                    <div class="tit">봄날</div>
                                    <div class="con">
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                제2의 전성기는 반드시 온다!
                                            </span>
                                        </p>
                                        <p>
                                            <br>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                한때는 잘나가던 큰형님 '호성'(손현주).
                                            </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                8년 만에 출소해 보니 남보다 못한 동생 '종성'(박혁권)은 애물단지 취급이고,
                                            </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                결혼을 앞둔 맏딸 '은옥'(박소진)과 오랜만에 만난 아들 '동혁'(정지환)은
                                            </span>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85, 85, 85);">
                                            '호성'이 부끄럽기만 하다.
                                          </span>
                                        </p>
                                        <p>
                                            <br>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85,85, 85);">
                                            아는 인맥 다 끌어 모은 아버지 장례식에서
                                          </span>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85,85, 85);">
                                            부조금을 밑천삼아 기상천외한 비즈니스를 계획하며 제2의 전성기를 꿈꾸는데…
                                          </span>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85,85, 85);">
                                            그런데…!  하필이면 세력 다툼을 하는 두 조직이 이곳에 함께 있는 것이 아닌가!
                                          </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85,85, 85);">
                                                때마침 눈치라고는 1도 없는 '호성'의 친구 '양희'(정석용)가
                                            </span>
                                          </p>
                                          <p>
                                            <span style="color: rgb(85,85, 85);">
                                                술에 취해 오지랖을 부리는데...
                                            </span>
                                          </p>
                                          <p>
                                              <br>
                                          </p>
                                          <p>
                                            <span style="color: rgb(85,85, 85);">
                                                일촉즉발! 수습불가!
                                            </span>
                                          </p>
                                          <p>
                                            <span style="color: rgb(85,85, 85);">
                                                과연 X버릇 남 못 준 '호성'에게 봄날이 찾아올까?
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
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
                                        <img src="images/movie_poster_08.jpg" >
                                    </div></div>
                                    <div class="movie_info_txt">
                                        <p class="tit">내가 처음으로 사랑한 소녀</p>
                                        <p class="eng_tit">The First Girl I Loved</p>

                                        <div class="info_box">
                                            <div class="info_list">
                                                <p class="th">장르</p>
                                                <p class="td info">
                                                    <span>"로맨스, 멜로, 드라마"</span>
                                                    <span>"2022-04-27개봉"</span>
                                                    <span>95분</span>
                                                </p>
                                            </div>
                                            <div class="info_list">
                                                <p class="th">감독</p>
                                                <p class="td director">"오영산, 양조개"</p>
                                            </div>
                                            <div class="info_list">
                                                <p class="th">출연</p>
                                                <p class="td actor">"담선언, 양사영"</p>
                                            </div>
                                        </div>
                                        <!--예매사이트와 연동-->
                                        <button class="movie_btn"><a href="reservation.html">예매하기</a></button>
                                    </div>
                                </div>
                                <div class="movie_info_text">
                                    <div class="tit">내가 처음으로 사랑한 소녀</div>
                                    <div class="con">
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                “그 시절 사랑했던 너와 나”
                                            </span>
                                        </p>
                                        <p>
                                            <br>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                12년 내내 여학교를 다니며 학생대표를 해오던 윙(담선언),
                                            </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                그리고 그녀의 유일한 친구 실비아(양시영).
                                            </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                두 사람은 어느 순간 친구 이상의 감정을 느끼고
                                            </span>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85, 85, 85);">
                                            특별한 시간들을 보내며 미래를 약속하지만, 
                                          </span>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85, 85, 85);">
                                            곱지 않은 주변의 시선과 상황들로 결국 둘은 이별을 택한다
                                          </span>
                                        </p>
                                        <p>
                                            <br>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85,85, 85);">
                                            몇 년의 시간이 흐른 어느 날,
                                          </span>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85,85, 85);">
                                            각자의 삶을 살아가던 두 사람은
                                          </span>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85,85, 85);">
                                            한 통의 전화로 다시 만나게 되는데..
                                          </span>
                                        </p>
                                        <p>
                                            <br>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85,85, 85);">
                                                평생 함께하자던 소울메이트였던 그들,
                                            </span>
                                          </p>
                                          <p>
                                            <span style="color: rgb(85,85, 85);">
                                                그 때 너도 나와 같은 마음이었을까?
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
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
                <li>
                  <a href="login.php">로그인</a>
                </li>
                <li>
                  <a href="register_f.php">회원가입</a>
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
                                        <img src="img/movie_poster_07.jpg" >
                                    </div></div>
                                    <div class="movie_info_txt">
                                        <p class="tit">공기 살인</p>
                                        <p class="eng_tit"></p>

                                        <div class="info_box">
                                            <div class="info_list">
                                                <p class="th">장르</p>
                                                <p class="td info">
                                                    <span>"드라마"</span>
                                                    <span>"2022-04-22개봉"</span>
                                                    <span>108분</span>
                                                </p>
                                            </div>
                                            <div class="info_list">
                                                <p class="th">감독</p>
                                                <p class="td director">"조용선"</p>
                                            </div>
                                            <div class="info_list">
                                                <p class="th">출연</p>
                                                <p class="td actor">"김상경 ,  이선빈 ,  윤경호 ,  서영희"</p>
                                            </div>
                                        </div>
                                        <!--예매사이트와 연동-->
                                        <button class="movie_btn"><a href="reservation.php">예매하기</a></button>
                                    </div>
                                </div>
                                <div class="movie_info_text">
                                    <div class="tit">공기 살인</div>
                                    <div class="con">
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                “알고 있었죠, 사람이 죽을 수도 있다는 거”
                                            </span>
                                        </p>
                                        <p>
                                            <br>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                봄이 되면 나타났다 여름이 되면 사라지는 죽음의 병.
                                            </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                공기를 타고 대한민국에 죽음을 몰고 온 살인무기의 실체를 밝히기 위한 그들의 사투.강력한 어둠의 마법사 그린델왈드의 힘이 급속도로 커진다.
                                            </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                증발된 범인, 피해자는 증발되지 않았다! 
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
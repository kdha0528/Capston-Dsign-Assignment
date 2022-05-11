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
                  <a href="">회원가입</a>
                </li>
                <li>
                  <a href="mypage.php">마이페이지</a>
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
                                        <img src="img/movie_poster_05.jpg" >
                                    </div></div>
                                    <div class="movie_info_txt">
                                        <p class="tit">소설가의 영화</p>
                                        <p class="eng_tit">The Novelist's Film</p>

                                        <div class="info_box">
                                            <div class="info_list">
                                                <p class="th">장르</p>
                                                <p class="td info">
                                                    <span>"드라마"</span>
                                                    <span>"2022-04-21개봉"</span>
                                                    <span>92분</span>
                                                </p>
                                            </div>
                                            <div class="info_list">
                                                <p class="th">감독</p>
                                                <p class="td director">"홍상수"</p>
                                            </div>
                                            <div class="info_list">
                                                <p class="th">출연</p>
                                                <p class="td actor">" 
                                                    이혜영 ,  김민희 ,  서영화 ,  권해효 ,  조윤희 ,  기주봉 ,  박미소 ,  하성국 ,  이은미"</p>
                                            </div>
                                        </div>
                                        <!--예매사이트와 연동-->
                                        <button class="movie_btn"><a href="reservation.html">예매하기</a></button>
                                    </div>
                                </div>
                                <div class="movie_info_text">
                                    <div class="tit">소설가의 영화</div>
                                    <div class="con">
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                여소설가가 잠적한 후배의 책방으로 먼 길을 찾아옵니다.
                                            </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                그리고 혼자 타워를 오르고 영화감독 부부를 만나고 공원을 산책하다 여배우를 만나게 되고, 
                                            </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                여배우에게 당신과 영화를 만들고 싶다 설득을 합니다. 
                                            </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                둘이 분식집에서 뭘 먹고, 다시 찾게 되는 후배의 책방에서 술자리가 깊어지고 
                                            </span>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85, 85, 85);">
                                            여배우는 취해 잠이 드는데…
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
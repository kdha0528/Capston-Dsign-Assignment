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
                                        <img src="images/movie_poster_06.jpg" >
                                    </div></div>
                                    <div class="movie_info_txt">
                                        <p class="tit">헝거</p>
                                        <p class="eng_tit">Hunger</p>

                                        <div class="info_box">
                                            <div class="info_list">
                                                <p class="th">장르</p>
                                                <p class="td info">
                                                    <span>"SF, 드라마"</span>
                                                    <span>"2022-04-21개봉"</span>
                                                    <span>67분</span>
                                                </p>
                                            </div>
                                            <div class="info_list">
                                                <p class="th">감독</p>
                                                <p class="td director">"강다연"</p>
                                            </div>
                                            <div class="info_list">
                                                <p class="th">출연</p>
                                                <p class="td actor">"김유나 ,  최윤우 ,  하시연"</p>
                                            </div>
                                        </div>
                                        <!--예매사이트와 연동-->
                                        <button class="movie_btn"><a href="reservation.html">예매하기</a></button>
                                    </div>
                                </div>
                                <div class="movie_info_text">
                                    <div class="tit">헝거</div>
                                    <div class="con">
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                라디오를 켜면 너를 만날 수 있을까?
                                            </span>
                                        </p>
                                        <p>
                                            <br>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                부유한 빌딩도시 속 삶은 여유롭다
                                            </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                하지만 ‘유지’는 행복하지 않다
                                            </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                가난한 이들이 산다는 하촌에 가면
                                            </span>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85, 85, 85);">
                                            의미를 찾을 수 있을까?
                                          </span>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85, 85, 85);">
                                            이에 뉴트와 친구들은 머글과의 전쟁을 선포한
                                          </span>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85,85, 85);">
                                            그러던 어느 날, ‘유지’의 권태로운 하루하루가 뒤집힌다
                                          </span>
                                        </p>
                                        <p>
                                            <br>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85,85, 85);">
                                            내가 아닌 내가 되고 싶던 성장통, 
                                          </span>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85,85, 85);">
                                            그 아픈 순간의 이야기
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
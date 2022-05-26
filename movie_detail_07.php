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
                  <a href="signup.php">회원가입</a>
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
                                        <img src="img/movie_poster_09.jpg" >
                                    </div></div>
                                    <div class="movie_info_txt">
                                        <p class="tit">니 부모 얼굴이 보고 싶다 </p>
                                        <p class="eng_tit"></p>

                                        <div class="info_box">
                                            <div class="info_list">
                                                <p class="th">장르</p>
                                                <p class="td info">
                                                    <span>"드라마"</span>
                                                    <span>"2022-04-27개봉"</span>
                                                    <span>111분</span>
                                                </p>
                                            </div>
                                            <div class="info_list">
                                                <p class="th">감독</p>
                                                <p class="td director">"김지훈"</p>
                                            </div>
                                            <div class="info_list">
                                                <p class="th">출연</p>
                                                <p class="td actor">"
                                                    설경구 ,  천우희 ,  문소리 ,  오달수 ,  고창석 ,  강신일 ,  김홍파 ,  성유빈"</p>
                                            </div>
                                        </div>
                                        <!--예매사이트와 연동-->
                                        <button class="movie_btn"><a href="reservation.php">예매하기</a></button>
                                    </div>
                                </div>
                                <div class="movie_info_text">
                                    <div class="tit">니 부모 얼굴이 보고 싶다</div>
                                    <div class="con">
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                “누군가 잘못했겠지
                                            </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                하지만 내 아들은 절대 아니야” 
                                            </span>
                                        </p>
                                        <p>
                                            <br>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                명문 한음 국제중학교 학생 ‘김건우’가
                                            </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                                같은 반 친구 4명의 이름이 적힌 편지를 남긴 채,
                                            </span>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85, 85, 85);">
                                            의식불명 상태로 호숫가에서 발견된다.
                                          </span>
                                        </p>
                                        <p>
                                            <br>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85,85, 85);">
                                            병원 이사장의 아들 ‘도윤재’

                                          </span>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85,85, 85);">
                                            전직 경찰청장의 손자 ‘박규범’
                                          </span>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85,85, 85);">
                                            한음 국제중학교 교사의 아들 ‘정이든’
                                          </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85,85, 85);">
                                                그리고, 변호사 ‘강호창’(설경구)의 아들 ‘강한결’.
                                            </span>
                                        </p>
                                        <p>
                                            <br>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85,85, 85);">
                                                가해자로 지목된 아이들의 부모들은
                                            </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85,85, 85);">
                                                자신의 권력과 재력을 이용해 사건을 은폐하려고 한다.
                                         </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85,85, 85);">
                                             하지만, 담임 교사 ‘송정욱’(천우희)의 양심 선언으로
                                            </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85,85, 85);">
                                                건우 엄마(문소리) 또한 아들의 죽음에 관한 진실을 알게 된다.
                                            </span>
                                        </p>
                                        <p>
                                            <br>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85,85, 85);">
                                                세상의 이목이 한음 국제중학교로 향하고,
                                            </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85,85, 85);">
                                                자신의 아이들을 지키기 위한 가해자 부모들의 추악한 민낯이 드러나는데…
                                            </span>
                                        </p>
                                        <p>
                                            <br>
                                        </p>
                                        <p>
                                        <span style="color: rgb(85,85, 85);">
                                            자식이 괴물이 되면, 부모는 악마가 된다 
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
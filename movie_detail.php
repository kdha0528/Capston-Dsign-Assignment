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
      $idx = $_GET['idx'];
      $sql = "select * from movie where movie_index = '$idx'";
      $result = $conn->query($sql);
      if($result->num_rows == 0) {
        die("검색된 데이터가 없습니다.$conn->error");
      }
      $row = $result->fetch_assoc();
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
                                <div class="movie_poster_box" style="position:static; left:0; width: calc(100% - 50px); margin: 28px auto 0 auto;">
                                    <div class="movie_poster">
                                        <div class="poster">
                                            <div id="poster_image" class="img">
                                                <!---포스터 이미지 주소-->
                                                <img src="img/movie_poster_<?=$idx?>.jpg" >
                                            </div>
                                        </div>                                    
                                        <div class="movie_info_txt">
                                            <p class="tit"><?=$row['title']?></p>
                                            <p class="eng_tit"><?=$row['english_title']?></p>
                                            <p class="eng_tit"></p>

                                            <div class="info_box">
                                                <div class="info_list">
                                                    <p class="th">장르</p>
                                                    <p class="td info">
                                                        <span><?=$row['ganre']?></span>
                                                        <span>개봉일 : <?=$row['opendate']?></span>
                                                        <span><?=$row['runningtime']?>분</span>
                                                    </p>
                                                </div>
                                                <div class="info_list">
                                                    <p class="th">감독</p>
                                                    <p class="td director"><?=$row['director']?></p>
                                                </div>
                                                <div class="info_list">
                                                    <p class="th">출연</p>
                                                    <p class="td actor"><?=$row['actors']?></p>
                                                </div>
                                                <div class="info_list">
                                                    <p class="th">등급</p>
                                                    <p class="td actor"><?=$row['age']?></p>
                                                </div>
                                            </div>
                                              <!--예매사이트와 연동-->
                                              <button class="movie_btn"><a href="reservation.php?movie_index=<?=$idx?>">예매하기</a></button>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="movie_info_text" style="width:600px; line-height:25px;">
                                        <div class="con">
                                            <p>
                                                <span style="color: rgb(85, 85, 85); ">
                                                  <?=$row['description']?>
                                                </span>
                                            </p>
                                        </div>
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
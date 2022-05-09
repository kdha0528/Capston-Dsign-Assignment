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
    <link rel="stylesheet" href="css/sub.css">
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
          <link rel="sylesheet" href="./css/sub.css" type="text/css">
          <div class="ticketing_box bg_box" style="bottom: 0;max-height: calc(100vh - 150px);overflow: auto;">
            <div class="inner">
              <p class="box_tit">예매하기</p>
              <div class="movie_ticket_box">
                <div id="rsMovie" class="all_movie" style="height:550px;overflow-y:auto">
                  <div class="all_movie_tit">
                    <p class="tit">
                      "영화"
                      <span id="movieTotalCount">10</span>
                    </p>
                  </div>
                  <div id="movieTotalList" class="movie_list_wrap">
                    <div class="movie_list">
                      <input type="radio" id = "movie_349" name="movie">
                      <label id="movie_label_349" class="movie_title_label live" for="movie_349" data-mid="349" data-mkey="0">
                        <div class="age age_12">12</div>
                        <p class="movie_title" data-mid="349" data-mkey="0">신비한 동물들과 덤블도어의 비밀</p>
                      </label>
                    </div>
                    <div class="movie_list">
                      <input type="radio" id="movie_351"  name="movie">
                      <label id="movie_label_351" class="movie_title_label live" for="movie_351" data-mid="351" data-mkey="1">
                        <div class="age age_12">12</div>
                        <p class="movie_title" data-mid="351" data-mkey="1">로스트 시티</p>
                      </label>
                    </div>
                    <div class="movie_list">
                      <input type="radio" id="movie_364" name="movie">
                      <label id = "movie_label_364" class="movie_title_label live" for="movie_364" data-mid="364"data-mkey="2">
                        <div class="age age_15">15</div>
                        <p class="movie_title" data-mid="364"data-mkey="2">앵커</p>
                      </label>
                    </div>
                    <div class="movie_list">
                      <input type="radio" id="movie_366" name="movie">
                      <label id ="movie_label_366" class="movie_title_label live" for="movie_366" data-mie="366" data-mkey="3">
                        <div class="age age_12">12</div>
                        <p class="movie_title " data-mid="366" data-mkey="3">소설가의 영화</p>
                      </label>
                    </div>
                    <div class="movie_list">
                      <input type="radio" id="movie_371"  name="movie">
                      <label id="movie_label_371" class="movie_title_label live" for="movie_371" data-mid="371" data-mkey="4">
                        <div class="age age_12">12</div>
                        <p class="movie_title" data-mid="371" data-mkey="4">헝거</p>
                      </label>
                    </div>
                    <div class="movie_list">
                      <input type="radio" id = "movie_372" name="movie">
                      <label id = "movie_label_372" class="movie_title_label live" for="movie_372" data-mid="372" data-mkey="5">
                        <div class="age age_12">12</div>
                        <p class="movie_title" data-mid="372" data-mkey="5">공기살인</p>
                      </label>
                    </div>
                    <div class="movie_list">
                      <input type="radio" id="movie_375" name="movie">
                      <label id = "movie_label_375" class="movie_title_label live" for = "movie_375" data-mid="375" data-mkey="6">
                        <div class="age age_15">15</div>
                        <p class="movie_title" data-mid="375" data-mkey="6">내가 처음으로 사랑한 소녀</p>
                      </label>
                    </div>
                    <div class="movie_list">
                      <input type="radio" id = "movie_377" name="movie">
                      <label id="movie_label_377" class="movie_title_label live" for="movie_377" data-mid="377" data-mkey="7">
                        <div class="age age_15">15</div>
                        <p class="movie_title" data-mid="377" data-mkey="7">니 부모 얼굴이 보고 싶다</p>
                      </label>
                    </div>
                    <div class="movie_list">
                      <input type="radio" id = "movie_378" name="movie">
                      <label  id = "movie_label_378" class="movie_title_label live" for="movie_378" data-mid="378" data-mkey="8">
                        <div class="age age_15">15</div>
                        <p class="movie_title" data-mid="378" data-mkey="8">달빛그림자</p>
                      </label>
                    </div>
                    <div class="movie_list">
                      <input type="radio" id="movie_380" name="movie">
                      <label id = "movie_label_380" class="movie_title_label live" for="movie_380" data-mid="380" data-mkey="9">
                        <div class="age age_15">15</div>
                        <p class="movie_title" data-mid="380" data-mkey="9">봄날</p>
                      </label>
                    </div>
                  </div> 
                </div>
                
                <div id="rsvSchedule" class="movie_time" style="height:550px;overflow-y:auto">
                  <div id="scheduleList">
                    <div class="movie_tit" style="margin-top:50px">
                      <p class="age age_12">12</p>
                      <p class="tit">신비한 동물들과 덤블도어의 비밀</p>
                      <p class="sub_txt">
                        <span>어드벤처, 가족, 판타지</span>
                        <span>2022-04-13 개봉</span>
                        <span>142분</span>
                      </p>
                    </div>
                    <div class="time_wrap">
                      <div class="time_wrap_top">
                        <p class="tit">2D 디지털 자막</p>
                        <p class="sub_text loc">8관(5층)</p>
                      </div>
                      <div class="time_list_wrap">
                        <div class="time_list">
                          <input type="radio" id ="time_01" name="movie_time">
                          <label class="on" for="time_01" data-mid="363">
                          <p class="start">12:50</p>
                          <p class="end">~15:12</p>
                        </label>
                        </div>
                        <div class="time_list">
                          <input type="radio" id="time_02" name="movie_time">
                          <label class="on" for="time_02" data-mid="363">
                          <p class="start">15:40</p>
                          <p class="end">~18:02</p>
                        </label>
                        </div>
                      </div>
                    </div>
                    <div class="movie_tit" style="margin-top:50px">
                      <p class="age age_12">12</p>
                      <p class="tit">로스트 시티</p>
                      <p class="sub_txt">
                        <span>액션, 코미디, 멜로/로맨스, 어드벤처</span>
                        <span>2022-04-20 개봉</span>
                        <span>112분</span>
                      </p>
                    </div>
                    <div class="time_wrap">
                      <div class="time_wrap_top">
                        <p class="tit">2D 디지털 자막</p>
                        <p class="sub_text loc">7관(5층)</p>
                      </div>
                      <div class="time_list_wrap">
                        <div class="time_list">
                          <input type="radio" id="time_03" name="movie_time">
                          <label class="on" for="time_03" data-mid="351">
                          <p class="start">12:50</p>
                          <p class="end">~14:42</p>
                        </label>
                        </div>
                        <div class="time_list">
                          <input type="radio" id="time_04" name="movie_time">
                          <label class="on" for="time_04" data-mid="351">
                          <p class="start">15:40</p>
                          <p class="end">~17:32</p>
                        </label>
                        </div>
                      </div>
                    </div>
                    <div class="movie_tit" style="margin-top:50px">
                      <p class="age age_15">15</p>
                      <p class="tit">앵커</p>
                      <p class="sub_txt">
                        <span>스릴러</span>
                        <span>2022-04-20 개봉</span>
                        <span>111분</span>
                      </p>
                    </div>
                    <div class="time_wrap">
                      <div class="time_wrap_top">
                        <p class="tit">2D 디지털 자막</p>
                        <p class="sub_text loc">3관(1층)</p>
                      </div>
                      <div class="time_list_wrap">
                        <div class="time_list">
                          <input type="radio" id="time_05" name="movie_time">
                          <label for="time_05" data-mid="364">
                          <p class="start">12:50</p>
                          <p class="end">~14:41</p>
                        </label>
                        </div>
                        <div class="time_list">
                          <input type="radio" id="time_06" name="movie_time">
                          <label class="on" for="time_06" data-mid="364">
                          <p class="start">16:00</p>
                          <p class="end">~17:51</p>
                        </label>
                        </div>
                      </div>
                    </div>
                    <div class="movie_tit" style="margin-top:50px">
                      <p class="age age_12">12</p>
                      <p class="tit">소설가의 영화</p>
                      <p class="sub_txt">
                        <span>드라마</span>
                        <span>2022-04-21 개봉</span>
                        <span>92분</span>
                      </p>
                    </div>
                    <div class="time_wrap">
                      <div class="time_wrap_top">
                        <p class="tit">2D 디지털 자막</p>
                        <p class="sub_text loc">4관(3층)</p>
                      </div>
                      <div class="time_list_wrap">
                        <div class="time_list">
                          <input type="radio" id="time_07" name="movie_time">
                          <label class="on" for="time_07" data-mid=""="366">
                          <p class="start">15:40</p>
                          <p class="end">~17:12</p>
                        </label>
                        </div>
                        <div class="time_list">
                          <input type="radio" id="time_08" name="movie_time">
                          <label class="on" for="time_08" data-mid="366">
                          <p class="start">19:00</p>
                          <p class="end">~20:32</p>
                        </label>
                        </div>
                      </div>
                    </div>
                    <div class="movie_tit" style="margin-top:50px">
                      <p class="age age_12">12</p>
                      <p class="tit">헝거</p>
                      <p class="sub_txt">
                        <span>SF, 드라마</span>
                        <span>2022-04-21 개봉</span>
                        <span>68분</span>
                      </p>
                    </div>
                    <div class="time_wrap">
                      <div class="time_wrap_top">
                        <p class="tit">2D 디지털 자막</p>
                        <p class="sub_text loc">4관(3층)</p>
                      </div>
                      <div class="time_list_wrap">
                        <div class="time_list">
                          <input type="radio" id="time_09" name="movie_time">
                          <label class="on" for="time_09" data-mid="371">
                          <p class="start">17:30</p>
                          <p class="end">~18:38</p>
                        </label>
                        </div>
                      </div>
                    </div>
                    <div class="movie_tit" style="margin-top:50px">
                      <p class="age age_12">12</p>
                      <p class="tit">공기 살인</p>
                      <p class="sub_txt">
                        <span>드라마</span>
                        <span>2022-04-22 개봉</span>
                        <span>108분</span>
                      </p>
                    </div>
                    <div class="time_wrap">
                      <div class="time_wrap_top">
                        <p class="tit">2D 디지털 자막</p>
                        <p class="sub_text loc">2관(1층)</p>
                      </div>
                      <div class="time_list_wrap">
                        <div class="time_list">
                          <input type="radio" id="time_10" name="movie_time">
                          <label class="on" for="time_10" data-mid="372">
                          <p class="start">12:50</p>
                          <p class="end">~14:38</p>
                        </label>
                        </div>
                        <div class="time_list">
                          <input type="radio" id="time_11" name="movie_time">
                          <label class="on" for="time_11" data-mid="372">
                          <p class="start">16:00</p>
                          <p class="end">~17:48</p>
                        </label>
                        </div>
                      </div>
                    </div>
                    <div class="movie_tit" style="margin-top:50px">
                      <p class="age age_15">15</p>
                      <p class="tit">내가 처음으로 사랑한 소녀</p>
                      <p class="sub_txt">
                        <span>멜로/로맨스, 드라마</span>
                        <span>2022-04-27 개봉</span>
                        <span>95분</span>
                      </p>
                    </div>
                    <div class="time_wrap">
                      <div class="time_wrap_top">
                        <p class="tit">2D 디지털 자막</p>
                        <p class="sub_text loc">5관(3층)</p>
                      </div>
                      <div class="time_list_wrap">
                        <div class="time_list">
                          <input type="radio" id="time_12" name="movie_time">
                          <label class="on" for="time_12" data-mid="375">
                          <p class="start">18:30</p>
                          <p class="end">~20:05</p>
                        </label>
                        </div>
                      </div>
                    </div>
                    <div class="movie_tit" style="margin-top:50px">
                      <p class="age age_15">15</p>
                      <p class="tit">니 부모 얼굴이 보고 싶다</p>
                      <p class="sub_txt">
                        <span>드라마</span>
                        <span>2022-04-27 개봉</span>
                        <span>111분</span>
                      </p>
                    </div>
                    <div class="time_wrap">
                      <div class="time_wrap_top">
                        <p class="tit">2D 디지털 자막</p>
                        <p class="sub_text loc">6관(3층)</p>
                      </div>
                      <div class="time_list_wrap">
                        <div class="time_list">
                          <input type="radio" id="time_13" name="movie_time">
                          <label class="on" for="time_13" data-mid="377">
                          <p class="start">13:10</p>
                          <p class="end">~15:01</p>
                        </label>
                        </div>
                        <div class="time_list">
                          <input type="radio" id="time_14" name="movie_time">
                          <label class="on" for="time_14" data-mid="377">
                          <p class="start">16:00</p>
                          <p class="end">~17:51</p>
                        </label>
                        </div>
                      </div>
                    </div>
                    </div> <div class="movie_tit" style="margin-top:50px">
                      <p class="age age_12">12</p>
                      <p class="tit">달빛 그림자</p>
                      <p class="sub_txt">
                        <span>드라마, 멜로/로맨스</span>
                        <span>2022-04-27 개봉</span>
                        <span>92분</span>
                      </p>
                    </div>
                    <div class="time_wrap">
                      <div class="time_wrap_top">
                        <p class="tit">2D 디지털 자막</p>
                        <p class="sub_text loc">5관(3층)</p>
                      </div>
                      <div class="time_list_wrap">
                        <div class="time_list">
                          <input type="radio" id="time_21" name="movie_time">
                          <label class="on" for="time_21" data-mid="378">
                          <p class="start">13:10</p>
                          <p class="end">~14:42</p>
                        </label>
                        </div>
                      </div>
                    </div>
                    <div class="movie_tit" style="margin-top:50px">
                      <p class="age age_12">12</p>
                      <p class="tit">봄날</p>
                      <p class="sub_txt">
                        <span>드라마, 액션</span>
                        <span>2022-04-27 개봉</span>
                        <span>102분</span>
                      </p>
                    </div>
                    <div class="time_wrap">
                      <div class="time_wrap_top">
                        <p class="tit">2D 디지털 자막</p>
                        <p class="sub_text loc">4관(3층)</p>
                      </div>
                      <div class="time_list_wrap">
                        <div class="time_list">
                          <input type="radio" id="time_22" name="movie_time">
                          <label class="on" for="time_22" data-mid="380">
                          <p class="start">13:30</p>
                          <p class="end">~15:12</p>
                        </label>
                        </div>
                      </div>
                    </div>
                    <div class="time_wrap">
                      <div class="time_wrap_top">
                        <p class="tit">2D 디지털 자막</p>
                        <p class="sub_text loc">8관(5층)</p>
                      </div>
                      <div class="time_list_wrap">
                        <div class="time_list">
                          <input type="radio" id="time_23" name="movie_time">
                          <label class="on" for="time_23" data-mid="380">
                          <p class="start">18:30</p>
                          <p class="end">~20:12</p>
                        </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="rsvInfo" class="movie_info" data-mid>
                    <div class="movie_poster">  
                      <div class="movie_poster">
                        <div class="poster">
                          <div class="img">
                            <img src="img/res_post_default.gif" alt title="-">
                          </div>
                        </div>
                      </div>    
                      <div class="movie_info_txt">
                        <p class="tit">제목</p>
                        <div class="info_box">
                         <div class="info_list">
                            <p class="th">상영</p>
                            <p class="td" id="reserveInfoTicket">-</p>
                          </div>
                          <div class="info_list">
                            <p class="th">인원</p>
                            <p class="td" id="reserveInfoTicket">-</p>
                          </div>
                          <div class="info_list">
                            <p class="th">좌석</p>
                            <p class="td" id="reserveInfoTicket">-</p>
                          </div>
                        </div>
                      </div>
                      <div class="total_box">
                        <p class="seatsel" style="display: block;">
                          <button class="btn st_nx">좌석 선택</button>
                        </p>
                      </div>
                    </div>   

                  </div>
                </div>
              </div>
            </div>

          </div>
        <div id="footer">

        </div>
    </div>
  </body>
</html>
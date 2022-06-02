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
    <script type="text/javascript">
     var cc=0
     function show(id){ 
             document.getElementById(id).style.display="block";
    }
   </script>
    <script>
        function hide(id){
            document.getElementById(id).style.display="none";
        }
      </script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
      <script>
        $(document).ready(function() {
            $(":checkbox").change(function() {
                var cnt = $("#person").val();
                 
                if( cnt==$(":checkbox:checked").length ) {
                    $(":checkbox:not(:checked)").attr("disabled", "disabled");
                }
                else {
                    $(":checkbox").removeAttr("disabled");
                }
            });
             
            $("#person").change(function(){
                $(":checkbox").removeAttr("checked");
                $(":checkbox").removeAttr("disabled");
            });
        });
    </script>

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
          <link rel="sylesheet" href="./css/sub.css" type="text/css">
          <div class="ticketing_box bg_box" style="bottom: 0;max-height: calc(100vh - 150px);overflow: auto;">
            <div class="inner">
              <p class="box_tit">예매하기</p>
              <div class="movie_ticket_box">
                  <div id="ticket_box">
                <div id="rsMovie" class="all_movie" style="height:550px;overflow-y:auto">
                  <div class="all_movie_tit">
                    <p class="tit">
                      "영화"
                      <span id="movieTotalCount">10</span>
                    </p>
                  </div>
                  <div id="movieTotalList" class="movie_list_wrap"> 
                    <div class="movie_list">
                      <input type="radio" id = "movie_349" name="movie" onclick="change1(); show('M1'); hide('M2'); hide('M3'); hide('M4'); hide('M5'); hide('M6'); hide('M7'); hide('M8'); hide('M9'); hide('M10');">
                      <label id="movie_label_349" class="movie_title_label live" for="movie_349" data-mid="349" data-mkey="0">
                        <div class="age age_12">12</div>
                        <p class="movie_title" data-mid="349" data-mkey="0">신비한 동물들과 덤블도어의 비밀</p>
                      </label>
                      <script>
                          function change1(){
                              document.all.MIMG.src='img/movie_poster_02.jpg';
                              document.getElementById("TIT").innerHTML = "신비한 동물들과 덤블도어의 비밀";
                              document.getElementById("thno").innerHTML = "&nbsp;&nbsp;Moment Cienma 1관";
                              
                          }
                      </script>
                    </div>
                    <div class="movie_list">
                      <input type="radio" id="movie_351"  name="movie" onclick="change2(); show('M2'); hide('M1'); hide('M3'); hide('M4'); hide('M5'); hide('M6'); hide('M7'); hide('M8'); hide('M9'); hide('M10');">
                      <label id="movie_label_351" class="movie_title_label live" for="movie_351" data-mid="351" data-mkey="1">
                        <div class="age age_12">12</div>
                        <p class="movie_title" data-mid="351" data-mkey="1">로스트 시티</p>
                      </label>
                      <script>
                          function change2(){
                              document.all.MIMG.src='img/movie_poster_03.jpg';
                              document.getElementById("TIT").innerHTML = "로스트 시티";
                              document.getElementById("thno").innerHTML = "&nbsp;&nbsp;Moment Cienma 2관";
                          }
                      </script>
                    </div>
                    <div class="movie_list">
                      <input type="radio" id="movie_364" name="movie" onclick="change3(); show('M3'); hide('M1'); hide('M2'); hide('M4'); hide('M5'); hide('M6'); hide('M7'); hide('M8'); hide('M9'); hide('M10');">
                      <label id = "movie_label_364" class="movie_title_label live" for="movie_364" data-mid="364"data-mkey="2">
                        <div class="age age_15">15</div>
                        <p class="movie_title" data-mid="364"data-mkey="2">앵커</p>
                      </label>
                      <script>
                          function change3(){
                              document.all.MIMG.src='img/movie_poster_04.jpg';
                              document.getElementById("TIT").innerHTML = "앵커";
                              document.getElementById("thno").innerHTML = "&nbsp;&nbsp;Moment Cienma 3관";
                          }
                      </script>
                    </div>
                    <div class="movie_list">
                      <input type="radio" id="movie_366" name="movie" onclick="change4(); show('M4'); hide('M1'); hide('M2'); hide('M3'); hide('M5'); hide('M6'); hide('M7'); hide('M8'); hide('M9'); hide('M10');">
                      <label id ="movie_label_366" class="movie_title_label live" for="movie_366" data-mie="366" data-mkey="3">
                        <div class="age age_12">12</div>
                        <p class="movie_title " data-mid="366" data-mkey="3">소설가의 영화</p>
                      </label>
                      <script>
                          function change4(){
                              document.all.MIMG.src='img/movie_poster_05.jpg';
                              document.getElementById("TIT").innerHTML = "소설가의 영화";
                              document.getElementById("thno").innerHTML = "&nbsp;&nbsp;Moment Cienma 4관";
                          }
                      </script>
                    </div>
                    <div class="movie_list">
                      <input type="radio" id="movie_371"  name="movie" onclick="change5(); show('M5'); hide('M1'); hide('M2'); hide('M3'); hide('M4'); hide('M6'); hide('M7'); hide('M8'); hide('M9'); hide('M10');">
                      <label id="movie_label_371" class="movie_title_label live" for="movie_371" data-mid="371" data-mkey="4">
                        <div class="age age_12">12</div>
                        <p class="movie_title" data-mid="371" data-mkey="4">헝거</p>
                      </label>
                      <script>
                          function change5(){
                              document.all.MIMG.src='img/movie_poster_06.jpg';
                              document.getElementById("TIT").innerHTML = "헝거";
                              document.getElementById("thno").innerHTML = "&nbsp;&nbsp;Moment Cienma 5관";
                          }
                      </script>
                    </div>
                    <div class="movie_list">
                      <input type="radio" id = "movie_372" name="movie" onclick="change6(); show('M6'); hide('M1'); hide('M2'); hide('M3'); hide('M4'); hide('M5'); hide('M7'); hide('M8'); hide('M9'); hide('M10');">
                      <label id = "movie_label_372" class="movie_title_label live" for="movie_372" data-mid="372" data-mkey="5">
                        <div class="age age_12">12</div>
                        <p class="movie_title" data-mid="372" data-mkey="5">공기살인</p>
                      </label>
                      <script>
                          function change6(){
                              document.all.MIMG.src='img/movie_poster_07.jpg';
                              document.getElementById("TIT").innerHTML = "공기살인";
                              document.getElementById("thno").innerHTML = "&nbsp;&nbsp;Moment Cienma 6관";
                          }
                      </script>
                    </div>
                    <div class="movie_list">
                      <input type="radio" id="movie_375" name="movie" onclick="change7(); show('M7'); hide('M1'); hide('M2'); hide('M3'); hide('M4'); hide('M5'); hide('M6'); hide('M8'); hide('M9'); hide('M10');">
                      <label id = "movie_label_375" class="movie_title_label live" for = "movie_375" data-mid="375" data-mkey="6">
                        <div class="age age_15">15</div>
                        <p class="movie_title" data-mid="375" data-mkey="6">내가 처음으로 사랑한 소녀</p>
                      </label>
                      <script>
                          function change7(){
                              document.all.MIMG.src='img/movie_poster_08.jpg';
                              document.getElementById("TIT").innerHTML = "내가 처음으로 사랑한 소녀";
                              document.getElementById("thno").innerHTML = "&nbsp;&nbsp;Moment Cienma 7관";
                          }
                      </script>
                    </div>
                    <div class="movie_list">
                      <input type="radio" id = "movie_377" name="movie" onclick="change8(); show('M8'); hide('M1'); hide('M2'); hide('M3'); hide('M4'); hide('M5'); hide('M6'); hide('M7'); hide('M9'); hide('M10');">
                      <label id="movie_label_377" class="movie_title_label live" for="movie_377" data-mid="377" data-mkey="7">
                        <div class="age age_15">15</div>
                        <p class="movie_title" data-mid="377" data-mkey="7">니 부모 얼굴이 보고 싶다</p>
                      </label>
                      <script>
                          function change8(){
                              document.all.MIMG.src='img/movie_poster_09.jpg';
                              document.getElementById("TIT").innerHTML = "니 부모 얼굴이 보고 싶다";
                              document.getElementById("thno").innerHTML = "&nbsp;&nbsp;Moment Cienma 8관";
                          }
                      </script>
                    </div>
                    <div class="movie_list">
                      <input type="radio" id = "movie_378" name="movie" onclick="change9(); show('M9'); hide('M1'); hide('M2'); hide('M3'); hide('M4'); hide('M5'); hide('M6'); hide('M7'); hide('M8'); hide('M10');">
                      <label  id = "movie_label_378" class="movie_title_label live" for="movie_378" data-mid="378" data-mkey="8">
                        <div class="age age_15">15</div>
                        <p class="movie_title" data-mid="378" data-mkey="8">달빛그림자</p>
                      </label>
                      <script>
                          function change9(){
                              document.all.MIMG.src='img/movie_poster_10.jpg';
                              document.getElementById("TIT").innerHTML = "달빛그림자";
                              document.getElementById("thno").innerHTML = "&nbsp;&nbsp;Moment Cienma 9관";
                          }
                      </script>
                    </div>
                    <div class="movie_list">
                      <input type="radio" id="movie_380" name="movie" onclick="change10(); show('M10'); hide('M1'); hide('M2'); hide('M3'); hide('M4'); hide('M5'); hide('M6'); hide('M7'); hide('M8'); hide('M9');">
                      <label id = "movie_label_380" class="movie_title_label live" for="movie_380" data-mid="380" data-mkey="9">
                        <div class="age age_15">15</div>
                        <p class="movie_title" data-mid="380" data-mkey="9">봄날</p>
                      </label>
                      <script>
                          function change10(){
                              document.all.MIMG.src='img/movie_poster_11.jpg';
                              document.getElementById("TIT").innerHTML = "봄날";
                              document.getElementById("thno").innerHTML = "&nbsp;&nbsp;Moment Cienma 10관";
                          }
                      </script>
                    </div>
                  </div> 
                </div>
                <div id="rsvSchedule" class="movie_time" style="height:550px;overflow-y:auto">
                  <div id="scheduleList">
                    <div id="M1" style="display: none">
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
                          <input type="radio" id ="time_01" name="movie_time" onclick='document.getElementById("mtime").innerHTML = "&nbsp;&nbsp;12:50~15:12";'>
                          <label class="on" for="time_01" data-mid="363">
                          <p class="start">12:50</p>
                          <p class="end">~15:12</p>
                        </label>
                        </div>
                        <div class="time_list">
                          <input type="radio" id="time_02" name="movie_time" onclick='document.getElementById("mtime").innerHTML = "&nbsp;&nbsp;15:40~18:02";'>
                          <label class="on" for="time_02" data-mid="363">
                          <p class="start">15:40</p>
                          <p class="end">~18:02</p>
                        </label>
                        </div>
                      </div>
                    </div>
                    </div> 
                    <div id="M2" style="display: none">  
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
                          <input type="radio" id="time_03" name="movie_time"  onclick='document.getElementById("mtime").innerHTML = "&nbsp;&nbsp;12:50~14:42";'>
                          <label class="on" for="time_03" data-mid="351">
                          <p class="start">12:50</p>
                          <p class="end">~14:42</p>
                        </label>
                        </div>
                        <div class="time_list">
                          <input type="radio" id="time_04" name="movie_time" onclick='document.getElementById("mtime").innerHTML = "&nbsp;&nbsp;15:40~17:32";'>
                          <label class="on" for="time_04" data-mid="351">
                          <p class="start">15:40</p>
                          <p class="end">~17:32</p>
                        </label>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div id="M3" style="display: none">  
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
                          <input type="radio" id="time_05" name="movie_time" onclick='document.getElementById("mtime").innerHTML = "&nbsp;&nbsp;12:50~14:41";'>
                          <label for="time_05" data-mid="364">
                          <p class="start">12:50</p>
                          <p class="end">~14:41</p>
                        </label>
                        </div>
                        <div class="time_list">
                          <input type="radio" id="time_06" name="movie_time" onclick='document.getElementById("mtime").innerHTML = "&nbsp;&nbsp;16:00~17:51";'>
                          <label class="on" for="time_06" data-mid="364">
                          <p class="start">16:00</p>
                          <p class="end">~17:51</p>
                        </label>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div id="M4" style="display: none">
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
                          <input type="radio" id="time_07" name="movie_time" onclick='document.getElementById("mtime").innerHTML = "&nbsp;&nbsp;15:40~17:12";'>
                          <label class="on" for="time_07" data-mid=""="366">
                          <p class="start">15:40</p>
                          <p class="end">~17:12</p>
                        </label>
                        </div>
                        <div class="time_list">
                          <input type="radio" id="time_08" name="movie_time" onclick='document.getElementById("mtime").innerHTML = "&nbsp;&nbsp;19:00~20:32";'>
                          <label class="on" for="time_08" data-mid="366">
                          <p class="start">19:00</p>
                          <p class="end">~20:32</p>
                        </label>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div id="M5" style="display: none">  
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
                          <input type="radio" id="time_09" name="movie_time" onclick='document.getElementById("mtime").innerHTML = "&nbsp;&nbsp;17:30~18:38";'>
                          <label class="on" for="time_09" data-mid="371">
                          <p class="start">17:30</p>
                          <p class="end">~18:38</p>
                        </label>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div id="M6" style="display: none">
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
                          <input type="radio" id="time_10" name="movie_time" onclick='document.getElementById("mtime").innerHTML = "&nbsp;&nbsp;12:50~14:38";'>
                          <label class="on" for="time_10" data-mid="372">
                          <p class="start">12:50</p>
                          <p class="end">~14:38</p>
                        </label>
                        </div>
                        <div class="time_list">
                          <input type="radio" id="time_11" name="movie_time" onclick='document.getElementById("mtime").innerHTML = "&nbsp;&nbsp;16:00~17:48";'>
                          <label class="on" for="time_11" data-mid="372">
                          <p class="start">16:00</p>
                          <p class="end">~17:48</p>
                        </label>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div id="M7" style="display: none">  
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
                          <input type="radio" id="time_12" name="movie_time" onclick='document.getElementById("mtime").innerHTML = "&nbsp;&nbsp;18:30~20:05";'>
                          <label class="on" for="time_12" data-mid="375">
                          <p class="start">18:30</p>
                          <p class="end">~20:05</p>
                        </label>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div id="M8" style="display: none">
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
                          <input type="radio" id="time_13" name="movie_time" onclick='document.getElementById("mtime").innerHTML = "&nbsp;&nbsp;13:10~15:01";'>
                          <label class="on" for="time_13" data-mid="377">
                          <p class="start">13:10</p>
                          <p class="end">~15:01</p>
                        </label>
                        </div>
                        <div class="time_list">
                          <input type="radio" id="time_14" name="movie_time" onclick='document.getElementById("mtime").innerHTML = "&nbsp;&nbsp;16:00~17:51";'>
                          <label class="on" for="time_14" data-mid="377">
                          <p class="start">16:00</p>
                          <p class="end">~17:51</p>
                        </label>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div id="M9" style="display: none">
                    <div class="movie_tit" style="margin-top:50px">
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
                          <input type="radio" id="time_21" name="movie_time" onclick='document.getElementById("mtime").innerHTML = "&nbsp;&nbsp;13:00~14:42";'>
                          <label class="on" for="time_21" data-mid="378">
                          <p class="start">13:10</p>
                          <p class="end">~14:42</p>
                        </label>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div id="M10" style="display: none">
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
                          <input type="radio" id="time_22" name="movie_time" onclick='document.getElementById("mtime").innerHTML = "&nbsp;&nbsp;13:30~15:12";'>
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
                          <input type="radio" id="time_23" name="movie_time" onclick='document.getElementById("mtime").innerHTML = "&nbsp;&nbsp;18:30~20:12";'>
                          <label class="on" for="time_23" data-mid="380">
                          <p class="start">18:30</p>
                          <p class="end">~20:12</p>
                        </label>
                        </div>
                      </div>
                    </div>
                    </div>
                    </div>
                  </div>
                  <div id="rsvInfo" class="movie_info" data-mid>
                    <div class="movie_poster">  
                      <div class="movie_poster">
                        <div class="poster">
                          <div class="img">
                            <img src="img/res_post_default.gif" alt title="-" id="MIMG">
                          </div>
                        </div>
                      </div>    
                      <div class="movie_info_txt">
                        <div class="movie name">
                            <p class="tit">제목</p>
                            <p id="TIT" style="color: white; font-size: 15PX;"></p>
                        </div>
                        <div class="info_box">
                         <div class="info_list">
                            <p class="th">상영</p>
                            <p class="td" id="reserveInfoTicket">-</p>
                            <p class="th" id="thno"></p>
                          </div>
                          <div class="info_list">
                            <p class="th">시간</p>
                            <p class="td" id="reserveInfoTicket">-</p>
                            <p class="th" id="mtime"></p>  
                          </div>
                        </div>
                      </div>
                      <div class="total_box">
                        <p class="seatsel" style="display: block;">
                          <button class="btn st_nx" onclick="hide('ticket_box');show('sit_box');">좌석 선택</button>
                        </p>
                      </div>
                    </div>   
                  </div>
                </div>
                  <div id="sit_box" style="height:550px;overflow-y:auto; display: none">
    <div style="position: absolute; left: 50%; top: 17%; transform: translateX(-50%); background-color: #606060; width: 90%;">
    <table style="border-spacing: 10px">
         <tr>
              <td><p style="color: white; font-size: 20px;">인원</p></td>
              <td><select id="person" style=" width: 60px; height: 30px; font-size: 15px;">
                   <option value="1">1명</option>
                   <option value="2">2명</option>
                   <option value="3">3명</option>
                   <option value="4">4명</option>
                   <option value="5">5명</option>
                   <option value="6">6명</option>
              </select></td>
         </tr>
    </table>
    </div>
    <div class="screen_box" style="width: 350px; height: 30px; background-color: #606060; position: absolute; left: 21%; top: 35%;">
         <p style="color: white; font-size: 20px; font-weight: 800; text-align: center;">SCREEN</p>
    </div>
    <table style="height: 100px; width: 400px; position: absolute; left: 30%; top: 50%; transform: translateX(-50%); border-spacing: 5px;">
       <tr>
            <td><p style="color: white; font-size: 15px">1열</p></td>
            <td><label><input type="checkbox" class="check" name="sit" value="1-1"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="1-2"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="1-3"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="1-4"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="1-5"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="1-6"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="1-7"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="1-8"></label></td>
        </tr>
        <tr>
            <td><p style="color: white; font-size: 15px">2열</p></td>
            <td><label><input type="checkbox" class="check" name="sit" value="2-1"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="2-2"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="2-3"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="2-4"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="2-5"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="2-6"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="2-7"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="2-8"></label></td>
        </tr>
        <tr>
            <td><p style="color: white; font-size: 15px">3열</p></td>
            <td><label><input type="checkbox" class="check" name="sit" value="3-1"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="3-2"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="3-3"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="3-4"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="3-5"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="3-6"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="3-7"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="3-8"></label></td>
        </tr>
        <tr>
            <td><p style="color: white; font-size: 15px">4열</p></td>
            <td><label><input type="checkbox" class="check" name="sit" value="4-1"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="4-2"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="4-3"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="4-4"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="4-5"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="4-6"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="4-7"></label></td>
            <td><label><input type="checkbox" class="check" name="sit" value="4-8"></label></td>
        </tr>
    </table>
    
           <button class="btn2" style="position: absolute; right: 300px; top: 80%; "onclick="show('ticket_box');hide('sit_box');">이전으로</button>
                      
           <button class="btn2" style="position: absolute; right: 90px; top: 80%; " onclick="location.href='MomentCinema.html';">예매 결정</button>
  
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
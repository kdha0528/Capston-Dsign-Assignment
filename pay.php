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
    <link rel="stylesheet" href="css/slide.css">
    
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

        $book_index = $_GET['book_index'];

        $sql = "select * from book where book_index = '$book_index'";
        $result = $conn->query($sql);
        $book = $result->fetch_assoc();
        $movie_index = $book['movie_index'];
        $showtimes_index = $book['showtimes_index'];

        $sql = "select * from movie where movie_index = '$movie_index'";
        $result = $conn->query($sql);
        $movie = $result->fetch_assoc();

        $sql = "select * from showtimes where showtimes_index = '$showtimes_index'";
        $result = $conn->query($sql);
        $showtimes = $result->fetch_assoc();

        $sql = "select * from seat where book_index = $book_index";
        $result = $conn->query($sql);

        $cnt = 0;
    ?>
    
    <div id="wrap">
        <div id="leftMenu">
            <div class="inner">
                <p class="copyright">Copyright  모멘트시네마  All Rights Reserved.</p>
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
                </ul>    
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
    <!--영화 선택-->
    <div id="content" class="main_box">
        <link rel="sylesheet" href="./css/sub.css" type="text/css">
        <div class="ticketing_box bg_box" style="bottom: 0;max-height: calc(100vh - 150px);overflow: auto;">
            <div class="inner" style = "width:80%; margin:0 auto;">
                <p class="box_tit">결제하기</p>
                <div class="movie_ticket_box">
                    <div id="ticket_box">
                        <div id="rsMovie" class="all_movie" style="height:550px;overflow-y:auto;">
                            <div class="all_movie_tit">
                                <p class="tit">
                                    <span id="movieTotalCount"><?=$id?>님</span>
                                </p>
                            </div>
                            <div id="movieTotalList" class="movie_list_wrap">                                               
                                <div class="movie_list">                  
                                    <label  class="movie_title_label live" >
                                        <p class="movie_title" style="font-size:large"></p>
                                    </label>                               
                                    <label  class="movie_title_label live" >
                                        <p class="movie_title" style="font-size:xx-large"><?=$movie['title']?></p>
                                    </label>               
                                    <label  class="movie_title_label live" >
                                        <p class="movie_title" style="font-size:x-large"><?=$showtimes['starttime']?>~<?=$showtimes['finishtime']?></p>
                                    </label>    
                                    <label  class="movie_title_label live" >
                                        <p class="movie_title" style="font-size:large"></p>
                                    </label>           
                                    <label  class="movie_title_label live" >
                                        <p class="movie_title" style="font-size:large">예약좌석</p>
                                    </label>   
                                    <?php while($seat = $result->fetch_assoc()) { ?>
                                        <label  class="movie_title_label live" >
                                            <p class="movie_title" style="font-size:large"><?=$seat['seatnumber']?></p>                                           
                                        </label>                                              
                                    <?php $cnt++; } ?>
                                </div>
                            </div> 
                        </div>
                        <div id="rsvInfo" class="movie_info" style="height:550px;overflow-y:auto; border-left: 1px solid rgba(255, 255, 255, 0.4); box-sizing: border-box;">
                            <div class="movie_poster_box" style="">  
                                <div class="movie_poster" >
                                    <div class="poster">
                                        <div class="img">
                                            <img src="img/movie_poster_<?=$movie['movie_index']?>.jpg" alt title="-" id="MIMG">
                                        </div>
                                    </div>
                                </div>    
                                <div class="movie_info_txt">
                                    <div class="movie name">
                                        <p class="tit">제목</p>
                                        <p id="TIT" style="color: white; font-size: 15PX;"><?=$movie['title']?></p>
                                    </div>
                                    <div class="info_box">
                                        <div class="info_list">
                                            <p class="th">상영&ensp;-&ensp;MomentCinema <?=$movie['movie_index']?>관</p>
                                        </div>
                                        <div class="info_list">
                                            <p class="th">시간&ensp;-&ensp;<?=$showtimes['starttime']?>~<?=$showtimes['finishtime']?></p>  
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                        <!--결제 하기-->
                        <div id="rsvSchedule" class="movie_time" style="height:550px;overflow-y:auto;">
                            <div id="scheduleList">
                                <div class="movie_poster">                                  
                                    <div class="movie_info_txt" style="margin : 50px;">
                                        <div class="movie name">
                                            <p style="color: white; font-size: 40px;">인원 : <?=$cnt?>명</p>
                                        </div>
                                        <div class="movie name">
                                            <p style="color: white; font-size: 30px;">&nbsp;</p>
                                        </div>
                                        <div class="movie name">
                                            <p style="color: white; font-size: 40px;">티켓 : 15000원</p>
                                        </div>
                                        <div class="movie name">
                                            <p style="color: white; font-size: 30px;">&nbsp;</p>
                                        </div>
                                        <hr style = "color:white; size:10px;">
                                        <?php $total = 15000*$cnt;?>
                                        <div class="movie name">
                                            <p style="color: white; font-size: 30px;">&nbsp;</p>
                                        </div>
                                        <div class="movie name">
                                            <p style="color: white; font-size: 40px;">합계 : <?=$total?>원</p>
                                        </div>
                                        <div class="btn22" style="margin-top:50px; font-size:2.2em; letter-spacing:1px;">
                                            <a href="pay_proc.php?total=<?=$total?>&book_index=<?=$book['book_index']?>">결제하기</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">

    </div>
</html>
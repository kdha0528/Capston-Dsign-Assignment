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
     function show(id, title, age){
         console.log();
        document.getElementById(id).style.display = "block";
        document.getElementById("pick_time_age").innerHTML = age;
        document.getElementById("pick_time_age").className = "age age_"+age;
        document.getElementById("pick_time_title").innerHTML = title;
    }
    </script>
    <script>
        function change(index, title){
            document.getElementById("MIMG").src="img/movie_poster_"+index+".jpg";
            document.getElementById("TIT").innerHTML = title;
            document.getElementById("thno").innerHTML = "&nbsp;&nbsp;Moment Cienma "+index+"관";               
           
        }
    </script>
    <script>
        function change2(starttime, finishtime){
            document.getElementById("mtime").innerHTML = "&nbsp;&nbsp;"+starttime+"~"+finishtime;
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

        $movie_index = $_GET['movie_index'];
        $showtimes_index = $_GET['showtimes_index'];
        $sql = "select * from movie";
        $result = $conn->query($sql);
        if($result->num_rows == 0) {
            die("검색된 데이터가 없습니다.$conn->error");
        }
        if($movie_index != 0){
            $sql2 = "select * from movie where movie_index = '$movie_index'";
            $result2 = $conn->query($sql2);
            $row2 = $result2->fetch_assoc();
        }
        if($showtimes_index != 0 ){
            $sql4 = "select * from showtimes where showtimes_index = '$showtimes_index'";
            $result4 = $conn->query($sql4);
            $row4 = $result4->fetch_assoc();
        }
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
<?php
    if(!isset($_SESSION['name'])){
        echo "<script type='text/javascript'>alert('로그인 후 사용 가능한 기능입니다.');</script>";
        echo "<script>location.href='login.php'</script>";
    }
    else{ ?>
    <div id="content" class="main_box">
        <link rel="sylesheet" href="./css/sub.css" type="text/css">
        <div class="ticketing_box bg_box" style="bottom: 0;max-height: calc(100vh - 150px);overflow: auto;">
            <div class="inner" style="width:80%; margin:0 auto;">
                <p class="box_tit">예매하기</p>
                <div class="movie_ticket_box">
                    <div id="ticket_box">
                        <div id="rsMovie" class="all_movie" style="height:550px;overflow-y:auto">
                            <div class="all_movie_tit">
                                <p class="tit">
                                    영화
                                    <span id="movieTotalCount">10</span>
                                </p>
                            </div>
                            <div id="movieTotalList" class="movie_list_wrap"> 
                                <?php while($row = $result->fetch_assoc()) { ?>
                                    <?php if($movie_index == $row['movie_index']) { ?>
                                    <div class="movie_list" style="border: 2px solid #f9880a;">    
                                    <?php } else{ ?>
                                        <div class="movie_list">    
                                    <?php }?>
                                        <a href="reservation.php?movie_index=<?=$row['movie_index']?>&showtimes_index=0" id = "movie_<?=$row['movie_index']?>" name="movie">
                                            <label id="movie_label_<?=$row['movie_index']?>" class="movie_title_label live" for="movie_<?=$row['movie_index']?>" data-mid="<?=$row['movie_index']?>" data-mkey="0">
                                                <div class="age age_<?=$row['age']?>"><?=$row['age']?></div>
                                                <p class="movie_title" data-mid="349" data-mkey="0"><?=$row['title']?></p>
                                            </label>   
                                        </a>                           
                                    </div>
                                <?php  } ?>
                            </div> 
                        </div>
                        
                        <!--시간 선택-->
                        <div id="rsvSchedule" class="movie_time" style="height:550px;overflow-y:auto">
                            <div id="scheduleList">
                                <div id="pick_time" style="display: none">
                                    <div class="movie_tit" style="margin-top:50px">
                                        <p id="pick_time_age" class=""></p>
                                        <p id="pick_time_title" class="tit"></p>
                                    </div>
                                    <?php
                                        $sql3 = "select * from showtimes where movie_index = '$movie_index'";
                                        $result3 = $conn->query($sql3);
                                    ?>
                                    <div class="time_wrap">
                                    <?php while($row3 = $result3->fetch_assoc()) { ?>
                                        <div class="time_wrap_top">
                                            <p class="tit">2D 디지털 자막</p>
                                        </div>
                                        <div class="time_list_wrap" style="margin-bottom:20px;">
                                            <?php if($showtimes_index == $row3['showtimes_index']) { ?>
                                            <div class="time_list" style = "background-color: #f9880a">
                                            <?php } else { ?>
                                            <div class="time_list">
                                            <?php } ?>
                                                <a href="reservation.php?movie_index=<?=$row2['movie_index']?>&showtimes_index=<?=$row3['showtimes_index']?>">
                                                <label class="on" for="time_0<?=$row3['showtimes_index']?>" data-mid="363">
                                                    <p id="starttime" class="start"><?=$row3['starttime']?></p>
                                                    <p id="finishtime" class="end">~<?=$row3['finishtime']?></p>
                                                </label>
                                                </a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div id="rsvInfo" class="movie_info" data-mid>
                            <div class="movie_poster_box" style="left:25%;">  
                                <div class="movie_poster">
                                    <div class="poster" style="width:210px;">
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
                                    <?php if($movie_index != 0 && $showtimes_index != 0) { ?>
                                    <div class="info_box">
                                        <div class="info_list">
                                            <p class="th">상영&ensp;-&ensp;MomentCinema <?=$row2['movie_index']?>관</p>
                                        </div>
                                        <div class="info_list">
                                            <p class="th">시간&ensp;-&ensp;<?=$row4['starttime']?>~<?=$row4['finishtime']?></p>  
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <?php if($movie_index != 0 && $showtimes_index != 0) { ?>                                                                        
                                <div class="total_box">
                                    <a href="reservation_proc.php?movie_index=<?=$row2['movie_index']?>&showtimes_index=<?=$row4['showtimes_index']?>" class="btn st_nx">좌석 선택</a>
                                </div>
                                <?php } ?>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="footer">

    </div>
    
    <?php if($row2['movie_index'] != 0) { ?>
        <script>
            show('pick_time', '<?=$row2['title']?>', '<?=$row2['age']?>');
            change('<?=$row2['movie_index']?>', '<?=$row2['title']?>');
        </script>
    <?php } ?>
    <?php if($showtimes_index != 0) { ?>
        <script>
            change2('<?=$row4['starttime']?>', '<?=$row4['finishtime']?>');
        </script>
    <?php } ?>
    
<?php } ?>
</body>
</html>
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
    
    <div id="content" class="main_box">
        <link rel="sylesheet" href="./css/sub.css" type="text/css">
        <div class="ticketing_box bg_box" style="bottom: 0;max-height: calc(100vh - 150px);overflow: auto;">
            <div class="inner">
                <p class="box_tit">예매하기</p>
                <?php
                    if(!isset($_SESSION['name'])){
                        echo "<script type='text/javascript'>alert('로그인을 해야합니다.');</script>";
                        echo "<script>location.href='login.php'</script>";
                    }
                ?>
                <div class="movie_ticket_box">
                    <div id="sit_box" style="height:550px;overflow-y:auto; display: block">
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
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="screen_box" style="width: 350px; height: 30px; background-color: #606060; position: absolute; left: 21%; top: 35%;">
                            <p style="color: white; font-size: 20px; font-weight: 800; text-align: center;">SCREEN</p>
                        </div>
                        <form action="seat_selection_proc.php?book_index=<?=$book_index?>" method="post">
                            <table style="height: 100px; width: 400px; position: absolute; left: 30%; top: 50%; transform: translateX(-50%); border-spacing: 5px;">
                                <tr>
                                    <td><p style="color: white; font-size: 15px">1열</p></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="1-1"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="1-2"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="1-3"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="1-4"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="1-5"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="1-6"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="1-7"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="1-8"></label></td>
                                </tr>
                                <tr>
                                    <td><p style="color: white; font-size: 15px">2열</p></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="2-1"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="2-2"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="2-3"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="2-4"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="2-5"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="2-6"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="2-7"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="2-8"></label></td>
                                </tr>
                                <tr>
                                    <td><p style="color: white; font-size: 15px">3열</p></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="3-1"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="3-2"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="3-3"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="3-4"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="3-5"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="3-6"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="3-7"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="3-8"></label></td>
                                </tr>
                                <tr>
                                    <td><p style="color: white; font-size: 15px">4열</p></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="4-1"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="4-2"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="4-3"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="4-4"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="4-5"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="4-6"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="4-7"></label></td>
                                    <td><label><input type="checkbox" class="check" name="sit[]" value="4-8"></label></td>
                                </tr>
                            </table>
                        
                            <input type="reset" value="돌아가기" class="btn2" style="position: absolute; right: 300px; top: 80%; " >                                
                            <input type="submit" value="예매하기" class="btn2" style="position: absolute; right: 90px; top: 80%; " >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">

    </div>
    
</body>
</html>
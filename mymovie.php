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
        $id = $_SESSION['id'];
        $sql = "select * from book where user_index = '$id'";
        $result = $conn->query($sql);
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
      <div style="margin:auto; margin-top:100px; text-align:center;">
        <h1 style="color:white; font-size:50px;">마이페이지</h1> 
        <p style="letter-spacing:1px; color:white; font-size:15px; margin-top:30px;">예약 영화 목록</p>     
        <table id="booked_movie_box">
            <?php while($book = $result->fetch_assoc()){ 
                $book_index = $book['book_index'];
                $sql = "select * from paid where book_index = '$book_index'";
                $result2 = $conn->query($sql);
                $paid = $result2->fetch_assoc();
                if($paid['paid_index'] > 0){
                    $movie_index = $book['movie_index'];
                    $showtimes_index = $book['showtimes_index'];

                    $sql = "select * from movie where movie_index='$movie_index'";
                    $result2 = $conn->query($sql);
                    $movie = $result2->fetch_assoc();

                    $sql = "select * from showtimes where showtimes_index='$showtimes_index'";
                    $result2 = $conn->query($sql);
                    $showtimes = $result2->fetch_assoc();
                    
                ?><tbody class="booked_movie_tbody">
                    <tr class="booked_movie_item">
                        <td class="booked_movie_item_1"><a href="movie_detail.php?idx=<?=$movie['movie_index']?>"><img src="img/movie_poster_<?=$movie['movie_index']?>.jpg" style="width:100px; height: auto;"></a></td>
                        <td class="booked_movie_item_2"><a href="movie_detail.php?idx=<?=$movie['movie_index']?>"><?=$movie['title']?></a></td>
                        <td class="booked_movie_item_3"><?=$showtimes['starttime']?>~<?=$showtimes['finishtime']?></td>
                        <td class="booked_movie_item_4">
                            <?php 
                            $sql = "select * from seat where book_index='$book_index'";
                            $result2 = $conn->query($sql);
                            while($seat = $result2->fetch_assoc()){ ?>
                                <div class="booked_movie_item_5"><?=$seat['seatnumber']?></div>
                            <?php } ?>
                        </td>
                    </tr>
                </tbody>
                <?php } ?>
            <?php }  ?>
        </table>
      </div>
    </div>
    <div id="footer">
    </div>
  </body>
</html>
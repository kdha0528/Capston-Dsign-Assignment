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
              <?php if(!isset($_SESSION['name'])){ ?>
                <li>
                  <a href="login.php">로그인</a>
                </li>
                <li>
                  <a href="signup.php">회원가입</a>
                </li>
                <?php }
                else{ ?>
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
                                        <img src="img/movie_poster_02.jpg" >
                                    </div></div>
                                    <div class="movie_info_txt">
                                        <p class="tit">신비한 동물들과 덤블도어의 비밀</p>
                                        <p class="eng_tit">Fantastic Beasts: The Secrets of Dumbledore</p>

                                        <div class="info_box">
                                            <div class="info_list">
                                                <p class="th">장르</p>
                                                <p class="td info">
                                                    <span>"어드벤처, 가족, 환타지"</span>
                                                    <span>"2022-04-13개봉"</span>
                                                    <span>142분</span>
                                                </p>
                                            </div>
                                            <div class="info_list">
                                                <p class="th">감독</p>
                                                <p class="td director">"데이빗 예이츠"</p>
                                            </div>
                                            <div class="info_list">
                                                <p class="th">출연</p>
                                                <p class="td actor">"에데 레드메인, 주드 로, 매즈 이켈슨, 댄 포글러, 앨리슨 수돌, 빅토리아 예이츠, 윌리엄 나달람, 리처드 코일"</p>
                                            </div>
                                        </div>
                                        <!--예매사이트와 연동-->
                                        <button class="movie_btn"><a href="reservation.php">예매하기</a></button>
                                    </div>
                                </div>
                                <div class="movie_info_text">
                                    <div class="tit">신비한 동물들과 덤블도어의 비밀</div>
                                    <div class="con">
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                              가장 위험한 마법에 맞선, 세상을 구할 전쟁이 시작된다!
                                            </span>
                                        </p>
                                        <p>
                                            <br>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                              1930년대, 제2차 세계대전에 마법사들이 개입하게 되면서
                                            </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                              강력한 어둠의 마법사 그린델왈드의 힘이 급속도로 커진다.
                                            </span>
                                        </p>
                                        <p>
                                            <span style="color: rgb(85, 85, 85);">
                                              덤블도어는 뉴트 스캐맨더에게 위대한 마법사 가문 후손, 
                                            </span>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85, 85, 85);">
                                            마법학교의 유능한 교사, 머글 등으로 이루어진 팀에게 임무를 맡긴다. 
                                          </span>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85, 85, 85);">
                                            이에 뉴트와 친구들은 머글과의 전쟁을 선포한
                                          </span>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85,85, 85);">
                                            그린델왈드와 추종자들, 그의 위험한 신비한 동물들에 맞서 세상을 구할 거대한 전쟁에 나선다. 
                                          </span>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85,85, 85);">
                                            한편 전쟁의 위기가 최고조로 달한 상황 속에서 덤블도어는
                                          </span>
                                        </p>
                                        <p>
                                          <span style="color: rgb(85,85, 85);">
                                            더이상 방관자로 머물 수 없는 순간을 맞이하고, 서서히 숨겨진 비밀이 드러나는데
                                          </span>
                                        </p>      
                                        


                                    </div>
                                </div>  
                            </div>
                        </div>
                   
                        <?php
    
	# DB 연결하기
	
    include_once('dbconn.php');


   #$sql = "SELECT * FROM comment where comment = '$comment' and rate = '$rate'";
   #$result = $conn->query($sql);
   
  
    $result = mysqli_query($conn,"SELECT * FROM comment");
    echo  
    "<table border='1' bgcolor='white'  bordercolor='white' width ='1100' height='700' align = 'center'> 
   
      <tr> <th>익명 후기</th> <th>평점</th> <th>작성일</th> </tr>";
    $n = 1;
    while($row = mysqli_fetch_array($result)){
    echo "<tr>  ";
    echo "<th>" . $row['comment'] . "   </th>";
    echo "<th>" . $row['rate'] . "</th>";
    echo "<th>" . $row['date'] . "</th>";
    echo "</tr>";
    $n++;
    }
    echo "</table>";
    mysqli_close($conn);
    ?>

  
?>



<!--BoardPage-->
<!--<div class="container">
            <div class="board_top">
                <h1 class="login" class="board_title">
                <font color="white"> 익명 댓글   </font> </h1> 
            </div>
            
            <section id = "posts">
            <div class="commentbox">
               
                    <tr class="commentbox_header">
                    <th class="commentbox_header_1">
                        <font color="white"><?=$comment?><br> </font>                        
                      </th><th class="commentbox_header_2">
                      <font color="white"><?=$date?><br></font>
                    </th><th class="commentbox_header_3">
                    <font color="white"><?=$rate?></font></th>
                    </tr> 
                   
                       
                     
                </table>
            </div>
            </section>
        </div> -->











                        <link rel="stylesheet" href="css/sub.css" type="text/css" />
                        <div clas="inner">
                          <div class="comment_contents" style="margin-top:150px;">
                          <form action="comment.php" method="POST" name="form">
                              <div class="inner">
                                <p class="main">후기&nbsp작성   </p>
                                
                                <br>
                                  <form class="form_area">
                                      <input type="text" name="comment" id= "comment" placeholder="후기를 남겨주세요" 
                                      style="width:1000px;height:80px;font-size:30px;">
                                      
                                      <select  name="rate" id= "rate">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      </select>  
                                      <button type="submit" class="comment_submit">등록</button>
                                  </form>
                              </div>
                          </div>
                      </div>



                    </div>
                </div>    
            </section> 
        </div>
        </form>
        <div id="footer">

        </div>
    </div>
  </body>
</html>
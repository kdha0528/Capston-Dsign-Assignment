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
              <a href="reservation.html">예매</a>
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
          <div class="inner">
            <div id="Wrapper">
                <div id="Main" style="height:100%">
                <section>
                  <div class="inner">
                    <div class="join_contents">
                      <form action="mypage_proc.php" method="POST" name="form">
                      <p class="join_tit">마이페이지</p>
                      <secton class="step_cont">
                        <p class="sec_tit">개인정보 수정</p>
                        <table class="info_table_type">
                          <colgroup>
                            <col width="15%">
                            <col width="*%">
                          </colgroup>
                          <tbody>
                            <tr>
                              <td>
                                <span>
                                  아이디확인 
                                </span>
                              </td>
                              <td>
                                <input type="text" class="line_input" //id="id" name="id" style="border: 1px solid rgba(255, 255, 255, 0.2)">
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <span>
                                  이름 확인
                                </span>
                              </td>
                              <td>
                                <input type="text" class="line_input" //id="password" name="name" style="border: 1px solid rgba(255, 255, 255, 0.2)">
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <span>
                                  비밀번호 변경
                                </span>
                              </td>
                              <td>
                                <input type="password" class="line_input" //id="name"  name="password" style="border: 1px solid rgba(255, 255, 255, 0.2)">
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <span>
                                  휴대폰번호 변경
                                </span>
                              </td>
                              <td>
                                <input type="text" class="line_input" //id="phone" name="phone" style="border: 1px solid rgba(255, 255, 255, 0.2)">
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <span>
                                 생년 월일 변경
                                </span>
                              </td>
                              <td>
                                <input type="date" class="line_input" //id="age" name="age" style="border: 1px solid rgba(255, 255, 255, 0.2)">
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <span>
                                  이메일 변경
                                </span>
                              </td>
                              <td>
                                <input type="email" class="line_input" //id="email" name="email" style="border: 1px solid rgba(255, 255, 255, 0.2)">
                              </td>
                            </tr>
                           
                              
                          </tbody>
                       </table>
                       <div class="btn_layout mt40">
                         
                         <button type="submit" class="full_btn btn-submit">회원정보 수정</button>
                       </div>
                      </secton>
                    </div>
                  </div>  
                </section>
                </div>
            </div>
          </div>
        </div>
        <div id="footer">

        </div>
    </div>
  </form>
  </body>
</html>
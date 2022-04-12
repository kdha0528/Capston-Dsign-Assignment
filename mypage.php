<!DOCTYPE HTML PUBLIC >
<head>
<meta http-equiv="Content-Type" content="text/html"; charset= "utf-8">
<title>mypage</title>
</head>


  <?php
	# DB 연결하기
include_once('dbconn.php');
    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>
          SCSC CINEMA
        </title>
        <link rel="stylesheet" href="" media="screen" title="no title" charset="utf-8">
      </head>
      <body>
        <header>
            <h2 id="mypage">
              <?php
              session_start();
              if(!isset($_SESSION['id']) || !isset($_SESSION['name'])) {
              echo "<meta http-equiv='refresh' content='0;url=login.php'>";
              exit;
              }
              $user_id = $_SESSION['id'];
              $user_name = $_SESSION['name'];
              echo "<p>안녕하세요. $name($id)님</p>";
              echo "<p><a href='logout.php'>로그아웃</a></p>";
              echo "<p><a href='mainmenu.html'>메뉴화면</a></p>";
              echo "<p>회원정보를 확인합니다.</p>";
              ?>
            </h2>
        </header>
        <article>
          <table>
            <tr>
              <th>
                회원ID
              </th>
              <th>
                회원이름
              </th>
              <th>
                핸드폰번호
              </th>
              <th>
                예약확인
              </th>
              <th>
              이메일
            </th>
            <th>
            나이 
          </th>
          <th>
          가입일 
        </th>
            </tr>
            <?php
              $sql = "SELECT * FROM users";    //입력된 아이디의 예약상태를 알아냄.
              $result = mysqli_query($conn,$sql);

              while($row = mysqli_fetch_assoc($result)){
                $id = $row["id"];
                $name = $row["name"];
                $address = $row["address"];
                $id = $row["id"];
                $password =$row["password"];
                $phone1 = $row["phone"];
                $phone2 = $row["phone2"];
                $phone3 = $row["phone3"];
                $phone = $phone1."-".$phone2."-".$phone3;
                $age = $row["age"];
              	$email = $row["email"];
               	$date = $row["date"];
                echo "
                    <tr>
                      <td>
                        {$id}
                      </td>
                      <td>
                        {$name}
                      </td>
                      <td>
                        {$phone}
                      </td>
                      <td>
                      {$address}
                      </td>
                    <td>
                    {$password}
                  </td>
                  <td>
                   {$age}
                  </td>
                  <td>
                  {$email}
                  </td>
                  <td>
                  {$date}
                  </td>
                      
                    </tr>"
                
              

           

          </table>

        </article>
      </body>
    </html>

  </body>
</html>


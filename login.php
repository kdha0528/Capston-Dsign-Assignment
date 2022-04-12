<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>로그인</title>
    </head>
    <body>
        <h1>환영합니다</h1>
        <hr />
        <h2>로그인</h2>
        <?php if(!isset($_SESSION['id']) || !isset($_SESSION['password'])) { ?>
        <form method="post" action="mypage.php">
            <p>아이디: <input type="id" name="id" /></p>
            <p>비밀번호: <input type="password" name="pw" /></p>
            <p><input type="submit" value="로그인" /></p>
        </form>
        <?php } else {
            $id = $_SESSION['id'];
            $password = $_SESSION['password'];
            echo "<p><strong>$id</strong>($id)님은 이미 로그인하고 있습니다. ";
            echo "<a href=\"mainmenu.html\">[돌아가기]</a> ";
            echo "<a href=\"logout.php\">[로그아웃]</a></p>";
        } ?>
    </body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $sql = mysqli_connect("localhost", "root", "apmsetup", "test");
        $userid = addslashes($_POST['userid']); 
        $password = addslashes($_POST['password']); 
        $result = mysqli_query($sql,"select * from table_test where userid='$userid' and password='$password'");

        //mysql_num_rows 결과 count하는 함수
        $count = mysqli_num_rows($result);
       if($count==1)
        {
            //session_start 세션에 변수 담기
            session_start();
            $_SESSION['userid']=$userid;
           
           header("location: welcome.php");
        }
        else;
        {
            $error="아이디와 패스워드를 확인해주세요.";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Untitled Document</title>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
    </head>
    <body>
        <!-- post 호출을 하기때문에 위에 if문으람-->
        <form action="" method="post">
            <label>아이디 :</label><input type="text" name="userid"/>
            <br>
            <label>비밀번호 :</label><input type="password" name="password"/>
            <br>
            <input type="submit" value="로그인"/>
        </form>
    </body>
</html>
<?php
    session_start();
    $user_id=$_SESSION['userid'];
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
        <h1>로그인을 환영합니다. <?php echo $user_id; ?></h1> 
    </body>
</html>
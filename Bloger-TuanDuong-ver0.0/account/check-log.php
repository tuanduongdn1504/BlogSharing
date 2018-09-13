<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="../awesome/css/font-awesome.min.css">

</head>


<?php
    session_start();
    require_once("../connect.php");


    $username = trim($_POST['user']);
    $password = trim($_POST['pass']);
   
    
    
    if (!empty($username) && !empty($password))
    {
           
        $query = mysqli_query($link,"select * from account where username = '".$username."' and password = '".$password."'");
        $num_rows = mysqli_num_rows($query);
        if ($num_rows==0)
            echo "<b>Tên đăng nhập hoặc mật khẩu không đúng !</b>";
        else {
            $query = mysqli_query($link,"select * from account where username = '".$username."' and password = '".$password."'");
            $_SESSION["username"] = $username;
            $row = mysqli_fetch_array($query);
            $_SESSION["right"] = $row['right'];

            echo'<b>Đăng nhập thành công. <a href="/">Đến Trang chủ</a></b>';
        }

    }
    else
        echo'<b>Vui lòng nhập đầy đủ thông tin</b>';

    

?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
</head>
<?php
    require_once("../incfile/connect.php");

    $username = trim($_POST['user']);
    $email = trim($_POST['email']);
    $password = trim($_POST['pass']);
    $repassword = trim($_POST['re-pass']);
    $kq_user= mysqli_query($link,"select * from account where username='".$username."' ");
    $kq_mail= mysqli_query($link,"select * from account where email='".$email."' ");
    $pattern = "/^[A-Za-z0-9_\.]{2,32}$/";
    $patternmail = "/^[A-Za-z0-9_.]{2,32}@([a-zA-Z0-9].{2,12})(.[a-zA-Z]{2,12})+$/";



    if (!empty($username) && !empty($email) && !empty($password) && !empty($repassword))
    {
	if(!preg_match($pattern ,$username, $matchs))
            echo  "<font color='red'>Username bạn vừa nhập không đúng định dạng</font>  ";
        else
        if (mysqli_num_rows($kq_user) > 0 )
            echo'<font color="red">Tên đăng nhập đã tồn tại</font> ';
        else 
		if(!preg_match($patternmail ,$email, $matchs))
                echo  "<font color='red'>Mail bạn vừa nhập không đúng định dạng </font> ";
		else
            if (mysqli_num_rows($kq_mail) > 0)
                echo'<font color="red">Email đã tồn tại trong hệ thống</font> ';
            else
                if ($password != $repassword)
                    echo'<font color="red">Mật khẩu không khớp</font> ';
                else 
                {
                    mysqli_query($link,"INSERT INTO `account`(`username`, `password`, `email`) 
                        VALUES ('".$username."','".$password."','".$email."')");
                    echo'<font color="red">Đăng kí Thành công! <a href="login.php">Đăng nhập</a> ngay</font> ';
                }
        $a=0;        
    }
    else{
        echo '<font color="red">Vui lòng nhập đầy đủ</font> ';
    }

?>

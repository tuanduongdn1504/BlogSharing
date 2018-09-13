<?php
$status = session_status();
if ($status == PHP_SESSION_NONE) {
//There is no active session
	session_start();
} else
if ($status == PHP_SESSION_DISABLED) {
//Sessions are not available
} else
if ($status == PHP_SESSION_ACTIVE) {
//Destroy current and start new one
	session_destroy();
	session_start();
}?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <?php
require_once "../connect.php";
$username = trim($_POST['user']); //Trim Loại bỏ khoảng trống 2 bên
$password = trim($_POST['pass']);

if (!empty($username) && !empty($password)) {

	$query = mysqli_query($link, "select * from account where username = '" . $username . "' and password = '" . $password . "'");
	$num_rows = mysqli_num_rows($query);
	if ($num_rows == 0) {
		echo "<font color='red'>Tên đăng nhập hoặc mật khẩu không đúng !</font>";
	} else {
		$query = mysqli_query($link, "select * from account where username = '" . $username . "' and password = '" . $password . "'");
		echo 'Đăng nhập thành công!! Hệ thống đang chuyển hướng về Trang chủ';
		echo '<script> window.location = "../";
    window.alert("Đăng nhập thành công!"); </script>';
		$_SESSION["username"] = $username;
		$_SESSION["password"] = $password;
		$row = mysqli_fetch_array($query);
		$_SESSION["right"] = $row['right'];
		exit();

	}
} else {
	echo '<font color="red">Vui lòng nhập đầy đủ thông tin!!!</font>';
}

?>
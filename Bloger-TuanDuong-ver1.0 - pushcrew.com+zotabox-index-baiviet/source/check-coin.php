<?php
    session_start();
    require_once("../incfile/connect.php");


    $username = trim($_POST['user']);
    $coin = trim($_POST['coin']);
	$query = mysqli_query($link,"select * from account where username = '".$username."' ");

	$row=mysqli_fetch_array($query);
	$coinafter= $row['coin'] - $coin;
	
	$query = mysqli_query($link,"update account set coin = ".$coinafter." where username = '".$username."' ");
	echo '<center>Đã get Link...Hệ thống đã trừ '.$coin.' Xu từ tài khoản của bạn <br> Đang tự động tải xuống</center>';

?>
<?php 
session_start();
?>
<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Untitled Document</title>
</head>
<body>
	<?php
$_SESSION=array();
session_destroy();
/*echo 'Đã đăng xuất!! Hệ thống đang chuyển hướng về Trang chủ';
header('Location: ../index.php');
echo'<script> window.location = "../";
 window.alert("Đã đăng xuất!"); </script>';*/
?>
<script language="javascript">
window.alert("Ban da thoat thanh cong");
window.location="index.php";
</script>
</body>
</html>
<?php
echo'<meta charset="UTF-8">';

 
//$conn=mysqli_connect("localhost","user","") or die(" khong the ket noi");
//mysqli_select_db($conn,"thanhtrungcit");
$link=mysqli_connect("localhost","root","","thanhtrungcit") or die(" khong the ket noi");
mysqli_set_charset($link,"UTF8");

?>
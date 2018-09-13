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

<!-- Navbar -->
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="/"><img src="img/logoweb.png"></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav">
			<li><a  href="/">Trang Chủ</a></li>
			<li class="dropdown">
			  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Chuyên Mục <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<?php 

				  	$str="select * from chuyenmuc";
				  	$kq= mysqli_query($link,$str);
					if(mysqli_num_rows($kq) == 0)
				  		echo '<li><a href="#">Chưa có chuyên mục</a></li>';
				  	else 
				  		while($row=mysqli_fetch_array($kq))
				  			{ 
				  				echo'<li><a href="chuyenmuc.php?id='.$row['id'].'">'.$row['namectg'].'</a></li>'; 
				  			}
				  ?>
			  </ul>
			</li>
			
			<li class="dropdown">
			  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Website Khách Hàng <span class="caret"></span></a>
			  <ul class="dropdown-menu">
 			<li><a href="http://mvphone.vn">MVPhone.VN - Điểm đỉnh công nghệ</a></li>
			 <li><a href="http://thanhtrungit.com/LMHT">DEMO Shop LMHT</a></li>
			</ul>
			</li>
			<li><a href="write.php">Viết Bài</a></li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
		  <?php 

		  
		  if (!isset($_SESSION['username'])) 
		  {
		  
			echo'<li><a href="account/register.php"><span class="glyphicon glyphicon-user"></span> Đăng kí</a></li>
			<li class="dropdown"><a href="account/login.php"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>';
			 } else
			  {
			  		$strcoin="select * from account where username='".$_SESSION['username']."'";
				  	$kq= mysqli_query($link,$strcoin);
				  	$row=mysqli_fetch_array($kq);
			    ?>
				<div class="mess"> <div class="">Chào <b><?php echo''.$_SESSION["username"].''?></b>! <br> Bạn có <b> <?php echo''.$row['coin'].''?></b> Xu <br> <a href="../account/logout.php"><i class="glyphicon glyphicon-log-out"></i> Đăng xuất</a></div></div>
				<?php
				}
				?>
		  </ul>
		</div>
	  </div>
	</nav>
	<!-- End Navbar -->
<?php 
	require_once("../incfile/connect.php");
	$idcm=intval($_GET['id']);
	$seo = mysqli_query($link,"select * from chuyenmuc where id=".$idcm."");
	$row = mysqli_fetch_array($seo);
function convertstr($strurl) {
    $strurl = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $strurl);
     $strurl= preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $strurl);
     $strurl = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $strurl);
     $strurl = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $strurl);
     $strurl = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $strurl);
     $strurl = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $strurl);
     $strurl = preg_replace("/(đ)/", 'd', $strurl); 
     $strurl = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'a', $strurl);
     $strurl = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $strurl);
     $strurl = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $strurl);
     $strurl = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'o', $strurl);
     $strurl= preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'u', $strurl);
     $strurl= preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'y', $strurl);
     $strurl = preg_replace("/(Đ)/", 'd', $strurl);
     $strurl = preg_replace("/( )/", '-', $strurl);
     $strurl = preg_replace("/(#)/", '', $strurl);
 
  return $strurl;
  }


?>
<?php 
	require_once("../incfile/head.php")
 ?>

<body>

	<?php require_once("../incfile/navbar.php"); ?>

	<!-- Main -->
	<div max-width="900px">
	<div class="container-fluid">
		<div class="row">
			
			<!-- Start left-->
			<div class="col-md-9">
					<!-- Start slide-->
					<!--End slide-->
			
					<!-- Start Info -->
					<div class="panel-group shadowpanel">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4>Chuyên Mục > 
								<?php 
								$str="select * from chuyenmuc  where id=".$idcm."";
				  				$kq= mysqli_query($link,$str);
								while($row=mysqli_fetch_array($kq)) {echo $row['namectg']; } ?></h4>
						</div>
						<div class="panel-body">
						<!-- Hiển thị bv -->
							<?php 

								$result= mysqli_query($link,"select * from (baiviet bv inner join chuyenmuc cm on bv.idctg = cm.id) where idctg=".$idcm." ORDER BY bv.idbv desc");
								if(mysqli_num_rows($result) == 0)
									echo'Chưa có bài viết nào.';
								else
								while($row = mysqli_fetch_array($result)){

										$url= convertstr($row['title']);
								
									?>
									<?php 
									echo'<div class="post">
										<div class="row">
											<div class="col-sm-3">
												<center><img id="imgthumb" src="../'.$row['urlimg'].'"></center>
											</div>
											<div class="col-sm-9">
												<h3><a href="'.$url.'-'.$row['idbv'].'.html">'.$row['title'].'</a></h3>
												<div class="tag"><i class="fa fa-tags" aria-hidden="true"></i> Chuyên mục: '.$row['namectg'].'</div>
												<div class="tag"><i class="fa fa-user" aria-hidden="true"></i> Author : StormDUT</div>
												<div class="tag"><i class="fa fa-calendar" aria-hidden="true"></i> '.$row['date'].'</div>

												
												<div class="tag"><a href="'.$url.'-'.$row['idbv'].'.html">Xem thêm</a></div>
											</div>
										</div>
									</div>';
								}
		
							?>
							
							<!-- end bv-->
						</div>
					</div> 
          
				</div>
			</div><!-- End left-->
			<!-- Col right-->
			<div class="col-md-3">
				
<div class="panel-group shadowpanel">
				  <div class="panel panel-default">
					<div class="panel-heading">
						<h4><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Bài viết mới nhất</h4>
					</div>
					<div class="panel-body">
					<?php 

						
					  	$str="select * from baiviet order by idbv desc limit 5";
					  	$kq= mysqli_query($link,$str);
						if(mysqli_num_rows($kq) == 0)
					  		echo 'Chưa bài viết nào';
					  	else 
					  		while($row=mysqli_fetch_array($kq))
					  			{ 
									$url= convertstr($row['title']);
					  				echo'<div class="newpost">
											<img src="../img/rss.png" width="5px"> <a href="'.$url.'-'.$row['idbv'].'.html">'.$row['title'].'</a>
											<hr>
										</div>'; 
					  			}
				  	?>
					</div>
					<div class="panel-heading">
						<center>
						  <img id="avatar" src="../img/admin.png">
						  <p class="p_info"><b>DƯƠNG VĂN TUẤN</b></p>
						  <p class="p_info" style="font-size:15px;">DEVELOPER - GYMER</p>
						  <i class="glyphicon glyphicon-thumbs-up"  style="color:#FFFFFF; margin-bottom:3px;font-size: 50px;"></i>
						</center>
						<div class="mess"><i class="glyphicon glyphicon-flash" style="font-size: 20px;"></i> Xin chào các bạn đã ghé thăm Blog cá nhân của mình. Mình Là một lập trình viên và có đam mê đặc biệt với Gym . Thích tìm tòi và sáng tạo, viết và chia sẽ những gì mình học được. Các bạn có thể contact với mình qua thông tin bên dưới nha <i class="glyphicon glyphicon-hand-down" ></i><i class="glyphicon glyphicon-hand-down"></i> <i class="glyphicon glyphicon-flash" style="font-size: 20px;"></i></div>
					</div>
					<div class="panel-body">
						<div id="contact">
						  <i class="glyphicon glyphicon-calendar" style="color: #1DE439; font-size: 20px;"></i><span class="spanitem">15/04/1996</span>
						</div>
						<div id="contact">
						  <i class="glyphicon glyphicon-heart-empty" style="color: #1DE439; font-size: 20px;"></i><span class="spanitem">Giới tính: Nam</span>
						</div>
						<div id="contact">
						  <i class="glyphicon glyphicon-apple" style="color: #1DE439; font-size: 20px;"></i><span class="spanitem">01264.979.439</span>
						</div>
						<div id="contact">
						  <i class="glyphicon glyphicon-map-marker" style="color: #1DE439; font-size: 20px;"></i><span class="spanitem">Tổ 71 Hòa Hải, Q.Ngũ Hành Sơn, TP Đà Nẵng</span>
						</div>
						<div id="contact">
						  <i class="	glyphicon glyphicon-user" style="color: #1DE439; font-size: 20px;"></i><span class="spanitem"><a target="_black" id="link" href="http://fb.com/tuanGYMIT">Facebook.com/tuanGYMIT</a></span> <!--_black là thuộc tính new tab-->
						</div>
					</div>
					
				  </div>
				</div>
<div class="panel-group shadowpanel">
	<div class="panel panel-default">
		<div class="panel-heading">
		 	Ads
		</div>
		<div class="panel-body">
			<!-- Start of ouo.io banner code -->
<a target="_black" href="http://ouo.io/ref/3wEMWC3p"><img src="../img/r4.png" title="ouo.io - Make short links and earn the biggest money" /></a>
<!-- End of ouo.io banner code -->

		</div>
	</div>
</div>

			</div> <!-- End col right -->
						
		</div> 
		</div>
		

	</div>
 
</div>
<!-- ENd Main -->
</div> 
<?php
require_once("../incfile/end.php");
?>
</body>
</html>


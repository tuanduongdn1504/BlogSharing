<div class="panel-group shadowpanel">
				  <div class="panel panel-default">
					<div class="panel-heading">
						<h4><i class=glyphicon glyphicon-list-alt"></i> Bài viết mới nhất</h4>
					</div>
					<div class="panel-body">
					<?php 
function convertstr($str) {
    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
     $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
     $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
     $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
     $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
     $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
     $str = preg_replace("/(đ)/", 'd', $str); 
     $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'a', $str);
     $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
     $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
     $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'o', $str);
     $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'u', $str);
     $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'y', $str);
     $str = preg_replace("/(Đ)/", 'd', $str);
     $str = preg_replace("/( )/", '-', $str);
      $str = preg_replace("/(#)/", '', $str);
  //$str = str_replace(” “, “-”, str_replace(“&*#39;”,”",$str));
  return $str;
  }
						
					  	$str="select * from baiviet order by idbv desc limit 5";
					  	$kq= mysqli_query($link,$str);
						if(mysqli_num_rows($kq) == 0)
					  		echo 'Chưa bài viết nào';
					  	else 
					  		while($row=mysqli_fetch_array($kq))
					  			{ 
									$url= convertstr($row['title']);
					  				echo'<div class="newpost">
											<img src="img/rss.png" width="5px"> <a href="'.$url.'-'.$row['idbv'].'.html">'.$row['title'].'</a>
											<hr>
										</div>'; 
					  			}
				  	?>
					</div>
					<div class="panel-heading">
						<center>
						  <img id="avatar" src="img/admin.png">
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
						  <i class="	glyphicon glyphicon-user" style="color: #1DE439; font-size: 20px;"></i><span class="spanitem"><a target="_black" id="link" href="http://fb.com/tuanGYMIT">Facebook.com/tuanGYMIT</a></span>
						</div>
					</div>
					
				  </div>
				</div>
<div class="panel-group shadowpanel">
	<div class="panel panel-default">
		<div class="panel-heading">
		 	Quảng Cáo
		</div>
		<div class="panel-body">
			<a href="http://hdonline.vn/phim-dac-vu-shield-5-14844.html#G3sTKq92ePPKlLs3.97"><img src="https://media.giphy.com/media/l396HXIKmmvhRUVVu/giphy.gif"></a>
		</div>
	</div>
</div>

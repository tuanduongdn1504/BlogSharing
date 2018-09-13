<?php
	require_once("../incfile/head.php"); 
?>
<body>
<script type="text/javascript">
function check(){
		$('#loadreg').html('Đang kiểm tra');
		setTimeout(function(){
			$('#check').load('check-reg.php',$('#form-reg').serializeArray()); //sắp xếp theo thứ tự tất cả Form và phần tử Form theo JSON
			$('#loadreg').html('Đăng kí');
		},2000);
    	
    }
</script>

<!--căn giữa nội dung của một trang bằng cách bọc nội dung của nó bên trong một .container-->
<div class="container-fluid" style="background-color: #364150 !important"> <!--Important: thay đổi thứ tự ưu tiên của CSS, gán important thì nó sẽ có mức ưu tiên cao nhất-->
	<div class="row"> <!--padding đó là độ lệch đối với cột đầu tiên và cột cuối cùng trong các hàng do giá trị margin âm trên các .row -->
		<div class="col-md-4"></div> <!--tạo ra một bố cục với 3 cột có độ rộng bằng nhau, mỗi cột có độ rộng =4 -->
		<div class="col-md-4">
			
		<center><a href="../source/index.php"><img src="..//img/logoweb.jpg" alt="Logo" title="Trang chủ" width="auto" style="padding-top: 30px" /></a></center> <!--alt text thay thế cho image-->
		
			<div class="content">
				<center><h3>Đăng ký thành viên</h3>
				    <p style="padding-top: 7px"><b><i>Nhập đủ các thông tin bên dưới:</i></b></p>
				    				 
				<form id="form-reg" method="post">
				    <div class="form-group">
					    <div class="input-group">
					      	<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
					      <input type="text" class="form-control" name="user" placeholder="Tên Đăng Nhập (*)"> <!--placeholder: Nhập liệu-> gợi ý biến mất-->
					    </div>
					</div>
					<div class="form-group">
					    <div class="input-group">
					      	<div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
					      <input type="email" class="form-control" name="email" placeholder="Email@example.com (*)">
					    </div>
					</div>
					<div class="form-group">
					    <div class="input-group">
					      	<div class="input-group-addon"><span class="glyphicon glyphicon-knight"></span></div>
					      <input type="password" class="form-control" name="pass" placeholder="Mật khẩu (*)">
					    </div>
					</div>
					<div class="form-group">
					    <div class="input-group">
					      	<div class="input-group-addon"><span class="glyphicon glyphicon-filter"></span></div>
					      <input type="password" class="form-control" name="re-pass" placeholder="Nhập Lại Mật khẩu (*)">
					    </div>
					</div><br><br>		
					  
				</form>
				<div id="check" style="padding-top: 0px"></div>
				<button onclick="check();" name="btn-reg" class="btn-reg"><div id="loadreg">Đăng kí</div> </button>
				
				<hr> <!--______________________________-->
				Bạn đã có tài khoản? <a href="login.php">Đăng nhập</a> ngay <br><br>
				<a href="../source/index.php"><i class="glyphicon glyphicon-circle-arrow-left"></i> Về trang chủ</a>
				</center>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
	
</div>
</body>
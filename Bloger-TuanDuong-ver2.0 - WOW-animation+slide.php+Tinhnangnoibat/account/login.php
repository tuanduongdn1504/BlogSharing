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
<?php
    require_once("../incfile/head.php"); 
?>
    <body>
        <script type="text/javascript">
        function check() {
            $('#loadlog').html('Đang kiểm tra');
            setTimeout(function() {
                $('#check').load('check-log.php', $('#form-log').serializeArray()); //sắp xếp theo thứ tự tất cả Form và phần tử Form theo JSON
                $('#loadlog').html('Đăng nhập');
            }, 2000);

        }
        </script>
        <!--căn giữa nội dung của một trang bằng cách bọc nội dung của nó bên trong một .container-->
        <div class="container-fluid" style="background-color: #364150 !important">
            <!--Important: thay đổi thứ tự ưu tiên của CSS, gán important thì nó sẽ có mức ưu tiên cao nhất-->
            <div class="row">
                <!--padding đó là độ lệch đối với cột đầu tiên và cột cuối cùng trong các hàng do giá trị margin âm trên các .row -->
                <!-- cột 1 -->
                <div class="col-md-4"></div>
                <!--tạo ra một bố cục với 3 cột có độ rộng bằng nhau, mỗi cột có độ rộng =4 -->
                <!-- cột 2 -->
                <div class="col-md-4">
                    <center><a href="../source/index.php"><img src="../img/logoweb.jpg" alt="Logo" title="Trang chủ" width="auto" style="padding-top: 40px" /></a></center>
                    <!--alt text thay thế cho image-->
                    <div class="content">
                        <center>
                            <h3>Đăng nhập</h3>
                            <p style="padding-top: 7px"><b><i>Nhập đủ các thông tin bên dưới:</i></b></p>
                            <form id="form-log" method="post">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                                        <input type="text" class="form-control" name="user" placeholder="Tên Đăng Nhập (*)">
                                        <!--placeholder: Nhập liệu-> gợi ý biến mất-->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-knight"></span></div>
                                        <input type="password" class="form-control" name="pass" placeholder="Mật khẩu (*)">
                                    </div>
                                </div>
                                <br>
                                <br>
                            </form>
                            <button onclick="check();" name="btn-reg" class="btn-reg">
                                <div id="loadlog">Đăng Nhập</div>
                            </button>
                            <div id="check" style="padding-top: 7px"></div>
                            <hr>
                            <!--______________________________-->
                            Bạn chưa có tài khoản? <a href="register.php">Đăng kí</a> ngay
                            <br>
                            <br>
                            <a href="../source/index.php"><i class="glyphicon glyphicon-circle-arrow-left"></i> Về trang chủ</a>
                        </center>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </body>
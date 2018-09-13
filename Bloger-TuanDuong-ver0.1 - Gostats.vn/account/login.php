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
    <html lang="en">

    <head>
        <title>Đăng nhập GYMIT - Dương Văn Tuấn</title>
        <link rel="icon" href="../gymbat.ico" type="image/x-icon">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--render + chạm phóng to-->
        <META NAME="description" CONTENT="Blog cá nhân Dương Văn Tuấn, chia sẽ thủ thuật, kinh nghiệm căn bằng cuộc sống GYM-IT. (...) ">
        <meta property="og:locale" content="vi_VN" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Chia sẻ về Gym và IT" />
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/custom.css">
        <script src="../jquery/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <!-- Google Analytics -->
        <script>
        /**
         * Creates a temporary global ga object and loads analytics.js.
         * Parameters o, a, and m are all used internally. They could have been
         * declared using 'var', instead they are declared as parameters to save
         * 4 bytes ('var ').
         *
         * @param {Window}        i The global context object.
         * @param {HTMLDocument}  s The DOM document object.
         * @param {string}        o Must be 'script'.
         * @param {string}        g Protocol relative URL of the analytics.js script.
         * @param {string}        r Global name of analytics object. Defaults to 'ga'.
         * @param {HTMLElement}   a Async script tag.
         * @param {HTMLElement}   m First script tag in document.
         */
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; // Acts as a pointer to support renaming.
            // Creates an initial ga() function.
            // The queued commands will be executed once analytics.js loads.
            i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                },
                // Sets the time (as an integer) this tag was executed.
                // Used for timing hits.
                i[r].l = 1 * new Date();
            // Insert the script tag asynchronously.
            // Inserts above current tag to prevent blocking in addition to using the
            // async attribute.
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        // Creates a default tracker with automatic cookie domain configuration.
        ga('create', 'UA-84646361-1', 'auto');
        // Sends a pageview hit from the tracker just created.
        ga('send', 'pageview');
        </script>
        <!-- End Google Analytics -->
    </head>

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
                    <center><a href="../"><img src="../img/logoweb.jpg" alt="Logo" title="Logoweb" width="auto" style="padding-top: 80px" /></a></center>
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
                            <a href="../"><i class="glyphicon glyphicon-circle-arrow-left"></i> Về trang chủ</a>
                        </center>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </body>
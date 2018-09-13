<!DOCTYPE html>
<html lang="en">
<head>
  <title>GYMIT - Dương Văn Tuấn, Blog cá nhân</title>
  <link rel="icon" href="../source/gymbat.ico" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!--render + chạm phóng to-->
  <META NAME="description" CONTENT="Blog cá nhân Dương Văn Tuấn, chia sẽ thủ thuật, kinh nghiệm căn bằng cuộc sống GYM-IT. (...) ">
  <meta property="og:locale" content="vi_VN" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Chia sẻ về Gym và IT" />
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/custom.css">
  <script src="../jquery/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <!-- Google Analytics -->
<?php require_once("../incfile/ga.php"); ?>

  <script>
    new WOW().init();
  </script>
  <script type='text/javascript'>
    $(function() {
     $(window).scroll(function() {
     if ($(this).scrollTop() != 0) {
     $('#bttop').fadeIn();
     } else {
     $('#bttop').fadeOut();
     }
     });
     $('#bttop').click(function() {
     $('body,html').animate({
     scrollTop: 0
     }, 800);
     });
    });
    </script>
</head>
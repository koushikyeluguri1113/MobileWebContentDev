<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Om Bharath Inds - Transport</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="buttonstyle.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OnePage - v4.8.1
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
  <!-- ======= Header ======= -->
  <?php include 'header.php' ?>
<?php
 include 'dbconnect.php';
 $conn=mysqli_connect($server,$username,$password,$dbname);

?>
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
      <div class="section-title">
          <h2>Transportation Booking</h2>
          
        </div>
      <div class="col-lg-12 mt-12 mt-lg-0">

<form  method="post" onsubmit="return login()" action="b.php" >
  <div class="row">
    <div class="col-md-6 form-group">
      <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
    </div>
    
</div><br>
    <div class="col-md-6 form-group">
      <input type="text" class="form-control" name="rno" id="rno" placeholder="Receipt no" required>
    </div>
  </div><br>
  <div class="col-md-6 form-group">
    <input type="number" class="form-control" name="cno" id="cno" placeholder="Contact no" required>
  </div><br>
  <div class="form-group mt-3">
    <textarea class="form-control" name="addr" rows="5" placeholder="Enter Address" required></textarea>
  </div>
<br>
  <center><input type="submit" class="button-87" name="submit" value="BOOK"></center>
</form>


</div>

</div>
</div>



</section>
  <?php include 'footer.php'?>
 <!-- End Footer -->

 <div id="preloader"></div>
 <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 <!-- Vendor JS Files -->
 <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
 <script src="assets/vendor/aos/aos.js"></script>
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
 <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
 <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
 <!--<script src="assets/vendor/php-email-form/validate.js"></script>-->


 <!-- Template Main JS File -->
 <script src="assets/js/main.js"></script>

 </body>
</html>
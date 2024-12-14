 <?php
  include 'dbconnect.php';
  $conn=mysqli_connect($server,$username,$password,$dbname);
 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Om Bharath Inds- Products</title>
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
<?php
 include 'dbconnect.php';
 $conn=mysqli_connect($server,$username,$password,$dbname);
 $sqlview="select * from products";
 $res=mysqli_query($conn,$sqlview);
  $n=mysqli_num_rows($res);
 
   ?>

  <!-- ======= Header ======= -->
  <?php include 'header.php' ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  

  
  <!-- End Hero -->

  <main id="main">

 <!-- ======= Portfolio Section ======= -->
 <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Products</h2>
          <!--<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>-->
        </div>

        <!--<div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active"></li>
            </ul>
          </div>
        </div>-->

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="300">

          
          <?php
while($row= mysqli_fetch_array($res))
{
  echo '<div class="col-lg-4 col-md-6 portfolio-item filter-app">';
 echo '<img src='.$row[2].' width="400px" height="400px">';
 echo '<h2>'.$row[1].'</h2><h4>Rs:'.$row[3].'</h4><h4>'.$row[4].'</h4>';
 echo '</div>';
}


?>
           


          <!--<div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <tr><td>'.$row[1].'</td><td>
              <td>'.$row[3].'</td><td>'.$row[4].'</td></tr>
            <center><h2 > Window Grills </h2><br></center>
              <img src="product_images/g1.jpg" class="img-fluid" alt="">
              
            
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            
            <center><h2 > Disc Plough </h2><br></center>
              <img src="product_images/plough.png" class="img-fluid" alt="">
           
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            
            <center><h2 > Tanker Trailer </h2><br></center>
              <img src="product_images/tanker.webp" class="img-fluid" alt="">
              
           
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            
            <center><h2 > Grill Gate </h2><br></center>
              <img src="product_images/g2.jpg" class="img-fluid" alt="">
              
            
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
           
            <center><h2 > Maize Sheller </h2><br></center>
              <img src="product_images/maizesheller.jpg" class="img-fluid" alt="">
             
            
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            
            <center><h2 > Hydralic Tipping Trailer </h2><br></center>
              <img src="product_images/tractor.jpg" class="img-fluid" alt="">
          
          
          </div>

        

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
           
            <center><h2 > Iron Roofing Sheets </h2><br></center>
              <img src="product_images/g3.jpg" class="img-fluid" alt="">
              
            
          </div>

        </div>-->

      </div>
    </section>
    <!-- End Portfolio Section -->
    </main><!-- End #main -->

<!-- ======= Footer ======= -->
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
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>

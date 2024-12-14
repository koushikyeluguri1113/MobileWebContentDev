<?php 

include "./templates/top.php"; 

?>
 
<?php include "./templates/navbar.php"; ?>

<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

      <h2><center>Customer Feedbacks</center></h2>
      <?php
 include 'dbconnect.php';
 $conn=mysqli_connect($server,$username,$password,$dbname);
 $sqlview="select * from feedback";
 $res=mysqli_query($conn,$sqlview);
  $n=mysqli_num_rows($res);
 
   ?>
      
      <div class="table-responsive">
        <table class="table table-striped table-bordered" id="dtBasicExample">
          <thead>

            <tr><th>Name</th><th>Email</th><th>Receipt NO</th><th>Feedback</th></tr>
          </thead>
<?php
while($row= mysqli_fetch_array($res))
{
 echo '<tr><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td></tr>';
}
echo '</table>';
       
?>
    </main>
  </div>
</div>

<?php include "./templates/footer.php"; ?>

<script type="text/javascript" src="./js/admin.js"></script>

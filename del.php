<?php
include 'dbconnect.php';
$conn=mysqli_connect($server,$username,$password,$dbname);
echo $a=$_GET['sno'];
$sql="delete from products where pro_id=$a";
if(mysqli_query($conn,$sql)){
echo '<script type="text/JavaScript">
    window.alert("deleted succesfully");
    window.location.href="products.php";</script>';
}
header('location:products.php');

?>
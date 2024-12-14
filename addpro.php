<html>
  <head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"></head>
<?php

include 'dbconnect.php';
$conn=mysqli_connect($server,$username,$password,$dbname);


echo $a=$_POST['product_name'];
echo $b=$_POST['product_price'];
echo $c=$_POST['product_des'];


$sql="SELECT * FROM products";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
$count=$count+1;

/*
$filename = $_FILES["product_image"]["name"];
    $tempname = $_FILES["product_image"]["tmp_name"];
    $folder = "product_images/" . $filename;

$conn=mysqli_connect($server,$username,$password,$dbname);
$sqlview="select * from products where name='$a'";
$res=mysqli_query($conn,$sqlview);
$n=mysqli_num_rows($res);
if($n==0){
	$sqlquery="insert into products values (0,'$a','$folder','$b','$c')";
	if(mysqli_query($conn,$sqlquery))	
    {	
	echo "inserted";

  if(move_uploaded_file($tempname, $folder)) {
    echo "The file ". basename( $_FILES["product_image"]["name"])." has been uploaded.";
   
    } else {
    echo "Sorry, there was an error uploading your file.";
    echo $_FILES["product_image"]["error"];
    }
	}
}
else*/
//echo "already exists";


$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "./product_images/" . $filename;

$db = mysqli_connect($server,$username,$password,$dbname);

// Get all the submitted data from the form
$sql = "insert into products values (0,'$a','$folder','$b','$c')";

// Execute query
mysqli_query($db, $sql);

// Now let's move the uploaded image into the folder: image
if (move_uploaded_file($tempname, $folder)) {
    echo "<h3>  Image uploaded successfully!</h3>";
} else {
    echo "<h3>  Failed to upload image!</h3>";
}

  

?>
</html>
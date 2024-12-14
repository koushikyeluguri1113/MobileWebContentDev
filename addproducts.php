
<html>
  <head>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"></head>
 <?php
 include 'dbconnect.php';
 $conn=mysqli_connect($server,$username,$password,$dbname);
?>
<form method ="POST" action="addpro.php" enctype="multipart/form-data">
     
		        		<label>Product Name</label>
		        		<input type="text" name="name" class="form-control" placeholder="Enter Product Name">
		  

        		
		        		<label>Product Price</label>
		        		<input type="number" name="price" class="form-control" placeholder="Enter Product Price">
		     

            
		        		<label>Product Description</label>
		        		<input type="text" name="des" class="form-control" placeholder="Enter Product Description">
		 
        
		        		<label>Product Image <small>(format: jpg, jpeg, png)</small></label>
		        		<input type="file" name="logo" id="" class="form-control">
	
        	
              <input type="submit" name="submit1" class="btn btn-primary add-product" value="add">
        		
        	
        	
        </form>
        </html>

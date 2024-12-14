<?php
 include 'dbconnect.php';
 $conn=mysqli_connect($server,$username,$password,$dbname);

    $a = $_POST['name'];
    $b = $_POST['email'];
    $c = $_POST['rno'];
    $d = $_POST['msg'];
    $sql="select * from feedback where rno='$c'";
    $res=mysqli_query($conn,$sql);
    $n1=mysqli_num_rows($res);
    if($n1==0)
    {
        $sql1="insert into feedback values(0,'$a','$b','$c','$d')";
        if(mysqli_query($conn,$sql1))
        {
            echo "<script type='text/javascript'>alert('feedback saved');window.location='contactus.php';</script>";
        }}
    else
    echo "<script type='text/javascript'>alert('feedback already provided');window.location='contactus.php';</script>";


?>
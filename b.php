<?php
 include 'dbconnect.php';
 $conn=mysqli_connect($server,$username,$password,$dbname);

    $a = $_POST['name'];
    $b = $_POST['rno'];
    $c = $_POST['addr'];
    $d = $_POST['cno'];
    $sql="select * from tbook where rno='$b'";
    $res=mysqli_query($conn,$sql);
    $n1=mysqli_num_rows($res);
    if($n1==0)
    {
        $sql1="insert into tbook values(0,'$a','$b','$c','$d')";
        if(mysqli_query($conn,$sql1))
        {
            echo "<script type='text/javascript'>alert('Booked');window.location='booktrans.php';</script>";
        }
    }
    else
    echo "<script type='text/javascript'>alert('already exist with same Receipt no');window.location='servicehome.php';</script>";


?>
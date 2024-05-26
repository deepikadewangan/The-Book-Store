<?php
$a = $_GET['t0'];
$b = $_GET['t1'];
$c = $_GET['t2'];


$con = mysqli_connect('localhost','root','R!y@2','bootstrap');
$r = "insert into adminsignup values('$a','$b','$c')";
$rs = mysqli_query($con,$r);

if($rs)
{
    echo"<script>window.location='book1.php'</script>";
}

?>
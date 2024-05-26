<?php
session_start();
$x=$_SESSION['u'];
$r = $_GET['$x'];
$n = $_GET['n'];
$m = $_GET['m'];

$con = mysqli_connect('localhost','root','R!y@2','bootstrap');
$a = "update edit set customer_name = '$n',Description = '$m' where customer_name = $r";
$rs = mysqli_query($con,$a);

if($rs)
{
    echo"updated";
}
else
{
 echo"not updated";
}

?>
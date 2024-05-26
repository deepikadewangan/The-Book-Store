<?php

$a = $_GET['t1'];
$b = $_GET['t2'];



$con = mysqli_connect('localhost','root','R!y@2','bootstrap');
$r = "select * from adminsignup";
$rs = mysqli_query($con,$r);
$c = 0;

while($row = mysqli_fetch_array($rs))
{
    if($row['Email']==$a && $row['Password']==$b)
    {
        $c = $c +1;
    }
}

if($c==0)
{
    echo"Wrong Password";
}
else
{
    session_start();
    $_SESSION['u'] = $a;
    if(isset($_SESSION['u'])==true)
    {
        echo"<script>window.location='book1.php'</script>";
    }
    else
    {
        echo"<script>window.location='book_addcart.php'</script>";
    }

}
?>
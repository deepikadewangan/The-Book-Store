<?php
$a = $_GET['t1'];
$b = $_GET['t2'];



$con = mysqli_connect('localhost','root','R!y@2','bootstrap');
$r = "select * from admin";
$rs = mysqli_query($con,$r);
$c = 0;
while($row = mysqli_fetch_array($rs))
{
    if($row['Username']==$a && $row['Password']==$b)
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
    echo"<script>window.location='book_edit_delete.php?'</script>";
}
?>
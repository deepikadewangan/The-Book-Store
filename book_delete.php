<?php
 
$c = $_GET['id'];

$con = mysqli_connect('localhost','root','R!y@2','bootstrap');
echo $a = "delete from edit  where customer_name = '$c'";
$rs = mysqli_query($con,$a);

if($rs)
{
   echo"<script>window.location='book_edit_delete.php?'</script>";
}

else{
    echo"Error";
}

?>
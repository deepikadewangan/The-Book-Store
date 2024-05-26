<?php
 session_start();
 $_SESSION['m']=$_GET['msg'];
 if(isset($_SESSION['u'])==true)
 {
 echo"<script>window.location='book_addcart.php'</script>";
 }
 else
 {
  echo"<script>window.location='book_cartlogin.php'</script>";  
 }

 
 ?>

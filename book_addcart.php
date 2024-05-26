<?php
session_start();
$x=$_SESSION['u'];
echo"
<html>
<head>
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap' rel='stylesheet'>

<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<style>
body
{
    margin:0px;
}
.f
{
    background-color:rgb(250, 243, 237);
    width:935px;
    height:230px;
    font-size:20px;
    padding-left:600px;
    padding-top:100px;
}
.bungee-spice-regular {
    font-family: 'Bungee Spice', sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size:50px;
  }

  link {
    background-color:  rgb(156, 97, 19);
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
  }
  
  link:hover, a:active {
    background-color: red;
  }
  
</style>
</head>
<body>
<div class='f'><h1 class='bungee-spice-regular'>Request sent</h1>

<br><a href='book_logout.php'><input type = 'Button' class='link' value = 'Log out'></a>
</div>
</body>
</html>
";
echo"";


$x=$_SESSION['u'];
$n = $_SESSION['bid'];
$m = $_SESSION['m'];

$con = mysqli_connect('localhost','root','R!y@2','bootstrap');
$a = "insert into edit values ( '$x','$m','$n')";
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
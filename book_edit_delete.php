<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap' rel='stylesheet'>

<style>
  .bungee-spice-regular {
    font-family: 'Bungee Spice', sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size:50px;
  }

  .del
  {
    text-decoration:none;
    
    
  }
</style>
</head>

<body>

<?php

$con = mysqli_connect('localhost','root','R!y@2','bootstrap');
$a = "select * from edit";
$rs = mysqli_query($con,$a);

echo"<h1><b class='bungee-spice-regular'>Requests</b></h1>
<div class='container mt-3'>
               
    <table class='table'>
      <thead>
        <tr>
          <th>Customer Name</th>
          <th>Message</th>
          <th>Book Name</th>
          <th>Action</th>
    
        </tr>
      </thead>
 

";

while($row = mysqli_fetch_array($rs))
{
    
        
    echo"
    
      
        
      <tbody>
      <tr>
        <td>$row[customer_name]</td>
        <td>$row[Description]</td>
        <td>$row[Book_Name]</td>
        <td><a href = 'book_delete.php?id=$row[customer_name]'  class='del'> delete </a></td>
      </tr>";


   
        
}

?>

</body>

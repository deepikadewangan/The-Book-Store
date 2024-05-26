<html>
    <head>
        
        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

        <style>
            .center {
               display: block;
               margin-left: auto;
               margin-right: auto;
               margin-top: 130px;
               width: 45%;
               height: 400px;
              }

            .font
            {
                font-size: 30px;
                margin-top: 20px;
                margin-left: 650px;

            }

            .stl
            {
                font-style: italic;
                font-size: larger;
                margin-top: 100px;
                
                
            }
            .content
            {
                width:70%;
                margin-left: 200px;
            }
            .all
            {

            }

            .left
            {
                background-color: rgb(250, 243, 237);
                width:30%;
                float:left;
                height: 690px;
            }

            .right
            {
                background-color: rgb(250, 243, 237);
                width:70%;
                float:left;
                height: 690px;
            }

            

.martel-extrabold {
  font-family: "Martel", serif;
  font-weight: 800;
  font-style: normal;
  margin-top: 100px;
  font-size: 40px;

}

.ubuntu-bold {
  font-family: "Ubuntu", sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size: 22px;
}

.table
{
    margin-top : 100px;
}

.navbar {
  width: 100%;
  background-color: rgb(207, 152, 104);
  overflow: auto;
}

/* Navbar links */
.navbar a {
  float: left;
  text-align: center;
  padding: 5px;
  color: black;
  text-decoration: none;
  font-size: 17px;
}

/* Navbar links on mouse-over */
.navbar a:hover {
  background-color: rgb(101, 55, 14);
}

/* Current/active navbar link */
.active {
  background-color: #04AA6D;
}

/* Add responsiveness - will automatically display the navbar vertically instead of horizontally on screens less than 500 pixels */
@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}

        </style>
        
    </head>

    <body>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="navbar">
  <a class="" href="book1.php" style="margin-left:500px"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="#" style="margin-left:20px"><i class="fa fa-fw fa-search"></i> Search</a>
  <a href="book_owner.php" style="margin-left:20px"><i class="fa fa-fw fa-user"></i> Admin</a>
  <a href="book_buyer.php" style="margin-right:500px"><i class="fa fa-fw fa-user"></i> Login</a>
</div>
    <form action = "book_buyer22.php">    

    <?php

$b=$_GET['t'];

session_start();
$_SESSION['item_id']=$b;

$con = mysqli_connect('localhost','root','R!y@2','bootstrap');
$r = "select * from bookshop2 where book_id=$b";
$rs = mysqli_query($con,$r);
$i=1;
while($row = mysqli_fetch_array($rs))
{

    $_SESSION['bid']=$row['book_name'];

 echo"

 <div class='left'>
 <img src='$row[book_image]' alt='Paris' class='center'>
 
 </div>

 <div class='right'>

 <div>
 <h1 class='martel-extrabold'> $row[book_name] </h1>
 <span style='font-size:25px;'> By : $row[author_name] </span>
 </div>

 <div>

 <table style='margin-top:70px;' >

 <tr> <td class='ubuntu-bold' > Category : </td> <td style='font-size:18px;'> $row[category] </td> </tr>
 <tr> <td></td> </tr>
 <tr> <td></td> </tr>
 <tr> <td class='ubuntu-bold'> Language : </td> <td style='font-size:18px;'> $row[language] </td> </tr>
 <tr> <td></td> </tr>
 <tr> <td></td> </tr>
 <tr> <td class='ubuntu-bold'> About : </td> <td style='font-size:18px;'> $row[desp] </td> </tr>
 <tr> <td></td> </tr>
 <tr> <td></td> </tr>
 <tr> <td class='ubuntu-bold'> M.R.P : </td> <td style='font-size:18px;'> $row[price]/- </td> </tr>
 <tr> <td></td> </tr><tr> <td></td> </tr>
 <tr> <td></td> </tr>
 <tr><td><b class='ubuntu-bold'>Text message :</b></td>
<td><br><input = 'textbox' placeholder = 'Write in 250 words' name='msg' id = 'rid' style = 'width:100%; height: 100px;'></td>    
<td><input type = 'submit' value='Send' class='btn btn-primary' style = 'margin-left:20px; margin-right:10px;'></td>
</tr>

 </table>

 </div>
 
 </div>

    <div class='all'>

 <div class='content'>
 
 </div>
 </div>

 ";
 $i++;
}

?>
</form>
    </body>
</html>    
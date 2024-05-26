<html>
    <head>
         <!-- Latest compiled and minified CSS -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

         <!-- Latest compiled JavaScript -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

         <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Licorice&family=Shadows+Into+Light&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

         <style>
            
          body
          {
            margin: 0px;
          }

            .top
            {
                width: 1470px;
                height: 130px;
                background-color: rgb(232, 208, 178);
            }

            .logo
            {
                width: 130px;
                height: 130px;    
            }

            .user
            {
                margin-left: 1000px;
            }

            * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  margin-top: 50px;
  
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 20s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the "active" element to highlight the current page */
.topnav a.active {
  background-color: #2196F3;
  color: white;
}

/* Style the search box inside the navigation bar */
.topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
}

/* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;
  }
}

/* Three columns side by side */
.column {
  float: left;
  width: 15.3%;
  margin-bottom: 16px;
  padding: 40 35px;
  
}

/* Display the columns below each other instead of side by side on small screens */
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

/* Add some shadows to create a card effect */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);

}

/* Some left and right padding inside the container */
.container {
  padding: 0 16px;
}

/* Clear floats */
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

div.gallery {
  border: 1px solid #ccc;
  width: 200px;
  margin-left: 70px;
  margin-top: 40px;
  float: left;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

.button {
  background-color:rgb(13, 68, 209);
  border: none;
  color: white;
  padding: 10px 20px;
  margin-bottom: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin-left: 60px;
  cursor: pointer;
  border-radius: 10px;
  width: 70px;
}
.mid
{
  background-color:rgb(250, 243, 237);
  width: 100%;
  height:2300px;
  padding:10px;
}

/* Style the navigation bar */
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
  background-color: rgb(101, 55, 14) ;
}

/* Current/active navbar link */
.active {
  background-color:rgb(101, 55, 14) ;
}

/* Add responsiveness - will automatically display the navbar vertically instead of horizontally on screens less than 500 pixels */
@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}

.licorice-regular {
  font-family: "Licorice", cursive;
  font-weight: 700;
  font-style: normal;
  font-size: 70px;
}



        </style>
         
    </head>
    <body>
    <div class="top">
            <img src="https://th.bing.com/th/id/OIP.rCI6XwCT9T_oNnMSsGt7rQHaH5?w=164&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" class="logo" style="float: left;">
            <h1 class="licorice-regular" style="padding-top: 40px; padding-left: 500px; float: left;"><b>The Book Shop</b></h1>
            
        </div>

        <!-- Load an icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="navbar">
  <a class="" href="book1.php" style="margin-left:500px"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="#" style="margin-left:20px"><i class="fa fa-fw fa-search"></i> Search</a>
  <a href="book_owner.php" style="margin-left:20px"><i class="fa fa-fw fa-user"></i> Admin</a>
  <a href="book_buyer.php" style="margin-right:500px"><i class="fa fa-fw fa-user"></i> Login</a>
</div>

    <div class="mid" >    

        <div>
            <!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="https://www.wikihow.com/images/thumb/6/6e/Novel-vs-Book-Step-2.jpg/v4-460px-Novel-vs-Book-Step-2.jpg.webp" style="width:100%; height: 400px;">
      <div class="text">The Great Gatsby</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="https://rukminim2.flixcart.com/image/850/1000/l3khsi80/regionalbooks/b/l/m/best-romantic-novels-combo-two-bestselling-novels-from-colleen-original-imagenrtuvfaq9tm.jpeg?q=20&crop=false" style="width:100%; height: 400px;">
      <div class="text">It Ends With Us</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="https://img.etimg.com/photo/msid-99606042,imgsize-552164/Midnight'sChildren.jpg" style="width:100%; height: 400px;">
      <div class="text">Midnight Children</div>
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
        </div>

        <script>
            let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
        </script>

        <div>
            <h3 style="margin-left: 50px; margin-top: 50px;">Action & Adventure</h3>
        </div>

    <table><tr>
      
        <?php
        $con = mysqli_connect('localhost','root','R!y@2','bootstrap');
        $r = "select * from bookshop";
        $rs = mysqli_query($con,$r);
    $i=1;
        while($row = mysqli_fetch_array($rs))
        {
            echo"<td>
            <div class='responsive'>
            <div class='gallery' style = 'float:left'>
              <a target='_blank' href='img_5terre.jpg'>
              <img src='$row[book_image]' alt='Cinque Terre' style='width: 200px; height: 300px;'>
              </a>
              <div class='desc'>$row[book_name]</div>
              <a href='book.php?id=$row[book_id]'class='btn btn-primary' style = 'margin-left:55px; margin-bottom:20px;'>Buy Now</a>
            </div>
            </div><td>

            ";

            if($i%5==0)
            {
                echo "</tr><tr>";
            }
            $i++;          
        }
        ?>
        </tr></table>

        <div>
          <h3 style="margin-left: 50px; margin-top: 50px;">Romantic</h3>
      </div>

      <table><tr>
        <?php
        $con = mysqli_connect('localhost','root','R!y@2','bootstrap');
        $r = "select * from bookshop2";
        $rs = mysqli_query($con,$r);
    $i=1;
        while($row = mysqli_fetch_array($rs))
        {
            echo"<td>
            <div class='responsive'>
            <div class='gallery' style = 'float:left'>
              <a target='_blank' href='img_5terre.jpg'>
              <img src='$row[book_image]' alt='Cinque Terre' style='width: 200px; height: 300px;'>
              </a>
              <div class='desc'>$row[book_name]</div>
              <a href='book2.php?t=$row[book_id]'class='btn btn-primary' style = 'margin-left:55px; margin-bottom:20px;'>Buy Now</a>
            </div>
            </div><td>

            ";

            if($i%5==0)
            {
                echo "</tr><tr>";
            }
            $i++;          
        }
        ?>
        </tr></table>

        <div>
        <h3 style="margin-left: 50px; margin-top: 50px;">Thriller</h3>
    </div>

    <table><tr>
        <?php
        $con = mysqli_connect('localhost','root','R!y@2','bootstrap');
        $r = "select * from bookshop3";
        $rs = mysqli_query($con,$r);
    $i=1;
        while($row = mysqli_fetch_array($rs))
        {
            echo"<td>
            <div class='responsive'>
            <div class='gallery' style = 'float:left'>
              <a target='_blank' href='img_5terre.jpg'>
              <img src='$row[book_image]' alt='Cinque Terre' style='width: 200px; height: 300px;'>
              </a>
              <div class='desc'>$row[book_name]</div>
              <a href='book3.php?u=$row[book_id]'class='btn btn-primary' style = 'margin-left:55px; margin-bottom:20px;'>Buy Now</a>
            </div>
            </div><td>

            ";

            if($i%5==0)
            {
                echo "</tr><tr>";
            }
            $i++;          
        }
        ?>
        </tr></table>
      </div>
        
    </body>
</html>
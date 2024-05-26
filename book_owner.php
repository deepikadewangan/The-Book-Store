<html>
    <head>
        <style>

          body{

            margin:0px;

          }

            /* Bordered form */
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 10%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
  width:50%;
  padding-left: 400px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
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
  padding: 10px;
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

    <form action="book_owner_login.php" >
  <div class="imgcontainer">
    <img src="https://th.bing.com/th/id/OIP.lkVN1WDlcV2jQCq-9LT7-wHaIJ?w=175&h=199&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="t1" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="t2" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
    </body>
</html>
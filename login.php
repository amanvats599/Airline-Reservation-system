<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="stylelog.css">
	<link rel="stylesheet" href="webpage.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="Home Page.css"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->

    <title>Login</title>
    <style>
  
    body 
    {
	 margin: 0;
	 padding: 0;
	 font-family: 'Poppins', sans-serif;
    }

   .contact-form 
   {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 400px;
    height: 410px;
    padding: 40px 20px;
	background: rgba(0, 0, 0, 0.5);
    }

    .contact-form h2 
	{
	margin: 0;
	padding: 0 0 20px;
	color: #fff;
	text-align: center;
	text-transform: uppercase;
    }

.contact-form p {
	margin: 0;
	padding: 0;
	font-weight: bold;
	color: #fff;
}
.contact-form input {
	width: 100%;
	margin-bottom: 20px;
}
.contact-form input[type=email], .contact-form input[type=password] {
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
}

.contact-form input[type=submit] {
	height: 30px;
	color: #fff;
	font-size: 15px;
	background: red;
	cursor: pointer;
	border-radius: 25px;
	border: none;
	outline: none;
	margin-top: 8%;
}

/* .avatar {
	position: absolute;
	border-radius: 50%;
	overflow: hidden;
	top: calc(-80px/2);
	left: 190px;
} */

body:before {
	content: '';
	position: fixed;
	width: 100vw;
	height: 100vh;
	background-position: center center;
	background-repeat: no-repeat;
	background-attachment: fixed;
	-webkit-background-size: cover;
	background-size: cover;
	-webkit-filter: blur(10px);
	-moz-filter: blur(10px);
	filter: blur(10px);
}

.contact-form a {
	color: #fff;
	font-size: 14px;
	font-weight: bold;
	text-decoration: none;
}

input[type=checkbox] {
	width: 20%;
}

</style>


<?php
//    if($login){
//    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
//        <strong>Success!</strong> You are logged in
//        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//            <span aria-hidden="true">&times</span>
//        </button>
//     </div> ';
//     }
//     if($showError){
//     echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
//         <strong>Error!</strong> '. $showError.'
//         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//             <span aria-hidden="true">&times</span>
//         </button>
//     </div> ';
//     }
    ?>  

  </style>
  </head>
  <body>

    <!-- <div class="container my-4">
    <header>
    <nav class="navbar">
        <ul>
            <li><a href="Home Page.html">Home</a></li>
            <li><a href="Home Page.html">Login</a></li>
            <li><a href="Home Page.html">Sign Up</a></li>
            <li><a href="Home Page.html">About Us</a></li>
            <li><a href="Home Page.html">Helpline Centre</a></li>    
        </ul>
    </nav>
</header> -->
   <!-- <div class="login">
     <h1 class="text-center">Login to our website</h1>
     <form action="/LAB6/login.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">   
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary"  a href="suclog.php">Login</button>
     </form>
     </div>
    </div>  -->
    <!-- src="https://i.postimg.cc/zDyt7KCv/a1.jpg" -->


<div class="w3-bar w3-white w3-large">
  <a href="webpage.html" class="w3-bar-item w3-button w3-red w3-mobile head"><i class=" w3-margin-right"></i>Air India</a>
  <a href="webpage.html" class="w3-bar-item w3-button w3-mobile">Home</a>
  <a href="webpage.html#flights" class="w3-bar-item w3-button w3-mobile">Flights</a>
  <a href="#" class="w3-bar-item w3-button w3-mobile">Login</a>
  <a href="signup.php" class="w3-bar-item w3-button w3-mobile">Signup</a>
  <a href="webpage.html#about" class="w3-bar-item w3-button w3-mobile">About Us</a>
  <a href="webpage.html#contact" class="w3-bar-item w3-button w3-mobile">Contact Us</a>
  <a href="Traveller_details.html" class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile" >Book Now</a>
</div>


<div id="info">
    <div class="contact-form">
		<h2>Login to Our Website</h2>
		<form action="Webpage.html" target="_blank">
			<p>Username</p><input  placeholder="" type="Email">
			<p>Password</p><input placeholder="" type="password"> 
            <input type="submit" value="Login" onclick="login()"  >
		</form>
	</div>
</div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="mini.js"></script>
  </body>
</html>

<?php

 include 'partials/_dbconnect.php';

?>

<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    }
    else{
        $showError = "Passwords do not match";
    }
}
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="webpage.css">
	<link rel="stylesheet" href="stylelog.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>SignUp</title>
    <style>

 body {
	margin: 0;
	padding: 0;
	font-family: 'Poppins', sans-serif;
  }

.contact-form {
	margin-top: 50px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 400px;
    height: 510px;
    padding: 40px 20px;
	background: rgba(0, 0, 0, 0.5);
}

.contact-form h2 {
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
	/* background-image: url('aeroplane.jpg'); */
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
	width: 15%;
}

    
</style>
  </head>
  <body>
 
  <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times</span>

        </button>
    </div> ';
    }
    ?>

<div class="w3-bar w3-white w3-large">
  <a href="#" class="w3-bar-item w3-button w3-red w3-mobile"><i class=" w3-margin-right"></i>Air India</a>
  <a href="Home Page.html" class="w3-bar-item w3-button w3-mobile">Home</a>
  <a href="webpage.html#flights" class="w3-bar-item w3-button w3-mobile">Flights</a>
  <a href="login.php" class="w3-bar-item w3-button w3-mobile">Login</a>
  <a href="#" class="w3-bar-item w3-button w3-mobile">Signup</a>
  <a href="webpage.html#about" class="w3-bar-item w3-button w3-mobile">About Us</a>
  <a href="webpage.html#contact" class="w3-bar-item w3-button w3-mobile">Contact Us</a>
  <a href="Traveller_details.html" class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile" >Book Now</a>
</div>



<div class="contact-form">
		<h2>Sign up to Our Website</h2>
		<form action="/AP Mini Project/signup.php" method="post">
			<p>Username</p><input  placeholder="" type="Email" name='username'>
			<p>Password</p><input placeholder="" type="password" name='password'>
            <p>Confirm Password</p><input placeholder="" type="password" name='cpassword'>  
            <input type="submit" value="Sign up">
			
		</form>
	</div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



  </body>
</html>

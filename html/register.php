<?php
session_start();

    include("connection.php");
    include("function.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $first_name = $_POST['firstName'];
        $last_name = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);

        if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($password)){
            //save to db
            $user_id = random_num(20);
            $query = "insert into users (user_id,first_name,last_name,email,password) values ('$user_id','$first_name','$last_name','$email','$password')";

            mysqli_query($con, $query);
            header("Location: login.php");
            die;
        }else{
            echo "Please enter valid information";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/loginstyle.css">
    <title>login</title>
</head>
<body>
    
<div class="container" id="container">
<div class="form-container sign-up-container">
		<form method="POST">
			<h1>Sign in</h1>
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
            <input type="text" name="check_sign_in" value="true" id="flag" hidden>
			<a href="login.php">User Login</a>
			<button type="submit">Sign In</button>	
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="POST">
			<h1>Create Account</h1>
			<input type="text" name="firstName" placeholder="FirstName" required/>
			<input type="text" name="lastName" placeholder="LastName" required/>
			<input type="email" name="email" placeholder="Email" required/>
			<input type="password" name="password" placeholder="Password" required/>
			<input type="password" name="confirmPassword" placeholder="Confirm Password" required/>
			<button type="submit" name = "register">Sign Up</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Admin Login</h1>
				<p>Enter The Details Given To You To Gain Access</p> 
				<!-- <button class="ghost" id="signUp" >Sign Up</button> -->	
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn" onclick="location.href='login.php'">Sign In</button>
			</div>
		</div>
	</div>
</div>
<script src="../js/mainlogin.js"></script>
</body>
</html>
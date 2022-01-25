<?php
session_start();

    include("connection.php");
    include("function.php");

    //Login 
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);

        if (isset($email) && isset($password)){
            if(!empty($email) && !empty($password)){
                //read from db
                $query = "select * from users where email = '$email' limit 1";

                $result = mysqli_query($con, $query);

                if($result){
                    if($result && mysqli_num_rows($result) > 0){
                        $user_data = mysqli_fetch_assoc($result);
                        
                        if($user_data['password'] === $password){
                            $_SESSION['user_id'] = $user_data['user_id'];
                            header("Location: index.php");
                            die;
                        }
                    }
                }
            }echo "Please enter valid information";
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
			<h1>Create Account</h1>
			<input type="text" name="firstName" placeholder="FirstName" />
			<input type="text" name="lastName" placeholder="LastName" />
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<input type="password" name="confirmPassword" placeholder="Confirm Password" />
			<button type="submit" name = "submit" value="New User" >Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="POST">
			<h1>Sign in</h1>
			<input type="email" name="email" placeholder="Email" required/>
			<input type="password" name="password" placeholder="Password" required/>
			<a href="admin.php">Admin Login</a>
			<button type="submit" name = "submit" value="Sign In" id="but">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Already have an account?</h1>
				<p>If you have already created an E-Census Account, you may sign in.</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Don't have an account?</h1>
				<p>Register for your E-Census Account to access your survey.</p>
				<button class="ghost" onclick="location.href='register.php'" id="signUp" >Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script src="../js/mainlogin.js"></script>
</body>
</html>
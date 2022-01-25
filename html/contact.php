<?php
session_start();

    include("connection.php");
    include("function.php");

    $user_data = check_login($con);
    //Contact
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if(!empty($name) && !empty($email) && !empty($message)){
            //save to db
            $query = "insert into contact (name,email,message) values ('$name','$email','$message')";

            mysqli_query($con, $query);
            header("Location: contact.php");
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Census | Contact</title>
    <link rel="stylesheet" href="../css/flexboxgrid.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/f0e18433e0.js" crossorigin="anonymous"></script>
</head>
<body>
    <!--Header-->
    <header id="main-header">
        <div class="container">
            <div class="row end-sm end-md end-lg center-xs middle-xs middle-sm middle-md middle-lg">
                <div class="col-xs-12  col-sm-2 col-md-2 col-lg-2">
                    <h1><span class="primary-text">E</span>-Census</h1>
                </div>
                <div class="col-xs-12  col-sm-10 col-md-10 col-lg-10">
                    <nav id="navbar">
                        <ul>
                            <li><a href="index.php">Respondent</a></li>
                            <li class="current"><a href="#">Contact</a></li>
                            <li><a href="logout.php">logout</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>

    </header>

    <!--Subheader-->
    <section id="Subheader">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1>Contact</h1>
                </div>
            </div>
        </div>
    </section>

    <!--Mainpage-->
    <section id="page" class="contact">
        <div class="container">
            <div class="row center-xs center-sm center-md center-lg">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2><span class="primary-text">Get</span> In Touch</h2>
                    <p>Please use this form to contact us</p>
                    <form method = "POST">
                        <div>
                            <label for="name">Name</label><br>
                            <input type="text" name="name">
                        </div>
                        <div>
                            <label for="email">Email</label><br>
                            <input type="text" name="email">
                        </div>
                        <div>
                            <label for="message">Message</label><br>
                            <textarea name="message"></textarea>
                        </div>
                        <button type="submit" name="button">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
    <footer id="main-footer">
        <div class="container">
            <div class="row centre-xs center-sm center-md center-lg">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <P>Copyright &copy; 2021 | E-Census</P>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
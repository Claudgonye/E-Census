<?php
session_start();

include("connection.php");
include("function.php");

$user_data = check_admin_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Census | Surveyor</title>
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
                            <li class="current"><a href="#">Surveyor</a></li>
                            <li><a href="adminlogout.php">logout</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>

    </header>

    <!--Showcase-->
    <section id="showcase">
        <div class="container">
            <div class="row centre-xs center-sm center-md center-lg middle-xs middle-sm middle-md middle-lg">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-7 showcase-content">
                    <h1>Surveyor</h1>
                    Hello, Admin
                    <p>Welcome to the E-Census Bureau Surveyor Portal.</p>
                </div>
            </div>
        </div>
    </section>

    <!--Features-->
    <section id="features">
        <div class="container">
            <div class="row centre-xs center-sm center-md center-lg">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Query Forms</h2>
                    <p>Query census records from house listing & household forms</p>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <i class="fas fa-folder"></i><br>
                            <h4>House Listing</h4>
                            <p>Query record for every house of the populus.</p>
                            <button class="button" type="button" onclick="location.href='houselistingqueries.php'" value="Query House Listing Form">Query House Listing Form</button>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <i class="fas fa-list-alt"></i><br>
                            <h4>House Hold</h4>
                            <p>Query individual data for every individual in the population</p>
                            <button class="button" type="button" onclick="location.href='householdqueries.php'" value="Query House Hold Form">Query House Hold Form</button>
                        </div>
                    </div>
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
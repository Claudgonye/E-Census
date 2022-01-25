<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Census | Surveyor</title>
    <link rel="stylesheet" href="../css/flexboxgrid.css">
    <link rel="stylesheet" href="../css/query.css">
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

    <!--Features-->
    <section id="features">
        <div class="container">
            <div class="row centre-xs center-sm center-md center-lg">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Fetch Data</h2>
                    <p>Report Generation
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <form action="" method="post">  
            <table class = "content-table">
                <thead>
                <tr>
                    <th> County </th>
                    <th> Head Name </th>
                    <th> Home Ownership </th>
                    <th> Wall Material </th>
                    <th> Floor Material </th>
                    <th> Roof Material </th>
                    <th> Building Purpose </th>
                    <th> Building Type </th>
                    <th> Location </th>
                    <th> No of Rooms </th> 
                    <th> Occupancy </th>
                    <th> Cooking Fuel </th>
                    <th> Contact </th>
                </tr>
                </thead>
                <input type="submit" name="search" value="FETCH DATA"><br>
            
        </form>
<?php
session_start();

    include("connection.php");  
    include("function.php");

    $user_data = check_admin_login($con);

    if (isset($_POST['search'])) {
        $query = "SELECT * FROM `houselisting`";
        $query_run = mysqli_query($con, $query);

        while ($row = mysqli_fetch_array($query_run)){?>
        <tbody>
            <tr>
                <td> <?php echo $row['county'] ?> </td>
                <td> <?php echo $row['headName'] ?> </td>
                <td> <?php echo $row['houseOwnership']; ?> </td>
                <td> <?php echo $row['wallMaterial'] ?> </td>
                <td> <?php echo $row['floorMaterial'] ?> </td>
                <td> <?php echo $row['roofMaterial'] ?> </td>
                <td> <?php echo $row['buildingPurpose'] ?> </td>
                <td> <?php echo $row['typeOfLivingQuarters'] ?> </td>
                <td> <?php echo $row['locationOfLivingQuarters'] ?> </td>
                <td> <?php echo $row['noOfRooms'] ?> </td>
                <td> <?php echo $row['occupancyStatus'] ?> </td>
                <td> <?php echo $row['cookingFuel'] ?> </td>
                <td> <?php echo $row['contactNo'] ?> </td>
            </tr>
        </tbody>
            <?php
        }
    }

?>
    </div>

    

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
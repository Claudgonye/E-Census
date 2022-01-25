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
            <table  class = "content-table">
                <thead>
                <tr>
                    <th> First Name </th>
                    <th> last Name </th>
                    <th> County </th>
                    <th> Constituency </th>
                    <th> Ward </th>
                    <th> Religion </th>
                    <th> marital Status </th>
                    <th> Occupation </th>
                    <th> Place Of Residence </th>
                    <th> Children </th> 
                </tr>
                <input type="submit" name="search" value="FETCH DATA"><br>
                </thead>
        </form>
<?php
session_start();

    include("connection.php");  
    include("function.php");

    $user_data = check_admin_login($con);
    
    if (isset($_POST['search'])) {
        $query = "SELECT * FROM `household`";
        $query_run = mysqli_query($con, $query);

        while ($row = mysqli_fetch_array($query_run)){?>
            <tr>
                <td> <?php echo $row['firstName'] ?> </td>
                <td> <?php echo $row['lastName'] ?> </td>
                <td> <?php echo $row['county'] ?> </td>
                <td> <?php echo $row['constituency'] ?> </td>
                <td> <?php echo $row['ward']; ?> </td>
                <td> <?php echo $row['religion'] ?> </td>
                <td> <?php echo $row['maritalStatus'] ?> </td>
                <td> <?php echo $row['occupation'] ?> </td>
                <td> <?php echo $row['placeOfResidence'] ?> </td>
                <td> <?php echo $row['children'] ?> </td>
            </tr>
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
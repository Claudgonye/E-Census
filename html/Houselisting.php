<?php
session_start();

    include("connection.php");  
    include("function.php");

    $user_data = check_login($con);
    //Housing Population(Houselisting)
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $county = $_POST['County'];
        $constituency = $_POST['Constituency'];
        $ward = $_POST['Ward'];
        $headName = $_POST['HeadName'];
        $sex = $_POST['HeadSex'];
        $contactNo = $_POST['ContactNo'];
        $houseOwnership = $_POST['Ownership'];
        $wallMaterial = $_POST['WallMaterial'];
        $floorMaterial = $_POST['FloorMaterial'];
        $roofMaterial = $_POST['RoofMaterial'];
        $buildingPurpose = $_POST['UseOfHouse'];
        $yearOfConstruction = $_POST['Yearofconstruction'];
        $typeOfLivingQuarters = $_POST['livingquarter'];
        $locationOfLivingQuarters = $_POST['locationoflivingquarter'];
        $noOfRooms = $_POST['NoRooms'];
        $occupancyStatus = $_POST['Occupancy'];
        $noOfOccupants = $_POST['Noofoccupants'];
        $availabilityOfWater = $_POST['WaterAvailability'];
        $drinkingWaterSource = $_POST['DrinkingWaterSource'];
        $lightingSource = $_POST['LightingSource'];
        $toiletAccess = $_POST['ToiletAccess'];
        $toiletType = $_POST['ToiletType'];
        $sewerageSystem = $_POST['sewerage'];
        $bathingArea = $_POST['Bathingarea'];
        $cookingArea = $_POST['Kitchen'];
        $cookingFuel = $_POST['cookingFuel'];
        $radio = $_POST['Radio'];
        $television = $_POST['Television'];
        $internet = $_POST['Internet'];
        $computer = $_POST['ComputingDevice'];
        $phone = $_POST['Phone'];
        $vehiclesAvailable = $_POST['Vehiclesavailable'];
       
        if(!empty($county) && !empty($constituency) && !empty($ward) && !empty($headName) && !empty($sex) && !empty($contactNo) && !empty($houseOwnership) && !empty($wallMaterial) && !empty($floorMaterial) && !empty($roofMaterial) && !empty($buildingPurpose) && !empty($yearOfConstruction) && !empty($typeOfLivingQuarters) && !empty($locationOfLivingQuarters) && !empty($noOfRooms) && !empty($occupancyStatus) && !empty($noOfOccupants) && !empty($availabilityOfWater) && !empty($drinkingWaterSource) && !empty($lightingSource) && !empty($toiletAccess) && !empty($toiletType) && !empty($sewerageSystem) && !empty($bathingArea) && !empty($cookingArea) && !empty($cookingFuel) && !empty($radio) && !empty($television) && !empty($internet) && !empty($computer) && !empty($phone) && !empty($vehiclesAvailable)){
            //save to db
            $query = "insert into houselisting (county,constituency,ward,headName,sex,contactNo,houseOwnership,wallMaterial,floorMaterial,roofMaterial,buildingPurpose,yearOfConstruction,typeOfLivingQuarters,locationOfLivingQuarters,noOfRooms,occupancyStatus,noOfOccupants,availabilityOfWater,drinkingWaterSource,lightingSource,toiletAccess,toiletType,sewerageSystem,bathingArea,cookingArea,cookingFuel,radio,television,internet,computer,phone,vehiclesAvailable) values ('$county','$constituency','$ward','$headName','$sex','$contactNo','$houseOwnership','$wallMaterial','$floorMaterial','$roofMaterial','$buildingPurpose','$yearOfConstruction','$typeOfLivingQuarters','$locationOfLivingQuarters','$noOfRooms','$occupancyStatus','$noOfOccupants','$availabilityOfWater','$drinkingWaterSource','$lightingSource','$toiletAccess','$toiletType','$sewerageSystem','$bathingArea','$cookingArea','$cookingFuel','$radio','$television','$internet','$computer','$phone','$vehiclesAvailable')";

            mysqli_query($con, $query);
            header("Location: index.php");
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
    <title>E-Census | Respondent</title>
    <link rel="stylesheet" href="../css/flexboxgrid.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/form.css">
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
                            <li class="current"><a href="#">Respondent</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="logout.php">logout</a></li>
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
                    <h2>House Listing</h2>
                    <p>A housing population census to collect information on buildings, living quarters and related facilities</p>
                </div>
            </div>
        </div>
    </section>

    <!--Features-->
    <form class="form" method="POST">
        <section id="features">
            <div class="container">
                <!-- <div class="col centre-xs center-sm center-md center-lg"> -->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        
                    <div class="form__item">
                        <label for="County" class="form__label">County:</label>
                        <input type="text" class="form-control" name="County" id="County" required/>
                    </div>
                    <div class="form__item">
                        <label for="Constituency" class="form__label">Constituency:</label>
                        <input type="text" class="form-control" name="Constituency" id="Constituency" required/>
                     </div>
                     <div class="form__item">
                        <label for="Ward" class="form__label">Ward:</label>
                        <input type="text" class="form-control" name="Ward" id="Ward" required/>
                    </div>
                    <div class="form__item">
                        <label for="HeadName" class="form__label">Head Name:</label>
                        <input type="text" class="form-control" name="HeadName" id="HeadName" required/>
                    </div>      
                    <div class="form__item">
                        <label for="HeadName" class="form__label">Sex:</label>
                        <select class="form-control" name="HeadSex" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Non-binary">Non-binary</option>
                        </select>
                    </div>  
                    <div class="form__item">
                        <label for="ContactNo" class="form__label">Contact No: +254</label>
                        <input type="text" name="ContactNo" class="form-control" required/><br>
                    </div>
                    <div class="form__item">
                        <label for="Ownership" class="form__label">House Ownership:</label>
                        <select name="Ownership" class="form-control" required>
                            <option value="Own Construction">Own Construction</option>
                            <option value="Rented">Rented</option>
                            <option value="Purchased">Purchased</option>
                            <option value="Inherited">Inherited</option>
                        </select>
                    </div>
                    <div class="form__item">
                        <label for="WallMaterial" class="form__label">Wall Material:</label>
                        <select name="WallMaterial" class="form-control" required>
                            <option value="Stone">Stone</option>
                            <option value="Brick">Brick</option>
                            <option value="Concrete">Concrete</option>
                            <option value="Timber">Timber</option>
                            <option value="Steel Sheet">steel sheet</option>
                            <option value="Mud">Mud</option>
                            <option value="Glass">Glass</option>
                        </select>
                    </div>
                    <div class="form__item">
                        <label for="FloorMaterial" class="form__label">Floor Material:</label>
                        <select name="FloorMaterial" class="form-control" required>
                            <option value="Hardwood Flooring">Hardwood Flooring</option>
                            <option value="Ceramic Tiles">Ceramic Tiles</option>
                            <option value="Carpet">Carpet</option>
                            <option value="Laminate">Laminate</option>
                            <option value="Vinyl Flooring">Vinyl Flooring</option>
                            <option value="Polished Concrete">Polished Concrete</option>
                            <option value="Stone Flooring">Stone Flooring</option>
                            <option value="Bamboo Flooring">Bamboo Flooring</option>
                        </select>
                    </div>
                    <div class="form__item">
                        <label for="RoofMaterial" class="form__label">Roof Material:</label>
                        <select name="RoofMaterial" class="form-control" required>
                            <option value="Galvanized iron sheets">Galvanized iron sheets</option>
                            <option value="Clay tiles">Clay tiles</option>
                            <option value="Concrete tiles">Concrete tiles</option>
                            <option value="Metal roofs">Metal roofs</option>
                            <option value="Asphalt shingles">Asphalt shingles</option>
                            <option value="Grass thatch">Grass thatch</option>
                            <option value="Slate">Slate</option>
                        </select>
                    </div>  
                    <div class="form__item">
                        <label for="UseOfHouse" class="form__label">Building Purpose:</label>
                        <select name="UseOfHouse" class="form-control" required>
                            <option value="Residential">Residential</option>
                            <option value="Commercial">Commercial</option>
                        </select>
                    </div>
                    <div class="form__item">
                        <label for="Yearofconstruction" class="form__label">Year of Construction:</label>
                        <input type="Number" class="form-control" name="Yearofconstruction" required />
                    </div>
                    <div class="form__item">
                        <label for="livingquarter" class="form__label">Type of living quarters:</label>
                        <select class="form-control" name="livingquarter" required>
                            <option value="Single-Family Detached House">Single-Family Detached House</option>
                            <option value="Apartment">Apartment</option>
                            <option value="Bungalow">Bungalow</option>
                            <option value="Cabin">Cabin</option>
                            <option value="Mansion">Mansion</option>
                        </select>
                    </div>
                    <div class="form__item">
                        <label for="locationoflivingquarter" class="form__label">Location of living quarters:</label>
                        <select class="form-control" name="locationoflivingquarter" required>
                            <option value="Rural">Rural</option>
                            <option value="Urban">Urban</option>
                        </select>
                    </div>                 
                    <div class="form__item">
                        <label for="NoRooms" class="form__label">Number of Rooms:</label>
                        <input type="Number" class="form-control" name="NoRooms" required />
                    </div>
                    <div class="form__item">
                        <label for="Occupancy" class="form__label">Occupancy Status:</label>
                            <select class="form-control" name="Occupancy" required>
                                <option value="Occupied">Occupied</option>
                                <option value="Vacant">Vacant</option>
                            </select>
                    </div>
                    <div class="form__item">
                        <label for="Noofoccupants" class="form__label">Number of Occupants:</label>
                            <input type="Number" class="form-control" name="Noofoccupants" required/>
                    </div>
                    <div class="form__item">
                        <label for="WaterAvailability" class="form__label">Availability of Water:</label>
                            <select name="WaterAvailability" class="form-control" required>
                                <option value="Available">Available</option>
                                <option value="Not Available">Not Available</option>
                            </select>
                    </div>
                    <div class="form__item">
                        <label for="DrinkingWaterSource" class="form__label">Drinking Water Source:</label>
                            <select name="DrinkingWaterSource" class="form-control" required>
                                <option value="Tap water">Tap water</option>
                                <option value="River">River</option>
                                <option value="Well">Well</option>
                                <option value="Rain water">Rain water</option>
                                <option value="borehole">borehole</option>
                                <option value="Spring">Spring</option>
                                <option value="bottled Water">bottled Water</option>
                            </select>
                    </div>
                    <div class="form__item">
                        <label for="LightingSource" class="form__label">Lighting Source:</label>
                            <select name="LightingSource" class="form-control" required>
                                <option value="Electricity">Electricity</option>
                                <option value="Kerosene">Kerosene</option>
                                <option value="Solar">Solar</option>
                                <option value="Candles">Candles</option>
                                <option value="No lighting">No lighting</option>
                            </select>
                    </div>
                    <div class="form__item">
                        <label for="ToiletAccess" class="form__label">Toilet Access:</label>
                            <select name="ToiletAccess" class="form-control" required>
                                <option value="Yes">YES</option>
                                <option value="No">NO</option>
                            </select>
                            </div>                        
                            <div class="form__item">
                        <label for="ToiletType" class="form__label">Toilet Type:</label>
                            <select name="ToiletType" class="form-control" required>
                                <option value="Flush Toilet">Flush Toilet</option>
                                <option value="Dry Toilet">Dry Toilet</option>
                            </select>
                            </div>
                            <div class="form__item">
                        <label for="sewerage" class="form__label">Sewerage System:</label>
                            <select name="sewerage" class="form-control" required>
                                <option value="Sanitary sewer">Sanitary sewer</option>
                                <option value="No sewerage System">No sewerage System</option>
                            </select>
                            </div>
                            <div class="form__item">
                        <label for="Bathingarea" class="form__label">Bathing Area:</label>
                            <select name="Bathingarea" class="form-control" required>
                                <option value="Bathroom">Bathroom</option>
                                <option value="Common Bathroom">Common Bathroom</option>
                                <option value="None">None</option>
                            </select>
                            </div>
                            <div class="form__item">
                        <label for="Kitchen" class="form__label">Cooking area:</label>
                            <select name="Kitchen" class="form-control" required>
                                <option value="Kitchen">Kitchen</option>
                                <option value="Detached Kitchen">Detached Kitchen</option>
                            </select>
                            </div>
                            <div class="form__item">
                        <label for="cookingFuel" class="form__label">Cooking Fuel:</label>
                            <select name="cookingFuel" class="form-control" required>
                                <option value="Firewood">Firewood</option>
                                <option value="charcoal">charcoal</option>
                                <option value="Electricity">Electricity</option>
                                <option value="Liquefied petroleum gas(LPG)">Liquefied petroleum gas(LPG)</option>
                                <option value="Natural Gas">Natural Gas</option>
                                <option value="Bio-gas">Bio-gas</option>
                                <option value="Solar">Solar</option>
                            </select>
                            </div>
                            <div class="form__item">
                        <label for="Radio" class="form__label">Radio:</label>
                            <select name="Radio" class="form-control" required>
                                <option value="Yes">YES</option>
                                <option value="No">NO</option>
                            </select>
                            </div>
                            <div class="form__item">
                        <label for="Television" class="form__label">Television:</label>
                            <select name="Television" class="form-control" required>
                                <option value="Yes">YES</option>
                                <option value="No">NO</option>
                            </select>
                            </div>
                    <div class="form__item">
                        <label for="Internet" class="form__label">Stable Internet Availability:</label>
                            <select name="Internet" class="form-control" required>
                                <option value="Yes">YES</option>
                                <option value="No">NO</option>
                            </select>
                            </div>
                            <div class="form__item">
                        <label for="ComputingDevice" class="form__label">Computing Device:</label>
                            <select name="ComputingDevice" class="form-control" required>
                                <option value="Yes">YES</option>
                                <option value="No">NO</option>
                            </select>
                            </div>
                            <div class="form__item">
                        <label for="Phone" class="form__label">Phone:</label>
                            <select name="Phone" class="form-control" required>
                                <option value="Yes">YES</option>
                                <option value="No">NO</option>
                            </select>
                            </div>
                            <div class="form__item">
                        <label for="Vehiclesavailable" class="form__label">Vehicles Available:</label>
                            <select name="Vehiclesavailable" class="form-control" required>
                                <option value="Two Wheeler">Two Wheeler</option>
                                <option value="Four Wheeler">Four Wheeler</option>
                                <option value="Both">Both</option>
                                <option value="None">None</option>
                            </select>
                            </div>
                        <button type="submit" class="form__btn">Submit</button>
                </div>
            </div>
        </div>
    </section>
    </form>


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
    <script src="../js/mainlogin.js"></script>
</body>

</html>
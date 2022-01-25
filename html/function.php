<?php

function check_login($con){
    if(isset($_SESSION['user_id'])){
        $id = $_SESSION['user_id'];
        $query = "select * from users where user_id = '$id' limit 1";

        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    //redirect to login
    header("Location: login.php");
    die;
}

function check_admin_login($con){
    if(isset($_SESSION['user_id'])){
        $id = $_SESSION['user_id'];
        $query = "select * from user where user_id = '$id' limit 1";

        $result1 = mysqli_query($con, $query);
        if($result1 && mysqli_num_rows($result1) > 0){
            $admin_data = mysqli_fetch_assoc($result1);
            return $admin_data;
        }
    }
    //redirect to admin
    header("Location: admin.php");
    die;
}

function random_num($length){
    $text = "";
    if($length < 5){
        $length = 5;
    }
    $len = rand(4, $length);

    for ($i=0; $i < $len; $i++) { 
        # code...

        $text .= rand(0,9);
    }
    return $text;
}
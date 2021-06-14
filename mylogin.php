<?php

include 'database.php';
session_start();
if(isset($_POST['email'])){

    $email=$_POST['email'];
    $password=$_POST['password'];
    $taddress=$_POST['taddress'];
    $paddress=$_POST['paddress'];
    $city=$_POST['city'];
    $state=$_POST['state'];

    $zipcode=$_POST['zipcode'];
    $status=$_POST['status'];
    $boxes=implode(',',$_POST['boxes']);


    $duplicate=mysqli_query($conn,"select * from register where email='$email'");
    if (mysqli_num_rows($duplicate)>0)
    {
        echo json_encode(array("statusCode"=>201));
    }
    else{
        $sql = "INSERT INTO `register`( `email`, `password`, `taddress`, `paddress`,`city`,`state`,`zipcode`,`status`,`boxes`) 
		 	VALUES ('$email','$password','$taddress', '$paddress','$city','$state','$zipcode','$status','$boxes')";

        if (mysqli_query($conn, $sql)) {

            echo json_encode(array("statusCode"=>200));
        }
        else {
         //   $_SESSION['email']=$email;
            echo json_encode(array("statusCode"=>201));
        }
    }
    mysqli_close($conn);
}

?>

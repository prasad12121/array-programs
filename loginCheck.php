<?php
include('database.php');
session_start();

if(isset($_POST['email'])) {


    $email = $_POST['email'];
    $password = $_POST['password'];


    $duplicate=mysqli_query($conn,"select * from register where email='$email' && password='$password'");


    if(mysqli_num_rows($duplicate)>0){
        $_SESSION['email'] = $email;
    }

    if(mysqli_num_rows($duplicate)>0)
    {
        echo json_encode(array("statusCode"=>200));

    }else{
        echo json_encode(array("statusCode"=>201));
    }

}


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <style>
        .border-class
        {
            border:thin black solid;
            padding:20px;
            margin: 20px;
        }

    </style>
</head>

<body class="col-md-5 " style="margin-left: 500px;padding-top: 200px;">
<div class="container" id="test">
<form  id="form2" class="border-class">
    <div class="form-group row ">
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
        </div>
    </div>
    <a href="register.php" class="btn btn-primary">Register</a>
    <button type="submit"  name="submit" id="send" class="btn btn-primary">Login</button>
</form>
</div>
</body>

</html>

<?php
session_start();
if(isset($_SESSION['email']))   // Checking whether the session is already there or not if
    // true then header redirect it to the home page directly
{
    header("Location:welcome.php");
}
?>


<script type="text/javascript">
    $(function () {
        $("#form2").submit(function (e) {
            e.preventDefault();
           var datas= $("#form2").serialize();
            $.ajax({
               url:"loginCheck.php",
                method: "POST",
               data:datas,
                dataType:'json',
                success:function (data) {


                   // var data = $.parseJSON(data);

                    console.log(data.statusCode);

                    if(data.statusCode ==200){
                        location.href = "welcome.php";
                    } else if(data.statusCode==201){
                        location.href = "login.php";
                    }
                }


            });
        });

    });
</script>
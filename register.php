
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
</head>
<div class="container" style="margin-top: 50px">
<body class="form-group col-md-5" style="margin-left: 100px">

<form id="form1">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="text"  name="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password"  name="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" name="taddress" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="form-group">
        <label for="inputAddress2">Address 2</label>
        <input type="text" name="paddress" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>

    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
    <div class="col-sm-10">
        <div class="form-check">
            <input class="form-check-input"  name="gender" type="radio" id="gridRadios1" value="option1" checked>
            <label class="form-check-label" for="gridRadios1">
               male
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input"  name="gender" type="radio" id="gridRadios2" value="option2">
            <label class="form-check-label" for="gridRadios2">
                female
            </label>
        </div>

    <div class="form-row">
        <div class="form-group col-md-5">
            <label for="inputCity">City</label>
            <input type="text" name="city" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState"  name="state" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Puducherry">Puducherry</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label for="inputZip">Zip</label>
            <input type="text" name="zipcode" class="form-control" id="inputZip">
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" name="status" value="On" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
        </div>
    </div>
        skillset
        <div class="form-group col-md-8" >
            <class="form-check">
                <input class="form-check-input" name="boxes[]" type="checkbox" value="java"  id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Java
                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <input class="form-check-input" name="boxes[]" type="checkbox" value="php" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    PHP
                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="form-check-input" name="boxes[]" type="checkbox"  value=".net" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                .net
            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <input class="form-check-input" name="boxes[]" type="checkbox" value="bootstrap" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                bootstrap
            </label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="form-check-input" name="boxes[]" type="checkbox" value="c" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                C
            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="form-check-input" name="boxes[]" type="checkbox" value="c++" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                C++
            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="form-check-input" name="boxes[]" type="checkbox" value="nodejs" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                nodejs
            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="form-check-input" name="boxes[]" type="checkbox"  value="python" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Python
            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>
    <button type="submit"  name="submit" id="send" class="btn btn-primary">Register</button>
</form>
</div>
</body>
</html>

<script type="text/javascript">
    $(function () {

        $("#form1").submit(function (e) {

            e.preventDefault();


            var datos = $("#form1").serialize();

            $.ajax({
                url:"mylogin.php",
                data:datos,
                method: "POST",
                dataType:"json",
                success:function (data) {
                    console.log(data.statusCode);


                    if(data.statusCode ==200){
                        location.href = "login.php";
                    } else if(data.statusCode==201){
                        console.log('error');
                    }
                }
            });
        });
    })

</script>

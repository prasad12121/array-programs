<?php
$msg = "";
print_r(dirname(__FILE__));
// If upload button is clicked ...
if (isset($_POST['sub'])) {

    $filename = $_FILES["f1"]["name"];
    $tempname = $_FILES["f1"]["tmp_name"];
    $folder ="./images/".$filename;
    print_r($folder);

    $db = mysqli_connect("localhost", "root", "", "reg");

    // Get all the submitted data from the form
    $sql = "INSERT INTO images (f1) VALUES ('$filename')";

    // Execute query
    mysqli_query($db, $sql);

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder))  {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
    $result = mysqli_query($db, "SELECT * FROM image");
    $sql = "select * from images";
    $data = mysqli_query($db,$sql);
    while($rec=mysqli_fetch_row($data))
    {
        echo "$rec[1]<br>";
    }
}

?>

<form method="post" action="" enctype="multipart/form-data">

    <input type="file" name="f1">

    Image : <input type="submit" value="Upload" name="sub">

</form>
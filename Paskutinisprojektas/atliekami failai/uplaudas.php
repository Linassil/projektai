<?php


$dbServername = "localhost";
$dbUsername = "testas1";
$dbPassword = "root";
$dbName = "scamsite";


$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName );





if(isset($_POST['submit']))

{
    $name = $_POST['vardas'];
    $img= $_FILES['file']['name'];

    $insert="INSERT INTO irodymai values ('NUL','$name','$img')";
    if(mysqli_query($insert,$conn)) {
        move_uploaded_file($_FILES['image']['temp_name'], "irodymufoto/$img");
        echo "<script>alert('upload')</script>";
    }else {
        echo "<script>alert('neupload')</script>";
    }

}

?>


<!DOCTYPE html>
<html>
<body>
    <head>
        <meta charset="utf-8">
        <title>fdsf</title>
    </head>

        <form  action="index.php" method="post" enctype"multipart/form-data">
            <label>vardas</label>
            <input type="text" name="vardas" >
            <br>
            <label>select img</label>
            <input type="file" name="image">

            <input type="submit" name="submit" value="uplaudas">
        </form>
    </body>
</html>

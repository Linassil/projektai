<?php

$msg = "";
$ip = $_SERVER['REMOTE_ADDR'];

if (isset($_POST['upload'])) {
    $target = "irodymufoto/".basename($_FILES['image']['name']);

    $db = mysqli_connect("localhost", "testas1", "root","scamsite");

    $image = $_FILES['image']['name'];
    $text = $_POST['text'];

    $sql = "INSERT INTO scameriai (img_name, info, vartotojo_ip) VALUES ('$image','$text','$ip')";
    mysqli_query($db, $sql); //deda isisusta data visa i db

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "image uploaded";
} else {
    $msg = "error";
}

}
?>


<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>img</title>
</head>
<body>
<div class="content">
            <form action="index.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="size" value="10000">
                <div>
                    <input type="file" name="image">
                </div>
                <div>
                    <textarea name="text" rows="4" cols="40" placeholder="papasakok"></textarea>

                </div>
                <div>
                    <input type="submit" name="upload" value="upload image">
                </div>
            </form>
</div>
</body>
</html>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Upload image in PHP & Store Image Name,Path into MySQL database</title>
<link href="style/login-style.css" rel="stylesheet" type="text/css">
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
<table border="2" cellpadding="15" cellspacing="2" width="430" align="center">
<tr class="tabheader">
<td align="center" colspan="2">Image Upload & Save into MySQL db</td>
</tr>
<tr class="row">
<td>Select File Here:</td>
<td><input type="file" name="uploadImage" id="uploadImage"></td>
</tr>
<tr class="tabheader">
<td colspan=2><p align=center>
<input type="submit" value="Click Here To Upload" name="submit">
</td>
</tr>
</table>
</form>

<?php

//Adding isset button function on submit button.
if(isset($_POST["submit"])) {

 if (!empty($_FILES["uploadImage"]["name"])) {

include 'dbconfig.php';

$ImageSavefolder = "images/";

move_uploaded_file($_FILES["uploadImage"]["tmp_name"] , "$ImageSavefolder".$_FILES["uploadImage"]["name"]);

mysql_query("INSERT into image_upload (image_name) VALUES('".$_FILES['uploadImage']['name']."')");

if($conn) {

echo '<p align="center"> Image name successfully saved into MySQL db.</p>';

}

else {

echo '<p align="center"> Sorry, Please try again.</p>';
}
 }
 else {

 echo '<p align="center"> Select file to upload </p>';

 }

 }

?>


</body>
</html>

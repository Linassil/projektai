<?php
include_once 'loginheader.php';

 if (isset($_SESSION['u_id'])) {
header("Location: Ikelk.php");
}

include_once 'signup.php';
 ?>

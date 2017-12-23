<?php
 include_once('./scameriai_db.php');

$vardas = $_POST['vardas'];
$pavarde = $_POST['pavarde'];
$saskaitosNR = $_POST['saskaitosNR'];
$Trumpai = $_POST['Trumpai'];
$facebook = $_POST['facebook'];
$adresas = $_POST['adresas'];
$skola = $_POST['skola'];

// echo $user_nr . $antraste . $straipsnis ;
 idetiScameri($vardas, $pavarde, $saskaitosNR, $Trumpai, $facebook, $adresas, $skola );

header("Location: index.php?Message=Užregistravai sukčių sekmingai!, neužilgo patvirtinsime" . urlencode($Message));




// print_r($_GET);

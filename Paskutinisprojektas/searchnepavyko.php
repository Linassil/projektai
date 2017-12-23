<?php

$dbServername = "localhost";
$dbUsername = "testas1";
$dbPassword = "root";
$dbName = "scamsite";
$output = '';

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName );



if(isset($_POST['search'])) {
    $searchq = $_POST['search'];


    $query = mysqli_query("SELECT * FROM  atrinkti WHERE vardas LIKE '%searchq%' OR pavarde LIKE '%searchq%'  OR saskaitosNR LIKE '%searchq%'  OR facebook LIKE '%searchq%'") or die ("nerasta");
    $count = mysqli_num_rows($query);
    if ($count == 0) {
        $output = "Pagal pateiktus duomenis žmogus nerastas";
    } else {
        while($row = mysqli_fetch_array($query)) {
            $fname = $row['vardas'];
            $lname = $row['pavarde'];
            $fbname = $row['facebook'];
            $sasNR = $row['saskaitosNR'];

            $output .= '<div> '.$fname.' '.$lname.' '.$fbname.' '.$sasNR.' </div>';
        }
    }

}

?>

<?php





 define('DB_HOST', 'localhost');
 define('DB_USER', 'testas1');  // root
 define('DB_PASS', 'root');   // root
 define('DB_NAME', 'scamsite');

 $connection = mysqli_connect( DB_HOST, DB_USER, DB_PASS, DB_NAME);

 mysqli_set_charset($connection, 'utf8'); // !!!  utf8 - "-" skyriklio, nes neveiks

 function getConnection() {
     global $connection;
     // if ($connection == false) {
     if (!$connection) {
        die("ERROR: nepavyko prisijungti prie DB:" . mysqli_connect_error());
     }
     return $connection;
 }


 // $my_sql = "INSERT INTO scameriai
 //                     VALUES (
 //                             id = '',
 //                             vardas = '$vardas',
 //                             pavarde = '$pavarde',
 //                             saskaitosNR = '$saskaitosNR',
 //                             Trumpai = '$Trumpai',
 //
 //                         );";

//
function idetiScameri($vardas, $pavarde, $saskaitosNR, $Trumpai,$facebook,$adresas,$skola) {
    $vardas = trim($vardas);
    $vardas = stripslashes($vardas);
    // $title = htmlspecialchars($title);
    $pavarde = trim($pavarde);
    $pavarde = stripslashes($pavarde);
    // $content = htmlspecialchars($content);
    $saskaitosNR = trim($saskaitosNR);
    $saskaitosNR = stripslashes($saskaitosNR);
    // $content = htmlspecialchars($content);
    $Trumpai = trim($Trumpai);
    $Trumpai = stripslashes($Trumpai);
    // $content = htmlspecialchars($content);
    $facebook = trim($facebook);
    $facebook = stripslashes($facebook);
    // $content = htmlspecialchars($content);
    $adresas = trim($adresas);
    $adresas = stripslashes($adresas);
    // $content = htmlspecialchars($content);
    $skola = trim($skola);
    $skola = stripslashes($skola);
    // $content = htmlspecialchars($content);

    $vardas = mysqli_real_escape_string(getConnection(), $vardas);
    $pavarde = mysqli_real_escape_string(getConnection(), $pavarde);
    $saskaitosNR = mysqli_real_escape_string(getConnection(), $saskaitosNR);
    $Trumpai = mysqli_real_escape_string(getConnection(), $Trumpai);
    $facebook = mysqli_real_escape_string(getConnection(), $facebook);
    $adresas = mysqli_real_escape_string(getConnection(), $adresas);
    $skola = mysqli_real_escape_string(getConnection(), $skola);


        $my_sql = "INSERT INTO scameriai
        VALUES (
            '',
            '$vardas',
            '$pavarde',
            '$saskaitosNR',
            '$Trumpai',
            '$facebook',
            '$adresas',
            '$skola'
        );";
        $query = mysqli_query( getConnection() , $my_sql);
        if (!$query) {
            echo "ERROR: ideti scamerio nepavyko" . mysqli_error(getConnection() );
        }
            if (empty($vardas) || empty($pavarde) || empty($saskaitosNR) || empty($Trumpai) || empty($facebook) || empty($adresas) || empty($skola) ) {
                echo "Ideti scamerio nepavyko Palikai tuščių įvedimo laukų" . mysqli_error(getConnection() );
                exit();

        }
}




// idetiScameri("Tomas", "Bedancius", "LT341825874","suvalge banana nepaime luksto");

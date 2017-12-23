<?php

if (isset($_POST['submit'])) {

    include_once 'dbh.inc.php';





    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $ip = $_SERVER['REMOTE_ADDR'];

    $first = trim($first);
    $first = stripslashes($first);
    // $title = htmlspecialchars($title);
    $email = trim($email);
    $email = stripslashes($email);
    // $content = htmlspecialchars($content);
    $last = trim($last);
    $last = stripslashes($last);
    // $content = htmlspecialchars($content);
    $uid = trim($uid);
    $uid = stripslashes($uid);
    // $content = htmlspecialchars($content);
    $pwd = trim($pwd);
    $pwd = stripslashes($pwd);


    //Erorai
    //tusti laukai
    if (empty($first) || empty($last) || empty($uid) || empty($pwd) || empty($email) ) {
        header("Location: ../signup.php?signup=empty");
        exit();
    } else {
        //patikrina ar simboliai normalus
        if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) ) {

            header("Location: ../signup.php?signup=invalid");

            exit();

        } else {
            //patikrina ar emeilas egzistuoja
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

                header("Location: ../signup.php?signup=Blogas_Elpastas");

                exit();
            } else {
                $sql = "SELECT * FROM loginvartotojai WHERE vartotojo_uid '$uid' ";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0 ) {
                    header("Location: ../signup.php?signup=VartotojasUzimtas");
                    exit();
                } else {
                    //uzslaptinamas paswordas
                    $hashedPWD = password_hash($pwd, PASSWORD_DEFAULT);
                    //ideti vartotoja i DB
                    $sql = "INSERT INTO loginvartotojai (vartotojo_vardas, vartotojo_pavarde, vartotojo_email, vartotojo_uid, vartotojo_pwd, vartotojo_ip) VALUES ('$first', '$last','$email', '$uid', '$hashedPWD', '$ip');";
                    mysqli_query($conn, $sql);

                    header("Location: ../signup.php?signup=success");
                    exit();


                }
            }
        }
    }


} else {
    header("Location: ../signup.php");
    exit();
}

<?php

session_start();

if (isset($_POST['submit'])) {

        include 'dbh.inc.php';

        $uid = mysqli_real_escape_string($conn, $_POST['uid']);
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

        //Erorai
        //patikrina ar empty fieldai
        if (empty($uid) || empty($pwd)) {
            header("Location: ../Ikelk1.php?login=empty");
            exit();
        }else {
            $sql = "SELECT * FROM loginvartotojai WHERE vartotojo_uid='$uid' OR vartotojo_email='$uid' ";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck < 1) {
                header("Location: ../Ikelk1.php?login=error");
                exit();
            } else {
                if ($row = mysqli_fetch_assoc($result)) {
                    //atkoduoja pass
                    $hashedPWDCheck = password_verify($pwd, $row['vartotojo_pwd']);
                    if ($hashedPWDCheck == false) {
                        header("Location: ../Ikelk1.php?login=error");
                        exit();
                    } elseif ($hashedPWDCheck == true) {
                        // log in useri cia
                        $_SESSION['u_id'] = $row['vartotojo_id'];
                        $_SESSION['u_first'] = $row['vartotojo_vardas'];
                        $_SESSION['u_last'] = $row['vartotojo_pavarde'];
                        $_SESSION['u_email'] = $row['vartotojo_email'];
                        $_SESSION['u_uid'] = $row['vartotojo_uid'];
                        header("Location: ../Ikelk.php");
                        exit();
                    }
                }
            }
        }
} else {
    header("Location: ../Ikelk1.php?login=error");
    exit();
}

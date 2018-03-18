<?php

    session_start();

    $username = $_REQUEST['usr'];
    $password = $_REQUEST['pwd'];

    if($username == "ilma" and 
        $password == "12345") {
            $_SESSION['login'] = $username;
             header('Location: tugas_5.php');
        }
    elseif($username == "raisa" and 
        $password == "67899") {
            $_SESSION['login'] = $username;
           header('Location: tugas_5.php');
        }
    else echo "Login gagal.";
?>
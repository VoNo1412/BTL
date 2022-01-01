<?php
    session_start();

    ifisset($_POST['btnLogout']){
        unset($_SESSION['isLoginOK']);
        header("location:signIn.php");
    }

?>
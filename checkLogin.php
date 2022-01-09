<?php
        session_start();

        if(!isset($_SESSION['fullName'])) {
            header("location: signIn.php");
        }

       $urfLoginUser = "/BTL/login_user.php?id=".$_SESSION['id_user'];
       $urlmyNet = "/BTL/login_mynetwork.php?id=".$_SESSION['id_user'];
       $urlProfile = "/BTL/profile.php?id=".$_SESSION['id_user'];
       $urlNotifi = "/BTL/login_notifications.php?id=".$_SESSION['id_user'];
?>

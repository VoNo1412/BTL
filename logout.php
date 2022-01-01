<!-- <?php
    session_start();

    ifisset($_POST['btnLogout']){
        unset($_SESSION['isLoginOK']);
        header("location:signIn.php");
    }

?> -->
<?php
    function btnLogout() {
        header("location:signIn.php");
    }
?>
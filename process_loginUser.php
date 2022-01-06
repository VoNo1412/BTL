<?php 
    session_start();
    if(isset($_POST['btnSubmit'])) {
        $idUser =  $_POST['idUser'];
        $txt_post = $_POST['txtPost'];
        $conn = mysqli_connect("localhost", "root", "", "btl");
        if(!$conn) {
            die("Connect failure");
        }

        $sql = "INSERT INTO db_post(id_user, text_post)
         VALUES ('$idUser','$txt_post')";

        $result = mysqli_query($conn, $sql);

        if($result) {
            header("location: login_user.php");
        } else {
            header("location: signIn.php");
        }

        mysqli_close($conn);
    } else {
        header("location: signIn.php");
    }

?>

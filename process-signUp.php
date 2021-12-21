<?php
    session_start();

    if(!isset($_POST['txtBtnSignUp'])) {
        header("location: signup.php");
    }

    $email = $_POST['txtEmail'];
    $pass = $_POST['txtPass'];

    $conn = mysqli_connect("localhost", "root", "", "job");
    if(!$conn) {

    }
    $sql_1 = "SELECT * FROM db_user WHERE email_user = '$email' and pass_user = '$pass'";

    $result_1 = mysqli_query($conn, $sql_1);

    if(mysqli_num_rows($result_1) > 0) {
        $error = "Email da duoc su dung. Vui long dang ky email khac!";
        header("location: signup.php?error = $error");
    } else {
        $_SESSION['isLoginOk'] = $email;
        header("location: signIn.php");
    }
?>
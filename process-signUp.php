<?php
    session_start();

    // if(isset($_POST['txtEmail'])) {
    //     $email = $_POST['txtEmail'];
    //     $pass = $_POST['txtPass'];
    //     $firstName = $_POST['txtFirstName'];
    //     $lastName  = $_POST['txtLastName'];

    //     $conn = mysqli_connect("localhost", "root", "", "btl");
    //     if(!$conn) {
    //         die("Connect failure");
    //     }
    //     $sql_1 = "SELECT * FROM db_user WHERE email_user = '$email'";

    //     $result_1 = mysqli_query($conn, $sql_1);

    //     if(mysqli_num_rows($result_1) > 0) {
    //         $error = "Email da duoc su dung. Vui long dang ky email khac!";
    //         header("location: signUp.php?error = $error");
    //     } else {
    //         header("location: signupName.php");
    //         $pass_hash = password_hash($pass, PASSWORD_DEFAULT);

    //         $sql_2 = "INSERT INTO db_user(email_user, password_user)
    //         VALUES('$email', '$pass_hash')";
    //         $result_02 = mysqli_query($conn, $sql_2);
            
    //         if($result_02) {
    //             // $_SESSION['isLoginOk'] = $email;
    //             header("location: signIn.php");
    //         } else {
    //             $error = "Có một số lỗi vui lòng đăng ký lại!";
    //             header("location: signUp.php?error = $error");
    //         }
    //         mysqli_close($conn);
    //     }
    // } else {
    //     header("location: signUp.php");
    // }

    session_start();

    if(isset($_POST['txtEmail'])) {
        $email = $_POST['txtEmail'];
        $pass = $_POST['txtPass'];

        $conn = mysqli_connect("localhost", "root", "", "btl");
        if(!$conn) {
            die("Connect failure");
        }
        $sql_1 = "SELECT * FROM db_user WHERE email_user = '$email'";

        $result_1 = mysqli_query($conn, $sql_1);

        $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
        if(mysqli_num_rows($result_1) > 0) {
            $error = "Email da duoc su dung. Vui long dang ky email khac!";
            header("location: signUp.php?error = $error");
        } else {
            header("location: signupName.php?email=$email&password=$pass_hash");
        }
    } else {
        header("location: signUp.php");
    }
?>
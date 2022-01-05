<?php 
    session_start();
    if(isset($_POST['txtBtnSignIn'])) {
        $email = $_POST['txtEmail'];
        $pass  = $_POST['txtPass'];
        
        $conn = mysqli_connect("localhost", "root", "", "btl");
        if(!$conn) {
            die("Connect failure");
        }

        $sql = "SELECT * FROM db_user WHERE email_user = '$email'";
        $result = mysqli_query($conn, $sql);


        if(mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_assoc($result);
            if(password_verify($pass, $data['password_user'])) {
            $_SESSION['fullName'] = $data["first_name"] .' '. $data["last_name"];
            $_SESSION['isLastName'] = $data["last_name"];
            $_SESSION['isLogin'] = $email;
                header("location: login_user.php");
            }
        } else  {
            $error = "failure";
            header("location: signIn.php?error=$error");
        }
    } else {
        header("location: signIn.php");
    }

    mysqli_close($conn);
?>
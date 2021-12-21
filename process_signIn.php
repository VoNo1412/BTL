<?php 
    session_start();
    if(isset($_POST['txtBtnSignIn'])) {
        $email = $_POST['txtEmail'];
        $pass  = $_POST['txtPass'];
        
        $conn = mysqli_connect("localhost", "root", "", "job");
        if(!$conn) {
            die("Connect failure");
        }

        $sql = "SELECT * FROM db_user where email_user = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $email);

        if(mysqli_stmt_excute($stmt)) {
            echo "success";
            // mysqli_stmt_bind_result($stmt, $ma_user, $ten_user,$email_user, $pass_user);
            
            // if(mysqli_stmt_fetch($stmt)) {
            //     if(password_verify($pass, $pass_user)) {
            //         // $_SESSION['isLoginOk'] = $email;
            //         // header("location: signUp.php");
            //     } else {
            //         $error = "Bạn đăng nhập sai or mật khẩu không chính xác!";
            //         header("location: signIn.php?error=$error");
            //     }
            // } else {
            //     $error = "Bạn đăng nhập sai or mật khẩu không chính xác!";
            //     header("location: signIn.php?error=$error");
            // }
        } else{
            $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
            header("location: login.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }
    } else {
        header("location: signIn.php");
    }

?>
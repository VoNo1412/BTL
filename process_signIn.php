<?php 
    session_start();
    if(isset($_POST['txtBtnSignIn'])) {
        $email = $_POST['txtEmail'];
        $pass  = $_POST['txtPass'];
        
        $conn = mysqli_connect("localhost", "root", "", "linkedin");
        if(!$conn) {
            die("Connect failure");
        }

        $sql = "SELECT * FROM db_user WHERE email_user = ? OR name_user = ?";
        $stmt = mysqli_prepare($conn, $sql);
        $user = $email;
        mysqli_stmt_bind_param($stmt, "ss", $email, $user);
        

        if(mysqli_stmt_excute($stmt)) {
            mysqli_stmt_bind_result($stmt, $id_user, $name_user,$email_user, $passworkd_user);
            
            if(mysqli_stmt_fetch($stmt)) {
                if(password_verify($pass, $passworkd_user)) {
                    // $_SESSION['isLoginOk'] = $email;
                    // header("location: signUp.php");
                } else {
                    $error = "Bạn đăng nhập sai or mật khẩu không chính xác!";
                    header("location: signIn.php?error=$error");
                }
            } else {
                $error = "Bạn đăng nhập sai or mật khẩu không chính xác!";
                header("location: signIn.php?error=$error");
            }
        } else{
            $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
            header("location: login.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }
    } else {
        header("location: signIn.php");
    }

?>
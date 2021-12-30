<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Linkedln</title>
    <link rel="stylesheet" href="./CSS/bootstrap.css">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <style>
        .bg--primary {
            background: #f3f2ef;
        }

        .rounded-10 {
            border-radius: 8px;
        }

        input {
            border: 1px solid #000;
            padding: 3px;
            font-size: 14px;
            height: 33px;
        }

        .text-gray {
            color: rgba(0,0,0,0.6);
        }

        .text-blue {
            color: #0a66c2;
        }

        .fs-14 {
            font-size: 14px;
        }

        .fs-12 {
            font-size: 12px;
        }

        .sign {
            font-weight: 500;
            color: white;
            display: block;
            line-height: 48px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
        }

        .sign:hover {
            color: white;
        }

        .btn--primary {
            width: 100%;
            height: 48px;
            background-color: #0a66c2;
            border-radius: 24px;
            border: 1px solid transparent;
        }

        .btn--primary:hover {
            background: #1f4182;
        }

        form {
            background: white;
            box-shadow: 0 4px 10px 3px rgb(185 185 185);
        }
    </style>
</head>
<body>
    <div class="container-fluid bg--primary">
        <div class="row" style="  max-width: 1200px;
            margin: 0 auto;">
             <div class="text-left mt-5">
                <div class="logo">
                        <img src="./img/logo.png" alt="logo.png">
                    </div>
             </div>

            <form   method="post" class="p-4 rounded-10" style="max-width: 450px; height:500px; margin: 50px auto 20px;">
            <div class="mb-3">  <div class="fs-2 fw-bold">Join LinkedIn — it's free!</div>
                <div class="mt-2">Already on LinkedIn? <a href="signin.php" class="fw-bold">Sign in</a></div></div>
            <div class="mb-3">
                <label for="exampleInputFirstName" class="form-label text-gray fs-14">First Name</label>
                <input type="text" name="txtFirstName" class="form-control" id="exampleInputFirstName">
            </div>
            <div class="mb-3">
                <label for="exampleInputLastName" class="form-label text-gray fs-14">Last Name</label>
                <input type="text" name="txtLastName" class="form-control" id="exampleInputLastName">
            </div>
            <div class="fs-12 text-gray text-center py-3">By clicking Agree & Join, you agree to the LinkedIn
                <span class="text-blue fw-bold">User Agreement, Privacy Policy,</span> and 
                <span class="text-blue fw-bold">Cookie Policy.</span>
            </div>
             <?php 
                session_start();
            
                if(isset($_POST['txtBtnSignUp'])) {
                    $email = $_GET['email'];
                    $pass = $_GET['password'];
                    $firstName = $_POST['txtFirstName'];
                    $lastName  = $_POST['txtLastName'];
                    
                    $conn = mysqli_connect("localhost", "root", "", "btl");
                    if(!$conn) {
                        die("Connect failure");
                    }

                    $pass_hash = password_hash($pass, PASSWORD_DEFAULT);

                    $sql_2 = "INSERT INTO db_user(email_user, password_user, first_name, last_name)
                    VALUES('$email', '$pass_hash', '$firstName', '$lastName')";
                    $result_02 = mysqli_query($conn, $sql_2);
                  
                    if($result_02) {
                        header("location: signIn.php");
                    } else {
                        $error = "Có một số lỗi vui lòng đăng ký lại!";
                        header("location: signUp.php?error = $error");
                    }
                    mysqli_close($conn);
                }
            ?>
            
                <button type="submit" name="txtBtnSignUp"class="btn--primary fw-bold text-white">Agree & Join</button>
                    <a href="signup.php" class="mt-3 p-3 btn-white fw-bold text-center d-block" style="text-decoration: none; color: black">Back</button>

            </form>
        </div>
    </div>
</body>
</html>
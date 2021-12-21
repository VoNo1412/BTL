<?php 
    if(!isset($_SESSION['isLoginOk'])) {
        header("location: signup.php");
    }
?>


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
            height: 100vh;
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
            width: 350px;
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
        }
    </style>
</head>
<body>
    <div class="container-fluid bg--primary">
        <div class="row pt-5">
             <div class="text-center">
                <div class="logo">
                        <img src="./img/logo.png" alt="logo.png">
                    </div>
                <div class="fs-2 text-medium">Make the most of your professional life</div>
             </div>

            <form action="process-signUp.php"  method="post" class="p-4 rounded-10" style="max-width: 400px; height:440px; margin: 50px auto 20px;">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-gray fs-14">Email</label>
                <input type="email" name="txtEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-gray fs-14">Password (6 or more characters)</label>
                <input type="password" name="txtPass" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="fs-12 text-gray text-center py-3">By clicking Agree & Join, you agree to the LinkedIn
                <span class="text-blue fw-bold">User Agreement, Privacy Policy,</span> and 
                <span class="text-blue fw-bold">Cookie Policy.</span>
            </div>
            <button type="submit" name="txtBtnSignUp"class="btn--primary fw-bold text-white">Agree & Join</button>
            <div class="mt-5 text-center">Already on LinkedIn? <a href="signin.html" class="fw-bold">Sign in</a></div>
            </form>

            <div class="text-center fs-14">Looking to create a page for a business? <span class="fw-bold text-primary">Get help</span></div>
        </div>
    </div>
</body>
</html>
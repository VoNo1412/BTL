<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | Linkedln</title>
    <link rel="stylesheet" href="./CSS/bootstrap.css">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <style>
        .logo {
            padding: 30px;
        }

        .bg--primary {
            background: white;
            height: 100vh;
        }

        .rounded-10 {
            border-radius: 8px;
        }

        input {
            border: 1px solid #000;
            padding: 3px;
            font-size: 14px;
            height: 48px;
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
            width: 304px;
            height: 48px;
            background-color: #0a66c2;
            border-radius: 24px;
            border: 1px solid transparent;
        }

        .btn--primary:hover {
            background: #1f4182;
        }

        form {
            box-shadow: 0 4px 10px 3px rgb(185, 185, 185);
            background: white;
        }
    </style>
</head>
<body>
    <div class="container-fluid bg--primary">
        <div class="logo">
            <img src="./img/logo.png" alt="logo.png">
        </div>
        <div class="row">
            <form action="process_signIn.php"  method="post" class="p-4 rounded-10" style="max-width: 352px; height:420px; margin: 50px auto 20px;">
                <div class="mb-3">
                    <h3>Sign in</h3>
                    <span class="fs-14">Stay updated on your professional world</span> 
                </div>
                <div class="mb-3">
                    <input type="email" name="txtEmail" class="form-control" placeholder="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <input type="password" name="txtPass" class="form-control" placeholder="Password" id="exampleInputPassword1">
                </div>
                <div class="fw-bold text-blue pb-3">Forget password?</div>
                <?php
                    if(isset($_GET['error'])) {
                        echo "<div class='text-danger'>{$_GET['error']}</div>";
                    }
                ?>
                <button type="submit" name="txtBtnSignIn"class="btn--primary fw-bold text-white mt-3">Sign In</button>
            </form>

            <div class="mt-3 text-center">New to LinkedIn? <a href="signin.html" class="fw-bold">Join now</a></div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Linkedln</title>
    <link rel="stylesheet" href="./CSS/bootstrap.css">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <style>

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
        }

        .sign:hover {
            color: white;
        }

        .btn--primary {
            width: 350px;
            height: 48px;
            background-color: #0a66c2;
            border-radius: 24px;
        }

        .btn--primary:hover {
            background: #1f4182;
        }
    </style>
</head>
<body>
    <div class="app">
        <div class="container">
           <div class="row text-center mt-4">
            <div class="logo">
                <img src="./img/logo.png" alt="logo.png">
            </div>
            <div class="fs-2 text-medium">Make the most of your professional life</div>
           </div>
           <form action="process-signUp.php" method="post" class="border p-4 rounded-10" style="max-width: 400px; height:440px; margin: 50px auto;">
               <div class="email text-gray fs-14">Email</div>
               <input type="email" required name="txtEmail" id="email" class="w-100 rounded-3 px-2">
               <div class="password mt-3 text-gray fs-14">Password (6 or more characters)</div>
               <input type="password" required name="txtPass" id="email" class="w-100 rounded-3 px-2">
               <div class="fs-12 text-gray text-center py-3">By clicking Agree & Join, you agree to the LinkedIn
                    <span class="text-blue fw-bold">User Agreement, Privacy Policy,</span> and 
                    <span class="text-blue fw-bold">Cookie Policy.</span>
               </div>
               <div class="btn--primary">
                   <div  class="sign" name="btnSignUp">Agree & Join</div>
                </div>
               <div class="mt-5 text-center">Already on LinkedIn? <a href="signin.html" class="fw-bold">Sign in</a></div>
           </form>
        </div>
    </div>
</body>
</html>
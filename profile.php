<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./CSS/bootstrap.min.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css"
    integrity="sha512-1fPmaHba3v4A7PaUsComSM4TBsrrRGs+/fv0vrzafQ+Rw+siILTiJa0NtFfvGeyY5E182SDTaF5PqP+XOHgJag=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./CSS/style.css">
  <link rel="stylesheet" href="./CSS/login_user.css">
  <link rel="stylesheet" href="./CSS/login_user1.css">
</head>

<body>
    <div class="container-fluid px-0">
        <div class="container-fluid" style="height: 53px; background-color: white">
            <nav class="navbar navbar-expand-lg pt-0 " style="width: 1080px; margin: 0 auto; height: 53px;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="login_user.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34"
                            viewBox="0 0 34 34" style="color: #3467c2">
                            <title>
                                LinkedIn
                            </title>
      
                            <g>
                                <path
                                    d="M34,2.5v29A2.5,2.5,0,0,1,31.5,34H2.5A2.5,2.5,0,0,1,0,31.5V2.5A2.5,2.5,0,0,1,2.5,0h29A2.5,2.5,0,0,1,34,2.5ZM10,13H5V29h5Zm.45-5.5A2.88,2.88,0,0,0,7.59,4.6H7.5a2.9,2.9,0,0,0,0,5.8h0a2.88,2.88,0,0,0,2.95-2.81ZM29,19.28c0-4.81-3.06-6.68-6.1-6.68a5.7,5.7,0,0,0-5.06,2.58H17.7V13H13V29h5V20.49a3.32,3.32,0,0,1,3-3.58h.19c1.59,0,2.77,1,2.77,3.52V29h5Z"
                                    fill="currentColor"></path>
                            </g>
                        </svg>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search"
                                aria-label="Search">
                        </form>
      
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="border-right: 1px solid gainsboro; height: 50px;">
                            <li class="nav-item pe-3">
                                <a class="nav-link text-center" href="login_user.php">
                                    <div class="nav-icon">
                                        <i class="bi bi-house-fill"></i>
                                    </div>
                                    <div class="nav-context">Home</div>
                                </a>
                            </li>
                            <li class="nav-item pe-3">
                                <a class="nav-link text-center" href="login_mynetwork.php">
                                    <div class="nav-icon">
                                        <i class="bi bi-people-fill"></i> 
                                    </div>
                                    <div class="nav-context">My Network</div>
                                </a>
                            </li>
                            <form  class="nav-item pe-3">
                                <a class="nav-link text-center" href="login_jobs.php">
                                    <div class="nav-icon">
                                        <i class="bi bi-briefcase-fill"></i>
                                    </div>
                                    <input class="nav-context" name="btnJob" style="border: none; background: none;" value="Job" type="submit">
                                </a>
                            </form>
                            <li class="nav-item pe-3">
                                <a class="nav-link text-center" href="#">
                                    <div class="nav-icon">
                                        <i class="bi bi-chat-dots-fill"></i>
                                    </div>
                                    <div class="nav-context">Messaging</div>
                                </a>
                            </li>
                            <li class="nav-item pe-2">
                                <a class="nav-link text-center" href="login_notifications.php">
                                    <div class="nav-icon">
                                        <i class="bi bi-bell-fill"></i> 
                                    </div>
                                    <div class="nav-context">Notifications</div>
                                </a>
                            </li>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                  <div class="lh-1">
                                      <img src="./img/photo1.jpg" id="create-img" style="width: 20px; height: 20px; border-radius: 50%;" alt="">
                                  </div>
                                  <span class="nav-context">Me</span>
                                </button>
                                <ul class="dropdown-menu m-0" aria-labelledby="dropdownMenuButton1"  style="top: 60px; left: -100px;">
                                  <li class="d-block"><a class="dropdown-item" href="#">View Profile</a></li>
                                  <li class="d-block"><a class="dropdown-item" href="signIn.php" name="btnLogout" >Logout</a></li>
                                </ul>
                            </div>    
                        </ul>
                        <ul class="navbar-nav mb-2 mb-lg-0" style="padding-top: 8px;">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                  <div class="lh-1 nav-icon">
                                    <i class="bi bi-grid-3x3-gap"></i>
                                  </div>
                                  <span class="nav-context">Work</span>
                                </button>
                                <ul class="dropdown-menu m-0" aria-labelledby="dropdownMenuButton1">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div> 
                            <li class="nav-item ">
                                <a class="nav-link text-center" href="#">
                                    <div class="nav-icon">
                                        <i class="bi bi-basket-fill"></i>
                                    </div>
                                    <div class="nav-context">Post a job</div>
                                </a>
                            </li>
                          </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container-fluid " style="background-color:blanchedalmond; height: 100vh; ">
            <div class="" style="max-width: 1080px;margin: 0 auto;">
                <div class="row pt-4">
                    <div class="col-md-9 h-100 px-0" style=" width: 782px; ">
                        <div style="border-radius: 12px ; overflow: hidden;">
                            <div style="background-color: #a0b4b7 ;height: 195px;"></div>
                            <div style="height: 350px;">
                            <div style="background-color: #fff ;height: 186px;padding: 20px">
                                <div class="" style=" text-align: right;"><i class="bi bi-pencil"></i></div>
                            <div class="d-flex align-items-center justify-content-between"> 
                                <h1 class="mt-2" style="font-size: 24px;line-height: 30px;  ">liemvv</h1>
                                <h2 style="font-size: 16px;line-height: 20px;"> Truòng Dai hoc Thuy loi   </h2>
                            </div>
                                <div>Student at Truòng Dai hoc Thuy loi</div>
                                <span>thai binh viet nam</span>
                            
                            </div>
    
                            <div class="h-100" style="background-color: #ffffff ;padding: 20px ; ">
                                <div class="d-flex align-items-center justify-content-between" style="gap: 0 20px;">
                                    <div class="p-2" style="border: 1px solid #ededed ; border-radius: 10px;">
                                        <p>Lorem ipsum dolor sit amet coe. Hii optio labore! Voluptates, nulla!</p>
                                        <a>get started</a>
                                    </div>
                                    <div class="p-2" style="border: 1px solid #ededed ; border-radius: 10px;">
                                        <p>Lorem ipsum dolor sit amet coe. Hii optio labore! Voluptates, nulla!</p>
                                        <a>get started</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div style="border-radius: 12px; background-color: #fff;">
                            <div class="p-3" >
                                <img style="object-fit: cover;display: block;max-width: 100%;height: 100%;border-radius: 12px;" src="https://images.unsplash.com/photo-1640622302588-aefc0da2b58f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxNnx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    





<script src="./JS/bootstrap.bundle.min.js"></script>

</body>

</html>
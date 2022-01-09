<?php 
   session_start();

   if(!isset($_SESSION['fullName'])) {
       header("location: signIn.php");
   }
?>


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
    <link rel="stylesheet" href="./CSS/login_user1.css">
</head>

<body style="background-color: #f3f2ef;">
  <div class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 52px; ">
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
                            <li class="d-block"><a class="dropdown-item" href="index.php" name="btnLogout" >Logout</a></li>
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
    </nav>
  </div>

  <div class="container">
    <div class="row px-5 mt-3">
      <div class="col-md-3" style="max-width: 250px;">
        <div class="side-bar" style="border: 1px solid gray;border-radius: 10px ;overflow: hidden;  ">
          <a class="nav-link " style="color: #000000E6;" aria-current="page" href="#"></i> Notifications</a>
          <a class="nav-link " style="color: #000000E6;" aria-current="page" href="#">You’re all caught up! Check back later for new notifications</a>
        </div>
        <button class="nav-link mt-2 " style="border: 1px solid blue;border-radius: 20px; width: 100%;"
          aria-current="page" href="#"><i class="bi bi-pencil-square"></i> Post a free job</button>
      </div>


      <div class="col-md-6">
        <div class="content-header bg-light" style="border: 1px solid black;  border-radius: 10px; overflow: hidden;">
          <p>Try Premium to see jobs where you would be a top applicant</p>
        </div>

      </div>

      <div class="col-md-3" style="padding: 0;">
        <div class="list-people bg-light" style="border: 1px solid black; border-radius: 10px;">
          <h5 class="mt-4 mx-3">Ways to prepare</h5>
          <div class="keeps">
            <div class="row" style="max-width: 100%; border: 1px solid black; border-radius: 10px;margin: 16px 8px;">
              <div class="col-md-3">
                <i style="font-size: 50px;" class="bi bi-lightbulb"></i>
              </div>
              <div class="col-md-9">
                <a href="" style="text-decoration: none;">Best practices</a>
                <p class="mt-2">Get the most out of your job search and stand out to recruiters</p>
              </div>
            </div>


          </div>
        </div>
        <div class="footer">
          <div style=" margin: 8px 1px;text-decoration: 1px solid blue;">
            <ul style="list-style-type: none; padding-left: 30px;padding-right: 30px; ">
              <a style=" padding: 6px;font-size: 12px; line-height: 28px;">About</a>
              <a style="padding: 6px;font-size: 12px; line-height: 28px;">Accessibility</a>
              <a style="padding: 6px;font-size: 12px; line-height: 28px;;">Help Center</a>
              <a style="padding: 6px;font-size: 12px; line-height: 28px;"> <br> Privacy & Terms <i
                  class="bi bi-chevron-compact-down" style="font-size: 12px;"></i></a>
              <a style="padding: 6px;font-size: 12px; line-height: 28px;">Ad Choices</a>
              <a style="padding: 6px;font-size: 12px; line-height: 28px;">Advertising</a>
              <a style="padding: 6px;font-size: 12px; line-height: 28px;">Business Services<i
                  class="bi bi-chevron-compact-down" style="font-size: 12px; "></i></a>
              <a style="padding: 6px;font-size: 12px; line-height: 28px;"> <br> Get the LinkedIn app</a>
              <a style="padding: 6px;font-size: 12px; line-height: 28px;">More</a>
            </ul>
          </div>
          <div class="sub-logo d-flex ms-4" style="list-style-type: none;">

            <div class="sub-logo-text d-flex" style="font-size: 12px;">
              <h6 class="logo-text" style="color: blue;">Linked</h6>
              <h6 class="logo-in ms-1" style="background-color: blueviolet;font-weight: 700;padding: 0 4px;">in</h6>
              <p style="font-size: 12px;">LinkedIn Corporation © 2021</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="./JS/app.js"></script>
  <script src="./JS/bootstrap.bundle.min.js"></script>
</body>

</html>
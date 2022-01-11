<?php 
  require_once("checkLogin.php");
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
  <link rel="stylesheet" href="./CSS/login_mynetwork.css">
  <link rel="stylesheet" href="./CSS/login_user1.css">

  <style>
    .profileuser{
    list-style-type: none;
    right: 0;
    padding: 12px;
    display: none;
}
  </style>
</head>

<body style="background-color: #f3f2ef;">
   <div class="app">
    <div class="container-fluid" style="height: 53px; background-color: white">
      <nav class="navbar navbar-expand-lg pt-0 " style="width: 1080px; margin: 0 auto; height: 53px;">
          <div class="container-fluid">
              <a class="navbar-brand" href="<?php $urfLoginUser ?>">
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
                          <a class="nav-link text-center" href="<?php echo $urfLoginUser ?>">
                              <div class="nav-icon">
                                  <i class="bi bi-house-fill"></i>
                              </div>
                              <div class="nav-context">Home</div>
                          </a>
                      </li>
                      <li class="nav-item pe-3">
                          <a class="nav-link text-center" href="<?php echo $urlmyNet ?>">
                              <div class="nav-icon">
                                  <i class="bi bi-people-fill"></i> 
                              </div>
                              <div class="nav-context">My Network</div>
                          </a>
                      </li>
                      <div  class="nav-item pe-3">
                          <a class="nav-link text-center" href="login_jobs.php">
                              <div class="nav-icon">
                                  <i class="bi bi-briefcase-fill"></i>
                              </div>
                              <div class="nav-context">Job</div>
                          </a>
                      </div>
                      <li class="nav-item pe-3">
                          <a class="nav-link text-center" href="#">
                              <div class="nav-icon">
                                  <i class="bi bi-chat-dots-fill"></i>
                              </div>
                              <div class="nav-context">Messaging</div>
                          </a>
                      </li>
                      <li class="nav-item pe-2">
                          <a class="nav-link text-center" href="<?php echo $urlNotifi ?>">
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
    
  </div>

  <div class="container mt-md-4">
    <div class="row">
      <div class=" col-md-4" style="border: 1px solid #ebeae7; border-radius: 10px;background-color: #fff;padding: 0;">
        <p style="margin-left: 16px; margin-top: 20px">Manage my network</p>
        <div class="sidebar">
          <div class="nav-sidebar">
            <div class="hide">
            </div>
            <div id="abc" class="list-events"style="border-bottom: 1px solid #ebeae7;">
              <div class="topics-items btn--primary topics-items-1 rounded-pill" style="border: 0;font-weight: 600;font-size: 20px;"><i class="bi bi-people-fill"></i>Connections</div> <br>
              <div class="topics-items btn--primary rounded-pill itemsNone topics-link"><i class="bi bi-person-lines-fill"></i>Contacts</div>
              <div class="topics-items btn--primary rounded-pill itemsNone topics-link"><i class="bi bi-person-lines-fill"></i>People | Follow</div>
              <div class="topics-items btn--primary rounded-pill itemsNone topics-link"><i class="bi bi-people"></i>Groups</div>
              <div class="topics-items btn--primary rounded-pill itemsNone topics-link"><i class="bi bi-calendar-date"></i>Events</div>
              <div class="topics-items btn--primary rounded-pill itemsNone topics-link"><i class="bi bi-file-text"></i>Page</div>
              <div class="topics-items btn--primary rounded-pill itemsNone topics-link"><i class="bi bi-newspaper"></i>Newsletters</div>
              <div class="topics-items btn--primary rounded-pill itemsNone topics-link"><i class="bi bi-hash"></i>Hashtags</div>
              <div class="show-more rounded-2">Show more
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                  class="bi bi-arrow g-3-down-short down" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                </svg>
              </div>
            </div>

          </div>

          <div class="img-dreamjob mt-md-2" style="width: 100%;">
            <img src="https://static-exp1.licdn.com/scds/common/u/images/promo/ads/li_evergreen_jobs_ad_300x250_v1.jpg"
              alt="">
          </div>
          <div class="grow" style="text-align: center;border-bottom: 1px solid #ebeae7;border-top:1px solid #ebeae7 ; ">
            <a href="">Grow your network</a>
          </div>
          <div class="footer">
                    <div style=" margin: 8px 1px;background-color: #f3f2ef;text-decoration: 1px solid
            blue;background-color: #fff; ">
                      <ul style=" font-size: 12px;list-style-type: none; padding-left: 50px;padding-right: 50px; ">
                        <a style=" padding: 6px;font-size: 14px; line-height: 28px;">About</a>
            <a style="padding: 6px;font-size: 14px; line-height: 28px;">Accessibility</a>
            <a style="padding: 6px;font-size: 14px; line-height: 28px;;">Help Center</a>
            <a style="padding: 6px;font-size: 14px; line-height: 28px;"> <br> Privacy & Terms <i
                class="bi bi-chevron-compact-down" style="font-size: 12px;"></i></a>
            <a style="padding: 6px;font-size: 14px; line-height: 28px;">Ad Choices</a>
            <a style="padding: 6px;font-size: 14px; line-height: 28px;">Advertising</a>
            <a style="padding: 6px;font-size: 14px; line-height: 28px;">Business Services<i
                class="bi bi-chevron-compact-down" style="font-size: 12px; "></i></a>
            <a style="padding: 6px;font-size: 14px; line-height: 28px;"> <br> Get the LinkedIn app</a>
            <a style="padding: 6px;font-size: 14px; line-height: 28px;">More</a>
            </ul>
          </div>
          <div class="sub-logo d-flex ms-4" style="list-style-type: none;">

            <div class="sub-logo-text d-flex" style="font-size: 12px;">
              <h6 class="logo-text" style="color: blue;">Linked</h6>
              <h6 class="logo-in ms-1" style="background-color: blueviolet;font-weight: 700;">in</h6>
            </div>

            <p style="font-size: 12px; margin-top: 8px;">LinkedIn Corporation © 2021</p>
          </div>
        </div>
      </div>

    </div>

    <div class="col-md-8">
      <div class="manage"style=" border-radius: 10px;background-color: #fff;">
        <p style="width: 100%;height: 100%; padding: 12px;">No pending invitations <a href=""style="float: right;padding: 0 12px;text-decoration: none;">Manage</a></p>
      </div>
      <div class="content"style="border: 1px solid #ebeae7; border-radius: 10px;background-color: #fff;padding: 30px;">
        <div class="profile">
          <i class="bi bi-journal-text"></i>Add personal contacts 
          <p class="mt-4" style="font-family: 'Times New Roman', Times, serif;margin: 0;">We ll periodically import and store your contacts to help you and others connect. You choose who to connect to and who to invite.</p>
          <a href="" style="text-decoration: none;">Learn more</a> <br>
          <input class="mt-5" type="text"> <br>
          <button style="border-radius: 10px;margin-top: 20px;margin-bottom: 10px;">Continue</button> <br>
          <a href="" style="text-decoration: none;">More options</a>
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
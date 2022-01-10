<?php 
  require_once("checkLogin.php");
?>
    

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login_User</title>
  <link rel="stylesheet" href="./CSS/bootstrap.min.css">
  <link rel="stylesheet" href="./CSS/style.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css"
    integrity="sha512-1fPmaHba3v4A7PaUsComSM4TBsrrRGs+/fv0vrzafQ+Rw+siILTiJa0NtFfvGeyY5E182SDTaF5PqP+XOHgJag=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./CSS/style.css">
  <link rel="stylesheet" href="./CSS/login_user.css">
  <link rel="stylesheet" href="./CSS/login_user1.css">
</head>

<body>
  <div class="container-fluid px-0 position-relative" style="background: #f3f2ef;">
    <div class="create-post" id="postImg2" style="display: none;">
      <form action="process_loginUser.php" method="POST" class="px-3 pb-2 h-100" >
        <?php echo "<input name='idUser' class='d-none' value=".$_SESSION['id_user'].">" ?>
        <div class="create-content h-100">
          <div class="create-title py-3 h5 d-flex">Create a post
            <div class="ms-auto Close text-black cursor-pointer"><i class="bi bi-x-lg Close"></i></div>
          </div>
          <div class="create-status pt-2">
            <div class="create-user py-1 d-flex align-items-center" style="gap: 0 10px;">
              <div class="create-img">
                <img src="<?php echo $_SESSION['img'] ?>" id="create-img" alt="img-user"
                  style="width: 55px; height: 55px; border-radius: 50%;">
              </div>
              <div class="create-info">
                <div class="create-name"><?php echo $_SESSION['fullName'] ?></div>
                <button type="button" class="btn border dropdown-toggle rounded-pill"
                  data-bs-toggle="dropdown" aria-expanded="false" style="line-height: 10px;">
                  <i class="bi bi-circle-half"></i>
                  <span class="h6">Anyone</span>
                </button>
              </div>
            </div>

            <textarea class="form-control px-0 py-2 flex-grow-1"
              placeholder="What do you want to talk about?" style="border: none; overflow: hidden;"
              name="txtPost";
              id="txtContent"></textarea>
              <div class="">
                <img src="" alt=""  class="takeImg">
              </div>
          </div>
          <hr class="mb-0">
          <div class=" d-flex py-1 align-items-center justify-content-between">
            <ul class="list-create mb-0 ps-0">
              <li class="item-create">
                <i class="bi bi-image-fill btnPhoto"></i>
              </li>
              <li class="item-create">
                <i class="bi bi-youtube"></i>
              </li>
              <li class="item-create">
                <i class="bi bi-file-earmark-text-fill"></i>
              </li>
              <li class="item-create">
                <i class="bi bi-briefcase-fill"></i>
              </li>
            </ul>

            <button type="submit" name="btnSubmit" class="btn btn-post border rounded-pill">
              post
            </button>
          </div>
        </div>
      </form>
    </div>

    <div class="create-post" id="post-img" style="display: none;">
      <form action="process_upload.php"  id="btnForm" method="post" enctype="multipart/form-data" class="px-3 pb-2 h-100">
        <div class="create-content justify-content-space-between h-100" >
          <div class=" py-3 h5 d-flex mb-0">Edit your photo
            <div class="ms-auto Close text-black  cursor-pointer Close"><i class="bi bi-x-lg Close"></i></div>
          </div>
          <hr style="margin-top: 0;">
          <div class="create-status">
            <input type="file" name="file"  class="photo py-2">
            <img src="" alt="" class="display_img" accept="image/png, image/jpg">
          </div>
          <hr>
          <div class=" d-flex py-1 align-items-center justify-content-between">
            <button type="button" class="btn ms-auto me-2 border-primary text-primary btn-cancel border rounded-pill">
              Cancel
            </button>
             <button type="submit" name="btnImg" class="btn btn-done border rounded-pill">Done</button>
          </div>
        </div>
      </form>
    </div>

    <div class="overflow" style="display: none;"></div>
    <div class="container-fluid" style="height: 53px; background-color: white">
        <nav class="navbar navbar-expand-lg pt-0 " style="width: 1080px; margin: 0 auto; height: 53px;">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo $urfLoginUser ?>">
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
                        <form class="nav-item pe-3">
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
                            <a class="nav-link text-center" href="<?php
                              $urlNotifi
                            ?>">
                                <div class="nav-icon">
                                    <i class="bi bi-bell-fill"></i> 
                                </div>
                                <div class="nav-context">Notifications</div>
                            </a>
                        </li>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              <div class="lh-1">
                                  <img src="<?php echo $_SESSION['img'] ?>" id="create-img" style="width: 20px; height: 20px; border-radius: 50%;" alt="">
                              </div>
                              <span class="nav-context">Me</span>
                            </button>
                            <ul class="dropdown-menu m-0" aria-labelledby="dropdownMenuButton1"  style="top: 60px; left: -100px;">
                              <li class="d-block"><a class="dropdown-item" href="#">View Profile</a></li>
                              <li class="d-block"><a class="dropdown-item" href="logout.php" name="btnLogout" >Logout</a></li>
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
    <div class="container-fluid">
      <div class="row justify-content-center" style="width: 1230px; gap: 0 20px; height: 100%; margin: 0 auto; padding: 30px 0 0;">
        <div class="col-md-3 px-0" style="max-width: 232px;">
          <div class="side-bar"
            style="border: 1px solid gainsboro;border-radius: 10px ;overflow: hidden;">
            <div class="profile-user">
              <div class="profile-header " style="text-align: center; ">
                <div class="bg-secondary" style="width: 100%; height: 60px;"></div>
                <div class="bg-light">
                <a href="<?php echo $urlProfile ?>">
                  <img src="<?php echo $_SESSION['img'] ?>" class="rounded-circle" id="profile-img"
                    style="width: 68px; height: 68px; transform: translateY(-50%);" alt="">
                </a>
                </div>
                <div class="profile-name bg-light fw-bold text-capitalize">
                  <?php
                     if(isset($_SESSION['fullName']))
                        {
                            echo $_SESSION['fullName'];
                        }
                  ?>
                </div>
                <div class="profile-detail bg-light">--</div>
              </div>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center
                        "> <span style="font-size: 12px;">Conections <br> <span
                    style="font-weight: 700;">Grow your network</span> </span> <i
                  class="bi bi-person-plus d-flex flex-row-reverse  "></i></li>
              <li class="list-group-item"><span style="font-size: 12px;">Access exclusive tools &
                  insights <br> <span style="font-weight: 700;"><i
                      class="bi bi-bookmark me-2"></i>Try Premium for free</span> </span> </li>
              <li class="list-group-item"><i class="bi bi-bookmark-fill me-2"></i>My item</li>
            </ul>
          </div>

          <div class="card mt-3"
            style="background-color: beige; border-radius: 10px; overflow: hidden;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a href="" style="text-decoration: none;">Groups </a></li>
              <li class="list-group-item"><a href="" style="text-decoration: none;">Events</a></li>
              <li class="list-group-item"><a href="" style="text-decoration: none;">Flowers
                  Hashtags</a></li>
            </ul>
            <div class="card-footer">
              Discover more
            </div>
          </div>
        </div>

        <div class="col-md-6 px-0" style="max-width: 540px;">
          <div class="content-header"
            style="border: 1px solid gainsboro;  border-radius: 10px; overflow: hidden; height: 116px;">
            <div class="post d-flex" style="align-items: center; padding: 12px 0 6px 0; background: #fff">
              <img id="create-img"  class=" rounded-circle ms-3" style="width: 46px; height: 46px;"
                src="<?php echo $_SESSION['img'] ?>" alt="">
              <input class="ps-3 flex-grow-1 status" type="text" placeholder="Start a post"
                style="margin:0 10px;border: 1px solid gainsboro; height: 48px; border-radius: 30px; cursor: pointer;"
                readonly>
            </div>

            <div class="function">
              <div class="list-function"
                style="color: darkgrey;">
                <div class="p-2 text-center d-flex btnPhoto">
                  <i class="bi bi-image" style="color: dodgerblue; "></i><span>Photo</span>
                </div>
                <div class="p-2 text-center d-flex">
                  <i class="bi bi-youtube" style="color: red;"></i><span>Video</span>
                </div>
                <div class="p-2 text-center d-flex">
                  <i class="bi bi-calendar-date" style="color: sandybrown;"></i><span>Event</span>
                </div>
                <div class="p-2 text-center d-flex"><i class="bi bi-card-text"
                    style="color: tomato;"></i><span>Write article</span></div>
              </div>
            </div>
          </div>

          <hr>
          
          <div class="posted-content" style="height: max-content; ">
         <?php
                $id_user = $_SESSION['id_user'];
                //Bước 01: Kết nối Database Server
                $conn = mysqli_connect('localhost','root','','btl');
                if(!$conn){
                    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                }
                // // Bước 02: Thực hiện truy vấn
                $sql = "SELECT db_user.postIMG, db_user.first_name, db_user.last_name, db_post.text_post, db_user.images 
                FROM db_user , db_post where db_user.id_user = db_post.id_user and db_user.id_user = '$id_user'";
            
                $result = mysqli_query($conn,$sql);
                
                //Bước 03: Xử lý kết quả truy vấn
                if(mysqli_num_rows($result) > 0){
                   while($row = mysqli_fetch_assoc($result)) {
                   $name = '
                   <div class="content-header my-4" style="border: 1px solid gainsboro;  background-color: #fff; overflow: hidden; border-radius: 10px; ">
                   <div class="post d-flex"
                   style="align-items: center;background: white;;padding: 12px 0 6px 0">
                   <img class="rounded-circle ms-3"
                       style="width: 46px; height: 46px;" src='.$row['images'].'
                       alt="">
                   <div class="create-name1 px-2 flex-grow-1" style="font-size: 14px;">'.$row['first_name'].$row['last_name'] .'<div
                       style="line-height: 0.8;">--</div>
                       <div class="small d-flex align-items-center" style="color: #b4b4b4 ;gap: 0 3px;">
                       now
                       <i class="bi bi-dot" style="color: black;"></i>
                       <div class="icon-earth flex-grow-1">
                           <svg xmlns="http://www.w3.org/2000/svg" style="color: black; opacity: 0.6;"
                           viewBox="0 0 16 16" data-supported-dps="16x16" fill="currentColor"
                           class="mercado-match" width="16" height="16" focusable="false">
                           <path
                               d="M8 1a7 7 0 107 7 7 7 0 00-7-7zM3 8a5 5 0 011-3l.55.55A1.5 1.5 0 015 6.62v1.07a.75.75 0 00.22.53l.56.56a.75.75 0 00.53.22H7v.69a.75.75 0 00.22.53l.56.56a.75.75 0 01.22.53V13a5 5 0 01-5-5zm6.24 4.83l2-2.46a.75.75 0 00.09-.8l-.58-1.16A.76.76 0 0010 8H7v-.19a.51.51 0 01.28-.45l.38-.19a.74.74 0 01.68 0L9 7.5l.38-.7a1 1 0 00.12-.48v-.85a.78.78 0 01.21-.53l1.07-1.09a5 5 0 01-1.54 9z">
                           </path>
                           </svg>
                       </div>
                       </div>
                   </div>
                   <div class="fs-3" style="position: relative; top: -18px; left: -10px;"><i class="bi bi-three-dots"></i></div>
                   </div>
                   
                   <div class="px-4 py-2" id="posted-desc">
                      '.$row['text_post'].'
                      '.$row['postIMG'].'
                   </div>
           
                   <div class="menu-icon">
                   <div class="post-item btnLike btn">
                       <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-supported-dps="24x24" fill="currentColor" class="mercado-match" width="24" height="24" focusable="false">
                       <path d="M19.46 11l-3.91-3.91a7 7 0 01-1.69-2.74l-.49-1.47A2.76 2.76 0 0010.76 1 2.75 2.75 0 008 3.74v1.12a9.19 9.19 0 00.46 2.85L8.89 9H4.12A2.12 2.12 0 002 11.12a2.16 2.16 0 00.92 1.76A2.11 2.11 0 002 14.62a2.14 2.14 0 001.28 2 2 2 0 00-.28 1 2.12 2.12 0 002 2.12v.14A2.12 2.12 0 007.12 22h7.49a8.08 8.08 0 003.58-.84l.31-.16H21V11zM19 19h-1l-.73.37a6.14 6.14 0 01-2.69.63H7.72a1 1 0 01-1-.72l-.25-.87-.85-.41A1 1 0 015 17l.17-1-.76-.74A1 1 0 014.27 14l.66-1.09-.73-1.1a.49.49 0 01.08-.7.48.48 0 01.34-.11h7.05l-1.31-3.92A7 7 0 0110 4.86V3.75a.77.77 0 01.75-.75.75.75 0 01.71.51L12 5a9 9 0 002.13 3.5l4.5 4.5H19z"></path>
                       </svg></span>
                       <span>Like</span>
                   </div>
                   <div class="post-item">
                       <span>
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-supported-dps="24x24" fill="currentColor" class="mercado-match" width="24" height="24" focusable="false">
                           <path d="M7 9h10v1H7zm0 4h7v-1H7zm16-2a6.78 6.78 0 01-2.84 5.61L12 22v-4H8A7 7 0 018 4h8a7 7 0 017 7zm-2 0a5 5 0 00-5-5H8a5 5 0 000 10h6v2.28L19 15a4.79 4.79 0 002-4z"></path>
                       </svg>
                       <span>Comment</span>
                       </span>
                   </div>
                   <div class="post-item">
                       <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-supported-dps="24x24" fill="currentColor" class="mercado-match" width="24" height="24" focusable="false">
                       <path d="M23 12l-4.61 7H16l4-6H8a3.92 3.92 0 00-4 3.84V17a4 4 0 00.19 1.24L5.12 21H3l-.73-2.22A6.4 6.4 0 012 16.94 6 6 0 018 11h12l-4-6h2.39z"></path>
                       </svg></span>
                       <span>Share</span>
                   </div>
                   <div class="post-item">
                       <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-supported-dps="24x24" fill="currentColor" class="mercado-match" width="24" height="24" focusable="false">
                       <path d="M21 3L0 10l7.66 4.26L16 8l-6.26 8.34L14 24l7-21z"></path>
                       </svg></span>
                       <span>Send</span>
                   </div>
                   </div>
               </div> 
               ';
               echo $name;
                }
              }

          
                mysqli_close($conn); 
          ?>
               

               
          
          </div>
        </div>

        <div class="col-md-3 px-0" style="">
          <div class="list-people  p-3" style="max-width: 315px; height: 370px; background: white; border-radius: 12px;">
            <div class="h6 d-flex align-items-center">Add to your feed 
              <div class="ms-auto">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" data-supported-dps="16x16" fill="currentColor" class="mercado-match" width="16" height="16" focusable="false">
              <path d="M12 2H4a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2V4a2 2 0 00-2-2zm-3 8v2H7.5A1.5 1.5 0 016 10.5a1.56 1.56 0 01.1-.5l1.08-3h2.13l-1.09 3zm0-3.75A1.25 1.25 0 1110.25 5 1.25 1.25 0 019 6.25z"></path>
              </svg></div>
            </div>
            <div class="list-item row align-items-start mt-4">
              <div class="col-md-3 pe-0 list-img">
                <img src="./img/photo1.jpg" alt="" style="width: 50px; height: 50px; border-radius: 50%; ">
              </div>
              <div class="col-md-9 ps-0 list-content flex-column">
                <h6 class="mb-0">VietNamWorks</h6>
                <small>Company Human Resource</small>
                <button style="color: #666666; border: 1px solid gray" class="mt-1 rounded-pill btn px-3 py-1  fw-bold sign">
                  <span><i class="bi bi-plus-lg"></i></span>
                  Follow
                </button>
              </div>
            </div>

            <div class="list-item row align-items-start mt-2">
              <div class="col-md-3 pe-0 list-img">
                <img src="./img/photo2.jpg" alt="" style="width: 50px; height: 50px; border-radius: 50%; ">
              </div>
              <div class="col-md-9 ps-0 list-content">
                <h6 class="mb-0">The Shy</h6>
                <small>Company Game City</small>
                <button style="color: #666666; border: 1px solid gray" class="mt-1 rounded-pill btn px-3 py-1  fw-bold sign">
                  <span><i class="bi bi-plus-lg"></i></span>
                  Follow
                </button>
              </div>
            </div>

            <div class="list-item row align-items-start mt-2">
              <div class="col-md-3 pe-0 list-img">
                <img src="./img/photo3.jpg" alt="" style="width: 50px; height: 50px; border-radius: 50%; ">
              </div>
              <div class="col-md-9 ps-0 list-content">
                <h6 class="mb-0">Blog VoNo</h6>
                <small>Company Kmowledge</small>
                <button style="color: #666666; border: 1px solid gray" class="mt-1 rounded-pill btn px-3 py-1  fw-bold sign">
                  <span><i class="bi bi-plus-lg"></i></span>
                  Follow
                </button>
              </div>
            </div>

            <div class="mt-4 fw-bold" style="font-size: 13px; color: gray;">
              View all recommendations 
            </div>
          </div>
          <div class="p-2 mt-3" style="max-width: 315px; background: white; border-radius: 12px;">
            <img src="https://static-exp1.licdn.com/scds/common/u/images/promo/ads/li_evergreen_jobs_ad_300x250_v1.jpg" alt="">
          </div>
          <div class="footer" style="margin: 8px 1px;background-color: #f3f2ef;">
            <ul style="font-size: 12px;">
              <li style="padding: 6px">About</li>
              <li style="padding: 6px">Accessibility</li>
              <li style="padding: 6px">Help Center</li>
              <li style="padding: 6px">Privacy & Terms <i class="bi bi-chevron-compact-down"></i>
              </li>
              <li style="padding: 6px">Ad Choices</li>
              <li style="padding: 6px">Advertising</li>
              <li style="padding: 6px">Business Services<i class="bi bi-chevron-compact-down"></i>
              </li>
              <li style="padding: 6px">Get the LinkedIn app</li>
              <li style="padding: 6px">More</li>
            </ul>
          </div>
          <div class="sub-logo d-flex">
            <li>
              <div class="sub-logo-text d-flex" style="font-size: 12px;">
                <h6 class="logo-text" style="color: blue;">Linked</h6>
                <h6 class="logo-in ms-1" style="background-color: blueviolet;font-weight: 700;">in
                </h6>
              </div>
            </li>
            <p style="font-size: 12px; margin-top: 8px;">LinkedIn Corporation © 2021</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="./JS/login_user.js"></script>
  <script src="./JS/bootstrap.bundle.min.js"></script>
</body>
        
</html>
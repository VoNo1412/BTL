<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job</title>
  <link rel="stylesheet" href="./CSS/bootstrap.min.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css"
    integrity="sha512-1fPmaHba3v4A7PaUsComSM4TBsrrRGs+/fv0vrzafQ+Rw+siILTiJa0NtFfvGeyY5E182SDTaF5PqP+XOHgJag=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./CSS/style.css">
  <link rel="stylesheet" href="./CSS/user.css">
  
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container px-lg-7 py-2">
      <a class="navbar-brand" href="index.php">
        <img src="./img/logo.png" class="logo" alt="logo.png">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 ps-md-2 flex-grow-1">
          <form action="#" method="post">
            <li class="nav-item dropdown border" style="border-radius: 6px 0 0 6px;">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Job
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">People</a></li>
                <li><a class="dropdown-item" href="#">Learing</a></li>
              </ul>
            </li>
          </form>
          <form class="d-flex flex-grow-1">
            <input class="form-control me-2" type="search" placeholder="Search Job"
              aria-label="Search">
            <input class="form-control me-2" type="search" placeholder="Location"
              aria-label="Search">
            <button class="btn btn-outline-success" type="submit">
              <i class="bi bi-search"></i>
            </button>
          </form>
        </ul>

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item px-lg-1">
            <a href="signup.php" class="nav-link px-lg-3 join-now rounded-2">Join now</a>
          </li>
          <li class="nav-item px-lg-3">
            <a href="signIn.php" class=" rounded-pill border-primary btn px-4 text-primary fw-bold sign">Sign
              in</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <div class="container px-lg-7 py-2 justify-content-start">
    <div class="btn-group">
      <button type="button" class="btn btn-success rounded-pill dropdown-toggle"
        data-bs-toggle="dropdown" aria-expanded="false">
        Any Time
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault"
                id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                Past 24 Hours
              </label>
            </div>
          </a></li>
        <li><a class="dropdown-item" href="#">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault"
                id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                Past week
              </label>
            </div>
          </a></li>
        <li class="ps-md-3 btn--primary border-none ">
          <button type="button" class="px-3 py-1 btn-primary rounded-pill">
            Done
          </button>
        </li>
      </ul>
    </div>

    <div class="btn-group">
      <button type="button" class="btn border rounded-pill dropdown-toggle"
        data-bs-toggle="dropdown" aria-expanded="false">
        Company
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Default checkbox
              </label>
            </div>
          </a></li>
        <li><a class="dropdown-item" href="#">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                checked>
              <label class="form-check-label" for="flexCheckChecked">
                Checked checkbox
              </label>
            </div>
          </a></li>
        <li class="ps-md-3 btn--primary border-none ">
          <button type="button" class="px-3 py-1 btn-primary rounded-pill">
            Done
          </button>
        </li>
      </ul>
    </div>

    <div class="btn-group">
      <button type="button" class="btn border rounded-pill dropdown-toggle"
        data-bs-toggle="dropdown" aria-expanded="false">
        Location
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault"
                id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                Past 24 Hours
              </label>
            </div>
          </a></li>
        <li><a class="dropdown-item" href="#">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault"
                id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                Past week
              </label>
            </div>
          </a></li>
        <li class="ps-md-3 btn--primary border-none ">
          <button type="button" class="px-3 py-1 btn-primary rounded-pill">
            Done
          </button>
        </li>
      </ul>
    </div>

    <div class="btn-group">
      <button type="button" class="btn border rounded-pill dropdown-toggle"
        data-bs-toggle="dropdown" aria-expanded="false">
        Job Type
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault"
                id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                Past 24 Hours
              </label>
            </div>
          </a></li>
        <li><a class="dropdown-item" href="#">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault"
                id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                Past week
              </label>
            </div>
          </a></li>
        <li class="ps-md-3 btn--primary border-none ">
          <button type="button" class="px-3 py-1 btn-primary rounded-pill">
            Done
          </button>
        </li>
      </ul>
    </div>
  </div>

  

  <!--  active-job -->
  <div class="container px-lg-7 py-2 applyJob">
    <div class="row px-4 position-relative">
      <div class="col-md-6 px-0 border-end" style="max-width: 507px;">
          <p>7,000+ Jobs in Hanoi Capital Region (104 new)</p>
          <ul class="list-group">
              <?php
                    $conn = mysqli_connect("localhost", "root", "", "btl");
                    if(!$conn) {
                        die("Connect failure");
                    }
            
                    $sql = "SELECT user.images, user.first_name, user.last_name, job.address_job, job.post_job
                     FROM db_user user, db_job job where user.id_user = job.id_user";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result)) {
                      while($row = mysqli_fetch_assoc($result)) {
                       
              ?>     
                      <li class="list-job border-bottom p-3">
                        <div class="row">
                          <div class="col-md-2 pe-0">
                            <img src="<?php echo $row['images']?>" alt="img" id="txtUser" class="txtUser"
                              style="width: 56px; height: 56px;">
                          </div>
                          <div class="col-md-10 ps-0">
                            <a href="#" class="h5 txtName" id="txtName"><?php echo $row['first_name'] . $row['last_name'] ?></a>
                            <p class="mb-0 py-1 txtAddress" id="txtAddress"><?php echo $row['address_job']?></p>
                            <span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" focusable="false" class="result-benefits__icon-svg lazy-loaded">
                                <path d="M14.7 10H17L11.5 18L8 14.5L9.3 13.2L11.2 15.1L14.7 10ZM20 3V19C20 20.7 18.7 22 17 22H7C5.3 22 4 20.7 4 19V3H9.7L10.2 2C10.6 1.4 11.2 1 12 1C12.7 1 13.4 1.4 13.8 2L14.3 3H20ZM18 5H15.4L16 6.1V7H8V6.1L8.6 5H6V19C6 19.6 6.4 20 7 20H17C17.6 20 18 19.6 18 19V5Z" fill="currentColor"></path>
                                </svg>
                            </span>
                            <div class="txtPost_Job px-1 d-none">
                              <?php echo $row['post_job'] ?>
                           </div>
                            <span class="small">Be an early applicant</span>
                            <div class="txtTime small">4 days ago</div>
                          </div>
                        </div>
                      </li>
                      <?php 

                }
              }

              mysqli_close($conn)
            ?>
      
            <!-- <li class="list-job border-bottom p-3">
              <div class="row">
                <div class="col-md-2 pe-0">
                  <img src="./img/img1.jpeg" alt="img" id="txtUser" class="txtUser"
                    style="width: 56px; height: 56px;">
                </div>
                <div class="col-md-10 ps-0">
                  <a href="#" class="h5 txtName" id="txtName">HR & Admin Assistant</a>
                  <p class="mb-0 py-1 txtAddress" id="txtAddress">Pizza Hut Việt Nam Hanoi, Hanoi, Vietnam</p>
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" focusable="false" class="result-benefits__icon-svg lazy-loaded">
                      <path d="M14.7 10H17L11.5 18L8 14.5L9.3 13.2L11.2 15.1L14.7 10ZM20 3V19C20 20.7 18.7 22 17 22H7C5.3 22 4 20.7 4 19V3H9.7L10.2 2C10.6 1.4 11.2 1 12 1C12.7 1 13.4 1.4 13.8 2L14.3 3H20ZM18 5H15.4L16 6.1V7H8V6.1L8.6 5H6V19C6 19.6 6.4 20 7 20H17C17.6 20 18 19.6 18 19V5Z" fill="currentColor"></path>
                      </svg>
                  </span>
                  <span class="small">Be an early applicant</span>
                  <div class="txtTime small">4 days ago</div>
                </div>
              </div>
            </li>
            <li class="list-job border-bottom p-3">
              <div class="row">
                <div class="col-md-2 pe-0">
                  <img src="./img/img5.jpeg" alt="img" id="txtUser" class="txtUser"
                    style="width: 56px; height: 56px;">
                </div>
                <div class="col-md-10 ps-0">
                  <a href="#" class="h5 txtName" id="txtName">ZED</a>
                  <p class="mb-0 py-1 txtAddress" id="txtAddress">Pizza Hut Việt Nam Hanoi, Hanoi, Vietnam</p>
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" focusable="false" class="result-benefits__icon-svg lazy-loaded">
                      <path d="M14.7 10H17L11.5 18L8 14.5L9.3 13.2L11.2 15.1L14.7 10ZM20 3V19C20 20.7 18.7 22 17 22H7C5.3 22 4 20.7 4 19V3H9.7L10.2 2C10.6 1.4 11.2 1 12 1C12.7 1 13.4 1.4 13.8 2L14.3 3H20ZM18 5H15.4L16 6.1V7H8V6.1L8.6 5H6V19C6 19.6 6.4 20 7 20H17C17.6 20 18 19.6 18 19V5Z" fill="currentColor"></path>
                      </svg>
                  </span>
                  <span class="small">Be an early applicant</span>
                  <div class="txtTime small">4 days ago</div>
                </div>
              </div>
            </li>
            <li class="list-job border-bottom p-3">
              <div class="row">
                <div class="col-md-2 pe-0">
                  <img src="./img/img2.jpeg" alt="img" id="txtUser" class="txtUser"
                    style="width: 56px; height: 56px;">
                </div>
                <div class="col-md-10 ps-0">
                  <a href="#" class="h5 txtName" id="txtName">HR & Admin Assistant</a>
                  <p class="mb-0 py-1 txtAddress" id="txtAddress">Pizza Hut Việt Nam Hanoi, Hanoi, Vietnam</p>
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" focusable="false" class="result-benefits__icon-svg lazy-loaded">
                      <path d="M14.7 10H17L11.5 18L8 14.5L9.3 13.2L11.2 15.1L14.7 10ZM20 3V19C20 20.7 18.7 22 17 22H7C5.3 22 4 20.7 4 19V3H9.7L10.2 2C10.6 1.4 11.2 1 12 1C12.7 1 13.4 1.4 13.8 2L14.3 3H20ZM18 5H15.4L16 6.1V7H8V6.1L8.6 5H6V19C6 19.6 6.4 20 7 20H17C17.6 20 18 19.6 18 19V5Z" fill="currentColor"></path>
                      </svg>
                  </span>
                  <span class="small">Be an early applicant</span>
                  <div class="txtTime small">4 days ago</div>
                </div>
              </div>
            </li>
            <li class="list-job border-bottom p-3">
              <div class="row">
                <div class="col-md-2 pe-0">
                  <img src="./img/img6.jpeg" alt="img" id="txtUser" class="txtUser"
                    style="width: 56px; height: 56px;">
                </div>
                <div class="col-md-10 ps-0">
                  <a href="#" class="h5 txtName" id="txtName">Vo No</a>
                  <p class="mb-0 py-1 txtAddress" id="txtAddress">Pizza Hut Việt Nam Hanoi, Hanoi, Vietnam</p>
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" focusable="false" class="result-benefits__icon-svg lazy-loaded">
                      <path d="M14.7 10H17L11.5 18L8 14.5L9.3 13.2L11.2 15.1L14.7 10ZM20 3V19C20 20.7 18.7 22 17 22H7C5.3 22 4 20.7 4 19V3H9.7L10.2 2C10.6 1.4 11.2 1 12 1C12.7 1 13.4 1.4 13.8 2L14.3 3H20ZM18 5H15.4L16 6.1V7H8V6.1L8.6 5H6V19C6 19.6 6.4 20 7 20H17C17.6 20 18 19.6 18 19V5Z" fill="currentColor"></path>
                      </svg>
                  </span>
                  <span class="small">Be an early applicant</span>
                  <div class="txtTime small">4 days ago</div>
                </div>
              </div>
            </li>
            <li class="list-job border-bottom p-3">
              <div class="row">
                <div class="col-md-2 pe-0">
                  <img src="./img/img6.jpeg" alt="img" id="txtUser" class="txtUser"
                    style="width: 56px; height: 56px;">
                </div>
                <div class="col-md-10 ps-0">
                  <a href="#" class="h5 txtName" id="txtName">Liemvv</a>
                  <p class="mb-0 py-1 txtAddress" id="txtAddress">Pizza Hut Việt Nam Hanoi, Hanoi, Vietnam</p>
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" focusable="false" class="result-benefits__icon-svg lazy-loaded">
                      <path d="M14.7 10H17L11.5 18L8 14.5L9.3 13.2L11.2 15.1L14.7 10ZM20 3V19C20 20.7 18.7 22 17 22H7C5.3 22 4 20.7 4 19V3H9.7L10.2 2C10.6 1.4 11.2 1 12 1C12.7 1 13.4 1.4 13.8 2L14.3 3H20ZM18 5H15.4L16 6.1V7H8V6.1L8.6 5H6V19C6 19.6 6.4 20 7 20H17C17.6 20 18 19.6 18 19V5Z" fill="currentColor"></path>
                      </svg>
                  </span>
                  <span class="small">Be an early applicant</span>
                  <div class="txtTime small">4 days ago</div>
                </div>
              </div>
            </li>
            <li class="list-job border-bottom p-3">
              <div class="row">
                <div class="col-md-2 pe-0">
                  <img src="./img/img6.jpeg" alt="img" id="txtUser" class="txtUser"
                    style="width: 56px; height: 56px;">
                </div>
                <div class="col-md-10 ps-0">
                  <a href="#" class="h5 txtName" id="txtName">HR & Admin Assistant</a>
                  <p class="mb-0 py-1 txtAddress" id="txtAddress">Pizza Hut Việt Nam Hanoi, Hanoi, Vietnam</p>
                  <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" focusable="false" class="result-benefits__icon-svg lazy-loaded">
                      <path d="M14.7 10H17L11.5 18L8 14.5L9.3 13.2L11.2 15.1L14.7 10ZM20 3V19C20 20.7 18.7 22 17 22H7C5.3 22 4 20.7 4 19V3H9.7L10.2 2C10.6 1.4 11.2 1 12 1C12.7 1 13.4 1.4 13.8 2L14.3 3H20ZM18 5H15.4L16 6.1V7H8V6.1L8.6 5H6V19C6 19.6 6.4 20 7 20H17C17.6 20 18 19.6 18 19V5Z" fill="currentColor"></path>
                      </svg>
                  </span>
                  <span class="small">Be an early applicant</span>
                  <div class="txtTime small">4 days ago</div>
                </div>
              </div>
            </li> -->
          </ul>
        </div>
        
        <div class="col-md-6 flex-grow-1 apply">
           <div class="content">
            <div class="job-right">
              <div class="border w-100" style="border-radius: 10px; height: 280px;">
                <ul class="list-group">
                  <li class="cursor p-4 ">
                    <div class="row flex-column">
                      <div class="col-md-12 pe-0 d-flex justify-content-between">
                        <img src="./img/img6.jpeg" alt="img" id="txtUser" class="txtUser"
                          style="width: 72px; height: 72px;">
                          <i class="bi bi-three-dots report"></i>
                      </div>
                      <div class="col-md-10">
                        <a href="#" class="h5 mt-2 d-block txtName" id="txtName">
                          <h2 class="mb-0" style="font-size: 24px;">VonO</h2>
                        </a>
    
                        <p class="mb-0 txtAddress"  style="max-width: 100%" id="txtAddress">Pizza Hut Việt Nam <i class="bi bi-dot"></i> Hanoi, Hanoi, Vietnam</p>
    
                        <div class="py-1 mb-3 d-flex align-items-center">
                          <div class="txtTime small p-0 pe-2">4 days ago</div>
                          <span class="small"> <i class="bi bi-dot"></i> <i class="bi bi-stopwatch"></i> <span>Be among the first 25 applicants</span></span>
                        </div>
    
                        <div class="btns">
                          <button class=" rounded-pill border-primary btn px-4 text-light bg-primary fw-bold sign">
                            Apply on company website
                            </button>
                            <button class="ms-2 rounded-pill border-primary btn px-4 text-primary fw-bold sign">Save</button>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
      
              <div class="txtDetail px-1">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis, porro fugiat architecto ad corporis quis quo, nam ratione modi tenetur at suscipit nisi magni mollitia repellat, sapiente asperiores ex quae impedit nobis quam. Minus corporis optio, saepe fuga assumenda facere ipsa facilis, amet, fugiat recusandae laudantium qui aperiam ratione quae.  
              </div>
            
              <div class="show-more rounded-2">Show more
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                  class="bi bi-arrow g-3-down-short down" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z" />
                </svg>
              </div>
  
              <div class="row ps-3">
                <div class="col-md-6">
                   <div>
                      <div class="level">Seniority level</div>
                      <div class="job-level fw-bold">Associate</div>
                   </div>
                   <div>
                     <div class="job-function mt-md-2">Job function</div>
                     <div class="fw-bold">Human Resources</div>
                   </div>
  
                </div>
                <div class="col-md-6">
                  <div class="contact">Employment type</div>
                  <div class="job-contact fw-bold">Contract</div>
                </div>
              </div>
            </div>
           </div>
        </div>
      </div>
  </div>

  <script src="./JS/job.js"></script>
  <script src="./JS/bootstrap.bundle.min.js"></script>
</body>

</html>
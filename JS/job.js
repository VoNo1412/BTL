
let lists = document.querySelectorAll(".list-job");
let apply = document.querySelector(".apply");


function removeActive() {
    lists.forEach(el => {
        el.classList.remove("active-job");
    })
}

function delayJob() {
    lists.forEach(list => {
        list.addEventListener("click", () => {
            removeActive();
            list.classList.add("active-job");
            let img = list.getElementsByTagName("img")[0].src;
            let heading = list.getElementsByTagName("a")[0].textContent;
            let address = list.getElementsByTagName("p")[0].textContent;
            let time = list.getElementsByClassName("txtTime")[0].textContent;
            apply.innerHTML = `
                <div class="content">
                <div class="job-right">
                  <div class="border w-100" style="border-radius: 10px; height: 280px;">
                    <ul class="list-group">
                      <li class="cursor p-4 ">
                        <div class="row flex-column">
                          <div class="col-md-12 pe-0 d-flex justify-content-between">
                            <img src="${img}" alt="img" id="txtUser" class="txtUser"
                              style="width: 72px; height: 72px;">
                              <i class="bi bi-three-dots report"></i>
                          </div>
                          <div class="col-md-10">
                            <a href="#" class="h5 mt-2 d-block txtName" id="txtName">
                              <h2 class="mb-0" style="font-size: 24px;">${heading}</h2>
                            </a>
        
                            <p class="mb-0 txtAddress"  style="max-width: 100%" id="txtAddress">${address}</p>
        
                            <div class="py-1 mb-3 d-flex align-items-center">
                              <div class="txtTime small p-0 pe-2">${time} days ago</div>
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
        
                  <div class="txtDetail px-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet aut eligendi id fugiat deserunt. Possimus explicabo non maiores adipisci dolore ducimus voluptatem odio, tempora ex excepturi expedita aut assumenda dolorum, veritatis dicta similique et sint culpa a. Magni, adipisci. A dolorem quasi dicta laudantium? Distinctio molestiae dolor ipsa, ullam eveniet voluptatibus quisquam recusandae, dicta voluptate harum magni placeat amet blanditiis animi! Ratione architecto asperiores voluptate labore, nostrum enim cumque?
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis temporibus asperiores consequuntur. Voluptates, tenetur, quod voluptas similique aliquam eum expedita neque dolorem nemo velit delectus voluptatum accusantium non obcaecati culpa qui? Atque, molestias? Placeat perspiciatis inventore at molestias voluptates iste maiores sed cupiditate minima reiciendis illum, consequuntur quaerat accusantium incidunt molestiae illo dolorem necessitatibus voluptatem aliquid temporibus rem ea? Aliquid vel quaerat dicta quidem, aspernatur ratione debitis animi id! A debitis, magnam nisi nostrum laudantium molestiae voluptates non facere. Atque rerum quod aliquam ea officia itaque expedita, perspiciatis aspernatur. Maiores ipsa sed vel ea rem. Cum culpa pariatur corrupti molestias.
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
                `;
        })
    })
}

delayJob();
  
let content = document.querySelector(".content");
let txtDetail = document.querySelector(".txtDetail");
let txtDetailAfter = document.querySelector(".txtDetail::after");

window.onscroll = () => {
    let scrollContent = window.pageYOffset;
    if (scrollContent > 50) {
        content.classList.add("addTop");
        content.style.overflow = "hidden";
    } else {
        content.classList.remove("addTop");
        content.style.overflow = "scroll";
    }
}

let showMore = document.querySelector(".show-more");
let isShow = false;
showMore.addEventListener("click", () => {
    if (!isShow) {
        txtDetail.classList.add("txtMore");
        txtDetail.classList.remove("txtDetail::after");
        isShow = true;
    } else {
        txtDetail.classList.remove("txtMore");
        txtDetail.classList.add("txtDetail::after");
        isShow = false;
    }
})


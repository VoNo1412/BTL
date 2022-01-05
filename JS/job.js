
let lists = document.querySelectorAll(".list-job");
let showMore = document.querySelector(".show-more");
let isShow = false;


lists.forEach(list => {
  list.addEventListener("click", function () {
    console.log("test")
    removeActive();
    this.classList.add("active-job");
    let img = this.getElementsByTagName("img")[0].src;
    let heading = this.getElementsByTagName("a")[0].textContent;
    let address = this.getElementsByTagName("p")[0].textContent;
    let time = this.getElementsByClassName("txtTime")[0].textContent;
    let textJob = this.getElementsByClassName("txtPost_Job")[0].textContent;

    changeJob(img, heading, address, time, textJob);

    function removeActive() {
      lists.forEach(el => {
        el.classList.remove("active-job");
      })
    }
  })
})

function changeJob(img, heading, address, time, textJob) {
  let apply = document.querySelector(".apply");
  apply.getElementsByTagName("img")[0].src = img;
  apply.getElementsByTagName("a")[0].textContent = heading;
  apply.getElementsByTagName("p")[0].textContent = address;
  apply.getElementsByClassName("txtTime")[0].textContent = time;
  apply.getElementsByClassName("txtDetail")[0].textContent = textJob;
}

window.onscroll = () => {
  let content = document.querySelector(".content");
  let scrollContent = window.pageYOffset;
  if (scrollContent > 50) {
    content.classList.add("addTop");
    content.style.overflow = "hidden";
  } else {
    content.classList.remove("addTop");
    content.style.overflow = "scroll";
  }
}

showMore.addEventListener("click", () => {
  let txtDetail = document.querySelector(".txtDetail");
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


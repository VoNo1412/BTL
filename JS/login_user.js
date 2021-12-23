const contaienrFluid = document.querySelector(".container-fluid");
const creatPost = document.querySelector(".create-post");
const overflow = document.querySelector(".overflow");
const txtContent = document.querySelector("#txtContent");
const btnPost = document.querySelector(".btn-post");


contaienrFluid.addEventListener("click", (e) => {
    handlyStatus(e);
    handlyPost();
});

function handlyStatus(e) {
    if(e.target.classList.contains("status")) {
        creatPost.style.display = "block";
        overflow.style.display = "block";
    } else if(e.target.className == "overflow" || e.target.parentElement.classList.contains("Close")){
        creatPost.style.display = "none";
        overflow.style.display = "none";
    }
}

function handlyPost() {
    txtContent.addEventListener("keydown", function(e) {
        if(e.key !== "") {
            btnPost.classList.add("bg-primary", "fw-bold", "text-white");
        }
    })
}
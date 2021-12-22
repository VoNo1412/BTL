const contaienrFluid = document.querySelector(".container-fluid");
const creatPost = document.querySelector(".create-post");
const overflow = document.querySelector(".overflow");

contaienrFluid.addEventListener("click", (e) => {
    console.log(e.target.parentElement)
    if(e.target.tagName === "INPUT") {
        creatPost.style.display = "block";
        overflow.style.display = "block";
    } else if(e.target.className == "overflow" || e.target.parentElement.classList.contains("Close")){
        creatPost.style.display = "none";
        overflow.style.display = "none";
    }
})
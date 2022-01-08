const app = document.querySelector(".app");
const creatPost = document.querySelector(".create-post");
const overflow = document.querySelector(".overflow");



app.addEventListener("click", function(e) {
    handlyStatus(e.target);
});

function handlyStatus(eventS) {
    if (eventS.classList.contains("bi-pencil")) {
        creatPost.style.display = "block";
        overflow.style.display = "block";
    } else if (eventS.className == "overflow" || eventS.parentElement.classList.contains("Close") || eventS.classList.contains("btn-done")) {
        creatPost.style.display = "none";
        overflow.style.display = "none";
    }
}
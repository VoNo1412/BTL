const contaienrFluid = document.querySelector(".container-fluid");
const creatPost = document.querySelector(".create-post");
const overflow = document.querySelector(".overflow");
const txtContent = document.querySelector("#txtContent");
const txtName = document.querySelector(".create-name");
const profileName = document.querySelector(".profile-name");
const profileImg = document.querySelector("#profile-img");
const img_user = document.querySelector(".img_user");
const btnPost = document.querySelector(".btn-post");
const btnDone = document.querySelector(".btn-done");
const postEl = document.querySelector(".posted-content");
const postImg = document.querySelector("#post-img");
const photo = document.querySelector(".photo");
const btnPhoto = document.querySelector(".btnPhoto");
const takeImg = document.querySelector(".takeImg");
var upload_img = "";

photo.addEventListener("change", function() {
    const reader = new FileReader();
    reader.addEventListener("load", () => {
        upload_img = reader.result;
        document.querySelector(".display_img").src = upload_img;
        postImg.style.height = "auto";
    })
    reader.readAsDataURL(this.files[0]);
    photo.style.display = "none";
});



class Post_P1 {
    constructor(img, name) {
        this.img = img;
        this.name = name;
    }
   
    get userImg() {
        return this.img.src;
    }

    get userName() {
        return this.name.textContent;
    }
}

class Post extends Post_P1 {
    constructor(img, name, desc) {
        super(img, name);
        this.desc = desc;
    }

    get userContent() {
        return this.desc.value;
    }
}

contaienrFluid.addEventListener("click", function(e) {
    handlyStatus(e.target);
    handlyPost();
    handlyImg(e.target);
});

function handlyImg(eventS) {
    if (eventS.classList.contains("btnPhoto") || eventS.parentElement.classList.contains("btnPhoto2") || eventS.classList.contains("bi-image-fill")) {
        postImg.style.display = "block";
        overflow.style.display = "block";
    } else if (eventS.className == "overflow" || eventS.parentElement.classList.contains("Close")) {
        postImg.style.display = "none";
        overflow.style.display = "none";
        // document.querySelector(".display_img").src = "";
    }
}

function handlyStatus(eventS) {
    if (eventS.classList.contains("status")) {
        creatPost.style.display = "block";
        overflow.style.display = "block";
    } else if (eventS.className == "overflow" || eventS.parentElement.classList.contains("Close") || eventS.classList.contains("btn-post")) {
        creatPost.style.display = "none";
        overflow.style.display = "none";
    }
}

function handlyPost() {
    txtContent.addEventListener("keydown", e => {
        if (e.target.value !== "") {
            btnPost.classList.add("bg-primary", "fw-bold", "text-white");
        } else {
            btnPost.classList.remove("bg-primary", "fw-bold", "text-white");
        }
    });
}

function loading() {
    const loading = document.createElement("div");
    loading.classList = `loading`;
    loading.innerHTML = `
    <div id="loading-bar-spinner" class="spinner">
        <div class="spinner-icon"></div>
    </div>
   `;

    postEl.appendChild(loading);
}

function stopLoading() {
    setTimeout(() => {
        postEl.getElementsByClassName("loading")[0].remove();
    }, 600);
}


btnDone.addEventListener("click", (e) => {
    e.preventDefault();
    let form = document.querySelector("#btnForm");
    let img = form.getElementsByTagName("img")[0];
    
    if (e.target.classList.contains("btn-done")) {
        creatPost.style.display = "block";
        overflow.style.display = "block";
        takeImg.src = img.src;
        creatPost.style.height = "auto";
        nonePhoto();
    } else if (e.target.className == "overflow" || e.target.parentElement.classList.contains("Close") || e.target.classList.contains("btn-post")) {
        creatPost.style.display = "none";
        overflow.style.display = "none";
        nonePhoto();
    }
    handlyPost();
});

btnPhoto.addEventListener("click", () => {
    postImg.style.display = "block";
    overflow.style.display = "block";
    photo.style.display = "block";
})


function nonePhoto() {
    postImg.style.display = "none";
    overflow.style.display = "none";
    photo.style.display = "none";
}

btnPost.addEventListener("click", () => {
    loading();
    stopLoading();
    loadingPost();
});









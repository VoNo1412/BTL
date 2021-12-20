

// show more & show less
const showTopic = document.querySelectorAll(".show-more");
let isShow = false;

showTopic.forEach(el => {
    el.addEventListener("click", () => {
        let items = document.querySelectorAll(".itemsNone");
        if (!isShow) {
            items.forEach(el => {
                el.classList.add("itemsShow");
            });
            showTopic.innerHTML = `<span>Show Less</span>
             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up-short" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/>
                </svg>
             `;

            isShow = true;
        } else {
            items.forEach(el => {
                el.classList.remove("itemsShow");
            })
            showTopic.innerHTML = `<span>Show More</span>
             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
             <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/>
           </svg>
             `;
            isShow = false;
        }
    })
});

// show Connect people
const carouselSlide = document.querySelector(".carousel_slides");
const carouselItems = document.querySelectorAll(".carousel_item");
const btnPrev = document.querySelector(".btnPrev");
const btnNext = document.querySelector(".btnNext");
let index = 0;
const size = carouselItems[0].clientWidth;

carouselSlide.style.transform = "translateX(" + (-size * index) + "px)";

btnNext.addEventListener('click', () => {
    index++;
    btnPrev.disabled = false;
    carouselSlide.style.transform = "translateX(" + (-size * index) + "px)";
    
    if(index == 2) {
        btnNext.disabled = true;
    }
});

btnPrev.addEventListener('click', () => {
    index--;
    if(index == 0) {
        btnPrev.disabled = true;
    }

    btnNext.disabled = false;
    carouselSlide.style.transform = "translateX(" + (-size * index) + "px)";
});




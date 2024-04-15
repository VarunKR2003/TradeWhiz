// header
const bar = document.getElementById("bar");
const nav = document.getElementById("nav");

bar.onclick = (e) => {
    const icon = e.target.getAttribute("class")
    if(icon == "fa-solid fa-bars"){
        e.target.setAttribute("class","fa-solid fa-xmark")

    }else{
        e.target.setAttribute("class","fa-solid fa-bars")
    }
    nav.classList.toggle("showNav")
}


// carousel
// carousel
const carouselContainer = document.querySelector(".carouselContainer");
const allEachCarousel = document.querySelectorAll(".eachCarousel");
const allIndicator = document.querySelectorAll(".indicator");

const slideCarousel = (index) => {
    const eachCarouselWidth = allEachCarousel[0].clientWidth; // Assuming all carousel items have the same width

    for (let x = 0; x < allEachCarousel.length; x++) {
        if (x === index) {
            allEachCarousel[x].classList.add("eachCarouselBorder");
            allIndicator[x].classList.add("activeIndicator");
        } else {
            allEachCarousel[x].classList.remove("eachCarouselBorder");
            allIndicator[x].classList.remove("activeIndicator");
        }
    }

    carouselContainer.scrollLeft = index * eachCarouselWidth;
};

const goTop = document.querySelector(".gotopbtn");

window.addEventListener("scroll", () => {
    if (window.pageYOffset > 120) {
        goTop.classList.add("active");
    }else{
        goTop.classList.remove("active");
    }
})
const ul = document.querySelector("#mobile");
const buttonMobile = document.querySelector("#button-mobile");
const linksNavigation = document.querySelectorAll(".links-navigation");

buttonMobile.addEventListener("click", () => {
    ul.classList.toggle("open");
});

linksNavigation.forEach((link) => {
    link.addEventListener("click", () => {
        ul.classList.remove("open");
    });
});

window.addEventListener("resize", () => {
    if (window.innerWidth > 768) {
        ul.classList.remove("open");
    }
});

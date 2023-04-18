const btn = document.getElementById("side-bar");
const sideMenu = document.querySelector("aside");
const body = document.querySelector("body");

btn.addEventListener("click", () => {
    sideMenu.classList.toggle("active");
})

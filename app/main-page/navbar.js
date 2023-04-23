const navbar = document.getElementById("categorias");
const btn = document.getElementById("side-bar");

btn.addEventListener("click", () => {
    navbar.classList.toggle("active");
});
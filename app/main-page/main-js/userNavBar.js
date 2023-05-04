const botaoPerfil = document.getElementById("botao-usuario");
const userDiv = document.getElementById("dialog-usuario");

const perfilClasses = ["opacity-100", "block", "scale-100"];

botaoPerfil.addEventListener("click", () => {
    perfilClasses.forEach(classe => {
        userDiv.classList.toggle(classe);
    })
});
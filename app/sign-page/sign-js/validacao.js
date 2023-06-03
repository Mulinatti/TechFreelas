const btnCadastro = document.getElementById("cadastrar")
const inputs = document.querySelectorAll(".inputStyle");
const aviso = document.getElementById("aviso");

let numeroDeCamposFaltando;

const validarUsuario = (campo) => {

    if(campo.value.length == 0) {
        numeroDeCamposFaltando += 1;
        campo.classList.add("border-red-500");
        aviso.classList.add("block");
        aviso.classList.remove("invisible");

    }
    else if(campo.value.length != 0) {
        campo.classList.remove("border-red-500");
    }
    
    if(numeroDeCamposFaltando == 0) {
        aviso.classList.add("invisible");
    }
}

btnCadastro.addEventListener("click", (e) => {
    e.preventDefault();

    numeroDeCamposFaltando = 0;

    inputs.forEach(input => {
        validarUsuario(input);
    })
});

inputs.forEach(input => {
    input.addEventListener("input", () => {
        validarUsuario(input)
    })
})


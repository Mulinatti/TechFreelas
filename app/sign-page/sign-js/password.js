const password = document.getElementById("senha");
const passwordConf = document.getElementById("confsenha");
const passwordVal = document.getElementById("senhaVal");

passwordConf.addEventListener("input", () => {
    if(password.value != passwordConf.value) {
        password.classList.add("border-red-500")
        passwordConf.classList.add("border-red-500")
        passwordVal.classList.remove("invisible")
    }
    else {
        password.classList.remove("border-red-500")
        passwordConf.classList.remove("border-red-500")
        passwordVal.classList.add("invisible")
    }
})

password.addEventListener("input", () => {
    if(password.value != passwordConf.value) {
        password.classList.add("border-red-500")
        passwordConf.classList.add("border-red-500")
        passwordVal.classList.remove("invisible")
    }
    else {
        password.classList.remove("border-red-500")
        passwordConf.classList.remove("border-red-500")
        passwordVal.classList.add("invisible")
    }
})
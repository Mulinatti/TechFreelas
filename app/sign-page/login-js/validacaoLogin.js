const loginInputs = document.querySelectorAll(".loginInput");
const erroLogin = document.getElementById("erroLogin")
const btnLogin = document.getElementById("btnLogin");

btnLogin.addEventListener("click", (e) => {
    loginInputs.forEach(input => {
        if(input.value.length == 0) {
            e.preventDefault()
            erroLogin.classList.remove("invisible")
        }

        if(input.value.length > 0)
            erroLogin.classList.add("invisible");
    })

})


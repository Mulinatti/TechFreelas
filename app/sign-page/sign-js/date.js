const dataInput = document.getElementById("nascimento")
const dataErro = document.getElementById("erroData")

function checkAge(dateOfBirth) {
    const currentDate = moment();
    const birthDate = moment(dateOfBirth);
    const age = currentDate.diff(birthDate, 'years');
  
    if (age < 18) {
        dataErro.classList.remove("invisible")
    } else {
        dataErro.classList.add("invisible")
    }
  }

dataInput.addEventListener("blur", () => {
    checkAge(dataInput.value)
})
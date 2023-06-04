const itemBox = document.querySelectorAll(".profileItems");
const inputClass = Array.from(document.querySelectorAll(".inputStyle"));
const altBtn = Array.from(document.querySelectorAll(".fa-pen-to-square"));

itemBox.forEach(box => {
    box.addEventListener("click", (e) => {
        const dados = box.querySelector(".dados");
        if (inputClass.includes(e.target))
            return
        dados.classList.toggle("hidden");
    })
})

console.log(inputClass);
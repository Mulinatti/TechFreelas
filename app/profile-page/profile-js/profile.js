const itemBox = document.querySelectorAll(".profileItems")

itemBox.forEach(box => {
    box.addEventListener("click", () => {
        const itemDados = box.querySelector(".dados")
        itemDados.classList.toggle("hidden")
    })
})

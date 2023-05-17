import { addContent, users } from "./content.js"

const buttonList = document.querySelectorAll(".categoryButton");

buttonList.forEach(btn => btn.addEventListener("click", categoryFilter));


export function categoryFilter() {

    const category = document.getElementById(this.id).value;
    console.log(category)

    if(category != "todos") {
        const filteredCategory = users.filter(user => user.categoria.nome == category);
        addContent(filteredCategory);
    }
    else {
        addContent(users);
    }

    
}

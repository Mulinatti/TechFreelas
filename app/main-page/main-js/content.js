import { categoryFilter } from "./filter.js";

export let users = [];
const services = document.getElementById("servicos-principais");

async function content() {
    const url = await fetch("../../../json/usuarios.json");
    users = await url.json();

    addContent(users);
    
}

export const addContent = userData => {

    services.innerHTML = "";

    userData.forEach(user => {
        services.innerHTML += 
        `
        <div class="box">
            <figure class="w-full">
                <a class="cursor-pointer" href="../service-page/service-index.php">
                    <img class="w-full rounded-lg rounded-b-none" src="../../src/imgs/bannerservice.png" alt="">
                </a>
            </figure>
            <div class="w-full px-3 pb-3 mt-1">
                <div class="mb-7">
                    <p class="${user.categoria.cor} font-bold capitalize text-lg elipsis">${user.categoria.nome}</p>
                    <p class="text-sm text-slate-300 elipsis">${user.nome}</p>
                </div>
                <div class="flex justify-between items-end">
                    <button class="button">Contratar</button>
                    <p>${user.preco}/h</p>
                </div>
            </div>
        </div>
        `
    })
}

content();
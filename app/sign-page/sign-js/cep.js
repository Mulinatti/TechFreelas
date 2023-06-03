const cepInput = document.getElementById("cep");

const ruaInput = document.getElementById("rua");
const bairroInput = document.getElementById("bairro");
const cidadeInput = document.getElementById("cidade");
const ufInput = document.getElementById("uf");


async function findCep(cep) {
    try {
        const url = await fetch(`https://viacep.com.br/ws/${cep}/json/`);
        const data = await url.json();

        const endereco = {
            rua: data.logradouro,
            bairro: data.bairro,
            estado: data.localidade,
            uf: data.uf
        }

        ruaInput.value = endereco.rua;
        bairroInput.value = endereco.bairro;
        cidadeInput.value = endereco.estado;
        ufInput.value = endereco.uf

    }
    catch (error) {
        console.log(error);
    }
}

cepInput.addEventListener("blur", () => {
    findCep(cepInput.value)
})
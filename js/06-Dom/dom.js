/* Métodos/Funções de acesso e seleção

getElementById() -> seleciona um elemento pelo ID

querySelector()
-> sleciona UM elemento de acordo com um seletor

querySelectorAll()
-> seleciona VÁRIOS elementos de acordo com um seletor */

// constante nao muda / variavel pode mudar

// selecionando pelo ID
const titulo = document.getElementById("titulo-principal");
console.log(titulo);

// selecionando pela TAG
const pagina= document.querySelector("body");
console.log(pagina)

// selecionando todas as TAGS H2
const subtitulo = document.querySelectorAll("h2");
console.log(subtitulo);

//selecionando h3
const outrotitulo = document.querySelector("h3");
console.log(outrotitulo);

/* Modificando elementos */
titulo.textContent = "Olá Mundo!" //textContent = quando quero mudar somento o texto se usa textContext, nesse caso o conteudo do h1 q esta em forma de texto
//document.getElementById('titulo-principal').textContent  mesma coisa do de cima

subtitulo[1].textContent = "Full-Stack";
document.querySelectorAll('h2').textContent = "qualquer coisa"

outrotitulo.textContent = "Vida boa"

const legenda = document.querySelector('figcaption');
legenda.innerHTML = "<b>Legenda da imagem</b>"; //inner HTML alem de mudar o conteudo ele consegue ler html para vc fazer modificações, agr textConent, muda somento o texto


// CSS via JS
titulo.style.textAlign = "center"; 
titulo.style.color = "purple";
titulo.style.backgroundImage = "linear-gradient(lightyellow, lightblue)";
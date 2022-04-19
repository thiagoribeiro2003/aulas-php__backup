/* Estruturas de Controle Condicional */

/* if/else, else/if */
let nome = "Thiago";
let idade = 13;

// Verificar a idade da pessoa

// Condicional Encadeada
let mensagem ;

/*
if (idade > 18) {
   mensagem = "Você é maior de idade";
} else {
    mensagem = "Você é menor de idade";
}

// document.write(mensagem);
console.log(mensagem);
*/

if (idade >= 60) {
    mensagem = ' idoso';
} else if (idade >= 18) {
    mensagem = ' adulto, mas não idoso(a)';
} else {
    //mensagem = "É menor de idade";
    if (idade >= 12 && idade <18) {
        mensagem = " adolescente";
    } else {
        mensagem = " baby shark";
    }
}
console.log(`${nome} tem ${idade} anos e é${mensagem}`)
console.log("--------------------------------")
//console.log(mensagem);

var nota1 = 8;
var nota2 = 9;

resultado = (nota1+nota2)/2
resultado
if (resultado >= 7) {
    console.log ("Aprovado")
} else if  (resultado <7) {
    console.log("Reprovado")
}
console.log(resultado)
console.log("--------------------------------")

let opcao = 4;
let textoOpcao;

switch (opcao) {
    case 1:
        textoOpcao = "Legal, o que deseja saber?";
        break;

    case 2:
        textoOpcao = "Que pena, o que aconteceu?";
        break;

    case 3:
        textoOpcao = "Certo, qual sua dúvida?";

    default:
        textoOpcao = "Hum, não entendi... vou te transferir.";
        break;
}

console.log(`Você escolheu a opção ${opcao}`);
console.log(textoOpcao)

// Operadores de comparação
let a = 10;
let b = "10";

console.log("--------------------------------")
console.log(a === b); //true ou false

 





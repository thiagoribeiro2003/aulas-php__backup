/* Estruturas de Controle de Repetição

whilte (enquanto)

do/while (faça/enquanto)

for (para uma determinada quantidade de vez) */

// Exemplo 1: while
//while (condição) {condição};

let i = 10;
while(i < 20) {
    console.log(`O valor de i é: ${i}`)
    i++;
}
console.log("------------------")

// Exemplo 2: do/while
let j = 1;
do {
    console.log (`J é ${j}`)
    j++;
} while(j < 10);
console.log("------------------")

// Exemplo 3: for
for( let k = 1; k <= 5; k++){
    console.log(`K vale: ${k}`);
}

console.log("------------------");

// Exemplo 4: loop iterando sobre os dados de array
let alunos  = [
"Chiquinha", "Chaves", "Madruga", "Kiko", "Dona  Florinda"
];

// Cache do tamanho array 
let tamanho = alunos.length; //pega o tamanho do indice da matriz

for( let i = 0; i < tamanho; i++) {
    console.log(alunos[i]);
}
console.log("------------------");
// console.log(tamanho
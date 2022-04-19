// comentário de uma linha - atalho CTRL ; 
/* bloco de
comentário - atalho SHIFT ALT A */


// Comando de saída para o console
console.log ("Olá, mundo!");


/* Variáveis
 Palavras-chave: var, left, const

 var -> variáveis de escopo global (disponivel em todo o codigo)
 let -> variável de escopo de bloco
 const -> const de escopo de bloco */

 const nome = "Thiago"; //Constante (valor nunca muda)
 let ano = 2022; // variável escopo local
 var curso = "Técnico em informática para Internet"; //variável global
/*
 ano = 2025;
 curso = "Como se tornar uma princesa";
 nome = "Inacinho";
 */

 // recuperando os valores 
 console.log(nome); 
 console.log(ano);
 console.log(curso);

 // concatenação
 console.log("Eu sou o "+nome+ ".")
console.log("Eu sou o " +nome+" e em " +ano+ " estou estudando no curso " +curso+ ".");

//Template String 
console.log(`Atualmente estamos fazendo o curso de ${curso}`)
console.log(`Eu sou o ${nome} e em ${ano} estou estudando no curso ${curso}`)

/* Operadores matemáticos:
+ adição
- subtração
/ divisão
* multiplicação */

let produto = "TV Led";
let preco = 6500;
let quantidade = 3;
let total = preco * quantidade;

console.log(`Temos atualmente no estoque o produto ${produto} na quantidade de ${quantidade} unidades, ao custo de ${preco} (cada) e valor total de ${total}.`)



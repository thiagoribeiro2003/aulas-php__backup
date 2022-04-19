// Exemplo 1: Objeto básico
let livro = {
    // propriedade : valor
    titulo: "Senhor dos Anéis",
    ano : 1954,
    volumes : 3,
    autor : "J.R.R. Tolkien"
};

//objeto NÃO tem INDICE ex: [0][1]

console.log(livro);
console.log(`Meu livro preferido é o ${livro.titulo}, que foi lançado em ${livro.ano}.`);

// Exemplo 2: objeto contendo array e outro objeto
let pessoa = {
    // propriedades
    nome : 'Certo Alguém',
    Idade : 39,
    sexo : "Masculino",
/*Matriz*/ telefones : ["2222-3333", '5555-6666'],
    cidade : "São Paulo",
    medidas : {
        peso : 90,
        altura : 1.80
    }
};

console.log(pessoa.medidas.altura); // 1.80
console.log(pessoa.telefones[0]); //2222-3333
console.log(`${pessoa.nome} é uma pessoa incrível, contrate através do telefone ${pessoa.telefones[1]}`)

// Exemplo 3: Array de Objeto
let livros = [
    {
        titulo : 'Senhor dos Anéis',
        autor : "J.R.R. Tolkien"
    },
    {
        titulo : "Ghost Rider",
        autor : "Neil Peart"
    },
    {
        titulo : "Game Of Thrones",
        autor : "George R.R. Martin"
    }

];

console.log(`Meu livro favorito é ${livros[0].titulo} do autor ${livros[0].autor}`)




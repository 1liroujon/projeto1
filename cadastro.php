<?php

require "dados.php"; 
if (!isset($livros)){
    $livros = [];
}

$id = count($livros) + 1 ;

echo "\n===== CADASTRAR LIVRO =====\n";

$titulo = readline("Título do livro: ");

while (trim($titulo) == "") {
    echo "O título é obrigatório.\n";
    $titulo = readline("Título do livro: ");
}

$autor = readline("Autor: ");

while (trim($autor) == "") {
    echo "O autor é obrigatório.\n";
    $autor = readline("nome do autor: ");
}

$quantidade = (int) readline("quantidade de exemplares: ");

$livro = [
    "id" => $id,
    "titulo" => $titulo,
    "autor" => $autor,
    "quantidade" => $quantidade
];

$livros[] = $livro;

file_put_contents("dados.php", "<?php\n\$livros = " . var_export($livros, true) . ";\n");

echo "\nLivro cadastrado com sucesso!\n";

?>
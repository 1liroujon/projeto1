<?php

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

file_put_contents($dataFile, json_encode($livros, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "\nLivro cadastrado com sucesso!\n";

?>
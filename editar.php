<?php

$id = readline("Digite o ID do livro que quer editar: ");

$indice = null;
foreach ($livros as $key => $l) {
    if ($l['id'] == $id) {
        $indice = $key;
        break;
    }
}

if ($indice === null) {
    echo "\nLivro não encontrado!\n";
    return;
}

echo "\n===== EDITAR LIVRO (aperte Enter para manter valor atual) =====\n";


 $titulo = readline("Título ({$livros[$indice]['titulo']}): ");
if (trim($titulo) != "") {
    $livros[$indice]['titulo'] = $titulo;
}


 $autor = readline("Autor ({$livros[$indice]['autor']}): ");
if (trim($autor) != "") {
    $livros[$indice]['autor'] = $autor;
}



$quantidade = readline("Quantidade ({$livros[$indice]['quantidade']}): ");
if (trim($quantidade) != "") {
    $livros[$indice]['quantidade'] = (int)$quantidade;
}


file_put_contents($dataFile, json_encode($livros, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "\nLivro atualizado com sucesso!\n";

echo "\n===== LIVRO ATUALIZADO =====\n";

echo "Título: " . $livros[$indice]['titulo'] . "\n";
echo "Autor: " . $livros[$indice]['autor'] . "\n";
echo "Quantidade: " . $livros[$indice]['quantidade'] . "\n";
echo "ID: " . $livros[$indice]['id'] . "\n";
echo "------------------------\n";
?>
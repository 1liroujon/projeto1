<?php

echo "\n===== BUSCAR LIVRO =====\n";
$busca = readline("Digite o título: ");

$busca = mb_strtolower(trim($busca), "UTF-8");

$achados = [];

foreach ($livros as $livro) {
    if (strpos(mb_strtolower($livro['titulo'], 'UTF-8'), $busca) !== false) {
        $achados[] = $livro;
    }
}

if (!empty($achados)) {
    echo "\nLivros encontrados:\n";
    foreach ($achados as $l) {
        echo "- ID: {$l['id']} | Título: {$l['titulo']} | Autor: {$l['autor']} | Quantidade: {$l['quantidade']}\n";
    }
} else {
    echo "\nNenhum livro encontrado com essa busca.\n";
}
?>
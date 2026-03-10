<?php

echo "\n===== LISTA DE LIVROS =====\n";

if (!isset($livros) || empty($livros)) {
    echo "Nenhum livro cadastrado ainda.\n";
} else {
    foreach ($livros as $livro) {
        echo "\nTítulo: " . $livro['titulo'] . "\n";
        echo "Autor: " . $livro['autor'] . "\n";
        echo "Quantidade: " . $livro['quantidade'] . "\n";
        echo "ID: " . $livro['id'] . "\n";
        echo "------------------------\n";
    }
}

?>
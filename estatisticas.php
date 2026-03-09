<?php

require("dados.php");

$totalLivrosDiferentes = count($livros);
$totalExemplares = 0;
$autores = [];

foreach ($livros as $livro) {
    $totalExemplares += $livro["quantidade"];
    $autores[] = $livro["autor"];
}

$totalAutores = count(array_unique($autores));

echo "\n=== ESTATÍSTICAS ===\n";
echo "Total de exemplares: $totalExemplares\n";
echo "Livros diferentes: $totalLivrosDiferentes\n";
echo "Autores diferentes: $totalAutores\n";

?>
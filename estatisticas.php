<?php

if (!isset($livros) || !is_array($livros)) {
    $lista = [];
} else {
    $lista = $livros;
}

$totalLivrosDiferentes = count($lista);
$totalExemplares = 0;
$autores = [];

foreach ($lista as $livro) {
    $totalExemplares += isset($livro["quantidade"]) ? (int)$livro["quantidade"] : 0;
    if (isset($livro["autor"])) {
        $autores[] = $livro["autor"];
    }
}

$totalAutores = count(array_unique($autores));

echo "\n=== ESTATÍSTICAS ===\n";
echo "Total de exemplares: $totalExemplares\n";
echo "Livros diferentes: $totalLivrosDiferentes\n";
echo "Autores diferentes: $totalAutores\n";

?>
<?php
require "dados.php";

$id = readline("Digite o ID do livro que quer remover: ");

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

echo "\nLivro encontrado:\n";
echo "Título: " . $livros[$indice]['titulo'] . "\n";
echo "Autor: " . $livros[$indice]['autor'] . "\n";
echo "Quantidade: " . $livros[$indice]['quantidade'] . "\n";
echo "ID: " . $livros[$indice]['id'] . "\n";

$confirmar = readline("\nTem certeza que deseja remover? (s/n): ");

if (strtolower($confirmar) == "s") {

    unset($livros[$indice]);

    $livros = array_values($livros);

    file_put_contents("dados.php", "<?php\n\$livros = " . var_export($livros, true) . ";\n");

    echo "\nLivro removido com sucesso!\n";

} else {
    echo "\nRemoção cancelada.\n";
}
?>
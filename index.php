<?php

while (true){

echo "\n==============================\n";
echo "   SISTEMA DA BIBLIOTECA\n";
echo "==============================\n";
echo "1 - Cadastrar um livro\n";
echo "2 - Listar livros\n";
echo "3 - Buscar livros\n";
echo "4 - Editar livros\n";
echo "5 - Remover livros\n";
echo "6 - Estatísticas \n";
echo "7 - Sair\n";
echo "==============================\n";

$escolha = readline("Escolha uma das opções: ");

switch($escolha){

    case '1':
        require("cadastro.php");
        break;
    
    case '2':
        require("listar.php");
        break;
    
    case '3':
        require("buscar.php");
        break;

    case '4':
        require("editar.php");
        break;

    case '5':
        require("remover.php");
        break;

    case '6':
       require("estatisticas.php");
        break;

    case '7':
        echo "\nSaindo...\n";
        exit;

    default:
        echo "\nOpção inválida\n";
}

}
?>
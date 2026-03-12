# Projeto1 — Sistema de Biblioteca (CLI)

Uma aplicação simples em PHP para gerenciar um catálogo de livros via linha de comando (CLI). Os dados são armazenados em um arquivo JSON (`dados.json`). Ideal para estudo e exercícios sobre manipulação de arquivos, entrada/saída no terminal e operações básicas de CRUD.

Status: Em desenvolvimento

## Estrutura do repositório
- index.php — menu principal (loop CLI) que carrega os dados e chama as operações.
- cadastro.php — adiciona um novo livro (interativo).
- listar.php — lista todos os livros cadastrados.
- buscar.php — busca livros por título (busca parcial, case-insensitive).
- editar.php — edita um livro existente por ID.
- remover.php — remove um livro por ID (com confirmação).
- estatisticas.php — mostra estatísticas simples (total de exemplares, livros diferentes, autores diferentes).
- dados.json — armazenamento persistente em JSON (ex.: array de objetos com campos id, titulo, autor, quantidade).

## Requisitos
- PHP (CLI). Testado com PHP 7.4+; recomendado PHP 8.0+.
- Acesso de leitura/escrita ao arquivo `dados.json`.

Obs.: Não há dependências via Composer.

## Como executar (local)
1. Clone o repositório:
   ```bash
   git clone https://github.com/1liroujon/projeto1.git
   cd projeto1
   ```
2. Verifique permissões do arquivo de dados (se `dados.json` não existir, crie um com `[]`):
   ```bash
   [ -f dados.json ] || echo "[]" > dados.json
   chmod u+rw dados.json
   ```
3. Execute a aplicação no terminal (modo CLI):
   ```bash
   php index.php
   ```
   Você verá o menu principal com opções numeradas.

## Uso (fluxo básico)
Após executar `php index.php`, escolha uma opção pelo número:

- 1 — Cadastrar um livro: informe título, autor e quantidade.
- 2 — Listar livros: exibe todos os registros do `dados.json`.
- 3 — Buscar livros: informe uma string para buscar no título (case-insensitive).
- 4 — Editar livros: informe o ID do livro; pressione Enter para manter um campo.
- 5 — Remover livros: informe o ID e confirme a remoção.
- 6 — Estatísticas: total de exemplares, quantos livros e autores diferentes.
- 7 — Sair.

Exemplo de comando para iniciar:
```bash
php index.php
# escolha: 2  (listar)
# escolha: 1  (cadastrar) -> siga os prompts
```

## Formato do arquivo dados.json
Cada item é um objeto com a estrutura:

```json
{
  "id": 1,
  "titulo": "Nome do Livro",
  "autor": "Nome do Autor",
  "quantidade": 10
}
```

O repositório já contém amostras em `dados.json` (valores de exemplo).

# laravel-crud

laravel-crud

## para rodar o projeto:

-   clone o repo
-   instale as dependencias
    -   `composer install`
-   crie um arquivo .env
-   cole nele o conteudo do .env.example
    -   no meu caso tive que adaptar o .env para usar o sqlite
    -   usando essas variaveis :
        -   DB_CONNECTION=sqlite
        -   DB_DATABASE=caminho/absoluto/database/database.sqlite (troque caminho absoluto para caminho real do seu projeto)
        -   se necessario use 'realpath database/database.sqlite' para obter o caminho absoluto
-   crie as migrations:
    -   `php artisan migrate`
-   inicie o servidor:
    -   `php artisan serve`

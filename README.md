# laravel-crud

## para rodar o projeto:

-   clone o repo
-   atualize e instale as dependencias
    - `sudo apt-get install php-sqlite3`
    - certtifique-se de ter o php-xml e php-curl instalados, caso contrario: `sudo apt-get install php-xml`, `sudo apt-get install php-curl`
    -   `npm install`
    -   `composer update`
    -   `composer install`
        - em seguida reinicie o service com: `sudo service nginx reload` ou `sudo service apache2 restart`
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

-   Caso ocorra algum erro 

## Font:

-   https://laravel.com/docs/11.x/controllers;

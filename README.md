# Laravel-Blog

Uma simples aplicação Laravel de um CMS de Blog - Toda aplicação está na pasta /blog

## Instalação
* Instalar os pacotes do composer - `composer install`
* Verificar se as pastas `storage` e `bootstrap/cache` tem permissão de escrita
* Renomear o arquivo `.env.example` para `.env`
* Alterar as configurações de banco de dados no arquivo `.env`
* Rodar o comando `php artisan key:generate` para gera uma nova Key
* Rodar o comando `php artisan migrate` para gerar as tabelas do banco de dados

## Front-end
gulpfile contém tasks de `sass` e `server`, para compilar o sass e rodar um server de browser-sync, respectivamente. Os arquivos do sass encontram-se em `resources/assets/sass`
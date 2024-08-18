# Projeto Laravel no Ubuntu 20.04

Este README fornece as instruções para configurar um ambiente de desenvolvimento Laravel em uma máquina Ubuntu 20.04. O projeto utiliza PHP 8.2, Composer, e SQLite3 como banco de dados para simplificar a inicialização.

## Tecnologias Utilizadas-**Sistema Operacional:** Ubuntu 20.04
**PHP:** 8.2.2

**Composer:** 2.7.7

**Laravel:** 11.x

**Banco de Dados:** SQLite3

## 1. Instalação do PHP 8.2

Para instalar o PHP 8.2, execute os seguintes comandos no terminal:

```
bash
sudo apt update
sudo apt install software-properties-common
sudo add-apt-repository ppa:ondrej/php
sudo apt update
sudo apt -y install php8.2
```

## 1.1 Instalação das extensões necessárias
Após a instalação do PHP, adicione as extensões necessárias para Laravel:

```
sudo apt-get install php8.2-mbstring
sudo apt-get install php8.2-dom
sudo apt-get install php8.2-sqlite3

```

## 2. Instalação do Composer
Composer é essencial para gerenciar as dependências do seu projeto Laravel. Siga os passos abaixo para instalá-lo:

```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```
Para mais informações sobre o Composer, acesse o [site oficial](https://getcomposer.org/download/).

## Incialização do projeto (LocaHost):
Utilize o **artisan** para incializar o projeto:
```
php artisan serve
```
Você pode ter acesso a mais funções do artisan utilizando o seguinte código:

```
php artisan list
```
Caso deseje se aprofundar mais nesse framework, [consulte a documentação da laravel](https://laravel.com/docs/11.x)


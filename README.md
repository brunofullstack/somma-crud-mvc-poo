# CRUD PHP 

Projeto de aplicação em php nativo, utilizando autoload e PDO com autenticação JWT.
Arquitetura: MVC e POO

### Instação

Executar o comando do composer na pasta do projeto para instalação do autoloader(PSR-4: Autoloader) e do php_codesniffer(PSR-12: Extended Coding Style):

```sh
$ composer update
```

Configurar os dados de acesso ao banco no arquivo app/config/database.php

Sql para criação da tabela:

```sh
CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_fantasia` varchar(45) DEFAULT NULL,
  `razao_social` varchar(45) DEFAULT NULL,
  `cnpj` varchar(18) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
```

Execute o comando abaixo na pasta do index para iniciar o servidor:

```sh
$ php -S localhost:8000
```

# API

## Descrição
Fiz esta *api* para treinar os conhecimento adiquirido no curso da B7web.

## Instalação 
Você pode clona este reporsitório OU baixar o *.zip*

## Configuração
As configuração do Banco de Dados esta no arquivo *config.php*

É importante configurar corretamente as variáves que faz conexão com o banco.

```php
<?php 
$db_host = 'localhost';
$db_name = 'nome do banco';
$db_user = 'root';
$db_pass = '';

$pdo = new PDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db_pass);


$array = [
  'error' => '',
  'result' => []
];
```
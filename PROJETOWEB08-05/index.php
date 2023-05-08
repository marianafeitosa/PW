<?php

define('MYSQL_HOST', 'localhost:3306');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB_NAME', 'bd_sistema');

try {
    {
        $PDO = new PDO('mysql:host='. MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);

    }
} catch (PDOException $e ) {

   echo 'Erro ao conectar com o MYSQL: ' . $e->getMessage();
}



?>




<!DOCTYPE html>

<html lang="pt-br">

<head>

 <meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <title>Sistema com Acesso ao Banco</title>

</head>

<body>

<?php
$sql = "SELECT   * FROM clientes";
$result = $PDO->query( $sql);
$rows = $result-> fetchAll();

for($i-0; ,< count($rows); $i++){ ?>
Nome: <?php echo $rows[$i]['nome']; ?><br>
Endereço: <?php echo $rows[$i]['endereco']; ?><br>
Bairro: <?php echo $rows[$i]['bairro']; ?><br>
CEP: <?php echo $rows[$i]['cep']; ?><br>
Bairro: <?php echo $rows[$i]['bairro']; ?><br>
Estado: <?php echo $rows[$i]['estado']; ?><br>




<?php
}

</body>

</html>
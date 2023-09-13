// Inicializar 

<?php
    $PDO = new PDO ('mysql:localhost; dbname=php_crud', 'root');

    // INSERT
    if (isset($_POST['nome'])) {
        $sql = $pdo->prepare("INSERT INTO clientes VALUES (null, ?, ?)");
        $sql->execute(array($_POST['nome'],$_POST['email']));
        echo 'inserido com sucesso';
    }
?>

<form method="post">
    <input type="text" name="nome">
    <input type="text" name="email">
    <input type="submit" value="Enviar">
</form>

<?
    $sql = $pdo->prepare("SELECT * FROM CLIENTES");
    $sql-> execute();

    $fetchClientes = $sql->fetchAll();

    foreach ($fetchClientes as $key => $value) {
        echo $value ['nome']. ' | '.$value['email'];
        echo '<hr>';
    }
?>
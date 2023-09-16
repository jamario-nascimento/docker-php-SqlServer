<?php
try {
    $conn = new PDO("sqlsrv:server=db", "sa", "jamalDev@2#2");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $q = $conn->query('SELECT @@VERSION');
    echo 'MSSQL VERSION: ' . $q->fetchColumn() . '<br>';
} catch (Exception $e) {
    die(print_r($e->getMessage()));
}


echo 'PHP VERSION' . phpversion() . '<br>';
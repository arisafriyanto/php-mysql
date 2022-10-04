<?php

require_once __DIR__ . "/GetConnectionMysqli.php";

$connection = getConnection();

$sql = "SELECT * FROM customers";
$statement = $connection->query($sql);

$customers = $statement->fetch_all();
var_dump($customers);

$connection->close();

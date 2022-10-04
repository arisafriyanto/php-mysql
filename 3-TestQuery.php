<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$sql = "SELECT * FROM customers";
$statement = $connection->query($sql);

foreach ($statement as $row) {
    $id     = $row['id'];
    $name   = $row['name'];
    $email  = $row['email'];

    echo $id . PHP_EOL;
    echo $name . PHP_EOL;
    echo $email . PHP_EOL;
}

$connection = null;

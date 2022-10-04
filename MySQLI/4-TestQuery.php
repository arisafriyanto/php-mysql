<?php

require_once __DIR__ . "/GetConnectionMysqli.php";

$connection = getConnection();

$sql = "SELECT id, name, email FROM customers";
$statement = mysqli_query($connection, $sql);

foreach ($statement as $row) {
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];

    echo $id . PHP_EOL;
    echo $name . PHP_EOL;
    echo $email . PHP_EOL;
}

mysqli_close($connection);

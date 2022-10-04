<?php

require_once __DIR__ . "/GetConnectionMysqli.php";

$connection = getConnection();

$sql = mysqli_query($connection, "INSERT INTO comments (email, comment) VALUES ('aris@gmail.com', 'keep storng')");

// dapetin id terakhir auto increment
$id = mysqli_insert_id($connection);

echo $id . PHP_EOL;

mysqli_close($connection);

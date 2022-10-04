<?php

require_once __DIR__ . "/GetConnectionMysqli.php";

$connection = getConnection();

$sql = <<<SQL
    INSERT INTO customers(id, name, email)
    VALUES ('aris', 'Aris', 'aris@gmail.com');
SQL;

$query = mysqli_query($connection, $sql);

mysqli_close($connection);

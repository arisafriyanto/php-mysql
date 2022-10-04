<?php

require_once __DIR__ . "/GetConnectionMysqli.php";

$connection = getConnection();

// $username = "' OR '1'='1";
$username = "aff";
$password = "rahasia";

$sql = "SELECT * FROM admin WHERE username= :username AND password = :password";
$statement = $connection->prepare($sql);
$statement->bind_param('ss', $username, $password);
$statement->execute();

$result = $statement->get_result();

if ($row = $result->fetch_assoc()) {
    echo "Sukses login {$row['username']}" . PHP_EOL;
} else {
    echo "Gagal login" . PHP_EOL;
}

$statement->close();
$connection->close();

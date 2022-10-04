<?php

require_once __DIR__ . "/GetConnectionMysqli.php";

$connection = getConnection();

$username = "aff'; #";
$password = "rahasia";

$sql = "SELECT * FROM admin WHERE username= ? AND password = ?";
$statement = $connection->prepare($sql);
$statement->bind_param('ss', $username, $password);
$statement->execute();

$result = $statement->get_result();

$success = false;
$find_user = null;

foreach ($result as $row) {
    // success
    $success = true;
    $find_user = $row['username'];
}

if ($success) {
    echo "Sukses login {$row['username']}" . PHP_EOL;
} else {
    echo "Gagal login" . PHP_EOL;
}

$statement->close();
$connection->close();

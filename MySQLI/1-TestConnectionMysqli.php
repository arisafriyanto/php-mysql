<?php

$hostname = "localhost";
$username = "root";
$password = "afriyan";
$dbname = "belajar_php_database";
$port = 3306;

try {
    $connection = mysqli_connect($hostname, $username, $password, $dbname, $port);
    echo "Sukses terkoneksi dengan database MySQL" . PHP_EOL;

    // menutup koneksi
    $connection = mysqli_close($connection);
} catch (Exception $exception) {
    echo "Gagal terkoneksi dengan database MySQL " . $exception->getMessage() . PHP_EOL;
}

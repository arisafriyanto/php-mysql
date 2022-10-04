<?php

function getConnection(): mysqli
{
    $hostname = "localhost";
    $username = "root";
    $password = "afriyan";
    $dbname = "belajar_php_database";
    $port = 3306;

    return new mysqli($hostname, $username, $password, $dbname, $port);
}

<?php

require_once __DIR__ . "/GetConnectionMysqli.php";

$connection = getConnection();

$connection->begin_transaction();

$connection->query("INSERT INTO comments (email, comment) VALUES ('aff@gmail.com', 'haiii komen')");
$connection->query("INSERT INTO comments (email, comment) VALUES ('aff@gmail.com', 'haiii komen')");
$connection->query("INSERT INTO comments (email, comment) VALUES ('aff@gmail.com', 'haiii komen')");
$connection->query("INSERT INTO comments (email, comment) VALUES ('aff@gmail.com', 'haiii komen')");
$connection->query("INSERT INTO comments (email, comment) VALUES ('aff@gmail.com', 'haiii komen')");
$connection->query("UPDATE comments SET comment='manusia nih' WHERE id=2");

$connection->commit();


$connection->close();

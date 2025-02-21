<?php

$dbHost     = "localhost";
$dbUsername = "hi";
$dbPassword = "hello";
$dbName     = "IB";


$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);


if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
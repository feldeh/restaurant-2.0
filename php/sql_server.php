<?php

$host = 'database';
$dbname = 'restaurant';
$user = 'root';
$password = 'root';

$connect = new mysqli($host, $user, $password);

$connect->set_charset('utf8mb4');

$sql = 'CREATE DATABASE IF NOT EXISTS' . $dbname;

// Connect to db
mysqli_select_db($connect, $dbname);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

$result = $connect->query($sql);

$query = "SELECT contact_id FROM contacts";
$result = $connect->query($query);

if (empty($result)) {
    $query = "CREATE TABLE contacts (
        contact_id int NOT NULL AUTO_INCREMENT,
        contact_date datetime,
        contact_name varchar(255),
        contact_mail varchar(255),
        restaurant varchar(255),
        subject varchar(255),
        message varchar(255),
        PRIMARY KEY (contact_id)
    )";
    $result = $connect->query($query);
}

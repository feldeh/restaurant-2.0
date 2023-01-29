<?php

$host = 'database';
$dbname = 'mydb';
$user = 'root';
$password = 'root';

$connect = new mysqli($host, $user, $password);

// Connect to db
mysqli_select_db($connect, $dbname);

$query = "CREATE TABLE IF NOT EXISTS contacts (
    contact_id int NOT NULL AUTO_INCREMENT,
    contact_date datetime,
    contact_name varchar(255),
    contact_mail varchar(255),
    restaurant varchar(255),
    subject varchar(255),
    message varchar(255),
    PRIMARY KEY (contact_id)
)";

$result = mysqli_query($connect, $query);

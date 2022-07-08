<?php

include_once __DIR__ . '/config.php';



if (isset($_POST['submit'])) {

    date_default_timezone_set('CET');
    $date = date('Y-m-d H:i');
    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $mail = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
    $restaurant = filter_var($_POST['restaurant'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Prepares an SQL statement to be executed and returns a statement object 
    $stmt = $pdo->prepare('INSERT INTO contacts (contact_date, contact_name, contact_mail, restaurant, subject,  message) VALUES(?, ?, ?, ?, ?, ?)'); // For security reasons, variables cannot appear in the sql command. Always separate the instruction from the data | '?' are placeholders

    $stmt->execute([$date, $name, $mail, $restaurant, $subject, $message]); // Filling placeholders with the variables (order sensitive)

    if ($stmt->rowCount()) {
        echo 'The form was submitted!';
    }


}

# PDO QUERY





?>
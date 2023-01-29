<?php
include_once __DIR__ . '/config.php';

try {
    // Check if form was submitted
    if (isset($_POST['submit'])) {
        date_default_timezone_set('CET');
        $date = date('Y-m-d H:i');
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL);
        $restaurant = filter_input(INPUT_POST, 'restaurant', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // Prepare SQL statement
        $stmt = $pdo->prepare('INSERT INTO contacts (contact_date, contact_name, contact_mail, restaurant, subject,  message) VALUES(?, ?, ?, ?, ?, ?)');
        // Execute statement
        $stmt->execute([$date, $name, $mail, $restaurant, $subject, $message]);
        if (headers_sent()) {
            throw new Exception("Headers already sent, cannot redirect");
        }
        header('Location: ../contact.php?status=success');
        exit;
    }
} catch (PDOException $e) {
    print "Error: " . $e->getMessage();
} catch (Exception $e) {
    print "Error: " . $e->getMessage();
}

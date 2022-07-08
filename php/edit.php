<?php 

require __DIR__ . '/config.php';

	$id = $_GET['id'];
	$sql = "SELECT * FROM contacts WHERE contact_id=?";

	$stmt = $pdo->prepare($sql);
	$stmt->execute([$id]);

    $row = $stmt->fetch();


	if (isset($_POST) & !empty($_POST)) {
		$name = ($_POST['name']);
		$mail = ($_POST['mail']);
		$restaurant = ($_POST['restaurant']);
		$subject = $_POST['subject'];
		$message = $_POST['message'];


		$sql = "UPDATE contacts SET contact_name = ?, contact_mail = ?, restaurant = ?, subject = ?, message = ? WHERE contact_id = ?";

		$stmt = $pdo->prepare($sql);

		$stmt->execute([$name, $mail, $restaurant, $subject, $message, $id]);


		header("location: ../back_office.php");

	}

 ?>


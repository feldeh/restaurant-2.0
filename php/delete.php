<?php 

require_once __DIR__ . '/config.php';

	$id = $_GET['id'];
	$sql = 'DELETE FROM contacts WHERE contact_id = ?';

    $sql = 'DELETE FROM contacts WHERE contact_id = ?';
	$stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);

    header('Location: ../back_office.php');



 ?>
<?php require_once 'includes/connection.php'; ?>
<?php require_once 'index.php'; ?>
<?php

$client_name = $_POST['client_name'];
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$phone_number = filter_var($_POST['phone_number'], FILTER_SANITIZE_NUMBER_INT);

if(!filter_var($email, FILTER_VALIDATE_EMAIL) || !filter_var($phone_number, FILTER_VALIDATE_INT)) {
    header('Location: error_file.php');
    die('');
}
mysqli_query($connect, "INSERT INTO `client`(`client_id_serial`, `client_name`,  `email`, `phone_number`  ) 
VALUES(NULL,'$client_name' , '$email', '$phone_number')");

header('Location: client.php');


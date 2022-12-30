<?php
require_once 'includes/connection.php';
$client_name = $_POST['client_name'];
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$phone_number = filter_var($_POST['phone_number'], FILTER_VALIDATE_INT);
$client_id_serial = $_POST['client_id_serial'];

if(!filter_var($phone_number, FILTER_VALIDATE_INT) || !filter_var($email, FILTER_VALIDATE_EMAIL )) {
    header('Location: error_file.php');
    die('');
}
mysqli_query($connect, "UPDATE `client` SET `client_name` = '$client_name',`email` = '$email', `phone_number` = '$phone_number', `client_id_serial` = '$client_id_serial' WHERE `client`.`client_id_serial` = '$client_id_serial' ");

header('Location: client.php');
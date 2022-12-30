<?php
require_once 'includes/connection.php';
$provider_name = $_POST['provider_name'];
$phone_number = filter_var($_POST['phone_number'], FILTER_VALIDATE_INT);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$provider_id_serial = $_POST['provider_id_serial'];


if(!filter_var($phone_number, FILTER_VALIDATE_INT) || !filter_var($email, FILTER_VALIDATE_EMAIL )) {
    header('Location: error_file.php');
    die('');

}
mysqli_query($connect, "UPDATE `provider` SET `provider_name` = '$provider_name',`phone_number` = '$phone_number', `email` = '$email', `provider_id_serial` = '$provider_id_serial' WHERE `provider`.`provider_id_serial` = '$provider_id_serial' ");

header('Location: provider.php');







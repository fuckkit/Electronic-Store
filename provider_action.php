<!DOCTYPE html>
<?php require_once 'includes/connection.php'; ?>
<?php require_once 'index.php'; ?>
<?php

$provider_name = $_POST['provider_name'];
$good_id_serial = $_POST['good_id_serial'];
$firm = $_POST['firm'];
$phone_number = filter_var($_POST['phone_number'], FILTER_SANITIZE_NUMBER_INT);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$password = $_POST['password'];


if(!filter_var($email, FILTER_VALIDATE_EMAIL) || !filter_var($phone_number, FILTER_VALIDATE_INT)) {
    header('Location: error_file.php');
    die('');

}
mysqli_query($connect, "INSERT INTO `provider`(`provider_id_serial`, `good_id_serial`, `provider_name`, `firm`, `phone_number`, `email`, `password`) 
VALUES(NULL, '$good_id_serial','$provider_name' , '$firm', '$phone_number', '$email', '$password')");



 header('Location: provider.php');



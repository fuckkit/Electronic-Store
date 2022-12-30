<?php require_once 'includes/connection.php'; ?>
<?php require_once 'index.php'; ?>
<?php

$employee_name = $_POST['employee_name'];
$role = $_POST['role'];
$shop = $_POST['shop'];
$phone_number = filter_var($_POST['phone_number'], FILTER_SANITIZE_NUMBER_INT);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$password = $_POST['password'];

if(!filter_var($email, FILTER_VALIDATE_EMAIL) || !filter_var($phone_number, FILTER_VALIDATE_INT)) {
    header('Location: error_file.php');
    die('');
}
mysqli_query($connect, "INSERT INTO `employee`(`employee_id_serial`, `employee_name`, `role`, `shop`, `phone_number`, `email`, `password`) 
VALUES(NULL,'$employee_name' , '$role', '$shop', '$phone_number', '$email', '$password')");

header('Location: employee.php');


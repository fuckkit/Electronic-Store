<?php
require_once 'includes/connection.php';
require_once 'index.php';
$employee_name = $_POST['employee_name'];
$role = $_POST['role'];
$phone_number = filter_var($_POST['phone_number'], FILTER_VALIDATE_INT);
$employee_id_serial = $_POST['employee_id_serial'];


if (!filter_var($phone_number, FILTER_VALIDATE_INT) ) {
    header('Location: error_file.php');
    die('');
}
mysqli_query($connect, "UPDATE `employee` SET `employee_name` = '$employee_name',`role` = '$role', `phone_number` = '$phone_number', `employee_id_serial` = '$employee_id_serial' WHERE `employee`.`employee_id_serial` = '$employee_id_serial' ");

header('Location: employee.php');

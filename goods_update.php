<?php require_once 'includes/connection.php'; ?>

<?php
$good_name = $_POST['good_name'];
$number_in_storage = filter_var($_POST['number_in_storage'], FILTER_SANITIZE_NUMBER_INT);
$cost = filter_var($_POST['cost'], FILTER_SANITIZE_NUMBER_FLOAT);
$good_id_serial = $_POST['good_id_serial'];

if(!filter_var($number_in_storage, FILTER_VALIDATE_INT) || !filter_var($cost, FILTER_VALIDATE_FLOAT )) {
    header('Location: error_file.php');
    die('');
}
mysqli_query($connect, "UPDATE `goods` SET `good_name` = '$good_name',`number_in_storage` = '$number_in_storage', `cost` = '$cost', `good_id_serial` = '$good_id_serial' WHERE `goods`.`good_id_serial` = '$good_id_serial' ");

header('Location: goods.php');

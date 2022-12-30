<?php require_once 'includes/connection.php'; ?>
<?php

$good_name = $_POST['good_name'];
$number_in_storage = filter_var($_POST['number_in_storage'], FILTER_SANITIZE_NUMBER_INT);
$number_of_ordered = filter_var($_POST['number_of_ordered'], FILTER_SANITIZE_NUMBER_INT);
$date_of_creation = $_POST['date_of_creation'];
$cost = $_POST['cost'];
$weight = $_POST['weight'];
$category = $_POST['category'];

if(!filter_var($number_in_storage, FILTER_VALIDATE_INT) || (!filter_var($number_of_ordered, FILTER_VALIDATE_INT))) {
    header('Location: error_file.php');
    die('');
}
mysqli_query($connect, "INSERT INTO `goods` (`good_id_serial`, `good_name`, `number_in_storage`, `number_of_ordered`, `date_of_creation`, `cost`, `weight`, `category`)
VALUES(NULL, '$good_name','$number_in_storage' , '$number_of_ordered', '$date_of_creation', '$cost', '$weight', '$category')");


header('Location: goods.php');


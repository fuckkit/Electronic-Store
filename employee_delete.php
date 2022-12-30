<?php $dbh = new PDO('mysql:host=mysql.zzz.com.ua;dbname=ev3rlast', "ev3rlast", "46B44a54m");
require_once 'index.php';
$employee_id_serial = $_POST['employee_id_serial'];
$sql = "DELETE FROM employee  WHERE employee_id_serial=:employee_id_serial";
$stmt = $dbh->prepare($sql);
$stmt->execute([
    ":employee_id_serial" => $employee_id_serial,
]);
header('Location: employee.php');
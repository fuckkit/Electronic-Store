<?php $dbh = new PDO('mysql:host=mysql.zzz.com.ua;dbname=ev3rlast', "ev3rlast", "46B44a54m");
require_once 'index.php';
$client_id_serial = $_POST['client_id_serial'];
$sql = "DELETE FROM client  WHERE client_id_serial=:client_id_serial";
$stmt = $dbh->prepare($sql);
$stmt->execute([
    ":client_id_serial" => $client_id_serial,
]);
header('Location: client.php');
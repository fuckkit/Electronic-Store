<?php $dbh = new PDO('mysql:host=mysql.zzz.com.ua;dbname=ev3rlast', "ev3rlast", "46B44a54m");
$good_id_serial = $_POST['good_id_serial'];
$sql = "DELETE FROM goods  WHERE good_id_serial=:good_id_serial";
$stmt = $dbh->prepare($sql);
$stmt->execute([
    ":good_id_serial" => $good_id_serial,
]);
header('Location: goods.php');
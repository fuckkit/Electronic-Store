<?php $dbh = new PDO('mysql:host=mysql.zzz.com.ua;dbname=ev3rlast', "ev3rlast", "46B44a54m");
$provider_id_serial = $_POST['provider_id_serial'];
$sql = "DELETE FROM provider  WHERE provider_id_serial=:provider_id_serial";
$stmt = $dbh->prepare($sql);
$stmt->execute([
    ":provider_id_serial" => $provider_id_serial,
]);
header('Location: provider.php');
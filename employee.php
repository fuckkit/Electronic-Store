<?php $dbh = new PDO('mysql:host=localhost;dbname=ev3rlast', "ev3rlast", "46B44a54m"); ?>
<?php require_once 'index.php'; ?>
<?php require_once 'exit.php'; ?>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Role</th>
        <th>Phone Number</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($dbh->query('SELECT * from employee') as $row) { ?>
        <?php $id=$row['employee_id_serial']?>
        <tr>
            <td><?php echo $row['employee_name']; ?></td>
            <td><?php echo $row['role']; ?></td>
            <td><?php echo $row['phone_number']; ?></td>
            <td>
                <form method="post" action="employee_update.php">
                    <input type="hidden" name="employee_id_serial" value="<?php echo $id; ?>">
                    <input type="text" name="employee_name" placeholder="ПІБ працівника">
                    <input type="text" name="role" placeholder="Посада">
                    <input type="text" name="phone_number" placeholder="Номер телефону">

                    <button type="submit">
                        Змінити
                    </button>
                </form>
            </td>
            <td>
                <form method="post" action="employee_delete.php">
                    <input type="hidden" name="employee_id_serial" value="<?php echo $id; ?>">

                    <button type="submit">
                        Видалити
                    </button>
                </form>
            </td>
        </tr>


    <?php } ?>
    </tbody>
</table>
<form method="post" action="employee_action.php">
    <input type="text" name="employee_name" placeholder="ПІБ працівника">
    <input type="text" name="role" placeholder="Посада">
    <input type="text" name="shop" placeholder="Магазин">
    <input type="text" name="phone_number" placeholder="Номер телефону">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="password" placeholder="Пароль">
    <button type="submit">
        Додати
    </button>
</form>


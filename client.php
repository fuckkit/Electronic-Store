<?php require_once 'includes/connection.php'; ?>
<?php require_once 'index.php'; ?>
<?php require_once 'exit.php'; ?>

<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($connect->query('SELECT * from client') as $row) { ?>
        <?php $id=$row['client_id_serial']?>
        <tr>
            <td><?php echo $row['client_name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone_number']; ?></td>
            <td>
                <form method="post" action="client_update.php">
                    <input type="hidden" name="client_id_serial" value="<?php echo $id; ?>">
                    <input type="text" name="client_name" placeholder="ПІБ клієнта">
                    <input type="text" name="email" placeholder="email">
                    <input type="text" name="phone_number" placeholder="Номер телефону">

                    <button type="submit">
                        Змінити
                    </button>
                </form>
            </td>
            <td>
                <form method="post" action="client_delete.php">
                    <input type="hidden" name="client_id_serial" value="<?php echo $id; ?>">

                    <button type="submit">
                        Видалити
                    </button>
                </form>
            </td>
        </tr>


    <?php } ?>
    </tbody>
</table>
<form method="post" action="client_action.php">
    <input type="text" name="client_name" placeholder="ПІБ клієнта">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="phone_number" placeholder="Номер телефону">
    <button type="submit">
        Додати
    </button>
</form>


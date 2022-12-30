<?php require_once 'includes/connection.php'; ?>
<?php require_once 'index.php'; ?>
<?php require_once 'exit.php'; ?>

<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($connect->query('SELECT * from provider') as $row) { ?>
        <?php $id=$row['provider_id_serial']?>
        <tr>
            <td><?php echo $row['provider_name']; ?></td>
            <td><?php echo $row['phone_number']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
                <form method="post" action="provider_update.php">
                    <input type="hidden" name="provider_id_serial" value="<?php echo $id; ?>">
                    <input type="text" name="provider_name" placeholder="Назва постачальника">
                    <input type="text" name="phone_number"  placeholder="Номер телефону">
                    <input type="text" name="email" placeholder="email">
                    <button type="submit">
                        Змінити
                    </button>
                </form>
            </td>
            <td>
                <form method="post" action="provider_delete.php">
                    <input type="hidden" name="provider_id_serial" value="<?php echo $id; ?>">

                    <button type="submit">
                        Видалити
                    </button>
                </form>
            </td>
        </tr>


    <?php } ?>
    </tbody>
</table>
<form method="post" action="provider_action.php">
    <input type="text" name="provider_name" placeholder="Назва постачальника">
    <input type="text" name="good_id_serial" placeholder="Індефікатор товару">
    <input type="text" name="firm" placeholder="Фірма">
    <input type="text" name="phone_number" placeholder="Номер телефону"  >
    <input type="text" name="email"   placeholder="email">
    <input type="text" name="password" placeholder="Пароль">
    <button type="submit">
        Додати
    </button>
</form>





<?php require_once 'includes/connection.php'; ?>
<?php require_once 'index.php'; ?>
<?php require_once 'exit.php'; ?>

<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Number in storage</th>
        <th>Price</th
    </tr>>
    </thead>
    <tbody>
    <?php foreach($connect->query('SELECT * from goods') as $row) { ?>
            <?php $id=$row['good_id_serial']?>
    <tr>
        <td><?php echo $row['good_name']; ?></td>
        <td><?php echo $row['number_in_storage']; ?></td>
        <td><?php echo $row['cost']; ?></td>
        <td>
            <form method="post" action="goods_update.php">
                <input type="hidden" name="good_id_serial" value="<?php echo $id; ?>">
                <input type="text" name="good_name" placeholder="Назва товару">
                <input type="text" name="number_in_storage" placeholder="Кількість на складі">
                <input type="text" name="cost" placeholder="Ціна">

                <button type="submit">
                    Змінити
                </button>
            </form>
        </td>
        <td>
            <form method="post" action="goods_delete.php">
                <input type="hidden" name="good_id_serial" value="<?php echo $id; ?>">

                <button type="submit">
                    Видалити
                </button>
            </form>
        </td>
    </tr>



<?php } ?>
</tbody>
</table>
<form method="post" action="goods_action.php">
    <input type="text" name="good_name" placeholder="Назва товару">
    <input type="text" name="number_in_storage" placeholder="Кількість на складі">
    <input type="text" name="number_of_ordered" placeholder="Кількість замовлень">
    <input type="text" name="date_of_creation" placeholder="Дата створення(РРРР-ММ-ДД)">
    <input type="text" name="cost" placeholder="Ціна(грн)">
    <input type="text" name="weight" placeholder="Вага(кг)">
    <input type="text" name="category" placeholder="Категорія товару">
    <button type="submit">
        Додати
    </button>
</form>

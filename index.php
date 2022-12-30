<?php
error_reporting(-1);
ini_set('display_errors',1);
header('Content-Type: text/html; charset=utf-8');
$page = (isset($_GET['page']) ? $_GET['page'] : 'index/bd');
?>
<link href="css/background.css" media="screen" rel="stylesheet">
<link href="css/main.css" media="screen" rel="stylesheet">
<link href= 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<html>
    <title>Electronics Store</title>
<header>
    <section>
        <footer>
            <nav>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="menu">
                            <ul>
                            <li><a href="goods.php?page=goods">Товари</a></li>
                            <li><a href="client.php?page=client">Клієнти</a></li>
                            <li><a href="employee.php?page=employee">Працівники</a></li>
                            <li><a href="provider.php?page=provider">Постачальники</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </footer>
    </section>
</header>
</html>
<?php require_once 'exit.php'; ?>

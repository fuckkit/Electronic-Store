<?php include("includes/header.php"); ?>
<div id="login">
        <h1>Вхід</h1>
        <form action="" id="loginform" method="post"name="loginform">
            <p><label for="user_login">Назва користувача<br>
                    <input class="input" id="username" name="username"size="20"
                           type="text" value=""></label></p>
            <p><label for="user_pass">Пароль<br>
                    <input class="input" id="password" name="password"size="20"
                           type="password" value=""></label></p>
            <p class="submit"><input class="button" name="login"type= "submit" value="Log In"></p>
            <p class="regtext">Ще не зареєстровані?<a href= "register.php">Реєстрація</a>!</p>
        </form>
    </div>
</div>

<?php
session_start();
?>

<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>
<?php

if(isset($_SESSION["session_username"])){
    header("Location: intropage.php");
}

if(isset($_POST["login"])){

    if(!empty($_POST['username']) && !empty($_POST['password'])) {
        $username=htmlspecialchars($_POST['username']);
        $password=htmlspecialchars($_POST['password']);
        $query =mysqli_query($connect, "SELECT * FROM userdb WHERE username='".$username."' AND password='".$password."'");
        $numrows=mysqli_num_rows($query);
        if($numrows!=0)
        {
            while($row=mysqli_fetch_assoc($query))
            {
                $dbusername=$row['username'];
                $dbpassword=$row['password'];
            }
            if($username == $dbusername && $password == $dbpassword)
            {

                $_SESSION['session_username']=$username;
                header("Location: intropage.php");
            }
        } else {

            echo  "Invalid username or password!";
        }
    } else {
        $message = "All fields are required!";
    }
}
?>



<?php include("includes/footer.php"); ?>
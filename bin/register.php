<?php
session_start();
require_once "header.php";
$title = "Регистрация";

?>

<main>
<form action="src/signup.php" method = "post" class = "form-register">
    <label>ФИО</label><br>
    <input type="text" name="full_name" placeholder="Введите свое полное имя" class = "form-register-input"><br>

    <label>Логин</label><br>
    <input type="text" name="login" placeholder="Введите свой логин" class = "form-register-input"><br>
   

    <label>Почта</label><br>
    <input type="email" name="email" placeholder="Введите свою почту" class = "form-register-input"><br>

    <label>Пароль</label><br>
    <input type="password" name="password" placeholder="Введите свой пароль" class = "form-register-input"><br>

    <label>Подтверждение пароля</label><br>
    <input type="password" name="password_confirm" placeholder="Введите пароль повторно" class = "form-register-input"><br><br>
    <button type="submit" id="button-register">Зарегистрироваться</button><br>
    <p id="p-register">
    <a href="sign-in.php" id="button-register-autorization">Уже зарегестрирован</a>
    </p>
    <?php
        if(isset($_SESSION['message'] )){
        echo '<p class = "msg">' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message'] );
    ?>
  
</form>
</main>
</body>
</html>
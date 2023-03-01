<?php
session_start();
require_once "header.php";
$title = "Вход";
?>

<main>
    <h1>Войдите в свой аккаунт</h1>
    <div>
        <form action="src/auth.php" method="post">
            <label for="login" class="sign-in-label">Логин</label><br>
            <input type="text" placeholder="Введите имя" class="user_name" name = "login"><br>
            <label for="password" class="sign-in-label">Пароль</label><br>
            <input type="password" placeholder="Введите пароль" class="password" name = "password"><br>
            <button type="submit" class="button-sign-in">Войти</button><br><br>
            <a href="register.php" class="a-regist-in">Зарегистрироваться</a>

            
            <!-- Если получилось авторизироваться -->
            <?php
                if(isset($_SESSION['message'] )){
                echo '<p class = "msg">' . $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['message'] );
             ?>
             

        </form>

    </div>
</main>



</body>

</html>
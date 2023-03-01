<?php
    session_start();
    require_once "connectdb.php";
   
    //Заносим в переменные наши данные из формы
    $user_name = filter_var(trim($_POST['full_name']));
    $login = filter_var(trim($_POST['login']));
    $email = filter_var(trim($_POST['email']));
    $password = filter_var(trim($_POST['password']));
    $password_confirm = filter_var(trim($_POST['password_confirm']));

    if(mb_strlen($user_name)<5 || mb_strlen($user_name)>90){
        echo "Недопустимое кол-во символов";
        exit();
    }elseif(mb_strlen($login)<5 || mb_strlen($login)>90){
        echo "Недопустимое кол-во символов";
        exit();
    }elseif(mb_strlen($password)<2 || mb_strlen($password)>90){
        echo "Недопустимое кол-во символов";
        exit();
    }

        
        if($password === $password_confirm){
            //хэшируем пароль
            $password = md5($password);

            //вносим значение с поле в бд
            $pdo->query("INSERT INTO `user` (`name`,`login`, `email`, `password`)
            VALUES('$user_name', '$login', '$email', '$password')");

            //перенаправляем все на страницу авторизации пользователя
            header('Location: bin/sign-in.php');
            $_SESSION['message'] = 'Регистрация прошла успешно!';
        }else{
            echo $_SESSION['message'] = 'Пароли не совпадают';
            header('Location: bin/register.php');
        }



 

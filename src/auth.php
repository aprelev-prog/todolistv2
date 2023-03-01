<?php
session_start();
require_once "connectdb.php";

$login = filter_var(trim($_POST['login']));
$password = md5(filter_var(trim($_POST['password'])));

  $check_user = $pdo->query("SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'");

    $check_user->setFetchMode(PDO::FETCH_ASSOC);
    $result = $check_user->fetch();

        if ($result  == 0) {
          echo "Неправильный логин или пароль";
        } else {
          header('Location: index.php');
        }

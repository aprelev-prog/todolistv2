<?php 
    require_once "connectdb.php";
    //получаем значение id
    $id = $_GET['id'];

    $connect_task = 'DELETE FROM `todos` WHERE `id` = ?';
    $query = $pdo->prepare($connect_task);
    $query->execute([$id]);

    header("Location: bin/index.php");
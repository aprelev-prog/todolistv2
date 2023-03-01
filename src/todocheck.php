<?php 
    
    require_once "connectdb.php";
    

    //Заносим из инпут поля значнеие в переменную
    $task = filter_var(trim($_POST['task']));
    
    //Помещаем значение переменной в бд
    $connect_task = 'INSERT INTO todos(task) VALUES(:task)';
    
    $query = $pdo->prepare($connect_task);
    $query->execute(['task' => $task]);

    header('Location: /bin/index.php');
    


    
    



   
   

    

   
           
            

    
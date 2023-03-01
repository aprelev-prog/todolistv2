<?php

require_once "header.php";
require_once "src/connectdb.php";
$title = "Главная страница";
?>

<main >
    <h1>Список задач</h1>

    <div class="div-task">
        <form action="src/todocheck.php" method="post">
            <input type="text" placeholder="Введите задачу" class="input-task" name="task">
            <button type="submit" class="button-add">Добавить</button>

        </form>
    </div>
    <div>
        <?php
        echo  '<ul class = "ul-for-index">';
        $query = $pdo->query("SELECT * FROM `todos`  ORDER BY `id` DESC");
        while($row = $query->fetch(PDO::FETCH_OBJ)){
        echo '<li class = "li-for-index"><b>' . $row->task . '</b><br><a href = "delete.php?id='.$row->id.'"><button class = "button-for-delete">Удалить</button></li><br>';
        }
        echo '</ul>';
        ?>
        </div>
    
</main>
</body>

</html>
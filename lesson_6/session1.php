<?php
    // Инициируем сессию
    session_start();
    // Помещаем значение в сессию
    $_SESSION['username'] = "test";
    
    //Новый элемент
    $_SESSION['pass'] = '123';
    // Выводим ссылку на другую страницу
    echo "<a href='session2.php'>Другая страница</a>";
?>
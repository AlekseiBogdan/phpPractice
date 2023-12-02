<?php

session_start();

echo 'Здравствуйте, '.$_SESSION['username'].'<br>';

echo 'your pass '.$_SESSION['pass'].'<br>';

echo "<a href='session3.php'>Следующая страница</a>";

?>
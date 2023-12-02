<?php

$pres = $_POST['pres'];
$year = $_POST['year'];

switch ($pres) {
    case 'bush':
        echo 'Вы ответили — Буш, правильно — Путин'.'<br>';
        break;
    case 'putin':
        echo 'Верно!'.'<br>';
        break;
    case 'medv':
        echo 'Вы ответили — Медведев, правильно — Путин'.'<br>';
        break;
}

switch ($year) {
    case 365:
        echo 'Вы ответили — '.$year.', правильно — 366'.'<br>';
        break;
    case 366:
        echo 'Верно!';
        break;
    case 369:
        echo 'Вы ответили — '.$year.', правильно — 366'.'<br>';
        break;
}

?>
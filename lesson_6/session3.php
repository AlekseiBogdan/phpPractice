<?php

session_start();
// Разрегистрировали переменную
unset($_SESSION['username']);
unset($_SESSION['pass']);
// Разрушаем сессию
session_destroy(); 


?>
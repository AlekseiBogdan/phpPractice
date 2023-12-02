<?php

    $ar = [1, 2, 3];

    echo $ar[0].'<br>'.$ar[1].'<br>'.$ar[2].'<br>';

    foreach ($ar as &$num) {
        $num = $num * 2;
    }

    unset($num);

    echo $ar[0].'<br>'.$ar[1].'<br>'.$ar[2];
?>
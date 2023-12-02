<?php
    // mbstring extension must be enabled

    mb_internal_encoding('UTF-8');

    $input = "Теперь пора всем хорошим людям прийти на помощь стране";

    $words = explode(" ", mb_strtolower($input));

    

    $words[1] = mb_strtoupper(mb_substr($words[1], 0, 1)).mb_substr($words[1], 1);

    $words[0] = mb_strtolower($words[0]);

    //Пора теперь стране прийти на помощь всем хорошим людям
    $output = [$words[1], $words[0], end($words), $words[5], $words[6], $words[7], $words[2], $words[3], $words[4]];

    echo implode(" ", $output).'.';
?>
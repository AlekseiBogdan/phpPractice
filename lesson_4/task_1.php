<?php
    // function foo(){
    //     function bar(){
    //         echo "Hello world";
    //     }
    // } bar();

    function foo(){
        function bar(){
            echo "Hello world";
        }
    }
    
    foo();
    bar();

    // выполнится второй вариант, так как есть необходимость инициализировать функцию bar(), без foo() ее не будет существовать
?>


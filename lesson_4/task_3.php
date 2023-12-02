<?php

$test = 5;
echo $test.'<br>';

function toHello($input) {
    $input = "Hello world <br>";
    return $input;
}

echo toHello($test);


// toHello(1);
// toHello("Hey");
// toHello([1,2]);

?>


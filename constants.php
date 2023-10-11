<?php

//case-sensitive
define("WELCOME", "hello my name is John Smith");
echo WELCOME; // hello my name is <NAME>

echo "<hr />";
//case-insensitive
define("WELCOME2", "hello my name is john smith", true);
echo welcome2;

echo "<hr />";

//constants are global
define("CAR", "VOLVO");

function myCar() {
    echo CAR; 
}

myCar();
?>
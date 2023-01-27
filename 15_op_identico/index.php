<?php

 if(5 == "5") {
    echo "5 é igual a 5 <br>";
 } else {
    echo "5 não é igual a 5";
 }

 if(4 === "4") {
    echo "4 é identico a 4 <br>";
 } else {
    echo "4 não é identico a 4 <br>";
 }

 if(3 === 3) {
    echo "3 é identico a 3 <br>";
 } else {
    echo "3 não é identico a 3 <br>";
 }

 $a = 2;
 $b = 2;
 $c = 1;

 if($a === $b) {
    echo "'A' é igual a 'B' <br>";
 } else {
    echo "'A' não é igual a 'B' <br>";
 }

 if($a === $c) {
    echo "'A' é igual a 'C' <br>";
 } else {
    echo "'A' não é igual a 'C' <br>";
 }

?>
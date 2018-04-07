<?php

    // print a string to convert all letter to uppercase
    $string = 'This is a string';
    echo "Given String: {$string}</br>";
    echo "All upper: ".strtoupper($string)."</br>";


    //print a string to conver all letter to lowercase
    $string = "ThiS iS A RanDoMLY UPPERCASE string.</br>";
    echo "Given Sring: {$string}";
    echo "All lower: ".strtolower($string).'</br>';

    //make a string's first character uppercase
    $string = "holo i am having fun.";
    echo "Given string: {$string}</br>";
    echo ucfirst($string);
    echo '</br>';

    //making first character of all words in a string uppercase
    echo "Given string: {$string}</br>";
    echo ucwords($string);
?>
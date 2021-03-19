<?php

/*
Write a program that will find the factorial of 
each elements of a given array.

INPUT : [1,2,3,4,5]
OUTPUT: [1,2,3,24,120]



*/

function _facto($e){
    if($e < 1)
        return 1;

        return $e * _facto($e - 1); // perform a recursion until 0 is reached
}


function _fnx($e){
    if(!is_array($e)){
            die('ERROR: the input must be an array');
    }

    $_tempStore = [];

    foreach($e as $vals){
        $_tempStore[$vals] = _facto($vals);
    }

    return $_tempStore;
}



//you can return the output as you like

print_r(_fnx([1,2,3,4,5]));
?>
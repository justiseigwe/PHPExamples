<?php
/* 
Write a program to count the elements of an array

INPUT: [1,1,2,3,4,4,4,5,6,7]
OUTPUT: [1 => 2, 2 => 1, 3 => 1, 4 => 3, 5 => 1, 6 => 1, 7 => 1]


NOTE: Do not use in-built function
*/

function _countElements($e){
    if(!is_array($e)){
        die('Error: Must be an array');
    }

    $_tempArray = [];

    foreach($e as $a){
        $_count = 0;
            foreach($e as $b){
                if($a === $b){
                    $_count++;
                }
            }
            //register items
            $_tempArray[$a] = $_count;
    }

    return $_tempArray;
}


print_r(_countElements([1,1,2,3,4,4,4,5,6,7]));

?>
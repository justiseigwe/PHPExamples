<?php

/*

Write a simple program to determine if a number is 
a perfect sqaure or not

INPUT : 25
OUTPUT: True (boolean)
*/

function _isPerfectSquare($e){
    if($e < 2)
        return true;
    
        $x = 1;
        //sum of odd numbers equals a perfect square
        while($e > 0){
            $e -= $x;
            $x += 2;
        }

        if($e === 0){ return true;}
    
        return false;
}


//check

if(_isPerfectSquare(25)){
    echo 'True';
}else{
    echo 'False';
}



?>
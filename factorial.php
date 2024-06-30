
<?php


/*
 Definition of a function called Factorial that is of integer type and has an integer parameter that returns an integer
Setting a condition to make the function call itself back
As long as the value of the number parameter is greater than zero, the function calls itself again and subtracts 1 from the value of the number parameter.
 */

function factorial($number)
{
    if ($number > 0) {
        return $number * factorial($number - 1);
    }
    return 1;
}


?>
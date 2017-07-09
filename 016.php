<?php
/**
 * Created by PhpStorm.
 * User: okharabet
 * Date: 7/9/17
 * Time: 12:09 PM
 */

#16. Создайте две переменные $a и $b, значения которых будут числами. Выведите максимальное число из этих двух.
$a = 0;
$b = 0;
echo "Enter first number: ";
fscanf(STDIN, "%d\n", $a);
echo "Enter second number: ";
fscanf(STDIN, "%d\n", $b);
if ($a > $b) {
    echo $a;
}
elseif ($a == $b) {echo "Numbers are the same.";}
    else {
        echo $b;
    }





?>
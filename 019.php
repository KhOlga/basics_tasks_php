<?php
/**
 * Created by PhpStorm.
 * User: okharabet
 * Date: 7/9/17
 * Time: 1:45 PM
 */
#19. Выведите результат сравнения $a и $b из п.17 с помощью var_dump.

$a = '78';
$b = 78;

if ($a == $b) {
    echo "Numbers are equal.\n";
    echo "First number is ";
    var_dump($a);
    echo "Second number is " ;
    var_dump($b);
    echo "\n";
}
else { echo "Numbers are not equal.";}



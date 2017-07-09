<?php
/**
 * Created by PhpStorm.
 * User: okharabet
 * Date: 7/9/17
 * Time: 10:37 AM
 */

#15. Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число.
#Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
#На экран выводить результат в зависимости от значений этих переменных.
#Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.

$a = 0;
$b = 0;
$operator = 0;

echo "For action subtraction enter '-',\n for action addition enter '+',\n for action multiplication enter '*',\n for action division enter '/',\n for action modulo division enter '%'.\n";
#fscanf(STDIN, "%d\n", $operator);
$operator = trim(fgets(STDIN));

switch($operator) {
    case'-':
        echo "Enter first number: ";
        fscanf(STDIN, "%d\n", $a);
        echo "Enter second number: ";
        fscanf(STDIN, "%d\n", $b);
        $result = $a - $b;
        echo $result;
        break;
    case'+':
        echo "Enter first number: ";
        fscanf(STDIN, "%d\n", $a);
        echo "Enter second number: ";
        fscanf(STDIN, "%d\n", $b);
        $result = $a + $b;
        echo $result;
        break;
    case'*':
        echo "Enter first number: ";
        fscanf(STDIN, "%d\n", $a);
        echo "Enter second number: ";
        fscanf(STDIN, "%d\n", $b);
        $result = $a * $b;
        echo $result;
        break;
    case'/':
        echo "Enter first number: ";
        fscanf(STDIN, "%d\n", $a);
        echo "Enter second number: ";
        fscanf(STDIN, "%d\n", $b);
        if ($b == 0) {
            echo "To zero is not possible to divide!";
        }
            else {
                $result = $a / $b;
                echo $result;
            }
        break;
    case'%':
        echo "Enter first number: ";
        fscanf(STDIN, "%d\n", $a);
        echo "Enter second number: ";
        fscanf(STDIN, "%d\n", $b);
        if ($b == 0) {
            echo "To zero is not possible to divide!";
        }
            else {
                $result = $a % $b;
                echo $result;
            }
        break;

}


?>
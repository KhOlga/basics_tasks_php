<?php
/**
 * Created by PhpStorm.
 * User: okharabet
 * Date: 7/8/17
 * Time: 8:15 PM
 */
$day = 0;
echo "Please enter any number from 1 to 7: ";
fscanf(STDIN, "%d\n", $day);

switch ($day) {
    case 1:
        echo "Monday is working day of week.\n";
        break;
    case 2:
        echo "Tuesday is working day of week.\n";
        break;
    case 3:
        echo "Wednesday is working day of week.\n";
        break;
    case 4:
        echo "Thursday is working day of week.\n";
        break;
    case 5:
        echo "Friday is working day of week.\n";
        break;
    case 6:
        echo "Suturday is day off.\n";
        break;
    case 7:
        echo "Sunday is day off.\n";
        break;
}


?>
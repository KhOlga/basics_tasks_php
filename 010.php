<?php
/**
 * Created by PhpStorm.
 * User: okharabet
 * Date: 7/8/17
 * Time: 8:05 PM
 */

    $day = 0;
    echo "Please enter any number from 1 to 5: ";
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

    }


?>
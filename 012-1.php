<?php
$day = 0;
echo "Please enter any number from 1 to 7: ";
fscanf(STDIN, "%d\n", $day);

    switch ($day) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo "It is working day of week.\n";
            break;
        case 6:
        case 7:
            echo "It is day off.\n";
            break;

        default:
            echo "Unknown day of week!\n";
    }

?>
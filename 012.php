<?php
$day = 0;
echo "Please enter any number from 1 to 7: ";
fscanf(STDIN, "%d\n", $day);


if ($day !== is_numeric($day) || $day < 1 || $day > 7) {echo "Unknown day of week!\n";}

    else {
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
    }

?>
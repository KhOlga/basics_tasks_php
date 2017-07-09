<?php
    $age = 0;
    echo "Enter your age please: ";
    fscanf(STDIN, "%d\n", $age);

    if ($age < 0 || $age !== is_numeric($age)) {
        echo "Unknown age!\n";

    }

        else {
            if ($age >= 18 && $age <= 59) {
                echo "You still have to work and work.\n" ;
            }
                else if ($age > 59) {
                    echo "It is time for you to retire.\n";
                }

                else if ($age >= 0 && $age <= 17) {
                    echo "It is too early to work for you.\n";
                    }
        }
?>
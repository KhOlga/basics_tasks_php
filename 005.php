<?php
    $age = 0;
    echo "Enter your age please: ";
    fscanf(STDIN, "%d\n", $age);

    if ($age >= 18 && $age <= 59) {
        echo "You still have to work and work.\n" ;
    }
        else { echo "EXIT.\n";}
?>
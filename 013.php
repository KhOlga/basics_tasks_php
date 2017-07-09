<?php
/**
 * Created by PhpStorm.
 * User: okharabet
 * Date: 7/9/17
 * Time: 9:40 AM
 */
#13. Заданы две переменные: s - длина участка, который проехал автомобиль; t - время движения в часах.
#Вывести скорость автомобиля на заданном участке в км/час и в м/сек.

$s = 0;
$t = 0;
echo "Please enter the distance (in km) that you went: ";
fscanf(STDIN,"%d\n", $s);
echo "Please enter the time (in hours) that you spent on it: ";
fscanf(STDIN, "%d\n", $t);

$speed = $s / $t;
$speed_m_s = ($s * 1000) / ($t * 60 * 60);
echo "Your speed was ". $speed . "km/h (" . $speed_m_s . "m/s).";


?>
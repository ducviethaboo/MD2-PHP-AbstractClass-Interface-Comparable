<?php
include_once 'Interface/Comparable.php';
include_once 'CompareCirlce.php';


$circleOne = new CompareCircle("Circle-One",6);
$circleTwo = new CompareCircle("Circle-Two",8);

echo $circleOne->compareTo($circleTwo);
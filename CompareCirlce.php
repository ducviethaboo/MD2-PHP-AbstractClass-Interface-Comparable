<?php
include_once 'Class/Circle.php';
include_once 'Interface/Comparable.php';

class CompareCircle extends Circle implements Comparable
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    public function compareTo($circleOther)
    {
        $circleOtherRadius = $circleOther->getRadius();
        if ($this->getRadius() > $circleOtherRadius) {
            return "Bigger";
        } elseif ($this->getRadius() < $circleOtherRadius) {
            return "Lower";
        } else {
            return "Equal";
        }
    }
}
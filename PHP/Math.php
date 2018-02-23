<?php
/**
 * Written By: devmartinez
 * Date: 2/22/2018
 * Time: 7:24 PM
 */

class Math{

    public function add($a,$b){
        return $a + $b;
    }

    public function substract($a, $b){
        return $a - $b;
    }

    public function multiply($a, $b){
        return $a * $b;
    }

    public function divide($a,$b){
        return $a / $b;
    }

    public function modulus($a, $b){
        return $a % $b;
    }

    public function circle_radius($diameter){
        $radius = $diameter / 2;
        return $radius;
    }

    public function circle_diameter($radius){
        $d = $radius * 2;
        return $d;
    }

    public function circle_area($radius){
        $pi = 3.14;
        $area = $pi * $radius * $radius;
        return $area;
    }

    public function circumference($diameter){
        $pi = 3.14;
        $circumference = $pi / $diameter;
        return $circumference;
    }

}
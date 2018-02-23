/*
* Written By: E. Martinez
* Math functions
* MIT License
* 2018
* */

//Variables
var radius, d, area, circ;
var pi = 3.14;

function add(a,b){
    return a + b;
}

function substract(a,b){
    return a - b;
}

function multiply(a,b){
    return a * b;
}

function divide(a,b){
    return a / b;
}

function modulus(a,b){
    return a % b;
}

function circle_radius(diameter){
    radius = diameter / 2;
    return radius;
}

function circle_diameter(radius){
    d = radius * 2;
    return d;
}

function circle_area(radius){
    area = pi * radius * radius;
    return area;
}

function circumference(diameter){
    circ = pi / diameter;
    return circ;
}
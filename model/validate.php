<?php

function validName($name){
    $valid = true;
    $name = str_replace(' ', '', $name);
    return !empty($name) && ctype_alpha($name) ;
}

function validAge($age){
    return !empty($age) && is_numeric($age) && ($age >= 18 && $age <= 118);
}

function validPhone($num){
    return !empty($num) && preg_match('/^\d{10}$/', $num);
}

function validEmail(){

}

function validOutdoor(){

}

function validIndoor(){

}
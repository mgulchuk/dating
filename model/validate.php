<?php

function validName($name){
    $name = str_replace(' ', '', $name);
    return !empty($name) && ctype_alpha($name) ;
}

function validAge($age){
    return !empty($age) && is_numeric($age) && ($age >= 18 && $age <= 118);
}

function validPhone($num){
    return !empty($num) && preg_match('/^\d{10}$/', $num);
}

function validEmail($email){
    return !empty($email) && !preg_match("/^[a-zA-Z ]*$/",$email);
}

function validOutdoor($outDoor){
    return !empty($outDoor);
}

function validIndoor($indoor){
    return !empty($indoor);
}
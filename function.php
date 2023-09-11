<?php

$length_password = isset($_GET['length_psw']) ?? null;

// var_dump($length_password); OK

$lowercase_letters = 'abcdefghijklmnopqrstuvwxyz';
$uppercase_letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$numbers = '0123456789';
$symbols = '!@#$%&*-_+/:?';

$characters = $lowercase_letters . $uppercase_letters . $numbers . $symbols;

function passwordGenerator ($elements, $length) {

    $psw = substr(str_shuffle($elements), $length, 8);

    return $psw;

};

$generated_psw = passwordGenerator($characters, $length_password);

//var_dump($generated_psw); OK

?>
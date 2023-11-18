<?php

//Exercicio 1
$numbersPairs = [10, 25, 35, 40, 32, 88, 89, 456];

$filterPairs = array_filter($numbersPairs, function ($number) {
    return $number % 2 == 0;
});

//Exercicio 2

$names = ['John', 'Pablo', 'Domingos', 'Cipriano'];

$namesFilter = array_filter($names, function ($name) {
    return str_contains($name, 'C');
});


// Exercício 3

$numbersEx3 = [-4, 8, 5, 10, 0, 12, 5, -17 , -5];

$filterEx3 =  array_filter($numbersEx3, function ($numberpos) {
    return $numberpos >= 0;
});

//Exercicio 4
$frutas = ['uva', 'morango', '' , 'pera', 'banana', 'maca', '', 'laranja', '' ];

$filterFrutas = array_filter($frutas, function ($fruta){
    return !empty($fruta);
});

//Exercicio 5

$numerals = ['um', 'cinco', 'treze', 'oito', 'dezenove', 'dezoito'];
$filterNumerals = array_filter($numerals, function ($numeral) {
    return strlen($numeral) > 2;
});


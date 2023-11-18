<?php
//Exercício 1
$dobraNumero = fn ($n) => $n * 2;

$arrayNumber = [2, 3, 4, 5, 6, 12, 44, 55, 12];

$arrayDobrado = array_map($dobraNumero, $arrayNumber);

//Exercicio 2
$nomes = ['John', 'Emanuel', 'Mateus', 'Pedro', 'João'];

$adicionaSr = fn ($item) => 'Sr. ' . $item;

$addedSr = array_map($adicionaSr, $nomes);
//Exercício 3
$raioCirculos = [15, 220, 190, 456, 441, 314];

$calcArea = fn ($raio) => 3.1415926535898 * $raio ** 2;

$areamap = array_map($calcArea, $raioCirculos);

// Exercício 4
$temperaturas = [35, 37, 38, 36, 33, 32];

$translateF = fn ($temp) => ($temp * 9/5) + 32;

$result = array_map($translateF, $temperaturas);
var_dump($result);

// Exercício 5
$strings = ["hello world", "goodbye universe", "php is fun"];

$capitalizedWords = array_map(function ($string) {
    // Capitaliza cada palavra na string
    return ucwords($string);
}, $strings);

print_r($capitalizedWords);
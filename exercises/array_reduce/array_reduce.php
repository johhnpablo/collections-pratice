<?php

//Exercício 1
$array = [1, 2, 3, 4, 5];

$novoArray = array_reduce($array, function ($i, $n){
    $i += $n;
    return $i;
});
var_dump($novoArray);
//Exercicio 2
$array = [1, 2, 3, 4, 5];

$novoArray = array_reduce($array, function ($i, $n){
    $i += $n;
    return $i;
});
//Exercicio 3
$array3 = ['Olá,', ' ' , 'Mundo', '!'];

$novoArray3 = array_reduce($array3, function ($i, $n){
   return  $i . $n;
});
//Exercício 4
$array4 = [1, 2, 3, 4, 5];

$novoArray4 = array_reduce($array4, function ($i, $n){

   return $i + $n;

}, 0)  / count($array4);

echo $novoArray4 . PHP_EOL;

//Exercício 5
$numbers = [5, 2, 8, 1, 7];
$minValue = array_reduce($numbers, function ($carry, $number) {
    return min($carry, $number);
}, PHP_INT_MAX);
 echo $minValue;
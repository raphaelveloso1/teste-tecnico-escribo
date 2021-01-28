<?php
/**
 * Recebe um número inteiro positivo e retorne o somatório de todos os valores
 * inteiros divisíveis por 3 ou 5 que sejam inferiores ao número passado.
 */
function sumMultiplesOf3and5(int $num) : int
{
    $sum= 0;
    for($i = 0; $i < $num; $i++){
        if($i % 3 === 0 || $i % 5 === 0){
            $sum += $i;
        }
    }
    return $sum;
}

if ($argc > 1)
    echo sumMultiplesOf3and5($argv[1]) . "\n";

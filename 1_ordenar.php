<?php

function sortArray($arr) {
    // frequências de cada elemento
    $frequencia = array_count_values($arr);
    
    // Ordena o array com base na frequência e depois pelo valor
    uasort($arr, function($a, $b) use ($frequencia) {
        if ($frequencia[$a] == $frequencia[$b]) {
            return $a - $b;
        }
        return $frequencia[$a] - $frequencia[$b];
    });
    
    return $arr;
}

// Caso de teste 01
$arr = [3, 1, 2, 2, 4];
$sortArr = sortArray($arr);

echo('Caso de teste 01:<br />');
print_r($sortArr);


// Caso de teste 02
$arr = [8, 5, 5, 5, 5, 1, 1, 1, 4, 4];
$sortArr = sortArray($arr);

echo('<hr />Caso de teste 02:<br />');
print_r($sortArr);

// Caso de teste 03
$arr = [1, 2, 3, 7, 1, 8, 2];
$sortArr = sortArray($arr);

echo('<hr />Caso de teste 03:<br />');
print_r($sortArr);

?>
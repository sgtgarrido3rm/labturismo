<?php
/**
* Criado em 05/04/2023
* 
* 2) Fibonacci
* 
* @author Luis Olavo Garrido (sgtgarrido3rm@gmail.com)
*/

function fibonacci($n) {

	if ($n == 1) {
  		$fibo = array(0); // se for apenas um termo do fibo, exibe e não faz mais nada
	} else {
		$fibo = array(0, 1);
		for ($i = 2; $i < $n; $i++) {
			$fibo[$i] = $fibo[$i-1] + $fibo[$i-2];
		}
		sort($fibo);
	}

	return $fibo;
}


// Caso de teste 01
$n = 4; // substitua pelo valor desejado
$resultado = fibonacci($n);
//print_r($resultado); // imprime o array com os primeiros n números de Fibonacci em ordem crescente

echo "Caso de teste 01:<br />";
$res = implode(",", $resultado);
echo $res;

// Caso de teste 02
$n = 5; // substitua pelo valor desejado
$resultado = fibonacci($n);
//print_r($resultado); // imprime o array com os primeiros n números de Fibonacci em ordem crescente

echo "<hr />Caso de teste 02:<br />";
$res = implode(",", $resultado);
echo $res;

// Caso de teste 03
$n = 8; // substitua pelo valor desejado
$resultado = fibonacci($n);
//print_r($resultado); // imprime o array com os primeiros n números de Fibonacci em ordem crescente

echo "<hr />Caso de teste 03:<br />";
$res = implode(",", $resultado);
echo $res;

// Caso de teste 04
$n = 1; // substitua pelo valor desejado
$resultado = fibonacci($n);
//print_r($resultado); // imprime o array com os primeiros n números de Fibonacci em ordem crescente

echo "<hr />Caso de teste 04:<br />";
$res = implode(",", $resultado);
echo $res;

// Caso de teste 05
$n = 3; // substitua pelo valor desejado
$resultado = fibonacci($n);
//print_r($resultado); // imprime o array com os primeiros n números de Fibonacci em ordem crescente

echo "<hr />Caso de teste 05:<br />";
$res = implode(",", $resultado);
echo $res;

// Caso de teste 06
$n = 10; // substitua pelo valor desejado
$resultado = fibonacci($n);
//print_r($resultado); // imprime o array com os primeiros n números de Fibonacci em ordem crescente

echo "<hr />Caso de teste 06:<br />";
$res = implode(",", $resultado);
echo $res;
?>
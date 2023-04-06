<?php
/**
* Criado em 05/04/2023
* 
* 4) Maior valor da lista
* 
* @author Luis Olavo Garrido (sgtgarrido3rm@gmail.com)
*/

function manipulaArray($n, $operacoes) {
  $lista = array_fill(1, $n, 0);
  foreach ($operacoes as $op) {
    $a = $op[0];
    $b = $op[1];
    $v = $op[2];
    for ($i = $a; $i <= $b; $i++) {
      $lista[$i] += $v;
    }
  }
  return $lista;
}

// Caso de teste 01
$n = 5; // tamanho inicial do array
$operacoes = array(
	array(1,2,100),
	array(2,5,100),
	array(3,4,100),
);

$resultado = manipulaArray($n, $operacoes);

echo "<br />============================<br />";
echo "Caso de teste 01:<br />";
echo "Resultado esperado: 200<br />";
echo "Resultado obtido: " . max($resultado);
echo "<br />============================<br />";

// Caso de teste 02
$n = 4; // tamanho inicial do array
$operacoes = array(
	array(2,3,603),
	array(1,1,286),
	array(4,4,882),
);

$resultado = manipulaArray($n, $operacoes);

echo "<br />============================<br />";
echo "Caso de teste 02:<br />";
echo "Resultado esperado: 882<br />";
echo "Resultado obtido: " . max($resultado);
echo "<br />============================<br />";


// Caso de teste 03
$n = 40; // tamanho inicial do array
$operacoes = array(
	array(29,40,787),
	array(9,26,219),
	array(21,31,214),
	array(8,22,719),
	array(15,23,102),
	array(11,24,83),
	array(14,22,321),
	array(5,22,300),
	array(11,30,832),
	array(5,25,29),
	array(16,24,577),
	array(3,10,905),
	array(15,22,335),
	array(29,35,254),
	array(9,20,20),
	array(33,34,351),
	array(30,38,564),
	array(11,31,969),
	array(3,32,11),
	array(29,35,267),
	array(4,24,531),
	array(1,38,892),
	array(12,18,825),
	array(25,32,99),
	array(3,39,107),
	array(12,37,131),
	array(3,26,640),
	array(8,39,483),
	array(8,11,194),
	array(12,37,502),
);

$resultado = manipulaArray($n, $operacoes);

echo "<br />============================<br />";
echo "Caso de teste 03:<br />";
echo "Resultado esperado: 8628<br />";
echo "Resultado obtido: " . max($resultado);
echo "<br />============================<br />";

$n = 40; // tamanho inicial do array
$operacoes = array(
	array(19,28,419),
	array(4,23,680),
	array(5,6,907),
	array(19,33,582),
	array(5,9,880),
	array(10,13,438),
	array(21,39,294),
	array(13,18,678),
	array(12,26,528),
	array(15,30,261),
	array(8,9,48),
	array(21,23,131),
	array(20,21,7),
	array(13,40,65),
	array(13,23,901),
	array(15,15,914),
	array(14,35,704),
	array(20,39,522),
	array(10,18,379),
	array(16,27,8),
	array(25,40,536),
	array(5,9,190),
	array(17,20,809),
	array(8,20,543),
	array(22,37,298),
	array(19,37,112),
	array(2,5,186),
	array(21,29,184),
	array(23,30,625),
	array(2,8,960),
);

$resultado = manipulaArray($n, $operacoes);

echo "<br />============================<br />";
echo "Caso de teste 04:<br />";
echo "Resultado esperado: 6314<br />";
echo "Resultado obtido: " . max($resultado);
echo "<br />============================<br />";
?>
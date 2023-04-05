<?php
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
echo "Resultado final: " . max($resultado);

?>
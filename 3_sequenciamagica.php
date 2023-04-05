<?php
function subsequenciaMagica($s) {
  $vogais = 'aeiou';
  $comprimento_subsequencia = 0;
  $indice_vogal = 0;
  for ($i = 0; $i < strlen($s) && $indice_vogal < strlen($vogais); $i++) {
    if ($s[$i] == $vogais[$indice_vogal]) {
      $indice_vogal++;
      if ($indice_vogal == strlen($vogais)) {
        $comprimento_subsequencia = $i + 1;
      }
    }
  }
  return $comprimento_subsequencia;
}

$s = 'aeiaaioooaauuaeiou'; // substitua essa string pela que desejar
$resultado = subsequenciaMagica($s);
echo "O comprimento da subsequência mágica mais longa em '$s' é $resultado";


?>
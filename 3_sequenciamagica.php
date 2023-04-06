<?php
/**
* Criado em 05/04/2023
* 
* 3) Vogais Mágicas
* 
* @author Luis Olavo Garrido (sgtgarrido3rm@gmail.com)
*/

function countSequence($vowels, $splited){
	//contador
	$count = 0;
	$weight = 1;
	$positions = [];

	$isMagic = isMagic($splited); // chamada da verificação
	//retorna zero se não for mágica
	if(!$isMagic){
		return 0;
	}
	// iteração do array verificando as posições das vogais
	foreach ($splited as $pos => $sp) {
		$positions[$pos] = $vowels[$sp];
	}
	// iteração do array verificando o peso de cada e fazendo a contagem
	foreach ($positions as $value) {
		if($value == $weight){
			$count++;
		}else if($value == $weight+1 && $count > 0){
			$weight++;
			$count++;
		} 
	}

	return $count;
}

// verifica se existe todas as vogais
function isMagic($arr){
	$count = count(array_unique($arr));
	return $count >= 5;
}

// array de vogais - valor do peso de cada vogal
$vowels = ['a' => 1, 'e' => 2, 'i' => 3, 'o' => 4, 'u' => 5];

# Caso de teste 01
$s = 'aeiaaioooaauuaeiou'; 
$r =  10; // resultado esperado

// faz o split da string se tiver espaço vai ter um valor vazio no array
$splited = str_split($s, 1);

//print_r($splited);

$response = countSequence($vowels, $splited);
echo "<br />============================";
echo "<br />Caso de teste 01:";
echo "<br />String passada: $s";
echo "<br />Resultado esperado: $r";
echo "<br />Resultado obtido: $response";
echo "<br />============================<br />";

# Caso de teste 02
$s = 'aeiaaioooaa'; 
$r = 0; // resultado esperado

// faz o split da string se tiver espaço vai ter um valor vazio no array
$splited = str_split($s, 1);

//print_r($splited);

$response = countSequence($vowels, $splited);
echo "<br />============================";
echo "<br />Caso de teste 02:";
echo "<br />String passada: $s";
echo "<br />Resultado esperado: $r";
echo "<br />Resultado obtido: $response";
echo "<br />============================<br />";

# Caso de teste 03
$s = 'uioieeeaouiiuaeeuuiuuauuauaeaeuauaeaaiuoiouaeuiuuoooaeeaioeieoeooaeuooae'; 
$r = 13; // resultado esperado

// faz o split da string se tiver espaço vai ter um valor vazio no array
$splited = str_split($s, 1);

//print_r($splited);

$response = countSequence($vowels, $splited);
echo "<br />============================";
echo "<br />Caso de teste 03:";
echo "<br />String passada: $s";
echo "<br />Resultado esperado: $r";
echo "<br />Resultado obtido: $response";
echo "<br />============================<br />";

# Caso de teste 04
$s = 'iaaieeeoaueuaaaaieaooiiuiaueeoauiueuaeiaouiueoouaeeioeieoeeiiiouiaioiaeeaaaeaouiioiueuoieeoeoiuuuouiaoeaaeeeiueuiueiaieuoueoeooiuoooiooouuuoiuoeiuaouoeaaaiaeueaiaeouuaeioeoaeeuuaeouiauaiaoioueeiauuieouoeuoiiooauoeaoieuieiaooaaieuoauueoeueeauuaaueeeeeoooouueoiaauooioioaeiiuaiueeoaeiuiaouieiueuae'; 
$r =  67;// resultado esperado

// faz o split da string se tiver espaço vai ter um valor vazio no array
$splited = str_split($s, 1);

//print_r($splited);

$response = countSequence($vowels, $splited);
echo "<br />============================";
echo "<br />Caso de teste 04:";
echo "<br />String passada: $s";
echo "<br />Resultado esperado: $r";
echo "<br />Resultado obtido: $response";
echo "<br />============================<br />";

# Caso de teste 05
$s = "ioeueooeuieoaioeoooiioieueoaiieaeaoeioiiaueueiououeiueeaaueeueaeoaaaouoeoieouaauooeuuoeauuaauaeoeeuiueeeuiieooeuaooeiaeueaaaaiooeaoiiiaaaooeiioaiiieieauaoeuiiueuioouuaoaioeiaiaaaaoeeaiuiaeoiiuauiiaeiuuaoaeaaaaeoeueieoaaaooueioaauieieouoeouieaueuuaiiueoouioueuaaauaoeueuoouieuuouuoueoaaeuuouueieuouiooaiuaoeuaeiaueuuieeiuaaeuiuuiuoiaiaeauuuaeeuuuuoieoieuaoiiuoeiaeaeeauoueaiuooiaoaiuoouoeeueeuaoeueiaiioiouueeaaoeoeauouuieeoaoioauieeeieeaaiuiaaeiaeueuouuaoaoiiaoeoaoeuieeouiiiiauauueaeouaeeeaoeaaaeouuueoeoiueeoeiouaoeaaeeoaeaiiuouoaaeiuaiaeueuauaoauueuoeueueauuuueeeeuaouaaueaiouoeuooeiouoiiiueauauaeuaauuoeuoaeeouoouoeeeoieoaouiaaioiuoeuaaouuiioieoiiaueueuieouaiioeuaeoeieaoeiuooueeoeuueueioaoaauoooiiueueooeuouauuaiuiaoieeeeoouoeiaaaeieiooeouioeuooeeiauouueiuieaeaieeooaoeiuu"; 
$r =  175; // resultado esperado

// faz o split da string se tiver espaço vai ter um valor vazio no array
$splited = str_split($s, 1);

//print_r($splited);

$response = countSequence($vowels, $splited);
echo "<br />============================";
echo "<br />Caso de teste 05:";
echo "<br />String passada: $s";
echo "<br />Resultado esperado: $r";
echo "<br />Resultado obtido: $response";
echo "<br />============================<br />";

?>
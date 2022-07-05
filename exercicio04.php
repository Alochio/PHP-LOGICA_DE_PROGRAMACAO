<!--
	ESTA ATIVIDADE TEM O INTUITO DE ANALIZAR QUANTAS VEZES UM
	VALOR APARECE DENTRO DE UM ARRAY.
-->
<?php
	
	$array = ['Vinicius', 'Gustavo', 'Andre', 'Bernardo', 'João', 'Gustavo', 'João', 'Antonio',
				'Bernardo', 'Bernardo', 'Andre'];
	$arrayRepetido = array();

	for($i = 0; $i < count($array); $i++){
		$valorAtual = $array[$i];
		if(!isset($arrayRepetido[$valorAtual])){
			$arrayRepetido[$valorAtual] = 1;
		}
		else{
			$arrayRepetido[$valorAtual]++;
		}
	}

	$arrayRepetido[$valorAtual]++;

	echo "QUANTIDADE DE VEZES QUE CADA NOME APARECE NO ARRAY: ";
	echo '<hr>';

	foreach ($arrayRepetido as $key => $value) {
		echo $key;
		echo " = ";
		echo $value;
		echo '<hr>';
	}
?>
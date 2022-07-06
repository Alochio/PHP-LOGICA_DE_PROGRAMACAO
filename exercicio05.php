<!--
	ESTE CÓDIGO TEM O OBJETIVO DE PEGAR UM ARRAY VAZIO, E PREENCHER ELE DE VALORES
	ALEATÓRIOS DE UM INTERVALO DEFINIDO PELO DESENVOLVEDOR, COM A ÚNICA CONDIÇÃO DE
	QUE OS VALORES NÃO PODEM SER REPETIDOS DENTRO DO ARRAY, CADA ESPAÇO DEVE RECEBER
	UM VALOR ÚNICO.
-->
<?php
	
	$array = [];
	$cont = 0;

	for($i = 0; $i < 5; $i++){
		$array[$i] = rand(0,4);
		while (inArrayCuston($i, $array[$i], $array)) {
			$array[$i] = rand(0,4);
			$cont++;
		}
	}

	for($i = 0; $i < count($array); $i++){
		echo "array[";
		echo $i;
		echo "] = ";
		echo $array[$i];
		echo '<br>';
	}

	function inArrayCuston($indice, $valor, $array){
		for($i = 0; $i < count($array); $i++){
			if($array[$i] == $valor && $i != $indice){
				return true;
			}
		}
		return false;
	}

	echo "A função inArrayCuston precisou corrigir o array ";
	echo $cont;
	echo " vezes, para não haver velores repetidos.";
?>
<!-- 
	O OBJETIVO DESSE CÓDIGO É, A CRIAÇÃO DE DOIS ARRAYS E IDENTIFICANDO
	OS VALORES IDENTICOS NO SEU INTERIOR.
-->
<?php

$array_0 = array(0,2,4,6,8,10,12,14,16,18,20, 'Alochio');
$array_1 = array(0,1,2,3,4,5,6,7,8,9,10,11,12,'Vinicius', 'Alochio', 'Santos');
$arrayEmComum = [];
$cont = 0;

for($i = 0; $i < count($array_0); $i++){
	for($j = 0; $j < count($array_1); $j++){
		if($array_0[$i] === $array_1[$j]){
			$arrayEmComum[] = $array_0[$i];
			$cont++;
		}
	}
}

echo "Os arrays possuem ";
echo $cont;
echo " valores identicos!";
echo '<br><br><br>';
echo "Imprimindo os valores identicos entre os arrays: ";
echo '<br>';

for($i = 0; $i < count($arrayEmComum); $i++){
	echo $arrayEmComum[$i];
	echo " ";
}
?>
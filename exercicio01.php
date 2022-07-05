<!--
	NESTE PROGRMA, O OBEJETIVO ERA TRABALHAR COM COISAS SIMPLES, IMPRESSÃO DE TEXTOS
	E DE VARIÁVEIS, CRIAR UM ARRAY E REALIZAR A IMPRESSÃO DOS ESPAÇOS PREENCHIDOS NO
	MESMO, TRABALAR COM COMANDO DE REPETIÇÃO COMO O FOR E COM UM CONDICIONAL IF.
-->

<?php
$helloWord = "Hello Word!!";
$txt = "Meu primeiro código em PHP";

$array = ['V','','i','-','n','i','','c','','-','i','u','s'];
$string = '';
$contCaracter;

echo $helloWord;
echo '<br>';
echo $txt;

for($i = 0; $i < count($array);$i++){
	$contCaracter = $i;	
}

$contCaracter++;

echo '<br>';

if($contCaracter == 0){
	echo "Esse array não possui caracteres!";
}
else if($contCaracter == 1){
	echo "Esse array possui ";
	echo $contCaracter;
	echo " caracter";
}
else if($contCaracter > 1){
	echo "Esse array possui ";
	echo $contCaracter;
	echo " caracteres";
}

for($i = 0; $i < count($array);$i++){

	if($array[$i] == 'i'){
		continue;
	}
	if($array[$i] == '-'){
		continue;
	}

	$string.=$array[$i];

}

echo '<br>';
echo "Impressão do array sem alguns caracteres: ";
echo $string;
	
?>
<?php 

$dimens=$_POST['dimensao'];
$inicio=$_POST['txt_inicio'];
$fim=$_POST['txt_fim'];
$pesquisar=$_POST['txt_pesquisar'];

$soma=0;
$produto=0;
$media=0;
echo 'Valores Gerados para Array: ';
for ($i=0; $i<$dimens ; $i++) { 
	$num[$i] = rand($inicio,$fim);
	echo $num[$i].' ';
	$soma=$soma+$num[$i];
	$produto=$soma*$num[$i];
	$media=$soma/$dimens;
}
foreach ($num as $chave => $num) {
	if ($pesquisar==$num) {
		$chave=$chave+1;
		echo "<br>";
		echo "O valor ".$pesquisar." encontra-se na posicao ".$chave. " do vetor. <br>";
	}
	if ($num%2==0) {
		echo "Numero par: ".$num;
	}
	else{
		echo "Numero impar: ".$num;
	}
	echo "<br>";


}
	echo "a Media é: ".$media;

 ?>
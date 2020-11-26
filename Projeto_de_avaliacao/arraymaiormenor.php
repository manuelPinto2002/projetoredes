<?php 
$maior=-9999999;
$menor=9999999;
$soma=0;
$produto=0;



$num=array();
for ($i=0; $i<20 ; $i++) { 
	$num[$i] = rand(1,10000);
	$soma=$soma+$num[$i];
	$produto=$soma*$num[$i];
}
foreach ($num as $chave => $num) {
	if ($num>$maior) {
		$maior=$num;
	}
	if ($num<$menor) {
		$menor=$num;
	}

}
echo "mairo: ".$maior;
echo "<br>";
echo "menor: ".$menor;
echo "<br>";
echo "soma: ".$soma;
echo "<br>";
echo "produto: ".$produto;
 ?>
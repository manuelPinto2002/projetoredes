<?php

if ($_POST['idade_p']>=18 && $_POST['anoN']=2000 && $_POST['nomep']=='Ana') {


	$nome=$_POST['nomep'];
	echo "Nome: ".$nome;
	echo "<br>";
	echo "Tem idade para votar";
}
else{
echo "ERRO DA PAGINA NOME OU ANO INCORRETO";
	echo '<a href="formulario2.html">Formulario2</a>';
}

  ?>
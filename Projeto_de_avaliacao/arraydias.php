<?php

$meses=array(
    'Janeiro',
    'Fevereiro',
    'Março',
    'Abril',
    'Maio',
    'Junho',
    'Julho',
    'Agosto',
    'Setembro',
    'Outubro',
    'Novembro',
    'Dezembro'
);
$diassemana=array(
     'Segunda-Feira',
     'Terça-Feira',
     'Quarta-Feira',
     'Quinta-Feira',
     'Sexta-Feira',
     'Sábado',
     'Domingo'
);

echo "Mes ".$meses[$_POST['meses']];
echo "<br>";
echo "Dia ".$diassemana[$_POST['dias']];
echo "<br>";
echo '<a href="index.html">indice</a>';
?>

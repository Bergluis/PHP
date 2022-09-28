<!--Prog 24_DiferencasDatas
    07/07/2017
    Luís Fernando Bergamaschi
    Subtração de datas -->
<?php
    echo "Diferença Datas<br>";
    $data1 = mktime(8,0,0,6,5,2017);
    $data2 = mktime(8,0,0,6,9,2017);
    $resul = ($data2 - $data1);//subtração de datas
    echo date ($resul/(24*60*60)), "<br>";//arredondamento para dias
?>
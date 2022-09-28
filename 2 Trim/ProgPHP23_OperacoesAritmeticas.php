<!--Prog 23_OperacoesAritmeticas
    07/07/2017
    Luís Fernando Bergamaschi
    Operações aritmeticas e arredondamento -->
<?php
    echo "Operações Aritméticas <br>";
    $a = 2;
    $b = 5;
    $c = 8;
    $resul1 = ($a + $b + $c);//soma
    $resul2 = (sqrt($a * $b * $c));//multiplicação com raiz
    echo $resul1, "<br>", round($resul2, 2), "<br>";//resultado com 2 casas após a virgula
?>
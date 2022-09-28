<!--Prog 26_GeraNumeroRandomico
    07/07/2017
    Luís Fernando Bergamaschi
    Gerador de numeros randomicos com teste de par/impar -->
<?php
    echo "Gera Número Randomico<br>";
    $min = 1;
    $max = 100;
    $resul = rand($min, $max);//randomizador de números
    if($resul % 2 == 0){
        echo "O número ", $resul, " é par";
    } else {
        echo "O número ", $resul, " é impar";
    }
?>
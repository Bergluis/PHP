<!--Prog 29_Invento
    07/07/2017
    Luís Fernando Bergamaschi
    Invento -->
<?php
    $min = 1;
    $max = 5;
    $resul = rand($min, $max);//randomiza números
    echo "OUÇA AGORA!!"
    switch($resul){
        case 1:
            echo "<img src='imagens/Guns.jpg'>";
            break;
        case 2:
            echo "<img src='imagens/Blink.png'>";//imagens com os casos nos números
            break;
        case 3:
            echo "<img src='imagens/ACDC.png'>";
            break;
        case 4:
            echo "<img src='imagens/FooFighters.jpg'>";
            break;
        case 5:
            echo "<img src='imagens/Wesley.jpg'>";
            break;
    }
?>
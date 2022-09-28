<!--Prog 19_OperadoresAritmeticos
    07/07/2017
    Luís Fernando Bergamaschi
    Operações possíveis de aritmetica -->
<?php
    echo "Códigos sobre Operadores Aritméticos<br>";
    echo "****************** <br>";
    echo "Parte 1:<br>";
    $x = 1;
    $x = -$x;
    $y = -$x;//altera sinal
    echo $x, "<br>",$y, "<br>";
//escreva até aqui e testa
    echo "****************** <br>";
    echo "Parte 2:<br>";
    $a = 13;
    $b = $a%4; //indica o resto
    $c = $b/5; //divide por
    $d = (int)($b/5); //resultado inteiro
    echo $b, "<br>", $c, "<br>", $d, "<br>";
//escreva até aqui e testa
    echo "****************** <br>";
    echo "Parte 3:<br>";
    $e = 10;
    $e /= 4;
    echo $e, "<br>";
    echo floor($e), "<br>";//arredonda para baixo
    echo ceil($e), "<br>";//arredonda pra cima
//escreva até aqui e testa
    echo "****************** <br>";
    echo "Parte 4:<br>";
    $var1 = 20;
    $var2 = "Teste";
    $var3 = 2.5;
    $resultado = $var1*$var3;//multiplica
    echo " $var3 <br> $var2 <br> $var1 <br> $resultado <br>";
//escreva até aqui e testa
    echo "****************** <br>";
    echo "Parte 5:<br>";
    echo round(3.4),"<br>";//arredonda
    echo round(3.5),"<br>";
    echo round(3.6),"<br>";
    echo round(5.045, 2),"<br>";
    echo round(5.055, 2),"<br>";
//escreva até aqui e testa
    echo "****************** <br>";
    echo "Parte 6:<br>";
    $f = -10;
    $g = 10;
    echo abs($f),"<br>",abs($g),"<br>";//numero absoluto-ignora o sinal
//escreva até aqui e testa
    echo "****************** <br>";
    echo "Parte 7:<br>";    
    $h = 2;
    $i = 3;
    $j = pow($h, $i);
    echo $j, "<br>";
    $k = 9;
    echo sqrt($k), "<br>";
//escreva até aqui e testa
    echo "****************** <br>";
    echo "Parte 8:<br>";   
    $min = 1;
    $max = 100;
    echo rand($min, $max), "<br>";//aleatoriza entre min e max
//escreva até aqui e testa
    echo "****************** <br>";
    echo "Parte 9:<br>";
    $l = 5;
    echo $l++, "<br>";//operação depois de mostrar
    echo $l, "<br>";
    $l = 5;
    echo ++$l, "<br>";//operação antes de mostrar
    echo $l, "<br>";
    $l = 5;
    echo $l--, "<br>";
    echo $l, "<br>";
    $l = 5;
    echo --$l, "<br>";
    echo $l, "<br>";
//escreva até aqui e testa
    echo "****************** <br>";
    echo "Parte 10:<br>";
    
?>















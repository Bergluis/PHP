<!--Prog 20_OperadoresLogicos
    07/07/2017
    Luís Fernando Bergamaschi
    Operações logicas -->
<?php
    echo "Códigos sobre Operadores Lógicos Relacionais<br>";
    echo "******************* <br>";
    echo "Parte 1:<br>";
    $a = "40";
    $b = 40;
    echo ($a == $b), "<br>";//Igual
    echo ($a === $b), "<br>";//Identico
    echo ($a != $b), "<br>";//Diferente
    echo ($a !== $b), "<br>";//Não identico
//escreva até aqui e testa
    echo "******************* <br>";
    echo "Parte 2:<br>";
    $c = 15;
    $d = 10;
    echo ($c > $d), "<br>";
    echo ($c < $d), "<br>";
    echo ($c >= $d), "<br>";
    echo ($c <= $d), "<br>";
//escreva até aqui e testa
    echo "******************* <br>";
    echo "Parte 3:<br>";
    $e = true;
    $f = false;
    echo ($e && $f), "<br>";//Teste and
    echo ($e || $f), "<br>";//Teste or
    echo (!$e), "<br>";
//escreva até aqui e testa
    echo "******************* <br>";
    echo "Parte 4:<br>";
    $g = "Oie";
    $h = 0;
    echo ($g && $h), "<br>";
    echo ($g || $h), "<br>";
    echo (!$g), "<br>";
    echo "******************* <br>";
//escreva até aqui e testa
?>
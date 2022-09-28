<!--Prog 37_InventoWHILEDOWHILE
    07/07/2017
    Luís Fernando Bergamaschi
    Invento -->
<?php
    $x = 1;
    do{
        echo "<input type='radio' name='nota'> Nota ",$x ," pra erva B1<br>";
        $x++;
    }while($x <= 10);
    $x = 1;
    while($x <= 2){
        echo "<img src='imagens/B1.jpg'>";
        $x++;
    }
?>
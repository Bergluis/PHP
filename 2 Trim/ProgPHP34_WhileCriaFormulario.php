<!--Prog 34_WHILECriaFormulario
    07/07/2017
    Luís Fernando Bergamaschi
    Criação de formulario com WHILE -->
<?php
    $x = 1;
    while($x <= 10){
        echo "<br><input type='radio'> Escolha da Banda ",$x;//caixas de marcar impressas repetidas
        $x++;
    }
?>
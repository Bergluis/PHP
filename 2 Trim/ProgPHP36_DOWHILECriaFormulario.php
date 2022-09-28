<!--Prog 36_DOWHILECriaFormulario
    07/07/2017
    Luís Fernando Bergamaschi
    Criação de formulario com DOWHILE -->
<?php
    $i = 2;
    do {
        echo "<input type=checkbox> Fui bem em ", $i," provas!<br>";//checkbox no DOWHILE
        $i += 1;//incremento
    }while($i <= 10);
?>
<!--Prog 32_FORCriaFormulario
    07/07/2017
    Luís Fernando Bergamaschi
    Criação de formulario com FOR -->
<?php
    echo "Criando formulário com FOR";
    for($x=1; $x<=10 ; $x++){
        echo "<br>Nome ",$x ,":<input type='text'>";// criando caixas de preenchimento
    }
?>
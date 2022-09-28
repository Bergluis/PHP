<!--Prog 27_IfIdadeGenero
    07/07/2017
    Luís Fernando Bergamaschi
    Testes com string e numeros -->
<?php
    echo "If Idade Gênero<br>";
    $idade = 22;
    $sex = "Feminino";
    if($idade < 15 && $sex == "Feminino"){
        echo "Menina";
    } else if($idade >= 15 && $sex == "Feminino"){//if's com mais condições
        echo "Mulher";
    } else if($idade < 15 && $sex == "Masculino"){
        echo "Menino";
    } else if($idade >= 15 && $sex == "Masculino"){
        echo "Homem";
    }
?>
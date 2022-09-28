<?php
    $usuario[1]['Nome']='Camilo';
    $usuario[1]['Notas']['Linguagem']='6';

    $usuario[2]['Nome']='José';
    $usuario[2]['Notas']['Linguagem']='4';

    $usuario[3]['Nome']='Pedro';
    $usuario[3]['Notas']['Linguagem']='1';
    
    $x=0;
    foreach ($usuario as $aux1){
        if(is_array($aux1)){
            foreach ($aux1 as $indice => $aux2){
                if(is_array($aux2)){
                    foreach ($aux2 as $indice => $aux3){
                        echo "$indice: <font color='Green'>$aux3</font> <br>";
                        $x += $aux3;
                    }
                } else {
                    echo "<br>  $indice: <font color='Blue'>$aux2</font> <br>";
                }
            }
        }
    }
    $x = $x/3;
    echo "Média dos alunos: ", number_format($x,2,',',' '), "<br>";
?>
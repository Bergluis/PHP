<?php
    $usuario[1]['nome']='Camilo';
    $usuario[1]['notas']['linguagem']='6';
    $usuario[1]['notas']['Português']='6.5';
    $usuario[1]['notas']['Matemática']='5.5';

    $usuario[2]['nome']='José';
    $usuario[2]['notas']['linguagem']='4';
    $usuario[2]['notas']['Português']='6';
    $usuario[2]['notas']['Matemática']='10';

    $usuario[3]['nome']='Pedro';
    $usuario[3]['notas']['linguagem']='1';
    $usuario[3]['notas']['Português']='10';
    $usuario[3]['notas']['Matemática']='10';

    foreach ($usuario as $aux1){
        if(is_array($aux1)){
            foreach ($aux1 as $indice => $aux2){
                if(is_array($aux2)){
                    foreach ($aux2 as $indice => $aux3){
                        echo "$indice: <font color='Green'>$aux3</font> <br>";
                    }
                } else {
                    echo "<br>  $indice: <font color='Blue'>$aux2</font> <br>";
                }
            }
        }
    }
?>
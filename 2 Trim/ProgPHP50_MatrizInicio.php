<?php
    //array com duas dimensões
    $usuario[1]['nome']='Luís';
    $usuario[1]['email']='luisbergamaschi5@hotmail.com';

    $usuario[2]['nome']='Anna';
    $usuario[2]['email']='slatocompreguica@oi.com';

    $usuario[3]['nome']='Camilo';
    $usuario[3]['email']='slatocomsono@oi.com';

    foreach ($usuario as $aux1){//entra na posição
        if(is_array($aux1)){//ve se é vetor a posição
            foreach ($aux1 as $indice => $aux2){//entra no dado, e imprime o indice
                echo "$indice: $aux2, <br>";
            }
        }
    }
?>
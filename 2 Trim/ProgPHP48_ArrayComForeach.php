<?php
    /*foreach para imprimir*/
    $capitais[]='Porto Alegre';
    $capitais[]='Florianópolis';
    $capitais[]='Curitiba';
    $capitais[]='São Paulo';
    $capitais[]='Rio de Janeiro';
    $capitais[]='Goiânia';
    $capitais[]='Vitória';
    $capitais[]='Belo Horizonte';
    $capitais[]='Cuiabá';
    $capitais[]='Natal';
    
    foreach($capitais as $capital){
        echo $capital,"<br>";
        /*O que faz o foreach, pesquisar cada posição do vetor, passando a uma auxiliar, que ira ser mostrada*/
    }
?>
<!--Prog 30_DesvioCondicional
    07/07/2017
    Luís Fernando Bergamaschi
    Testes com horarios e o mesmo da região -->
<?php
    date_default_timezone_set('America/Sao_Paulo');//hora de SP
    $hora = date('H:i:s',time());//modo da data
    if($hora >= 0 && $hora < 12){//teste com data
        echo "<font color='#008000'>Bom Dia!</font>";
    } else if($hora >= 12 && $hora > 18){
        echo "<font color='#FF0000'>Boa Tarde!</font>";//impressões com  cores
    } else {
        echo "<font color='#FFFF00'>Boa Noite!</font>";
    }
?>
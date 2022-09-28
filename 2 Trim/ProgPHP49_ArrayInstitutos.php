<?php
    $institutos["IFSul"]='Instituto Federal Sul-rio-grandense';
    $institutos["IFAC"]='Instituto Federal do Acre';
    $institutos["IFSC"]='Instituto Federal de Santa Catarina';
    $institutos["IFMA"]='Instituto Federal do Maranhão';
    $institutos["IFRS"]='Instituto Federal do Rio Grande do Sul';
    $institutos["IFBA"]='Instituto Federal da Bahia';
    $institutos["IFMG"]='Instituto Federal de Minas Gerais';
    $institutos["IFES"]='Instituto Federal do Espírito Santo';
    $institutos["IFSP"]='Instituto Federal de São Paulo';
    $institutos["IFF"]='Instituto Federal Fluminense';
    
    foreach($institutos as $instituto => $aux){
        echo $instituto, " - ", $aux, "<br>";
    }
?>
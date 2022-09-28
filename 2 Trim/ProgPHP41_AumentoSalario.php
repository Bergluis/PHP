<?php
    $x;
    if (isset ($_POST['botao'])) {
        echo "<font color='#9675f0'>Nome: ",$_POST['nome'],"<br>";
        $x = ($_POST['sal'] * ($_POST['rea']/100))+$_POST['sal'];
        echo "<font color='#00ff3b'>Novo salário: ",$x,"<br>";
    }
?>
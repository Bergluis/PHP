<?php
    $x;
    if (isset ($_POST['botao'])) {
        $x = $_POST['val1'] + $_POST['val2'];
        echo "<font color='#9675f0'>Soma: ",$x,"<br>";
    }
?>
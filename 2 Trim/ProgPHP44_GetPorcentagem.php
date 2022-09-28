<html>
    <head>
        <title>Porcentagem</title>
    </head>
    <body>
        <form method="get">
            <select name="porcentagem">
                <?php
                    for
                    ($i=0;$i<=100;$i+=10){
                        echo "<option value>", $i, "%</option>";
                    }
                ?>
            </select>
        </form>
    </body>
</html>
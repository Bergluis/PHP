<html>
    <head>
        <title>Ano</title>
    </head>
    <body>
        <form method="get">
            <select name="ano">
                <?php
                    for
                    ($i=1997;$i<=2037;$i++){
                        echo "<option value>", $i, "</option>";
                    }
                ?>
            </select>
        </form>
    </body>
</html>
<html>
    <head>
        <title="Ejercicio 4"> </title>
    </head>

    <body>
        <h1> Tabla de 10 x 10 </h1>
        <!--<div align=center>  Alineamiento central en HTML -->
            <?php
            echo "<table border = 1>\n";
            echo "<div align=center>\n";
            for($i = 0; $i < 10; ++$i)
            {
                for($j = 0; $j < 10; ++$j)
                {
                    echo ("<td>".(10*$i+$j+1)."</td>\n");
                }
                echo "</tr>\n";
            }
            echo "</table>";
            ?>
        </div><br>

    </body>
</html>

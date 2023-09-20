<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
    <style>
        body{
            background-color: antiquewhite;
        }
    </style>
</head>
<body>
    <h1>
        Desafio 
    </h1>

    <?php

        $fone = "1234567890";

        //echo "(" . substr($fone, 0, 3) . ") " . substr($fone, 3, 3) . "-" . substr($fone, 6, 4);

        // Usando expressão regular
        //$formatado = preg_replace('/(\d{3})(\d{3})(\d{4})/', '($1) $2-$3', $fone);
        //echo $formatado;



        $formata = substr($fone,0,3);
        $formata_2 = substr($fone,3,3,);
        $formata_3 = substr($fone,6,4);

        echo"(".$formata.") $formata_2 - $formata_3";


    ?>
</body>
</html>
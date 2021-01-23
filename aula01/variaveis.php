<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
</head>
<body>
    <?php
        $Variavel_Boll=TRUE;
        $Variavel_STR="estou aprendendo php";
        $Variavel_STR2="para a faculdade";
        $Variavel_INT=23;

        echo gettype($Variavel_Boll);//deve exibir o valor booleano
        echo gettype($Variavel_STR);//deve exibir o valor STRING
        if(is_int($Variavel_INT)){
            $Variavel_INT+=4;
            echo $Variavel_INT;
        }

        if(is_string($Variavel_Boll)){
            echo "é string";
        }

    ?>
    
</body>
</html>
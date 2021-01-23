<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arr=array("cliente1"=>1,"cliente2"=>2);
        echo $arr["cliente1"]."<br>";
        //ou ainda
        $arr["cliente3"]=3;
        $arr["cliente4"]=4;

        echo$arr["cliente4"];
    ?>
    
</body>
</html>
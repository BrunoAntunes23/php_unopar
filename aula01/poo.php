<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programação a objeto</title>
</head>
<body>
    <?php
        Class Pessoa{
            public $nome="bruno";
            
            public function mostraNome($nome){
                echo $this->nome;
            }
            
           


        }
        $pessoa1=new Pessoa();
        echo $pessoa1->nome;
        echo $pessoa1->mostraNome("bruno");
    ?>
</body>
</html>
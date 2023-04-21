<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <?php
    $ano = $_GET ["an"];
    $idade = 2023 - $ano;
    echo "Quem narceu em $ano tem idade de $idade anos.";
    $tipo = ($idade>=18 && $idade<65)?"OBRIGATORIO":"NAO OBRIGATORIO";
    echo "E dessas formas seu voto e $tipo"; 
    ?>
</div>    
</body>
</html>
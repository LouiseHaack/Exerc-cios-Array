<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Exercício 5</h1>
<p>5) Faça uma função que retorne um array de tamanho aleatório, contendo números aleatórios.</p>

<?php
    $num=num();  
    for($i=0; $i<count($num); $i++){
        echo $num[$i]."";
    }
    function num(){
        for($i=0; $i<=rand(1,100); $i++){
            $array[]=rand(1,100);
        }
        return $array;
    }
?>
</body>
</html>
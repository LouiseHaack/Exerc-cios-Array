<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Exercício 3</h1>
<p>3) Criar uma função que receba o intervalo entre dois números, retornando um array com os números impares divisíveis por 7, encontrados no intervalo informado.</p>


<?php
function intervalo($x, $y){  
    $num=[];
    for($num=10; $num<$y; $num++){
        if($num%2==1 and $num%7==0)
        echo "".$num;
    }
}
intervalo(10,50); 
?> 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Exercício 1</h1>
<p>1) Faça um script em PHP, capaz de gerar um array contendo os números pares 
//encontrados no intervalo de 0 a 10.</p>

<?php
$num=[]; 
for($num=0; $num<10; $num++){
    if($num%2==0 and $num>0)
    echo " ".$num; 
}
echo "<br/>";
?> 
</body>
</html>
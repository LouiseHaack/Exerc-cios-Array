<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Exercício 4</h1>
<p>4) Criar uma função que retorna a data atual por extenso. Ex: 12 de Maio de 2020.</p>

<?php
//4)Criar uma função que retorna a data atual por extenso. Ex: 12 de Maio de 2020.

function dataExtenso(){  
    $data = date('d/m/Y');
    $mes = date('m');
    $dia = date('d');
    $ano = date('Y');
    $data = explode("/",$data); 
    //var_dump($data);
    $mes=null;
    switch($data[1]){
        case '1':
            $mes='Janeiro';
        break;
        case '2':
            $mes='Fevereiro';
        break;
        case '3':
            $mes='Março';
        break;
        case '4':
            $mes='Abril';
        break;
        case '5':
            $mes='Maio';
        break;
        case '6':
            $mes='Junho';
        break;
        case '7':
            $mes='Julho';
        break;
        case '8':
            $mes='Agosto';
        break;
        case '9':
            $mes='Setembro';
        break;
        case '10':
            $mes='Outubro';
        break;
        case '11':
            $mes='Novembro';
        break;
        case '12':
            $mes='Dezembro';
        break;
    }
   // $dataCompleta = $data[0]." de ".$mes." de ".$data[2];
    $data0= $data[0];
    $data2= $data[2];
    $dataCompleta = $data0." de ".$mes." de ".$data2;
    return $dataCompleta;
    }
    echo dataExtenso();
   // dataExtenso(date ('d/m/Y'));
    echo "</br>";
?>
</body>
</html>
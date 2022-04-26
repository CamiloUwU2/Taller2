<?php

$estrato = $_POST['estrato'];
$metros = $_POST['vlrmetro'];
$resultado = 0;


if($estrato=='1')
{
    $resultado = $metros*5000;
    echo 'El resultado es:  '.$resultado  ; 
}

if($estrato=='2')
{
    $resultado = $metros*6500;
    echo 'El resultado es:  '.$resultado  ; 
}

if($estrato=='3')
{
    $resultado = $metros*7000;
    echo 'El resultado es:  '.$resultado  ; 
}
if($estrato=='4')
{
    $resultado = $metros*8000;
    echo 'El resultado es:  '.$resultado  ; 
}
if($estrato=='5')
{
    $resultado = $metros*9200;
    echo 'El resultado es:  '.$resultado  ; 
}


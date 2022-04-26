<?php

$Numero = $_POST['Numero'];
$resultado = 0;


if($Numero>200 and $Numero<=300)
{
    $resultado = $Numero*11000;
    echo 'La Tarifa es:  '.$resultado  ; 
}

if($Numero>300)
{
    $resultado = $Numero*9000;
    echo 'La Tarifa es:  '.$resultado  ; 
}
else

{
    $resultado = $Numero*14000;
    echo  'la tarifa es: '.$resultado;
}



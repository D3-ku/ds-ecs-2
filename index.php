<?php

require_once 'modelo/auto.php';
require_once 'modelo/moto.php';

$auto = new Auto();
$moto = new Moto();

$auto->Marca = "Fiat";
$auto->Modelo = "2025";
$auto->Color = "Blanco";

$moto->Marca = 'Motomel';
$moto->Cilindrada = '110cc';
$moto->Color = 'Rojo';

$auto->MostrarAuto();
$moto->MostrarMoto();

?>

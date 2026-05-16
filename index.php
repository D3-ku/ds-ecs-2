<?php

require_once 'modelo/auto.php';
require_once 'modelo/moto.php';

$auto = new Auto();
$auto2 = new Auto();
$moto = new Moto();

$auto->Marca = "Fiat";
$auto->Modelo = "2025";
$auto->Color = "Blanco";

$auto2->Marca = "Renault";
$auto2->Modelo = "2023";
$auto2->Color = "Gris";

$moto->Marca = 'Motomel';
$moto->Cilindrada = '110cc';
$moto->Color = 'Rojo';

$auto->MostrarAuto();
$auto2->MostrarAuto();
$moto->MostrarMoto();

?>

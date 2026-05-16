<?php

class Auto
{
   
   public $Marca;
   public $Modelo;
   public $Color;

 
   public function MostrarAuto()
   {
       echo "Marca: " . $this->Marca . "<br>";
       echo "Modelo: " . $this->Modelo . "<br>";
       echo "Color: " . $this->Color . "<br>";
       
   }
}

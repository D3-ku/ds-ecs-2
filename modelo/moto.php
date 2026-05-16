<?php

class Moto
{
  
   public $Marca;
   public $Cilindrada;
   public $Color;

  
   public function MostrarMoto()
   {
       echo "Marca: " . $this->Marca . "<br>";
       echo "Cilindrada: " . $this->Cilindrada . "<br>";
       echo "Color: " . $this->Color . "<br>";
       
   }
}

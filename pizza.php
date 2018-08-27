<?php

class Pizza
{
    public $nom;
	public $prix;
    public $ingredient;
    public $taille;
    
   


   public function __construct($nom,$prix,$ingredient,$taille)
   {
      $this->nom= $nom;
      $this->prix=$prix;
      $this->ingredient=$ingredient;
      $this->taille=$taille;

   }
   
     
}



?>




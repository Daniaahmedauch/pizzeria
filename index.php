<?php

require_once("pizza.php"); 

$p1[0] ='nom';
$p1[1]='prix';
$p1[2] ='ingredient';
$p1[3] ='taille';

$p1 = new Pizza ('pizza italienne','7euros','merguez fromage','moyenne');

echo $p1->nom.' '[0]; 
echo $p1->prix.' ';
echo $p1->ingredient. ' ';
echo $p1->taille.' ';
echo '<img src="p.jpeg" alt="une pomme !" />'.'  ';
$p2 = new Pizza ('pizza orientale','7euros','poulet tomate','petite');

echo $p2 ->nom. ' ';
echo $p2 ->prix. ' ';
echo $p2 ->ingredient. ' ';
echo $p2 ->taille. ' ';

$p3 = new Pizza ('pizza 4 fromage','8euros','fromage aux choix','grande');

 echo $p3 ->nom.' ';
 echo $p3 ->prix.' ';
 echo $p3 ->ingredient.' ';
 echo $p3 ->taille. ' ';

?>

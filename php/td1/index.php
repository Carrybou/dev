<?php
class Voiture {
    public string $marque;
 
    function freiner(float $forceDeFreinage): void 
    {
        //code de la fonction
        echo "<br>";
        echo $forceDeFreinage;
    }
}
 
$mavoiture = new Voiture();
$mavoiture->marque = 'Renault';
 
echo 'Marque de ma voiture : ';
echo $mavoiture->marque;
$mavoiture->freiner(10.5);


?>


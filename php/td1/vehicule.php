
<?php
class Vehicule {
    public string $marque;
    public int $CV;
    public float $km =10;

    public function __construct(string $marque, int $CV,float $km) {
        $this->marque=$marque;
        $this->CV=$CV;
        $this->km=$km;
    }

    public function rouler(float $kmParcouru): void {
        
        $this -> km +=$kmParcouru;

    }
    public function afficher() : string {
        
        $texte ="Marque :". $this -> marque."<br>";
        $texte .="Puissance : ".$this -> CV."<br>";
        $texte .="Kilometrage : ".$this -> km ."<br><br>";
        return $texte;

    }
}
 
?>
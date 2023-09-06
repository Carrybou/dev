<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Véhicule</h1>

    <?php require('vehicule.php');

        $voiture1 = new Vehicule('Renaud',90,15000);
        $voiture2 = new Vehicule('Peugeot',100,20000);
        echo $voiture1 -> afficher();
        $voiture2 -> afficher();
        $voiture1-> CV =110;
        $voiture1->afficher();
        $voiture1->rouler(1500);
        $voiture1->afficher();

    ?>


</body>
</html>
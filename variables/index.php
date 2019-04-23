<?php
//Variables
//EX01
    $nom="Marais";
    $prenom="Loïc";
    $age=25;
//EX02
    $km=1;
//EX03
    $string="string";
    $int="5";
    $float="1.2345";
    $boolean=true;
//EX04
    $int2;
    settype($int2, "integer");
//EX05
    $v1=3+4;
    $v2=5*20;
    $v3=45/5;
//EX06
    $prix=785;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Les variables</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<h2>Série 1 : Les variables</h2>
<?php
//EX01
    echo "<h3>EX01</h3><p>Bonjour ".$prenom.", enfant de la famille ".$nom." ayant atteint de level ".$age." !</p>";
//EX02
    echo "<h3>EX02</h3><p>".$km." => ";
    $km=3;
    echo $km." => ";
    $km=125;
    echo $km."</p>";
//EX03
    echo "<h3>EX03</h3><p>string=".$string.",   int=".$int.",   float=".$float.",   boolean=".$boolean."</p>";
//EX04
    echo "<h3>EX04</h3><p>".$int2." => ";
    $int2=10;
    echo $int2."</p>";
//EX05
    echo "<h3>EX05</h3><p>v1=".$v1.",   v2=".$int.",   v3=".$v3."</p>";
//EX06
    echo "<h3>EX06</h3>";
    $ristourne=$prix*30/100;
    $newPrix=$prix-$ristourne;
    echo "<p>Prix de départ: ".$prix."€ Ristourne: ".$ristourne."€ Nouveau prix: ".$newPrix."€</p>";
?>
</body>
</html>
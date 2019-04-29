<?php
//Variables
//EX01
    $age1=17;
//EX02
    $isEasy=true;
//EX03
    $age2=25;
    $genre='Homme';
//EX04
    $magnitude=8;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Les conditions</title>
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<h2>Série 2 : Les conditions</h2>
<?php
//Code
//EX01
    echo "<h3>EX01</h3>";
    if ($age1 >= 18){
        echo "<p>Vous êtes majeur !</p>";
    }
    else {
        echo "<p>Vous êtes mineur.</p>";
    }
//EX02
    echo "<h3>EX02</h3>";
        if ($isEasy == 1){
            echo "<p>C'est facile !  ";
        } else {
            echo "<p>C'est dur !  ";
        }
        if ($isEasy == true){
            echo "<==>  C'est facile !</p>";
        } else {
            echo "&  C'est dur !</p>";
        }
//EX03
    echo "<h3>EX03</h3>";
        if (($age2 < 18)&&($genre == "Homme")){
            echo "<p>Vous êtes un homme et vous êtes mineur !</p>";
        } 
        else if (($age2 > 18)&&($genre == "Homme")){
            echo "<p>Vous êtes un homme et vous êtes majeur !</p>";
        } 
        else if (($age2 < 18)&&($genre == "Femme")){
            echo "<p>Vous êtes une femme et vous êtes mineure !</p>";
        } 
        else if (($age2 > 18)&&($genre == "Femme")){
            echo "<p>Vous êtes une femme et vous êtes majeure !</p>";
        }
//EX04
    echo "<h3>EX04</h3>";
        switch($magnitude){
            case 1: echo "<p>Micro-séisme impossible à ressentir.</p>"; break;
            case 2: echo "<p>Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.</p>"; break;
            case 3: echo "<p>Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.</p>"; break;
            case 4: echo "<p>Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.</p>"; break;
            case 5: echo "<p>Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.</p>"; break;
            case 6: echo "<p>Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.</p>"; break;
            case 7: echo "<p>Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.</p>"; break;
            case 8: echo "<p>Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.</p>"; break;
            case 9: echo "<p>Séisme capable de tout détruire sur une très vaste zone.</p>"; break;
        }
//EX05
    echo "<h3>EX05</h3>";
        echo "<p>if (\$maVariable != 'Homme'){ echo 'C'est une développeuse !!!';} else { echo 'C'est un développeur !!!';}</p>";
//EX06
    echo "<h3>EX06</h3>";
        echo "<p>if (\$monAge >= 18){ echo 'Tu es majeur';} else { echo 'Tu n'es pas majeur';}</p>";
//EX07
    echo "<h3>EX07</h3>";
        echo "<p>if (\$monAge == false){ echo 'c'est pas bon !!!';} else { echo 'c'est ok';}</p>";
//EX08
    echo "<h3>EX08</h3>";
        echo "<p>if (\$maVariable){ echo 'c'est ok !!';} else { echo 'c'est pas bon !!!';}</p>";
?>
</body>
</html>
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

?>
</body>
</html>
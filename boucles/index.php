<?php
//EX01
$incr=0;
//EX02
$num021=0;
$num022=7;
//EX03
$num031 = 100;
$num032 = 27;
//EX04
$incdem = 1;
//EX05
$pas05 = 1;
//EX06
$pas06 = 20;
//EX07
$i07 = 1;
$pas07 = 15;
//EX08
$i08 = 200;
$pas08 = 12;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boucles</title>
</head>
<body>
<h2>Série 3: Les Boucles</h2>
<?php
//EX01
    echo "<h3>EX01</h3>";
        while ($incr <= 10) {
            echo $incr++;
        if ($incr <= 10){
            echo ", ";
        } 
        else {
            echo ".</p>";
        }
        }
//EX02
    echo "<h3>EX02</h3>";
        do{
            $prod = $num021 * $num022;
            echo $prod." ";
            $num021++;
        } while($num021 <20);
//EX03
    echo "<h3>EX03</h3>";
        do{
            $num23 = $num031 * $num032;
            echo $num23." ";
            $num031--;
        } while($num031 > 10);
//EX04
    echo "<h3>EX04</h3>";
        do{
            echo $incdem." ";
            $incdem+=$incdem/2;
        } while($incdem < 10);
//EX05
    echo "<h3>EX05</h3>";
        do{
            echo "On y arrive presque. ";
            $pas05++;
        } while($pas05 < 15);
//EX06
    echo "<h3>EX06</h3>";
        do{
            echo "C'est presque bon. ";
            $pas06--;
        } while($pas06 > 0);
//EX07
    echo "<h3>EX07</h3>";
        do{
            echo "On tient le bon bout. ";
            $i07 += $pas07;
        } while($i07 < 100);
//EX08
    echo "<h3>EX08</h3>";
        do{
            echo "Enfin !!!! ";
            $i08 -= $pas08;
        } while($i08 > 0);
?>
</body>
</html>
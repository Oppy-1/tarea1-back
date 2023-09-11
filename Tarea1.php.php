<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 1</title>
</head>
<body>
    

    <?php

    echo "hola mundo <br />";
    $ejercicio2 = "  Hola mundo <br /> ";
    echo $ejercicio2;
    /*ejercicio 3 */
    $num1 = 20;
    $nume2 = 10;
    $resultado = $num1 + $nume2;
    print "<p>$resultado</p>";
    $resultado = $num1 - $nume2;
    echo "<p>$resultado</p>";
    $resultado = $num1 * $nume2;
    echo "<p>$resultado</p>";
    $resultado = $num1 / $nume2;
    echo "<p>$resultado</p>";
    $resultado = $num1 % $nume2;
    echo "<p>$resultado</p> <br/>";
    /*ejercicio 4 */
    $gradosC =20;
    $Fahrenheit = (1.8 * $gradosC) + 32;
    echo "los grados fahrenheit son $Fahrenheit <br/>";
    /*ejercicio 5*/
    $b = 18;
    $l = 12;
    $perimetroR = $b*2 + $l*2;
    $baseR = $b * $l;
    echo "El perimetro de un rectangulo cuando su base mide $b y sus lados miden $l es $perimetroR cm<br/>";
    echo "y su base con esos mismos valores es de $baseR cm <br/>";
    $radio =30;
     const pi = 3.1416;
    $perimetroC = ($radio *2) * pi;
    $baseC = pi *  ($radio * $radio);
    echo "El perimetro de un circulo con su  radio de $radio es $perimetroC cm <br/>";
    echo " la base de un circulo con ese mismo valor de radio es de $baseC cm";
    ?>
    
</body>
</html>
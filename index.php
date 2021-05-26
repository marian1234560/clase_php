<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase_Php</title>
</head>
<body>
    <?php
    //impresiones de texto
    echo"<h1>hola mundo</h1>";

    //variables
    $nombre = "Marian Yelipssa";
    $edad = 16;

    //<h3>mi nombre edad: 23 años<h3>
    echo `<h3>` .$nombre. ' edad: ' .$edad. ` años </h3>`;
    
    //$edad += 10
    $edad += 10;
    echo '<h3>' .$edad. '</h3>';

    //condicionales
    if ($edad > 17) {
        echo '<h3>Es menor de edad </h3>';
    } else {
        echo '<h3> Es menor de edad <h3/>';
    }

    for ($i = 1; $i <= 5; $i++) { 
        echo '<h5> iteracion #' .$i. '</h5>';
    }

    //funciones
    function sayHi(){
        echo '<h2>Holiii</h2>';
    }
    function suma(){
        $num1 = 5;
        $num2 = 10;

        return $num1 + $num2;
    }

    sayHi();
    echo suma()."\n";

    $array = array(
        0 => "jeimmy",
        1 => "kimberly",
        2 => "yelipssa"
    );

    //para imprimir solo la posicion 2
    echo $array [1];

    //para impimir todo el contenido
    for ($j = 0; $j < 3; $j++) { 
        echo $array[$j]."\n";
    }
    
    ?>
</body>
</html>
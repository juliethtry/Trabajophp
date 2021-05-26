<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //impresiones de texto
        echo "<h1>Holi</h1>";

        //variables
        $nombre = "Julieth Catalina";
        $edad = 15;

        echo '<h3>'.$nombre.' edad: '.$edad.' años </h3>';

        $edad .= 10;
        echo '<h3>'.$edad.'</h3>';

        //condicionales
        if($edad > 17){
            echo '<h3> Es mayor de edad</h3>';
        } else{
            echo '<h3> Es menor de edad</h3>';
        }
        for ($i = 1; $i <= 5; $i++){
            echo '<h5>iteracion No'.$i.'</h5>';
        }

        //funciones
        function sayHi(){
            echo '<h2>holis</h2>';
        }

        function suma(){
            $suma1 = 5;
            $suma2 = 10;

            return $suma1 + $suma2;
        }

        sayHi();

        echo suma()."\n";

        $array = array(
            0 => "jeimmy",
            1 => "Kimberly",
            2 => "Kenny"
        );

        echo $array[2];
        
        for($j = 0; $j < 3; $j++){
            echo $array[$j]."\n";
        }
    ?>
</body>
</html>
<?php
include "programacion.php";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta name="viewport" content="width=device-width"
        <meta charset="UTF-8">
        <link href="estilos.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <p class="estilo02">Uno</p>
        <p style="background: yellow;font-size: 25px">Dos</p>
        <p class="estilo01">Tres</p>
        
        <?php
        require "resultado.php";
        
        $A=10;
        $a=10;
        $hello = "Hola mundo";
        $a++;
        
        echo "Saludo $hello x $A y $a";
        echo "<br>";
        echo 'Saludo $hello x $A y $a';
        echo "<br>";
        echo 'Saludo '.$hello. ' x ' .$A. ' y ' .$a;
        
        /*Arreglos*/
        $dia["Lunes"]= "1 clase";
        $dia["Martes"]= "2 clase";
        $dia["Miercoles"]= "1 clase";
        $dia["Jueves"]= "4 clase";
        $dia["Viernes"]= "1 clase";
        
        echo "<br>";
        foreach ($dia as $value) {
            echo $value . "<br>";
        }

        ?>
    </body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, initial-scale=1.0">
<title>Práctica de Variables y Constantes en PHP</title>
</head>
<body> <!-- Aquí se coloca el contenido visible de la página.-->
<?php
// Definimos dos números para comparar
$numero1= 33;
$numero2 = 45;
// Estructura IF (if checa si la condición $numero1 < $numero2 es verdadera.)
echo "<h2>Ejemplo con IF</h2>";
if ($numero1 < $numero2) {
echo "El número $numero1 es menor que $numero2";
}
?>
<hr>
 <?php
// Estructura IF-ELSE (la comparación entre $numero1 y $numero2, pero ahora con else. Esta condición se ejecuta, mostrando el mensaje contrario.)
echo "<h2>Ejemplo con IF-ELSE</h2>";
if ($numero1 > $numero2) {
 echo "El número $numero1 es mayor que $numero2";
 } else {
 echo "El número $numero1 NO es mayor que $numero2";
 }
 ?>
 <hr>
 <?php
 // Estructura IF-ELSEIF-ELSE (este va variando si esta dentro del rango )
 $temperatura = 9;
 echo "<h2>Ejemplo con IF-ELSEIF-ELSE</h2>";
 echo "<p>Temperatura: <strong> $temperatura C</strong></p>";
 if ($temperatura > 30){
 echo "Hace mucho calor";}
 elseif ($temperatura > 15 && $temperatura <= 30){
 echo "El clima es agradable";}
 else{
 echo "El clima es demasiado frio";
 $temperatura= "< 15";
}
 ?>
 <hr>
<?php
//estaciones del año
if ($mes >= 3 && $mes <= 5) //Si el mes está entre 3 (marzo) y 5 (mayo), se considera que es Primavera y asigna una temperatura de 15°C a 25°C.
{
echo "Es Primavera <br>";
$temperatura= "15°C a 25°C";
}
elseif ($mes >= 6 && $mes <= 8) //Si el mes está entre 6 (junio) y 8 (agosto), se considera Verano, con temperaturas de 25°C a 35°C.
{
echo "Es Verano<br>";
$temperatura= "25°C a 35°C";
}
elseif ($mes >= 9 && $mes <= 11) //Si el mes está entre 9 (septiembre) y 11 (noviembre), se considera Otoño, con temperaturas de 10°C a 20°C.
{
echo "Es Otoño<br>";
$temperatura= "10°C a 20°C";
}
else // si no se ninguna de las condiciones anteriores, se asume que es Invierno, con temperaturas de 0°C a 10°C.
{
echo "Es Invierno <br>"; 
$temperatura= "0°C a 10°C";
}
?>
<hr>
<?php
//ejercicio 1
echo "<h2>Números del 1 al 10 usando for</h2>";
for ($i= 1; $i <= 10; $i++) // for se utiliza cuando sabes el numero de interacciones
{
}
echo "Número: $i <br>";
?>
<hr>
<?php
//ejercicio 1 parte 2
echo "<h2>Números del 1 al 10 usando for</h2>"; // en este apartado usamos a utilizar el decremento
for ($i= 10; $i = 0; $i--)
{
echo "Número: $i <br>";
}
?>
<hr>
<?php
//ejercicio 2
$numero= 5; // Puedes cambiar este valor o pedirlo con un formulario
echo "<h2>Tabla de multiplicar del Snumero</h2>";
for ($i=1; $i <= 10; $i++)
{
echo "$numero x $i". ($numero * $i). "<br>";
}
?>
<hr>
<?php
//ejercicio 3
$nombres = "array"("Ana", "Carlos", "Beatriz", "Daniel", "Elena");
echo "<h2>Lista de nombres:</h2>";
echo "<ul>";
for ($i = 0; $i < count($nombres); $i++) 
{
}
echo "<li>$nombres [$i]</li>";
echo "</ul>";
?>
<hr
<?php
//ejercicio 4
echo "<h2>Números pares del 2 al 20</h2>";
for ($i=2; $i<= 20; $i += 2)
{
}
echo "$i <br>";
?>
<!-- nombre: Jacqueline Sanchez Gonzalez
materia: programacion orientada a objetos
carrera: ingenieria en informatica -->
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Práctica de Variables y Constantes en PHP</title>
</head>
<body> <!-- Aquí se coloca el contenido visible de la página.-->

<h1>Uso de Variables y Constantes en PHP </h1> <!-- Muestra un título grande en la página: "Uso de Variables y Constantes en PHP".-->
<hr> <!- Crea una línea horizontal para separar secciones->
<?php
// Define las variables y da la indicacion de que quieres que se haga
$nombre= "Jacky Sanchez";
$edad = 18;
$ciudad= "Ciudad Gomez Palacio";
$precioProducto = 1750.50;

// Definición de una constante
 Const EMPRESA = "Dyno Nobel S.A.";

// Definición de la constante para el porcentaje de IVA
 Const IVA_PORCENTAJE = 0.16; // 16% de IVA

// Mostrando información en la página
echo "<p>Nombre del usuario: <strong>$nombre</strong></p>";
echo "<p>Edad: <strong>$edad años</strong></p>";
echo "<p>Ubicación: <strong>$ciudad</strong></p>";
echo "<p>Precio del producto sin descuento: <strong>$$precioProducto</strong></p>";
echo "<p>Empresa: <strong>" . EMPRESA. "</strong></p>";
?>
<hr>
<h2>Descuento e Intereses</h2>
<?php
// Operaciones matemáticas con variables
$precioConDescuento = $precioProducto * 0.8; // Aplicando 20% de descuento
echo "<p>Precio con 20% de descuento: <strong>$$precioConDescuento</strong></p>";

// Calcular el precio con IVA sin descuento
$precioIVA = $precioProducto * (1 + IVA_PORCENTAJE);
echo "<p>Precio del producto con IVA sin el descuento (16%): <strong>$$precioIVA</strong></p>";

// Calcular el precio con IVA con descuento
$precioIVA = $precioConDescuento * (1 + IVA_PORCENTAJE);
echo "<p>Precio del producto con IVA con el descuento (16%): <strong>$$precioIVA</strong></p>";

// Concatenación de cadenas
$mensaje = "Bienvenido". $nombre . "a" . EMPRESA . ".";
echo "<p>$mensaje</p>";
?>
</body>
</html>
<!- nombre: Jacqueline Sanchez Gonzalez
materia: programacion orientada a objetos
carrera: ingeniería en informatica ->>
<!DOCTYPE html>
<html lang = "es">
<head>
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mi Primera Pagina con PHP</title> <!- en esta parte se muestra que al momento de imprimir en la pagina el texto que esta escrito aqui sera el titulo -
</head>
<body>
<h1>Bienvenido A Mi Primera Pagina con PHP </h1> <!-- los <h1> significan que se van a ver de un tamaño de letra mas grande ->
<?php
// codigo php que imprime "hola mundo" (el php practicamente son las instrucciones->)
echo "<p>Hola Mundo Desde PHP </p>";
?>
4
5
250%
<p> Este documento esta escrito en HTML, pero el mensaje anterior fue generado con PHP.</p>
</body>
</html>

<?php
echo "<p>Hoy Es:" . date ("d/m/Y") . "<p>";
?>
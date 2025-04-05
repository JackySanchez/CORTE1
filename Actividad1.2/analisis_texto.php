<?php
// iniciar contadores
$texto= "Hola, Mi nombre es Jacqueline Sanchez y tengo 18 años";
// Inicializar contadores
$vocales = 0;
$consonantes =0;
$signos = 0;
$espacios=0;
// Definir conjunto de caracteres
$vocales_lista = "aeiouAEIOU";
$signos_lista= "s.,];:!¡¿?()-";
$consonantes_lista= "BCDFGHJKLMNNPQRSTVWXYZbcdfghjqlmnipqrstvxyz";
// Recorrer el texto y clasificar caracteres
for ($i= 0; $i < strlen($texto); $i++)
$char = $texto[ $i];
if (ctype_alpha($char))
// Verifica si es una letra
if (strpos($vocales_lista, $char) !== false)
{$vocales++;
} else
{
$consonantes++;
}
elseif (strpos($signos_lista, $char) != false)
$signas++;
elseif ($char =="")
$espacios++;
echo "<h2>Analisis del Texto</h2>";
echo "<p>Texto Analizado: <strong>$texto</strong></p>";
echo "<p>Vocales: <strong>$vocales</strong></p>";
echo "<p>Consonantes: <strong>$consonantes</strong></p>";
echo "<p>Signos de Puntuación: <strong>$signos</strong></p>";
echo "<p>Espacios: <strong>Sespacios</strong></p>";
?>
<hr>
<?php
// total de caracteres
$total_caracteres =strlen($texto);
// porcentajes de cada conjunto de caracteres
$porcentaje_vocales ($vocales / $total_caracteres) * 100;
$porcentaje_consonantes ($consonantes / $total_caracteres)* 100;
$porcentaje_signos = ($signos / $total_caracteres) *100;
$porcentaje_espacios ($espacios / $total_caracteres)* 100;
echo "<p>Porcentaje vocales: <strong>Sporcentaje_vocales</strong></p>";
echo "<p>Porcentaje consonantes: <strong>Sporcentaje_consonantes</strong></p>";
echo "<p>Porcentaje signos de puntuacion: <strong>".$porcentaje_consonantes."</strong></p>";
echo "<p>Porcentaje de espacios: <strong> Sporcentaje_espacios %</strong></p>";
?>
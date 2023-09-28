<?php 
	echo "<meta charset='UTF-8'>";
	echo "<h1>Remplazar caracteres ,palbras,ect</h1>";

$texto="Me gustan las verduras.Las verduras son muy saludables.TOTALMENTE A FAVOR DE POTENCIAL DE LAS VERDURAS";

$texto_nuevo=str_replace("verduras","alfazores",$texto);

echo "<p>Texto original : $texto</p>";
echo "<p>Texto original : $texto_nuevo</p>";

echo "<hr>";

$otro_texto=str_ireplace("verduras","alfazores",$texto);
echo $otro_texto;
$Melon="Melón MELÓN";
$otro_melon=str_ireplace("Melón","almandrullos",$texto);

?>
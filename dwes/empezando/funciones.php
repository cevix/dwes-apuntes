<?php 
/*
function quitarTildes($textoEnLaFuncion){
	$textoEnLaFuncion=str_replace("á", "a",$textoEnLaFuncion);
	$textoEnLaFuncion=str_replace("é", "e",$textoEnLaFuncion);
	$textoEnLaFuncion=str_replace("í", "i",$textoEnLaFuncion);
	$textoEnLaFuncion=str_replace("ó", "o",$textoEnLaFuncion);
	$textoEnLaFuncion=str_replace("Á", "A",$textoEnLaFuncion);
	$textoEnLaFuncion=str_replace("É", "E",$textoEnLaFuncion);
	$textoEnLaFuncion=str_replace("Í", "I",$textoEnLaFuncion);
	$textoEnLaFuncion=str_replace("Ó", "O",$textoEnLaFuncion);
	$textoEnLaFuncion=str_replace("Ú", "U",$textoEnLaFuncion);
	return $textoEnLaFuncion;

}

function precioVenta($precio_f,$iva_f){
	$pvp_f=$precio_f*(1+$iva_f/100);
	return $pvp_f;
}
*/
include('funciones_varias.php');

$texto="En la última habitación hay un épico .No está vacía.EN LA ÚLTIMA HABITACIÓN HAY UN ÉPICO . NO ESTÁ VACÍA";

echo $texto;
echo "<p> Antes de pasar por la función</p>";
$texto_nuevo=quitarTildes($texto);
echo "<p>Despues de pasar por la función: </p>";

echo $texto_nuevo;

$precio=100;
$iva=10;
$pvp=precioVenta($precio,$iva);
echo "<br>";
echo $pvp;



?>
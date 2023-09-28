<meta charset="utf-8">
<?php
echo "<meta charset='utf-8'>";
/*
> mayor que 
< menor que
>= mayor o igual que
<= menor o igual que
!= Distinto que 
== conparación(igualdad)
=== compraracion (igualdad estricta)
*/
echo "<h1>Estructura de control<h1>";
//*****************************************************************
echo "<h2> if </h2>";

$numero =7;
if($numero==7){
	echo "<p>Se cumple la condicion</p>";
}
echo "<p>Siguiente linea de codigo</p>";
//******************************************************
echo "<h2> if - else </h2>";

if ($numero==7) {
	echo "<p>Se cumple la condición</p>";
}else{
	echo "<p>no se cumple la condición</p>";
}

echo "<p>siguiente linea de codigo</p>";
//****************************************************

echo "<h2> if - else if</h2>";

$nota=5;

if ($nota==5) {
	echo "<p>Ha aprobado</p>";
} else if($nota>=0 && $nota<5) {
	echo "<p>Ha suspendido</p>";
}

//******************************************************

echo "<h2>switch -case </h2>;";
$dia="lunes";

switch ($dia) {
	case "lunes":
		echo"<p> Los lunes tenemos DWES</p>";
		break;
	case "martes":
		echo"<p> Los martes tenemos DIW</p>";
		break;
	case "miercoles":
		echo"<p> Los miercoles tenemos Inglés</p>";
		break;
	case "jueves":
		echo"<p> Los jueves tenemos EIE</p>";
		break;
	
	case "viernes":
		echo"<p> Los viernes tenemos SGE</p>";
		break;
	case "sabados":
		echo"<p> Los sabados examen (para online)</p>";
		break;

	case "domingo":
		echo"<p> Los domingos descanso.</p>";
		break;
	default:
		echo "<p>Error ... </p>";


}



?>
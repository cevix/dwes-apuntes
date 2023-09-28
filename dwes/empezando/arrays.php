<?php 

echo "<meta charset='utf-8'>";
echo "<h1>Arrays</h1>";

echo "<h2>opcion 1 (metodo largo)</h2>";
/*
Yamir,Gustavo,Marco,Víctor,Iván,María,Sergio,Rodrigo,Ricardo,Andrei, Lyulin,Diego, Álvaro,Danny,Kenneth, Fran
*/

$alumnos[0]="Yamir";
$alumnos[1]="Gustavo";
$alumnos[2]="Marco";
$alumnos[3]="Víctor";
$alumnos[4]="Iván";
$alumnos[5]="María";
$alumnos[6]="Sergio";
$alumnos[7]="Rodrigo";
$alumnos[8]="Ricardo";
$alumnos[9]="Andrei";
$alumnos[10]="Lyulin";
$alumnos[11]="Diego";
$alumnos[12]="Álvaro";
$alumnos[13]="Danny";
$alumnos[14]="Kenneth";
$alumnos[15]="Fran";
for ($i=0; $i <sizeof($alumnos) ; $i++) { 
	echo "<p>$alumnos[$i]</p>";
}

//curiosidades

echo "<p>tamaño del array: ".sizeof($alumnos)."</p>";
var_dump($alumnos);


echo "<h2>Opción 2</h2>";

foreach ($alumnos2 as $alumno2) {
	echo $alumnos2." || ";
}

$alumnos2[]="Yamir";
$alumnos2[]="Gustavo";
$alumnos2[]="Marco";
$alumnos2[]="Víctor";
$alumnos2[]="Iván";
$alumnos2[]="María";
$alumnos2[]="Sergio";
$alumnos2[]="Rodrigo";
$alumnos2[]="Ricardo";
$alumnos2[]="Andrei";
$alumnos2[]="Lyulin";
$alumnos2[]="Diego";
$alumnos2[]="Álvaro";
$alumnos2[]="Danny";
$alumnos2[]="Kenneth";
$alumnos2[]="Fran";

echo "<h1>Opción 3</h1>";
$alumnos3=["Yamir","Gustavo","Marco","Víctor","Iván","María","Sergio","Rodrigo","Ricardo","Andrei", "Lyulin","Diego", "Álvaro","Danny","Kenneth", "Fran"]

foreach ($alumnos3 as $alumno3) {
	echo $alumno3." || ";
}

echo "<h1>Opción 4</h1>";
$alumnos4=Arrays("Yamir","Gustavo","Marco","Víctor","Iván","María","Sergio","Rodrigo","Ricardo","Andrei", "Lyulin","Diego", "Álvaro","Danny","Kenneth", "Fran")

foreach ($alumnos4 as $alumno4) {
	echo $alumno4." || ";
}

if(!in_array("Aurora,"$alumnos4)){
	array_push($alumno4, "Aurora");
}

echo "<br>";

foreach ($alumnos4 as $alumno4) {
	# code...
}

?>
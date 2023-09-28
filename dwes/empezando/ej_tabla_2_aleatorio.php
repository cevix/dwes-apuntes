<?php 

echo "<meta charset='utf-8'>";
echo "<h1>Ejercicio Talas 2 números aleatorios</h1>";

function tablaMultplicar($numero){
	echo "<h2>Tabla del $numero </h2>";
	for ($i=1; $i <=10 ; $i++) { 
		echo "<p>$numero x $i =".$i*$numero."</p>";
	}
}

$aleatorio1=rand(1,10);
$cont=0;
do {
	$aleatorio2=rand(1,10);
	$cont++;
} while ($aleatorio1==$aleatorio2);

echo "se ha generado el segundo numero: ".($cont-1)." veces";
tablaMultplicar($aleatorio1);
tablaMultplicar($aleatorio2);
 ?>
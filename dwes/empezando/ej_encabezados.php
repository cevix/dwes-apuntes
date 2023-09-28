<?php

echo "ENCABEZADO";
for ($i=1; $i<=6 ; $i++) { 
	echo "<h$i>Texto escrito en h".$i."</h$i>";
}
$n=1;
while ($n <= 6) {
	echo "<h$n>Texto escrito en h".$n."</h$n>";
	$n+=1;
}
?>
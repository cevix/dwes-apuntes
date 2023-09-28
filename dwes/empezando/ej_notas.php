<?php
//nota
$nota=8;
/*
if ($nota>=0 && $nota<5) {
	echo "Has suspendido";
	
}else if ($nota>=5 && $nota<7) {
	echo "Has sacado aprobado";
}
else if($nota>=7 && $nota<9) {
	echo "Has sacado notable";
	
}
else if($nota>=9 && $$nota<=10) {
	echo "Has sacado sobresaliente";
	
}else{
	echo "nos has introducido bien la nota";
}
*/
echo "La nota". $nota;

if ($nota>=0 && $nota<=10) {
	if ($nota<5) {
			echo "Has sacado suspendo";
		}
	elseif ($nota<7) {
			echo "aprobado";
		}
	else if($nota<9) {
		echo "Has sacado notable";
	
		}
	else{
		echo "Has sacado sobresaliente";
			
	}
	
}else {
	echo "<p>Hay algún error ...</p>";

}




//*********************
echo "<meta charset='utf-8'>";

echo "<h2>comparacion(igualdad)<h2>";
$nota="8";
if ($nota === 8) {
	echo "<p></p>";
}




?>
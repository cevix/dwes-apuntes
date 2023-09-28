<?php
//nota
$nota=6;

if ($nota=>0 && $nota<5) {
	echo "Has suspendido";
	
}else if ($nota>=5 && $nota<7) {
	echo "Has sacado aprobado";
}
else if($nota>=7 && $$nota<9) {
	echo "Has sacado notable";
	
}
else if($nota>=9 && $$nota<=10) {
	echo "Has sacado sobresaliente";
	
}else{
	echo "nos has introducido bien la nota"
}


/*
if ($notas=>5 && $nota<=10) {
	
}else if(){
	echo "has suspendido";
}
*/
?>
<?php 

 

$texto="La tilde pepé es la representación gráfica de ese acento y hay que ponerlo según dicta la norma en cada idioma";



$texto_remplazado=str_ireplace(["í","á","é","ó","ú"],["i","a","e","o","u"], $texto);

echo "<p>".$texto_remplazado."<p>";

$prueba=str_ireplace("pepé", "almandrullo", $texto);

echo $prueba;

?>
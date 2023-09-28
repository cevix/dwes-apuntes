<?php 

$texto="La tilde es la representación gráfica de ese acento y hay que ponerlo según dicta la norma en cada idioma";

$texto_remplazado=str_replace(["í","á","é","ó","ú"],["i","a","e","o","u"], $texto);

echo $texto_remplazado;

echo "<hr>";



?>
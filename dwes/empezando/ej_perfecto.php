<?php 
//numero perfector

echo "numeros perfectos son: <br>";

for ($num=1; $num <=1000; $num++) { 
	$esPerfecto=false;
	$sumDiv=0;
	for ($div=1; $div <=($num/2) ; $div++) { 
		if ($num%$div==0) {
			$sumDiv+=$div;
		}
	}

	if ($num==$sumDiv) {
		$esPerfecto=true;
	}

	if ($esPerfecto) {
		echo $num ."<br>";
	}

}








?>
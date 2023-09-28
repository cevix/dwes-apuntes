<?php 
echo "<p>Numeros primos</p>";
for ($i=2; $i <=100; $i++) { 
	//echo $i;
	
	$cont=0;
	for ($div=2; $div<=$i ; $div++) { 
		//echo $div;
		
		//comprobar que son primos
		$rest=$div%$i;
		$rest2=$i%1;
		if ($rest==0) {
			$cont+=1;
		}

		
		
		
	}
	//comprobarlos divisores
		 if ($cont==2) {
			echo $i."<br>";	
			}

}


?>
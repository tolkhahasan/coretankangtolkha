<?php
//perulagan mengguakan for

//increment
//for ($i = 0; $i <= 10; $i++) { 
//	echo $i . "\n";
//}

//echo "\n";

//descrement
//for ($i=10; $i >0 ; $i--) { 
//	echo $i . "\n";
//}

//for ($i=0; $i <== 10; $i++) { 
//	if ($i >5) {
//		echo $i . "\n";
//	}
//}

	// for ($i=0; $i <=10 ; $i++) { 
	// 	if ($i == 5) 
	// 	{
	// 		for ($j=1; $i <==3 ; $i++) { 
	// 			echo "pengulangan J = . $j"
	// 		}
	// 	}
	// }

// for ($i=1; $i <= 10; $i++) { 
// 	$j = $i 
// 	if (condition) {
// 		# code...
// 	}
// 	echo $i . 'ganjil' . "\n";
// }


// for ($i=1; $i < 6; $i++) { 
// 	echo "perulangan ke " . $i . " \n" ;
// }

for ($i=1; $i <= 10 ; $i++) { 
	if ($i%2==0  && $i%3==0) {
	 	echo $i . "-ciye hore \n";
	 }else if ($i%2==0) {
	 	echo $i . "-hore \n";
	 } elseif ($i%3==0) {
	 	echo $i . "-ciye \n";
	 }else 
	 { echo $i . "\n";}
	}




?>
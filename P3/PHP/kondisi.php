<?php

// if

$val = 10;

if ($val >= 10) {
	echo "bad";
}


// if else

echo"\n";
if ($val>=10) {
	echo "Good";
} else {
	echo "bad";
}


// if else if

echo "\n";
if ($val == 7) {
	echo $val;
} else if ($val > 7) {
	echo "great";
} else {echo "bad"
}

// Switch case
echo "\n";
switch ($val) {
	case 'value':
		echo $val;
		break;
	
	default:
		# code...
		break;
}
?>
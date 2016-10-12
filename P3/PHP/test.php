<?php

// $val 	= 1;
// $val2 	= 2;

// echo $val + $val2;
// echo "\n";
// echo $val - $val2;
// echo "\n";
// echo $val * $val2;
// echo "\n";
// echo $val / $val2;

// echo "\n";
// echo "\n";

// $total = $val + $val2;

// echo "total = " . $total;

// //pow function / pangkat

// echo "\n";
// echo pow(3, 3);

// // pembulatan
// echo "\n";
// echo round(3.1923, 1);

// // pembagian sisa / modulus

// $total = 3%4;
// echo "\n";
// echo $total;

// // pembulatan menggunakan cell
// echo "\n";
// echo ceil(1.12);
// echo "\n";
// echo ceil(1.6);

// echo "\n";
// echo (24.5 * 3);
// echo pow(73.5 , 2);
// echo ceil(24.5. 1);



// Pelajaran tentang Perulangan Bilangan / urutan ke atas Rabu, 28 September 2016



// Soal No 1

// for ($i=1; $i <=10 ; $i++) { 
// 	if ($i<=5 ) {
// 	echo  "Perulangan -  $i \n";
		
// 	}
// }
//  echo "\n";
// // Soal No 2

// for ($j=1; $j <=10 ; $j++) { 
// 	if ($j>=6) {
// 		echo "Perulangan - $j \n";
// 	}
// }
// echo "\n";
// // Soal No 3

// for ($h=1; $h <=10 ; $h++) { 
// 	if ($h%2 != 0) {
// 		echo "Perulangan - $h \n";
// 	}
// }

// echo "\n";

// for ($k=1; $k <=10 ; $k++) { 
// 	if ($k%2 == 0) {
// 		echo "Perulangan - $k \n";
// 	}
// }

// echo "\n";

// for ($l=1; $l <=50 ; $l++) { 
// 	if ($l%4 == 0 ) {
// 		echo "Perulangan - $l \n";
// 	}
// }


// Pelajaran tentang arro / kolom dalam Rak Buku Kamis,29 September 2016


// $arr1 = array( );
// $arr2 = [
// 		'buku 1',
// 		'buku 2',
// 		'buku 3',

// ];

// echo "$arr2[1] \n
// $arr2[2] ";

// $arr1 = array(
// 	1,
// 	2,
// 	3,
// );

// $arr2 = [
// 'Buku 1', 'Buku 2','Buku 3','Buku 4','Buku 5'];

// echo "$arr1[0] \n $arr2[0]";

// for ($i=0; $i < 3; $i++) { 
// 	echo $arr2[$i] . "\n";
// }

// echo count($arr2) . "\n";
// $jmlarr = count($arr2);

// for ($i=0; $i < $jmlarr; $i++) { 
// 	echo $arr2[$i] . "\n";
// }

// for ($i=1; $i < 4; $i++) { 
// 	echo "$arr2[$i]\n";
// }


// $nama = [
// 'Thoni', 'Budi','Anto','anto','joko','andik'];

// $benda = ['piring' , 'Gelas,' , 'sendok'];

// echo " $nama[0] membawa  $benda[0] dan $benda[1] sedangkan $nama[4] membawa $benda[2]
// bersama $nama[0], $nama[2], $nama[5]. \n";



// Materi Row Multi Dimensi
//_______________________________________ Versi Lama

// $arr = array (
// 	array ('A1', 'B1', 'C1'),
// 	array ('A1', 'B1', 'C1'),
// 	array ('A1', 'B1', 'C1')
// 	);

// echo $arr [0][0];

//_______________________________________ Versi Baru


// $keluarga =[
// 	['A1', 'B1', 'C1'],
// 	['A1', 'B1', 'C1'],
// 	['A1', 'B1', 'C1']
// 	];

// // echo $keluarga [0][0];

// $jmlanak= count($keluarga);
// for ($i=0; $i < $jmlanak; $i++) { 
// 	$jmlpermen = count($keluarga[$i]);
// 	echo "Anak ke" . $i . "\n";

// 	for ($j=0; $j < $jmlpermen; $j++) { 
// 		echo "Punya Permen =" . $keluarga[$i][$j] . "\n";
// 	}

// 	echo "\n";
// }

// //________________Tugas Kamis (Raw Multidimensi)____________________

// // +Soal 1

// $arr


// // =Soal 2


//__________Jum'at 30 September (index)_________

$arr = [
		'nama'	=> ['Thoni','Andik','wawan'],
		'nun' => [30,28.5,27],
		'kelas'	=> ['A','B','C'],
		'keteranga' => 'Semua siswa dinyatakan Lolos'
		];

	// echo $arr['nama'][0];

// foreach ($$arr as $index => $nilai) {
// 	echo $index . "\n";



// jika tidak ada $nilai maka nilai dari $index adalah value dari masing - masing array

// jika ada $nilai maka nilai dari $index adalah nama dari masing-masaing index itu sendiri.

echo "Hasil Ujian SMK Negeri XXX Malang adalah sebagai beriku; \n";

$no = 1 ;
foreach ($arr['nama'] as $key => $value) {
	echo $no . '. Nama : ' . $value . "\n";
	echo ' kelas : ' . $arr['kelas'][$key] ."\n";
	echo ' nilai : ' . $arr['nun'][$key] ."\n";

	$no++;
	}

// _______________________________________

// $no = 1;
// $jmlperulangan = count($arr['nama']);

// for ($i=1; $i < $jmlperulangan; $i++) {
// 	echo $no . 'nama :' . $arr ['nama'][$i] ."\n"; 
// 	echo 'kelas :' . $arr['kelas'][$i] ."\n";
// 	echo 'nilai :' . $arr ['num'][$i] ."\n";

// 	$no++;
// }


?>
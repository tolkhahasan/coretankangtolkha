<?php 
// _____________________________________________________________
// $val = 'hallo bapak';


// echo strtoupper($val); //membuat huruf menjadi besar
// echo "\n" ;
// echo strtolower($val); //membuat huruf kecil
// echo "\n" ;
// echo ucfirst($val2); // untuk membesarkan huruf pertama
// echo "\n" ;

// echo lcfirst($val2); // untuk mengecilkan huruf pertama
// echo "\n";
// echo substr($val3, -1);

// echo "\n";
// echo substr($val3, 2 , -1);
// _____________________________________________________________


	// function tambah ($nilai1, $nilai2)
	// {
	// 	$total = $nilai1 + $nilai2;

	// 	echo $total;
	// }

	// tambah(45,45);


	// function kurang ($nilai1, $nilai2)
	// {
	// 	$total = $nilai1 - $nilai2;

	// 	echo $total;
	// }

	// kurang(45,30);

// function tampil()
// {
// 	echo "Ini Fungsi Tambah <br>";
// }

// function tampil2()
// {
// 	return "Ini Menggunakan Nilai Balik";
// }

// tampil();
// echo tampil2();


// $nilai1 = 10;

// function kali($nilai)

// {
// 	$out = $nilai * 2;
// 	return $out;
// }

// function tampilkan($hasil_akhir)
// {
// 	echo "Hasil Akhir adalah = " . $hasil_akhir;
// }

// $hasil = kali($nilai1);
// echo "nilai dari function kali=" . $hasil . '<br>';

// tampilkan($hasil);

// $nilai1=20;
// $nilai2=30;



// function tambah($nilai1,$nilai2)
// 	{
// 	$total = $nilai1 + $nilai2;
// 	return $total;
	
// 	}
// // $hasil=tambah($nilai1,$nilai2);
// // echo $hasil;


// function bagi($total)
// 	{
// 		$bagi = $total / 2;
// 		// echo $bagi;
// 		return $bagi;
// 	}
// 	}
// // $hasil_akhir = tampil ($nilai1,$nilai2);
// // echo $hasil_akhir;

// function Kali($hasil_akhir)
// 	{
// 		$total_akhir =kali($hasil_akhir*2)
// 		return $total_akhir;
// 	}

// function tampil($nilai1,$nilai2)
// 	{
// 		$hasil=tambah($nilai1,$nilai2);
// 		$hasil2=bagi($hasil);
// 		echo $hasil . "" . $hasil2;
// ________________________________________________________________
// $nilai1=10;
// $nilai2=5;
// $nilai3=1;

// function kurang($nilai1,$nilai2,$nilai3)
// 	{
// 		$total = $nilai1-$nilai2-$nilai3;
// 		// echo $total;
// 		return $total;
// 	}
// function tampil($nilai1,$nilai2,$nilai3)
// 	{
// 		$hasil=kurang($nilai1,$nilai2,$nilai3);
// 		echo $hasil;
// 	}

// $tampil3 =tampil($nilai1,$nilai2,$nilai3);
// echo $tampil3;
// ________________________________________________________________

// ________________________________________________________________

// $a= "besar";

// function huruf($huruf)
// 	{
// 		$hasil =strtoupper($huruf);
// 		return $hasil;
// 	} 

// function tampil($hasil)
// 	{
// 	echo "hasil adalah = ". $hasil;
// 	}

// $hasil_akhir = huruf($a) ;
//   tampil($hasil_akhir);

// $hasil_akhir = huruf($a) ;
//  echo ($hasil_akhir);
	
// ________________________________________________________________
// Menampilkan hasil array 
// output : 	hasil-1
// 			hasil-2
// 			hasil-3
// 			hasil-4
// 			hasil-5
// _____________________________________________________________

// $arr = [1,2,3,4,5];

// function tampil($arr)
// 	{

// foreach ($arr as $value ) {
// 	echo "hasil-" . $value . "<br>";
// 	}
// 	// _____________________________________________________________
// // foreach ($arr as $key => $value) {
// // 	echo "hasil-" . $value . "<br>";
// // 	}

// }
// // _____________________________________________________________
// tampil($arr);


 // _____________________________________________________________
// menampilkan rata-rata
// output: rata-rata 3
 // _____________________________________________________________


// $arr=[1,2,3,4,5];


// function tambah($perhitungan)
// 	{
// 	$rata=array_sum($perhitungan); 
// 	//==>array_sum(untuk penjumlahan semua)
// 	$hasil=$rata/5;
// 	return $hasil;
// 	}

// function tampil($hasil)
// 	{
// 	echo "hasil adalah = ".$hasil;
// 	}

// $hasil_akhir= tambah($arr);
// tampil ($hasil_akhir);

 // _____________________________________________________________
// __________________Membesarkan Huruf Pertama___________

// $arr=['nama' =>['anto','jupri','andi']];
	
// function tampil($a)
// 	{
// 		foreach ($a as $key => $value) 
// 		{
// 		$b=ucfirst($value);
// 		echo $b."<br>";
// 		}
		
// 	}
// tampil($arr['nama']);

// _____________________________________________________________
// _____________________________________________________________

// $arr=	['nama'=>
// 			['anto' => 90,
// 			'jupri' => 80,
// 			'andi' => 81
// 			]];


// 	function tampil($a)
// 		{
// 			foreach ($a['nama'] as $key => $value) {
// 				$angka=ucwords($key);
// 				echo $angka . " - ".$value."<br>";
// 				echo $a['nama']['anto'][$value];
				
// 			}

// 			$rata=array_sum($a['nama']);
// 			$hasil_rata=$rata/3;
// 			echo "Rata-rata = ".$rata;

// 		}
// 		$hasil_akhir=tampil($arr);

// _____________________________________________________________
// _____________Materi Jum'at 7 Oktober 2016____________________
// _____________________Tentang OOP_____________________________

// class Hewan
// {
// 	function __construct()
// 		{
// 		// fungsi ini akan secara otomatis dijalankan ketika membuat objek dari kelas
// 		echo "Ini adalah construstor <br>";
// 		}

// 	function makan()
// 		{
// 		return "sedang makang";
// 		}

// 	function tampil($hewan)
// 		{
// 			echo $hewan . $this->makan();
// 		}
// }

// $hewan = new Hewan();
// $hewan->tampil('bebek ');



// class siswa
// {
// 	function belajar()
// 		{
// 			return "Sedang Belajar ";
// 		}

// 	function bermain()
// 		{
// 			return " Sedang Bermain";
// 		}
	
// 	function tampil($siswa)
// 		{
// 			echo $siswa . $this->belajar().$siswa.$this->bermain();
// 		}
// }

// $siswa = new siswa();
// $siswa->tampil('Wawan ');

// _____________________________________________________________
//_____________________________________________________________

// $arr = [1,2,3,4];

// class perpustakaan

// {
// 	// public $kalimat = 'buku1 buku2 buku3 buku4';
// 	function tatabuku($kalimat)
// 		{
// 			$kalimat1=explode(" ",$kalimat);
// 			print_r($kalimat1) ;
// 		}
// 	function tampil($kalimat){
// 		$this->tatabuku($kalimat);
// 	}
		

// }

// $perpus=new perpustakaan();
// $perpus->tampil('buku1 buku2 buku3 buku4');

//_____________________________________________________________ 
//_______Soal 9________________________________________________
// https://github.com/tunathoni/PHP-Course/blob/master/excercise/%23wawan%2C%20tolchah%2C%20faiq%2C%20Ikhsan%2C%20Dody

// class rumah
// {
// 	function bukapintu()
// 		{
// 			return "Sedang membuka pintu ";
// 		}

// 	function mencuci()
// 		{
// 			return "Sedang mencunci ";
// 		}

// 	function mengepel()
// 		{
// 			return"Sedang mengepel ";
// 		}

// 	function bersihbersih($rumah)
// 		{
// 			echo $rumah . $this->bukapintu().$this->mencuci().$this->mengepel();
// 		}
// }

// $rumah = new rumah();
// $rumah->bersihbersih('Andi ');

// _____________________________________________________________
// _________________________Soal 10_____________________________
// https://github.com/tunathoni/PHP-Course/blob/master/excercise/%23wawan%2C%20tolchah%2C%20faiq%2C%20Ikhsan%2C%20Dody

// $a=10;
// $b=2;

// isiair(10,2)
// // class kendi
// // {
// 	function isiair ($a,$b)
// 		{	
// 			$isiair = $a+$b;
// 			return "AAAAAAAAA";
// 		}
// 			echo $isiair;

// 	function lihatisi($isiair)
// 		{
// 			echo $kendi . $this->isiair($a,$b);
// 		}
// // }

// $total = new isiair($a,$b)
// echo $total;
 // _________________________PR__________________________________
 // _____________________________________________________________

// _____________________________________________________________
// ____________________function Turunan_______________10_11_16__
/**
* 
*/
// class Hewan 
// {
	
// 	public function jalan($hewan = '')
// 	{
// 		echo $hewan . " berjalan <br>";
// 	}
// 	public function makan($hewan = '')
// 	{
// 		echo $hewan . " makan <br>";
// 	}

// }

// class bebek extends hewan
// {
// 	public function terbang()
// 		{
// 			echo "Bebek Terbang <br>";
// 		}
// }

// class Itik extends Bebek
// {

// }


// $bebek = new Bebek ();
// $bebek->jalan('Bebek');
// $bebek->makan('Bebek');

// $Itik = new Itik();
// $Itik->terbang();
// $Itik->jalan('Itik');

// _____________________________________________________________
// _____________________________________________________________

// class Hewan 
// 	{
	
// 	public function jalan($hewan = '')
// 		{
// 			echo $hewan . " berjalan <br>";
// 		}
// 	public function nafas($hewan = '')
// 		{
// 			echo $hewan . " bernafas <br>";
// 		}

// 	}

// class Sapi extends hewan
// 	{
// 	public function kurban()
// 		{
// 			echo "Sapi Kurban <br>";
// 		}
// 	public function makanrumput()
// 		{
// 			echo "Sapi Makan Rumput <br>";
// 		}

// 	}

// class Pedet extends sapi
// 	{
// 	public function minumsusu()
// 		{
// 			echo "Pedet Minum Susu <br>";
// 		}
// 	}


// $sapi = new Sapi ();
// $sapi->jalan('Sapi');
// $sapi->nafas('Sapi');

// $pedet = new Pedet();
// $pedet->kurban();
// $pedet->makanrumput('Pedet');

// $pedet = new Pedet();
// $pedet->minumsusu('pedet');

// _____________________________________________________________
// ____________________Materi 11 10 16__________________________

class Pegawai
{
	
	function __construct()
	{
		$this->gajiPokok = 1500000;
	}
}
class Dosen extends Pegawai
{
	public function __construct()
	{
		
		parent::__construct();
		$this->gajiDosen = $this->gajiPokok;
		
	}
	
	public function gajiDosen($sks='')
	{
		$total = ($sks * 15000);
		$this->gajiDosen += $total ;
	}
	public function getGajiDosen()
	{
		echo "Gaji dosen adalah " . $this->gajiDosen . "\n";
	}
	
}
/**
* 
*/
class Staff extends Pegawai
{
	public function __construct()
	{
		parent::__construct();
		$this->gajiStaff = $this->gajiPokok;
	}
	public function gajiStaff($pertemuan='')
	{
		$total = ($pertemuan * 5000);
		$this->gajiStaff += $total ;
	}
	public function getGajiStaff()
	{
		echo "Gaji staff adalah " . $this->gajiStaff . "\n";
	}
	
}
$dosen = new Dosen();
$dosen->gajiDosen(2);
$dosen->getGajiDosen();
$staff = new Staff();
$staff->gajiStaff(2);
$staff->getGajiStaff();


?>
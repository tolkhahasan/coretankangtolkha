<?php 

// interface Payment{
// 	public function kredit();
// 	public function debit();
// 	public function getATM();
// 	public function getSaldo();
// }
// class ATM 
// {
// 	public function inisialAtm(Payment $bank)
// 	{
// 		$bank->getATM();		
// 	}
// 	public function cetakSaldo(Payment $bank)
// 	{
// 		$bank->getSaldo();
// 	}
// }
// class Mandiri implements Payment
// {
// 	public function __construct()
// 	{
// 		$this->saldo = 0;
// 	}
// 	public function kredit()
// 	{
// 		$this->saldo++;
// 	}
// 	public function debit()
// 	{
// 		$this->saldo--;
// 	}
// 	public function getATM()
// 	{
// 		echo "Ini dari bank Mandiri <br>";
// 	}
// 	public function getSaldo()
// 	{
// 		echo "Saldo rekening Mandiri Anda : " . $this->saldo . " \n";
// 	}
	
// }
// class BNI implements Payment
// {
// 	public function __construct()
// 	{
// 		$this->saldo = 0;
// 	}
// 	public function kredit()
// 	{
// 		$this->saldo++;
// 	}
// 	public function debit()
// 	{
// 		$this->saldo--;
// 	}
// 	public function getATM()
// 	{
// 		echo "Ini dari bank BNI <br>";
// 	}
// 	public function getSaldo()
// 	{
// 		echo "Saldo rekening BNI Anda : " . $this->saldo . " <br>";
// 	}
	
// }
// $mandiri = new Mandiri();
// $mandiri->kredit();
// $mandiri->kredit();
// $mandiri->kredit();
// $mandiri->kredit();

// $bni = new BNI();
// $bni->kredit();
// $bni->kredit();
// $bni->kredit();
// $bni->kredit();
// $bni->debit();

// $atm = new ATM();
// $atm->inisialAtm($mandiri);
// $atm->cetakSaldo($mandiri);
// $atm->inisialAtm($bni);
// $atm->cetakSaldo($bni);
 


 // _____________________________________________________________
// _____________________________________________________________



// interface Payment{
// 	public function kredit();
// 	public function debit();
// 	public function getATM();
// }
// class ATM 
// {
// 	public function inisialAtm(Payment $bank)
// 	{
// 		$bank->getATM();		
// 	}
// }
// class Mandiri implements Payment
// {
// 	public function __construct()
// 	{
// 		$this->kredit = 0;
// 	}
// 	public function kredit()
// 	{
// 		$this->kredit++;
// 	}
// 	public function debit()
// 	{
// 		$this->kredit--;
// 	}
// 	public function getATM()
// 	{
// 		echo "Ini dari bank Mandiri \n";
// 	}
	
// }
// class BNI implements Payment
// {
// 	public function __construct()
// 	{
// 		$this->kredit = 0;
// 	}
// 	public function kredit()
// 	{
// 		$this->kredit++;
// 	}
// 	public function debit()
// 	{
// 		$this->kredit--;
// 	}
// 	public function getATM()
// 	{
// 		echo "Ini dari bank BNI \n";
// 	}
	
// }
// $mandiri = new Mandiri();
// $bni = new BNI();
// $atm = new ATM();
// $atm->inisialAtm($mandiri);
// $atm->inisialAtm($bni);



// ________________________________________________________
// ____________________Soal 12_____________________________

// interface Resep
// 	{
// 	public function laos();
// 	public function kunyit();
// 	public function memasak();
// 	}

// class masakan 
// 	{
// 	public function kumpulanbumbu(Resep $koki)
// 		{
// 			$koki->memasak();		
// 		}
// 	}

// class rawon implements masakan
// 	{
// 	public function __construct()
// 		{
// 		$this->laos = 0;
// 		}
// 	public function laos()
// 		{
// 		$this->laos++;
// 		}
// 	public function kunyit()
// 		{
// 		$this->laos--;
// 		}
// 	public function memasak()
// 		{
// 		echo "Ini rawon asli dari jawa <br>";
// 		}
// 	}

// class soto implements masakan
// 	{
// 	public function __construct()
// 		{
// 		$this->laos = 0;
// 		}
// 	public function laos()
// 		{
// 		$this->laos++;
// 		}
// 	public function kunyit()
// 		{
// 		$this->laos--;
// 		}
// 	public function masakan()
// 		{
// 		echo "Ini soto salah satu masakan <br>";
// 		}
// 	}

// $rawon = new rawon();
// $soto = new soto();
// $masakan = new masakan();
// $masakan->masakan($rawon);
// $masakan->masakan($soto);

// ________________________________________________________
// ____________________Soal 13_____________________________

interface pakaian
{
	public function pakai();
	public function cara_memakai();
}

class cara_pakai
{
	public function get_pakai(pakaian $b)
	{
		echo $b->pakai() . $this->get_cara_memakai($b);
		
	}

	public function get_cara_memakai(pakaian $b)
	{
		return $b->cara_memakai();
	}
}

class baju implements pakaian
	{
	public function pakai()
		{
		echo " cara memakai baju = " ;
		}
	public function cara_memakai()
		{
		return " kancingkan <br>";
		}
	}

class celana implements pakaian
	{
	public function pakai()
		{
		echo " cara memakai celana = " ;
		}
	public function cara_memakai()
		{
		return "angkat resleting <br>";
		}
	}

$c = new baju();
$d = new celana();
$e = new cara_pakai();
$e-> get_pakai($c);
$e-> get_pakai($d);


 ?>
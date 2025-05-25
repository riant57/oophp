<?php

// jualan produk
// komik
// game


class Produk {
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga = 0;

    public function __construct($judul, $penulis,$penerbit, $harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp{$this->harga})";
        return $str;
    }

}

class Komik extends Produk{
    public $jmlHalaman;

    public function __construct($judul, $penulis,$penerbit, $harga, $jmlHalaman){
        parent::__construct($judul, $penulis,$penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;

    }
    public function getInfoProduk(){
        $str = "Komik : " .parent::getInfoProduk(). "{$this->jmlHalaman} Halaman"; 
        return $str;

    }
}

class Game extends Produk{
    public $waktuMain;

    public function __construct($judul, $penulis,$penerbit, $harga, $waktuMain){
        parent::__construct($judul, $penulis,$penerbit, $harga);
        $this->waktuMain = $waktuMain;

    }
    public function getInfoProduk(){
        $str = "Game : " .parent::getInfoProduk(). " {$this->waktuMain} Jam"; 
        return $str;

    }
}

$produk1 = new Komik("Naruto","Masashi Kishimoto","Shonem Jump",30000,100);
$produk2 = new Game("Uncharted","Neil Druckman","Sony Computer",25000,50);

// Komik : Naruto |  Masashi Kishimoto, Shonem Jump (30000) 100 halaman
// Game : Uncharted | Neil Druckman, Sony Computer (25000) 50 jam

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();



?>

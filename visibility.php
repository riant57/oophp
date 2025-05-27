<?php

// jualan produk
// komik
// game


class Produk {
    public $judul;
    public $penulis;
    public $penerbit;
    private $harga = 0;
    protected $diskon;


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

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
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
    public function setDiskon($diskon){
        return $this->diskon = $diskon;
    }

}

$produk1 = new Komik("Naruto","Masashi Kishimoto","Shonem Jump",30000,100);
$produk2 = new Game("Uncharted","Neil Druckman","Sony Computer",25000,50);

// Komik : Naruto |  Masashi Kishimoto, Shonem Jump (30000) 100 halaman
// Game : Uncharted | Neil Druckman, Sony Computer (25000) 50 jam

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

// bisa rubah harga dari luar class
// $produk2->harga = 1000;

// bisa akses dari function child

$produk2->setDiskon(50);
echo $produk2->getHarga();



?>

<?php

// jualan produk
// komik
// game


class Produk {
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga = 0;
    public $jmlHalaman;
    public $waktuMain;

    public function __construct($judul, $penulis,$penerbit, $harga, $jmlHalaman, $waktuMain){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;

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
    public function getInfoProduk(){
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp{$this->harga}) {$this->jmlHalaman} Halaman"; 
        return $str;

    }
}

class Game extends Produk{
    public function getInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp{$this->harga}) {$this->waktuMain} Jam"; 
        return $str;

    }
}

$produk1 = new Komik("Naruto","Masashi Kishimoto","Shonem Jump",30000,100,0, "Komik");
$produk2 = new Game("Uncharted","Neil Druckman","Sony Computer",25000,0,50, "Game");

// Komik : Naruto |  Masashi Kishimoto, Shonem Jump (30000) 100 halaman
// Game : Uncharted | Neil Druckman, Sony Computer (25000) 50 jam

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();



?>

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
    public $type;

    public function __construct($judul, $penulis,$penerbit, $harga, $jmlHalaman, $waktuMain, $type){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->type = $type;

    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        $str = "{$this->type} : {$this->judul} | {$this->getLabel()} (Rp{$this->harga})";
        if($this->type == "Komik"){
            $str .= " - {$this->jmlHalaman} Halaman";
        }else if($this->type == "Game"){
            $str .= " - {$this->waktuMain} Jam";
        }
        return $str;
    }

}

//belajar object type
class CetakInfoProduk{
    public function cetak( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} Rp. $produk->harga";
        return $str;
    }
}



$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonem Jump",30000,100,0, "Komik");
$produk2 = new Produk("Uncharted","Neil Druckman","Sony Computer",25000,0,50, "Game");

// Komik : Naruto |  Masashi Kishimoto, Shonem Jump (30000) 100 halaman
// Game : Uncharted | Neil Druckman, Sony Computer (25000) 50 jam

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();



?>

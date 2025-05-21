<?php

// jualan produk
// komik
// game


class Produk {
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga ;

    public function __construct($judul= "", $penulis = "",$penerbit ="", $harga = ""){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }

    public function getLabel(){
        return "$this->judul, $this->penulis";
    }

}

$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonem Jump",30000);
$produk2 = new Produk("Uncharted");

echo "Komik :". $produk1->getLabel();
echo "<br>";
echo "Komik :". $produk2->getLabel();


?>

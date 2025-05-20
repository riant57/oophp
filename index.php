<?php

// jualan produk
// komik
// game


class Produk {
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga = 0;

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// $produk1->tambahProperti = "Test";
// var_dump($produk1);

$produk2 = new Produk();
$produk2->judul = "Naruto";
$produk2->penulis = "Masashi Kishimoto";
$produk2->penerbit = "Shonem Jump";
$produk2->harga = 30000;

// echo "Komik: $produk2->penulis, $produk2->penerbit";

$produk3 = new Produk();
$produk3->judul = "Uncharted";
$produk3->penulis = "Neil Druckmann";
$produk3->penerbit = "Sony Computer";
$produk3->harga = 40000;

echo "Komik :". $produk2->getLabel();
echo "<br>";
echo "Komik :". $produk3->getLabel();


?>

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

}

//belajar object type
class CetakInfoProduk{
    public function cetak( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} Rp. $produk->harga";
        return $str;
    }
}

$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonem Jump",30000);
//$produk2 = new Produk("Uncharted");

// echo "Komik :". $produk1->getLabel();
// echo "<br>";
// echo "Komik :". $produk2->getLabel();

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);


?>

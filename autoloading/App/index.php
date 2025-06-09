<?php

require_once '/opt/lampp/htdocs/oophp/autoloading/App/init.php';

$produk1 = new Komik("Naruto","Masashi Kishimoto","Shonem Jump",30000,100);
$produk2 = new Game("Uncharted","Neil Druckman","Sony Computer",25000,50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();

?>
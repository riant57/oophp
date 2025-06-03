<?php

// jualan produk
// komik
// game

interface InfoProduk{
    public function getInfoProduk();
}

abstract class Produk {
    protected $judul;
    protected $penulis;
    protected $penerbit;
    protected $harga = 0;
    protected $diskon;


    public function __construct($judul, $penulis,$penerbit, $harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }
    //setter
    public function setJudul($judul){
        if(!is_string($judul)){
            throw new Exception("Judul Harus String");
        }
        $this->judul = $judul;
    }
    //getter
    public function getJudul(){
        return $this->judul;
    }

    public function setPenulis($penulis){
        $this->penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit($penerbit){
        $this->penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfo();

    public function setHarga($harga){
        $this->harga;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setDiskon($diskon){
        return $this->diskon = $diskon;
    }

    public function getDiskon(){
        return $this->diskon;
    }

}

class Komik extends Produk implements InfoProduk{
    public $jmlHalaman;

    public function __construct($judul, $penulis,$penerbit, $harga, $jmlHalaman){
        parent::__construct($judul, $penulis,$penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;

    }
    public function getInfoProduk(){
        $str = "Komik : " .$this->getInfo(). "{$this->jmlHalaman} Halaman"; 
        return $str;

    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp{$this->harga})";
        return $str;
    }
}

class Game extends Produk implements InfoProduk{
    public $waktuMain;

    public function __construct($judul, $penulis,$penerbit, $harga, $waktuMain){
        parent::__construct($judul, $penulis,$penerbit, $harga);
        $this->waktuMain = $waktuMain;

    }
    public function getInfoProduk(){
        $str = "Game : " .$this->getInfo(). " {$this->waktuMain} Jam"; 
        return $str;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp{$this->harga})";
        return $str;
    }
    

}

class CetakInfoProduk{
    public $daftarProduk = array();

    public function tambahProduk(Produk $produk){
        $this->daftarProduk[] = $produk;

    }
    
    public function cetak(){
        $str = "DAFTAR PRODUK <br>";

        foreach($this->daftarProduk as $p){
            //print_r($p);
            // bisa panggil fungsi getInfoProduk
            $str.="- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}

$produk1 = new Komik("Naruto","Masashi Kishimoto","Shonem Jump",30000,100);
$produk2 = new Game("Uncharted","Neil Druckman","Sony Computer",25000,50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();





?>

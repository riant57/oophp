<?php
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
?>
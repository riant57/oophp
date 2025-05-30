<?php
// Konstanta

// define('NAMA','Rian tri cahyono');

// echo NAMA;

// const UMUR = 32;
// echo UMUR;

// Define tidak bisa diakses dari dalam class, const bisa
// class Coba{
//     const NAMA = 'Rian';
// }

// echo Coba::NAMA;

// Magic constant

//echo __FILE__;

class Coba{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;


?>
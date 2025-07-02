<?php

class Produk {
    public $judul ="judul", $penulis ="aiham", $penerbit ="aku", $harga ="mahal", $hlmn = "halaman", $wkt = "waktu", $tipe = "tipe";

    public function __construct($judul , $penulis , $penerbit , $harga , $hlmn , $wkt ,$tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->hlmn = $hlmn;
        $this->wkt = $wkt;
        $this->tipe = $tipe;
    }

    public function getLabel() {
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga $this->hlmn, $this->wkt";
        // fungsi hanya menyimpan variabel untuk 1 variabel nya saja maka gunakan $this->variabel
    }

    public function getInfoLengkap() {
        $str = "{$this->tipe} : {$this->judul}  |  {$this->judul} | {$this->getlabel()} (rp. {$this->harga})";
        if ($this->tipe == "komik") {
        $str .= " - {$this->hlmn} halaman";
    }elseif ($this->tipe == "game") {
        $str .= " - {$this->wkt} jam.";
    }
    return $str;
    }

           



}

// pemnberianan nilai pada constractor di parameter variabel class
$produk1 = new Produk("naruto", "aiham", "CV angksa", 10000 , 100, 0 , "komik");
$produk2 = new Produk("delta force", "aiham", "GARENA", 20000, 0, 50  ,"game");

// komik : aiham | aiham, CV angksa, (10000) ,- 100 halaman
//  game : delta force | aiham, GARENA, (20000) - 50 jam



echo "" . $produk1->getInfoLengkap();
echo $produk2->getInfoLengkap();









?>
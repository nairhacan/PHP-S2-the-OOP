<?php

class Produk {
    public $judul, $penulis, $penerbit, $harga;

    public function __construct($judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "{$this->penulis}, {$this->penerbit}";
    }

    public function getInfoproduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

class Komik extends Produk {
    public $hlmn;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $hlmn = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->hlmn = $hlmn;
    }

    public function getInfoproduk() {
        $str = "Komik : " . parent::getInfoproduk() . " - {$this->hlmn} halaman";
        return $str;
    }
}

class Game extends Produk {
    public $wkt;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $wkt = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->wkt = $wkt;
    }

    public function getInfoproduk() {
        $str = "Game : " . parent::getInfoproduk() . " - {$this->wkt} jam";
        return $str;
    }
}

// Pemberian nilai pada constructor di parameter variabel class
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shueisha", 10000, 100);
$produk2 = new Game("Delta Force", "Novalogic", "Electronic Arts", 20000, 50);

echo $produk1->getInfoproduk();
echo "<br>";
echo $produk2->getInfoproduk();

?>
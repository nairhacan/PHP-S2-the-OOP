<?php

class Produk {
    private $judul, $penulis, $penerbit, $harga;
    protected $diskon;

    public function __construct($judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;      
        $this->harga = $harga;        
        $this->diskon = 0;  // Default diskon adalah 0%
    }

    // Penulis
    public function setPenulis($penulis) {
        if (!is_string($penulis)) {
            throw new Exception("Penulis harus berupa string.");
        }
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    // Judul
    public function setJudul($judul) {
        if (!is_string($judul)) {
            throw new Exception("Judul harus berupa string.");
        }
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    // Harga & Diskon
    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setDiskon($diskon) {
        if (!is_numeric($diskon) || $diskon < 0 || $diskon > 100) {
            throw new Exception("Diskon harus berupa angka antara 0-100.");
        }
        $this->diskon = $diskon;
    }

    // Penerbit
    public function setPenerbit($penerbit) {
        if (!is_string($penerbit)) {
            throw new Exception("Penerbit harus berupa string.");
        }
        $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    // Label produk
    public function getLabel() {
        return "{$this->penulis}, {$this->penerbit}";
    }

    // Informasi produk
    public function getInfoProduk() {
        return "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    }
}

class Komik extends Produk {
    public $hlmn;

    public function __construct($judul, $penulis, $penerbit, $harga, $hlmn) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->hlmn = $hlmn;
    }

    public function getInfoProduk() {
        return "Komik: " . parent::getInfoProduk() . " - {$this->hlmn} halaman";
    }
}

class Game extends Produk {
    public $wkt;

    public function __construct($judul, $penulis, $penerbit, $harga, $wkt) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->wkt = $wkt;
    }

    public function getInfoProduk() {
        return "Game: " . parent::getInfoProduk() . " - {$this->wkt} jam";
    }
}

// Membuat objek produk
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shueisha", 10000, 100);
$produk2 = new Game("Delta Force", "Novalogic", "Electronic Arts", 20000, 50);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
</head>
<body>

    <h2>Informasi Produk</h2>
    <p><?php echo $produk1->getInfoProduk(); ?></p>
    <p><?php echo $produk2->getInfoProduk(); ?></p>

    <hr>

    <h2>Diskon Produk</h2>
    <?php
    // Memberikan diskon pada produk 1
    $produk1->setDiskon(50);
    ?>
    <p>Harga setelah diskon untuk Komik Naruto: Rp. <?php echo $produk1->getHarga(); ?></p>

    <hr>

    <h2>Judul Produk</h2>
    <p>Judul produk game: <?php echo $produk2->getJudul(); ?></p>

    <hr>

    <h2>Update Judul Produk</h2>
    <?php 
    $produk1->setJudul("One Piece");
    echo "Judul yang diperbarui: " . $produk1->getJudul();
    ?>
    
</body>
</html>
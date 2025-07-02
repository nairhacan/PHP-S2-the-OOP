<?php

class Produk {
    public  $penulis, $penerbit, $harga;
    // public $judul;
    // protected $judul;
    private $judul;

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

    // ini private
    public function getjudul() {
        return $this->judul;
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

    // ini protacted
    // public function getjudul() {
    //     return $this->judul;
    // }

    public function getInfoproduk() {
        $str = "Game : " . parent::getInfoproduk() . " - {$this->wkt} jam";
        return $str;
    }
}

// Pemberian nilai pada constructor di parameter variabel class
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shueisha", 10000, 100);
$produk2 = new Game("Delta Force", "Novalogic", "Electronic Arts", 20000, 50);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 echo $produk1->getInfoproduk();
echo "<br>";
echo $produk2->getInfoproduk();

 ?>

 <hr>

 <?php
//  penerapan celah pada constructor yang sudah memiliki nilai default
// contoh



// $produk1->judul = "kamikaze";
// echo $produk1->getInfoproduk();



// secara otomatis constructor akan menumpuk nilai default pada constructor
// yang seharus nya tidak bisa diubah

// jika tidak ingin terjadi penumpukan nilai default pada constructor
// maka kita bisa menggunakan visibility protacted pada constructor
// contoh public $judul; ==> protected $judul;
// lihat di baris ke (6)
// jika kita menggunakan visibility protected pada constructor
// maka kita tidak bisa mengubah nilai default pada constructor



?>
<hr>
<?php
// ini boleh di tampilkan karna visibility protected yang berada di class game
// dan karan class game adalah turunan dari class produk
// maka nya boleh di tampilkan
// cara tau class game adalah turunan dari class produk adalah
// dengan cara melihat constructor di class game
// jika ada class seperti ini  class Game extends Produk
// itu artinya class game adalah turunan dari class produk (extande = tuturan)
// lihat di baris ke (47)
echo $produk2->getjudul();



// jika kita menggunakan visibility private pada constructor
// maka kita tidak bisa mengubah nilai default pada constructor
// dan kita tidak bisa menampilkan nya
// contoh
// coba pindah kan fuction getjudul() ke class produk
// dan hapus function getjudul() di class game
// maka kita tidak bisa menampilkan nya
// lihat di baris ke (6)
// jika kita menggunakan visibility private pada constructor
// maka kita tidak bisa mengubah nilai default pada constructor
// karena visibility private hanya bisa di akses di dalam class itu sendiri
?>

    
</body>
</html>
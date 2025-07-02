<?php

class Produk {
    public $judul ="judul", $penulis ="aiham", $penerbit ="aku", $harga ="mahal";

    public function __construct($judul , $penulis , $penerbit , $harga ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
        // fungsi hanya menyimpan variabel untuk 1 variabel nya saja maka gunakan $this->variabel
    }
}

// pemnberianan nilai pada constractor di parameter variabel class
$produk1 = new Produk("naruto", "aiham", "CV angksa", 10000);
$produk2 = new Produk("delta force", "aiham", "GARENA", 20000);





echo "komik : " . $produk1->getLabel();
echo "<br>";
echo "game : " . $produk2->getLabel();


class cetakInfoProduk {
   public function cetak( Produk $produk) {
    $str = "{$produk->judul} | {$produk->getLabel()}";
    return $str;
   }
}

$infoProduk1 = new cetakInfoProduk();
$infoProduk1->cetak($produk1);
echo "<br>";
echo $infoProduk1->cetak($produk2);









?>
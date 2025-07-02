<?php

class Produk {
    public $judul ="judul", $penulis ="aiham", $penerbit ="aku", $harga ="mahal";

    public function getLabel() {
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
        // fungsi hanya menyimpan variabel untuk 1 variabel nya saja maka gunakan $this->variabel
    }
}

$produk1 = new Produk();
$produk1->judul = "onimai";
$produk1->penulis = "aiham";
$produk1->penerbit = "CV angksa";
$produk1->harga = 10000;

$produk2 = new Produk();
$produk2->judul = "delta force";
$produk2->penulis = "aiham";
$produk2->penerbit = "GARENA";
$produk2->harga = "20000";

echo "komik : " . $produk1->getLabel();
echo "<br>";
echo "game : " . $produk2->getLabel();












// $produk1 = new Produk();
// var_dump($produk1);

// // penmumpukan
// $produk1 = new Produk();
// $produk1->judul = "Ghaijan";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "FF";
// $produk2->kon = "kamu";
// var_dump($produk2);








?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link rel="shortcut icon" href="hampuh.jpg" type="image/x-icon">
</head>
<body>
    
</body>
</html>
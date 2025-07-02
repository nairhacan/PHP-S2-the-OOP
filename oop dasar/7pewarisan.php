<?php

class Produk {
    public $judul , $penulis , $penerbit , $harga , $hlmn , $wkt  ;

    public function __construct($judul , $penulis , $penerbit , $harga , $hlmn , $wkt ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->hlmn = $hlmn;
        $this->wkt = $wkt;
    }

    public function getLabel() {
        return " $this->penulis, $this->penerbit, $this->harga $this->hlmn, $this->wkt";
        // fungsi hanya menyimpan variabel untuk 1 variabel nya saja maka gunakan $this->variabel
    }

    public function getInfoproduk()  {
    }



           



}

// menjalalnkan construktor di class produk (parent)
class komik extends Produk {
    public function getInfoproduk()
    {
        $str =" komik : {$this->judul} | {$this->getlabel()} (rp. {$this->harga}) - {$this->hlmn} halaman";
        return $str;
    }
}

class game extends Produk {
    public function getInfoproduk()
    {
        $str =" game : {$this->judul} | {$this->getlabel()} (rp. {$this->harga}) - {$this->wkt} jam";
        return $str;
    }
}

// pemnberianan nilai pada constractor di parameter variabel class
$produk1 = new komik("naruto", "aiham", "CV angksa", 10000 , 100, 0 );  

$produk2 = new game ("delta force", "aiham", "GARENA", 20000, 0, 50  );

// komik : aiham | aiham, CV angksa, (10000) ,- 100 halaman
//  game : delta force | aiham, GARENA, (20000) - 50 jam



echo "" . $produk1->getInfoproduk();
echo "<br>";
echo $produk2->getInfoproduk();









?>
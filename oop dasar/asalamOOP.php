<?php
class manusia {
    
    public $nama;
    public $umur;

    function tmpl_nama(){
        return "nama saya adalah $this->nama";
    }
    function tmpl_umur(){
        return "umur saya adalah 17 tahun";
    }
}

$jelema = new manusia();
echo $jelema->tmpl_nama();
echo "<br>";
echo $jelema->tmpl_umur();
echo "<hr>";



class motor {
    public $warna , $cc, $mesin , $merek, $KM;

    function tmpl_motor(){
        return "$this->warna, $this->cc $this->mesin, $this->merek, $this->KM";
    }
}

$produk1 = new motor();
$produk1->warna = "merah";
$produk1->cc = "1000cc";
$produk1->mesin = "H2rr";
$produk1->merek = "harlaydavidson";
$produk1->KM = "1000km";



echo "<br>";
echo "motor : " . $produk1->tmpl_motor();
echo "<hr>";



class pemain {
    public $nama, $umur, $posisi, $tim;

    function tmpl_pemain(){
        return " $this->nama, $this->umur, $this->posisi, $this->tim";
    }
}

$pemain1 = new pemain();
$pemain1->nama = "Messi";
$pemain1->umur = "35";
$pemain1->posisi = "penyerang";
$pemain1->tim = "Fifa";
echo "<br>";
echo "pemain : " . $pemain1->tmpl_pemain();
?>


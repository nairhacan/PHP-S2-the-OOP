<?php

class induk {
    public $nama = "induk";
    protected $umur = 20;
    private $alamat = "jalan raya";

    public function tampilkanNama() {
        return "Nama: " . $this->nama;
    }

    protected function tampilkanUmur() {
        return "Umur: " . $this->umur;
    }

    private function tampilkanAlamat() {
        return "Alamat: " . $this->alamat;
    }
}
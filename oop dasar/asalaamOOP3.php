<?php
class contoh{

    protected $a = 4;
    protected $b = 5;


    protected function tulisan(){
        echo "HELLO WORLD";
    }

}

class anak extends contoh{

  protected $a = 6;
  protected $b = 7;

  public function hitung(){
    parent::tulisan();
    echo "<br>";
    return $this->a * $this->b;

}
}

$hasil = new anak();
echo $hasil->hitung();
//         return $str;
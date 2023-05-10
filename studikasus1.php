<?php

class Mobil{
    public $merk, $nama, $warna, $kecepatan;

    public function __construct ($merk, $nama, $warna, $kecepatan ){

        $this-> merk      = $merk;
        $this-> nama      = $nama;
        $this-> warna     = $warna;
        $this-> kecepatan = $kecepatan;
    }

    public function getCetak(){
        echo "Merk Mobil: "     . $this-> merk;
        echo "<br>";
        echo "Nama Mobil: "     . $this-> nama;
        echo "<br>";
        echo "Warna Mobil: "    . $this-> warna;
        echo "<br>";
        echo "Kecepatan Mobil: " . $this-> kecepatan ." km/h" ;
    }

    public function getKondisiMobil(){
        if ($this -> kecepatan == 0) {
            echo "Mobil Tidak Berjalan";
            echo "<br>";
        } elseif ($this -> kecepatan <= 45) {
            echo "Mobil Berjalan Dengan Kecepatan Rata Rata";
            echo "<br>";
        } elseif ($this -> kecepatan >= 50) {
            echo "Mobil Berjalan Dengan Cepat";
            echo "<br>";
        } 
    }
}

$car1 = new Mobil("Bugatti", "La Voiture Noire", "Hitam", 120);
$car1 -> getKondisiMobil();
$car1 -> getCetak() ;


?>
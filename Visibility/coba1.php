<?php
class Menu{
    public $nama;
    private $harga;
    protected $bintang= "Bintang 4";

    public function nama_menu(){
        echo "Nama Menu Ini Adalah " . $this->nama;
        echo "<br>";
    }
    protected function bintangmenu(){
        return '';
    }
    public function hargamenu($hargabaru){
        $this -> harga = $hargabaru;
        return $hargabaru;
    }
    
}

class Newmenu extends Menu{
    public function tampilbintang(){
        echo $this -> bintang;
        echo $this -> bintangmenu();
    }

}

$menu = new Menu();
$menu->nama = "Nasi Goreng";
$menu->nama_menu(); 
$bintang = new Newmenu();
$bintang -> tampilbintang();
echo "<br>";
echo "Harga Menu Ini" . $menu -> hargamenu("  Gratis");
?>
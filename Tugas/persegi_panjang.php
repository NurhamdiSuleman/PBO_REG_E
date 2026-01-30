<?php
class persegiPanjang{

    public $panjang;
    public $lebar;

    public function hitungLuas(){
        return $this-> panjang * $this->lebar;
    }

    public function hitungKeliling(){
        return 2 * ($this->panjang +
        $this->lebar);
    }
}

$pp1 = new persegiPanjang();
$pp1->panjang = 10;
$pp1->lebar = 5;

$pp2 = new persegiPanjang();
$pp2 = 7;
$pp2 = 3;


echo "<h3>Persegi panjang</h3>";
echo "Panjang : {$pp1->panjang}<br>";
echo "lebar : {$pp1 -> lebar} <br>";

?>
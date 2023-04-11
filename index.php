<?php

class Tes{

}

$a = new Tes();

class Mobil{
    public $nama,
            $merk,
            $warna;

    public function tambahKecepatan(){

    }
    
    public function kurangiKecepatan(){

    }
}

class produk{
    public  $nama = 'this is nama',
            $jenis = 'this is jenis',
            $harga = 999999;

    public function __construct($nama ,$jenis, $harga){
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->harga = $harga;
    }

    public function printHarga(){
        return $this->harga;
    }
}


// $produk1 = new Produk();
// $produk1->nama = 'Vintage Colar Blouse';
// $produk1->jenis = 'Women Blouse';

$produk2 = new Produk("Knit Flower Cardigan", "Cardigan", 349900);

// $produk2->nama = 'Knit Flower Cardigan';
// $produk2->jenis = 'Cardigan';
// $produk2->harga = 349900;
// $produk2->tambahProperti = "CONTOH";



echo "Produk 2 : $produk2->nama, $produk2->jenis";
echo "<br>";
echo "Harga : " .$produk2->printHarga();

?>
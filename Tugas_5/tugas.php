<?php
class Kendaraan {
    public $merk;
    public $warna;

    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function deskripsi() {
        return "Kendaraan " . $this->merk . " warna " . $this->warna;
    }
}

class Darat extends Kendaraan {
    public $jenis;

    public function __construct($merk, $warna, $jenis) {
        parent::__construct($merk, $warna);
        $this->jenis = $jenis;
    }

    public function deskripsi_kendaraan_darat() {
        return $this->jenis . " merk " . $this->merk . " berwarna " . $this->warna;
    }
}

$mobil = new Darat ("Esemka", "Hitam", "Mobil");

echo $mobil->deskripsi_kendaraan_darat();
?>
<?php
class Televisi {
    // Properti
    public $merk = "kosong";
    public $ukuran = "kosong";
    public $warna = "kosong";

    // Method
    private function getTelevisi($merk, $ukuran, $warna) {
        echo "Televisi ini adalah milik: " . $merk . "<br>";
        echo "Ukurannya adalah: " . $ukuran . "<br>";
        echo "Warnanya adalah: " . $warna . "<br>";
    }

    public function getDetail() {
        $this->getTelevisi("Samsung", "42 inch", "Hitam");
    }
}

// Objek televisi 1
$televisi1 = new Televisi();
$televisi1->merk = "LG";
$televisi1->ukuran = "60 inch";
$televisi1->warna = "Hitam";
var_dump($televisi1);
echo "<br><br><hr>";

// Objek televisi 2
$televisi2 = new Televisi();
$televisi2->getDetail();
echo "<br><br>";
var_dump($televisi2);
?>

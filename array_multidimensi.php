<?php include 'atas.php';
$mahasiswas = [["Anies","TI","8"],["prabowo","SI","9"],["Ganjar","BD","16"]];

foreach ($mahasiswas as $mahasiswa ) {
    echo "Nama : " .$mahasiswa[0] ."<br>";
    echo "Jurusan : " .$mahasiswa[1] ."<br>";
    echo "Semester : " .$mahasiswa[2] ."<br>";
    echo "<br>";
}
?>
<?php
include 'bawah.php';
?>
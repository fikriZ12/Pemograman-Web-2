<?php
include 'atas.php';
?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Form Nilai</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <!-- tempat isi konten kita -->
                                <form method="POST" action="form_belanja.php">
<body>
<form method="POST" action="form_belanja.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Costumer</label> 
    <div class="col-6">
      <input id="nama" name="nama" placeholder="Nama Costumer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">jumlah</label> 
    <div class="col-4">
      <input id="text" name="jumlah" type="number" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-success">Kirim</button>
    </div>
  </div>
</form>
</body>
</html>
<?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mengambil nilai dari form pemesanan
            $customer = $_POST["nama"];
            $product = isset($_POST["TV"]) ? "TV" : (isset($_POST["produk"]) ? "Kulkas" : (isset($_POST["produk"]) ? "Mesin Cuci" : ""));
            $quantity = $_POST["jumlah"];

            // Menghitung total belanja produk

            switch ($product) {
                case "TV":
                    $price = 4200000;
                    break;
                case "Kulkas":
                    $price = 3100000;
                    break;
                case "Mesin Cuci":
                    $price = 3800000;
                    break;
                default:
                    $price = 0;
            }

            $total = $price * $quantity;

            
            echo "<h5>Hasil Belanja</h5>";
            echo "<p>Nama Customer: $customer</p>";
            echo "<p>Produk Pilihan: $product</p>";
            echo "<p>Jumlah Beli: $quantity</p>";
            echo "<p>Total Belanja: Rp " . number_format($total, 0, ',', '.') . "</p>";
}
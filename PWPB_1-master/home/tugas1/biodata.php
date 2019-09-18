<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>PWPB</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

    </style>
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <?php
    $nama_bagas="M Rizky Bagas Satrio";
    $umur_bagas=16;
    $tinggi_badan_bagas=175;
    $hobi_bagas="Volley";

    $nama_citra="Citra Ayu Permatasari";
    $umur_citra=16;
    $tinggi_badan_citra=160;
    $hobi_citra="Memasak dan menyanyi";

    $nama_nia="Tri Murniya";
    $umur_nia=16;
    $tinggi_badan_nia=154;
    $hobi_nia="Membaca";

    $rata_rata = ($tinggi_badan_bagas + $tinggi_badan_citra + $tinggi_badan_nia)/3;
  ?>
<body>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal text-light">Kelompok 8</h5>
    <!-- bagian navigasi -->
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-light" href="../index.html">Home</a>
      <a class="p-2 text-light" href="biodata.php">Tugas Pertama</a>
      <a class="p-2 text-light" href="tugas2.php">Tugas Kedua</a>
      <a class="p-2 text-light" href="tugas3.php">Tugas Ketiga</a>
      <a class="p-2 text-light" href="#">Tugas Keempat</a>
      <a class="p-2 text-light" href="#">Tugas Kelima</a>
    </nav>
    <!-- penutup bagian navigasi -->
  </div>

  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">PWPB</h1>
    <p class="lead">Rumus Bangun Ruang</p>
  </div>

<!-- bagian isi  -->
  <div class="container">
  <div class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Biodata</h4>
        </div>
      <div class="card-body">
        <img src="bagas.jpg" style="width: 200px; height: 200px; object-fit: cover;">
          <ul class="list-unstyled mt-3 mb-4">
            <li>Nama Lengkap : <?php echo $nama_bagas;?></li>
            <li>Umur Saya : <?php echo $umur_bagas;?></li>
            <li>Tinggi Badan Saya : <?php echo $tinggi_badan_bagas;?> cm</li>
            <li>Hobi saya : <?php echo $hobi_bagas;?></li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-light">Baca Lebih Lengkap</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Biodata</h4>
      </div>
      <div class="card-body">
        <img src="citra.jpg" style="width: 200px; height: 200px; object-fit: cover;">
        <ul class="list-unstyled mt-3 mb-4">
          <li>Nama Lengkap : <?php echo $nama_citra;?></li>
          <li>Umur Saya : <?php echo $umur_citra;?></li>
          <li>Tinggi Badan Saya : <?php echo $tinggi_badan_citra;?> cm</li>
          <li>Hobi saya : <?php echo $hobi_citra;?></li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-light">Baca Lebih Lengkap</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Biodata</h4>
      </div>
      <div class="card-body">
        <img src="nia.jpg" style="width: 200px; height: 200px; object-fit: cover;">
        <ul class="list-unstyled mt-3 mb-4">
          <li>Nama Lengkap : <?php echo $nama_nia;?></li>
          <li>Umur Saya : <?php echo $umur_nia;?></li>
          <li>Tinggi Badan Saya : <?php echo $tinggi_badan_nia;?> cm</li>
          <li>Hobi saya : <?php echo $hobi_nia;?></li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-light">Baca Lebih Lengkap</button>
      </div>
    </div>
  </div>
  <center><h5>Rata-rata tinggi kami adalah <?php echo $rata_rata;?> cm</h5></center>
<!-- penutup bagian isi -->

<!-- bagian footer -->
  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted"><center>&copy; Tugas PWPB 2019</center></small>
      </div>
    </div>
  </footer>
<!-- penutup bagian footer -->

  </div>
</body>
</html>
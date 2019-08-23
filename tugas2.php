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
    $luas_limas="Luas alas + (3 x luas sisi)";
    $volume_limas="1/3 x luas alas x tinggi";
    $gambar_1="gif/limas.gif";

    $luas_prisma="Luas alas + luas tutup + luas selimut";
    $volume_prisma="(1/2 x alas segitiga x tinggi segitiga) x tinggi prisma";

    $luas_tabung="2phi x r**";
    $volume_tabung="phi x r** x tinggi";

    $luas_kubus="6 x s**";
    $volume_kubus="s x s x s";
    $keliling_kubus="12 x s";

    $luas_balok="2 x (pxl + pxt + lxt)";
    $volume_balok="p x l x t";

    $luas_lingkaran="phi x r**";
    $keliling_lingkaran="2 x phi x r";
    
  ?>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal text-light">Kelompok 8</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-light" href="index.html">Home</a>
    <a class="p-2 text-light" href="#">Tugas Pertama</a>
    <a class="p-2 text-light" href="tugas2.php">Tugas Kedua</a>
    <a class="p-2 text-light" href="#">Tugas Ketiga</a>
    <a class="p-2 text-light" href="#">Tugas Keempat</a>
    <a class="p-2 text-light" href="#">Tugas Kelima</a>
  </nav>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">PWPB</h1>
  <p class="lead">Rumus Bangun Ruang</p>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Limas segitiga</h4>
      </div>
      <div class="card-body">
        
        <ul class="list-unstyled mt-3 mb-4">
          <li>Luas alas : <?php echo $luas_limas;?></li>
          <li>Volume : <?php echo $volume_limas;?></li>
        </ul>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Prisma Segitiga</h4>
      </div>
      <div class="card-body">
        <img src="gif/prisma.gif" style="width: 200px; height: 200px; object-fit: cover;">
        <ul class="list-unstyled mt-3 mb-4">
          <li>Luas alas : <?php echo $luas_prisma;?></li>
          <li>Volume : <?php echo $volume_prisma;?></li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-light">Baca Lebih Lengkap</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Tabung</h4>
      </div>
      <div class="card-body">
        <img src="gif/tabung.gif" style="width: 200px; height: 200px; object-fit: cover;">
        <ul class="list-unstyled mt-3 mb-4">
          <li>Luas alas : <?php echo $luas_tabung;?></li>
          <li>Volume : <?php echo $volume_tabung;?></li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-light">Baca Lebih Lengkap</button>
      </div>
    </div>

  <div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Kubus</h4>
      </div>
      <div class="card-body">
        <img src="gif/kubus.mp4" style="width: 200px; height: 200px; object-fit: cover;">
        <ul class="list-unstyled mt-3 mb-4">
          <li>Luas alas : <?php echo $luas_kubus;?></li>
          <li>Volume : <?php echo $volume_kubus;?></li>
          <li>Keliling : <?php echo $keliling_kubus;?></li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-light">Baca Lebih Lengkap</button>
      </div>
    </div>

    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Balok</h4>
      </div>
      <div class="card-body">
        <img src="gif/balok.gif" style="width: 200px; height: 200px; object-fit: cover;">
        <ul class="list-unstyled mt-3 mb-4">
          <li>Luas : <?php echo $luas_balok;?></li>
          <li>Volume : <?php echo $volume_balok;?></li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-light">Baca Lebih Lengkap</button>
      </div>
    </div>

    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Lingkaran</h4>
      </div>
      <div class="card-body">
        <img src="gif/lingkaran.gif" style="width: 200px; height: 200px; object-fit: cover;">
        <ul class="list-unstyled mt-3 mb-4">
          <li>Luas : <?php echo $luas_lingkaran;?></li>
          <li>Keliling : <?php echo $keliling_lingkaran;?></li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-light">Baca Lebih Lengkap</button>
      </div>
    </div>
  </div>
</div>
</div>
  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted"><center>&copy; Tugas PWPB 2019</center></small>
  </footer>
</div>
</body>
</html>
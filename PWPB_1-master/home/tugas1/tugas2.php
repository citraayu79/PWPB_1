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
    $limas="limas";
    $luas_limas="Luas alas + (3 x luas sisi)";
    $volume_limas="1/3 x luas alas x tinggi";
    $gambar_1="gif/limas.gif";

    $prisma="prisma";
    $luas_prisma="Luas alas + luas tutup + luas selimut";
    $volume_prisma="(1/2 x alas segitiga x tinggi segitiga) x tinggi prisma";
    $gambar_2="gif/prisma.gif";

    $tabung="tabung";
    $luas_tabung="2phi x r**";
    $volume_tabung="phi x r** x tinggi";
    $gambar_3="gif/tabung.gif";

    $kubus="kubus";
    $luas_kubus="6 x s**";
    $volume_kubus="s x s x s";
    $keliling_kubus="12 x s";
    $gambar_4="gif/silucu.gif";

    $balok="balok";
    $luas_balok="2 x (pxl + pxt + lxt)";
    $volume_balok="p x l x t";
    $gambar_5="gif/balok.gif";

    $lingkaran="lingkaran";
    $luas_lingkaran="phi x r**";
    $keliling_lingkaran="2 x phi x r";
    $gambar_6="gif/lingkaran.gif";

  ?>
<body>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal text-light">Kelompok 8</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-light" href="../index.html">Home</a>
      <a class="p-2 text-light" href="biodata.php">Tugas Pertama</a>
      <a class="p-2 text-light" href="tugas2.php">Tugas Kedua</a>
      <a class="p-2 text-light" href="tugas3.php">Tugas Ketiga</a>
      <a class="p-2 text-light" href="#">Tugas Keempat</a>
      <a class="p-2 text-light" href="#">Tugas Kelima</a>
    </nav>
  </div>

  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">PWPB</h1>
    <p class="lead">Rumus Bangun Ruang</p>
  </div>
<!-- bagian isi -->
  <div class="container">
    <!-- bangun ruang pertama -->
  <div class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Limas segitiga</h4>
        </div>
        <div class="card-body">
        <img class="user" src=" <?= $gambar_1 ?>" style="width: 200px; height: 200px; object-fit: cover;">
        <ul class="list-unstyled mt-3 mb-4">
          <span><?= $limas ?></span> <p>
          <li>Luas alas : <?php echo $luas_limas;?></li>
          <li>Volume : <?php echo $volume_limas;?></li>
        </ul>
      </div>
    </div>
    
    <!-- bangun ruang kedua -->
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Prisma Segitiga</h4>
      </div>
      <div class="card-body">
        <img class="user" src="<?= $gambar_2?>" style="width: 200px; height: 200px; object-fit: cover;">
        <ul class="list-unstyled mt-3 mb-4">
          <span><?= $prisma ?></span> <p>
          <li>Luas alas : <?php echo $luas_prisma;?></li>
          <li>Volume : <?php echo $volume_prisma;?></li>
        </ul>
      </div>
    </div>
    
    <!-- bangun ruang ketiga -->
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Tabung</h4>
      </div>
      <div class="card-body">
        <img class="user" src="<?= $gambar_3?>" style="width: 200px; height: 200px; object-fit: cover;">
        <ul class="list-unstyled mt-3 mb-4">
          <span><?= $tabung ?></span> <p>
          <li>Luas alas : <?php echo $luas_tabung;?></li>
          <li>Volume : <?php echo $volume_tabung;?></li>
        </ul>
      </div>
    </div>
    
    <!-- bangun ruang keempat -->
    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Kubus</h4>
          </div>
        <div class="card-body">
          <img class="user" src="<?= $gambar_4?>" style="width: 200px; height: 200px; object-fit: cover;">
          <ul class="list-unstyled mt-3 mb-4">
            <span><?= $kubus ?></span> <p>
            <li>Luas alas : <?php echo $luas_kubus;?></li>
            <li>Volume : <?php echo $volume_kubus;?></li>
            <li>Keliling : <?php echo $keliling_kubus;?></li>
          </ul>
        </div>
      </div>

      <!-- bangun ruang kelima -->
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Balok</h4>
        </div>
        <div class="card-body">
          <img class="user" src="<?= $gambar_5?>" style="width: 200px; height: 200px; object-fit: cover;">
          <ul class="list-unstyled mt-3 mb-4">
            <span><?= $balok ?></span> <p>
            <li>Luas : <?php echo $luas_balok;?></li>
            <li>Volume : <?php echo $volume_balok;?></li>
          </ul>
        </div>
      </div>

      <!-- bangun ruang kelima -->
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Lingkaran</h4>
        </div>
        <div class="card-body">
          <img class="user" src="<?= $gambar_6?>" style="width: 200px; height: 200px; object-fit: cover;">
          <ul class="list-unstyled mt-3 mb-4">
            <span><?= $lingkaran ?></span> <p>
            <li>Luas : <?php echo $luas_lingkaran;?></li>
            <li>Keliling : <?php echo $keliling_lingkaran;?></li>
          </ul>
        </div>
      </div>
  </div>
<!-- penutup bagian isi -->
<!-- bagian footer -->
  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted"><center>&copy; Tugas PWPB 2019</center></small>
  </footer>
<!-- penutup bagian footer -->
</div>
</body>
</html>
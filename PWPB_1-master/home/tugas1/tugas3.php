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
  <body>
      <!-- bagian nav -->
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
      <!-- penutup bagian nav -->

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h3>Data Identitas Peserta Didik Baru</h3>
    <h3>Tahun Ajaran 2019/2020</h3>
</div>
<div class="container">
    <!-- bagian isi form -->
    <form action="" method="post">
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Nama Lengkap</label>
            <div class="col-sm-7">
                <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Nama Panggilan</label>
            <div class="col-sm-7">
                <input type="text" name="nama_panggilan" placeholder="Nama Panggilan" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-7">
                <input type="radio" value="Laki-laki" name="jk"> Laki laki
                <input type="radio" value="Perempuan" name="jk"> Perempuan
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">NISN</label>
            <div class="col-sm-7">
                <input type="text" name="nis" placeholder="NIS" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">NIK</label>
            <div class="col-sm-7">
                <input type="text" name="nik" placeholder="NIK" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Tempat Tanggal Lahir</label>
            <div class="col-sm-7">
                <input type="date" name="ttl" placeholder="Tanggal Lahir" class="form-control">
            </div>
        </div>
            
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Asal Sekolah</label>
            <div class="col-sm-7">
                <input type="text" name="AS" placeholder="Asal Sekolah" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Nomor SKHU</label>
            <div class="col-sm-7">
                <input type="text" name="skhu" placeholder="Nomor SKHU" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Tanggal Diterima Disekolah Ini</label>
            <div class="col-sm-7">
                <input type="text" name="tgl" placeholder="Tanggal diterima di sekolah ini" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Jika Pindahan Sebutkan Alasan Pindah</label>
            <div class="col-sm-7">
                <input type="text" name="alasan" placeholder="Alasan Pindah" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Agama</label>
            <div class="col-sm-7">
                <select name="agama" class="form-control"> 
                    <option value="Islam">Islam</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Kristen">Kristen</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Alamat</label>
            <div class="col-sm-7">
                <input type="text" name="alamat" placeholder="Alamat" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Tinggal Bersama</label>
            <div class="col-sm-7">
                <input type="radio" value="Orang Tua" name="tinggal_bersama"> Orang Tua
                <input type="radio" value="Saudara" name="tinggal_bersama"> Saudara
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Transportasi Ke Sekolah</label>
            <div class="col-sm-7">
                <input type="radio" value="Motor" name="transportasi"> Motor 
                <input type="radio" value="Angkutan Umum" name="transportasi"> Angkutan Umum
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Nomor Telepon</label>
            <div class="col-sm-7">
                <input type="text" name="no" placeholder="Nomor Telepon" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Nomor HP</label>
            <div class="col-sm-7">
                <input type="text" name="no_hp" placeholder="Nomor HP" class="form-control">
            </div>
        </div>
            
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">No KPS (Kartu Perlindungan Sosial) bila memiliki</label>
            <div class="col-sm-7">
                <input type="text" name="no_kps" placeholder="Nomor KPS" class="form-control">
            </div>
        </div>

        <p><b>Data Ayah Kandung</b></p>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Nama Ayah</label>
            <div class="col-sm-7">
                <input type="text" name="nama_ayah" placeholder="Nama Ayah" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Tahun Lahir</label>
            <div class="col-sm-7">
                <input type="date" name="tahun_lahir_ayah" placeholder="Tahun Lahir Ayah" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Pendidikan</label>
            <div class="col-sm-7">
                <input type="text" name="pendidikan_ayah" placeholder="Pendidikan Ayah" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Pekerjaan</label>
            <div class="col-sm-7">
                <input type="text" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Penghasilan Ayah Perbulan</label>
            <div class="col-sm-7">
                <input type="radio" value="Rp.1.000.000" name="penghasilan_ayah"> Rp.1.000.000
                <input type="radio" value="Rp.2.000.000" name="penghasilan_ayah"> Rp.2.000.000
                <input type="radio" value="Rp.3.000.000" name="penghasilan_ayah"> Rp.3.000.000
                <input type="radio" value="lebih" name="penghasilan_ayah"> >3.000.000
            </div>
        </div>

        <p><b>Data Ibu Kandung</b></p>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Nama Ibu</label>
            <div class="col-sm-7">
                <input type="text" name="nama_ibu" placeholder="Nama Ibu" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Tahun Lahir Ibu</label>
            <div class="col-sm-7">
                <input type="date" name="tahun_lahir_ibu" placeholder="Tahun Lahir" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Pendidikan Ibu</label>
            <div class="col-sm-7">
                <input type="text" name="pendidikan_ibu" placeholder="Pendidikan" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Pekerjaan Ibu</label>
            <div class="col-sm-7">
                <input type="text" name="pekerjaan_ibu" placeholder="Pekerjaan" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Penghasilan Ibu Perbulan</label>
            <div class="col-sm-7">
                <input type="radio" value="Rp.1.000.000" name="penghasilan_ibu"> Rp.1.000.000
                <input type="radio" value="Rp.2.000.000" name="penghasilan_ibu"> Rp.2.000.000
                <input type="radio" value="Rp.3.000.000" name="penghasilan_ibu"> Rp.3.000.000
                <input type="radio" value="lebih" name="penghasilan_ibu"> >3.000.000
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label"></label>
            <div class="col-sm-7">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="" class="btn btn-danger">Reset</a>
            </div>
        </div>            
    </form>
    <?php
        if(isset($_POST['nama'])){
            $nama = $_POST['nama'];
            echo "Nama Lengkap : $nama <br>";
        }
        if(isset($_POST['nama_panggilan'])){
            $nama_panggilan = $_POST['nama_panggilan'];
            echo "Nama Panggilan : $nama_panggilan <br>";
        }
        if(isset($_POST['jk'])){
            $jk = $_POST['jk'];
            echo "Jenis Kelamin : $jk <br>";
        } 
        if(isset($_POST['nis'])){
            $nis = $_POST['nis'];
            echo "NIS : $nis <br>";
        } 
        if(isset($_POST['nik'])){
            $nik = $_POST['nik'];
            echo "NIK : $nik <br>";
        } 
        if(isset($_POST['ttl'])){
            $ttl = $_POST['ttl'];
            echo "Tempat Tanggal Lahir : $ttl <br>";
        } 
        if(isset($_POST['AS'])){
            $AS = $_POST['AS'];
            echo "Asal Sekolah : $AS <br>";
        } 
        if(isset($_POST['skhu'])){
            $skhu = $_POST['skhu'];
            echo "Nomor SKHU : $skhu <br>";
        } 
        if(isset($_POST['tgl'])){
            $tgl = $_POST['tgl'];
            echo "Tanggal Diterima Di Sekolah Ini : $tgl <br>";
        } 
        if(isset($_POST['alasan'])){
            $alasan = $_POST['alasan'];
            echo "Alasan Pindah Sekolah : $alasan <br>";
        } 
        if(isset($_POST['agama'])){
            $agama = $_POST['agama'];
            echo "Agama : $agama <br>";
        } 
        if(isset($_POST['alamat'])){
            $alamat = $_POST['alamat'];
            echo "Alamat : $alamat <br>";
        }
        if(isset($_POST['tinggal_bersama'])){
            $tinggal_bersama = $_POST['tinggal_bersama'];
            echo "Tinggal Bersama : $tinggal_bersama <br>";
        }
        if(isset($_POST['transportasi'])){
            $transportasi = $_POST['transportasi'];
            echo "Transportasi ke Sekolah : $transportasi <br>";
        } 
        if(isset($_POST['no'])){
            $no = $_POST['no'];
            echo "Nomor Telepon : $no <br>";
        } 
        if(isset($_POST['no_hp'])){
            $no_hp = $_POST['no_hp'];
            echo "Nomor HP : $no_hp <br>";
        } 
        if(isset($_POST['no_kps'])){
            $no_kps = $_POST['no_kps'];
            echo "Nomor Kartu Perlindungan Sosial : $no_kps <br>";
        } 
        if(isset($_POST['nama_ayah'])){
            $nama_ayah = $_POST['nama_ayah'];
            echo "Nama Ayah : $nama_ayah <br>";
        } 
        if(isset($_POST['tahun_lahir_ayah'])){
            $tahun_lahir_ayah = $_POST['tahun_lahir_ayah'];
            echo "Tahun Lahir Ayah : $tahun_lahir_ayah <br>";
        } 
        if(isset($_POST['pendidikan_ayah'])){
            $pendidikan_ayah = $_POST['pendidikan_ayah'];
            echo "Pendidikan Ayah : $pendidikan_ayah <br>";
        } 
        if(isset($_POST['pekerjaan_ayah'])){
            $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
            echo "Pekerjaan Ayah : $pekerjaan_ayah <br>";
        }
        if(isset($_POST['penghasilan_ayah'])){
            $penghasilan_ayah = $_POST['penghasilan_ayah'];
            echo "Penghasilan Ayah : $penghasilan_ayah <br>";
        }
        if(isset($_POST['nama_ibu'])){
            $nama_ibu = $_POST['nama_ibu'];
            echo "Nama Ibu : $nama_ibu <br>";
        }
        if(isset($_POST['tahun_lahir_ibu'])){
            $tahun_lahir_ibu = $_POST['tahun_lahir_ibu'];
            echo "Tahun Lahir Ibu : $pekerjaan_ayah <br>";
        }
        if(isset($_POST['pendidikan_ibu'])){
            $pendidikan_ibu = $_POST['pendidikan_ibu'];
            echo "Pendidikan Ibu : $pendidikan_ibu <br>";
        }
        if(isset($_POST['pekerjaan_ibu'])){
            $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
            echo "Pekerjaan Ibu : $pekerjaan_ibu <br>";
        }
        if(isset($_POST['penghasilan_ibu'])){
            $penghasilan_ibu = $_POST['penghasilan_ibu'];
            echo "Penghasilan Ibu : $penghasilan_ibu <br>";
        } 
        ?>
    <!-- bagian penutup form -->
    
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
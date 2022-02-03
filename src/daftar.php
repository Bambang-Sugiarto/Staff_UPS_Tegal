<?php
include 'koneksi.php';

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
  <title>E-Staff UPS</title>
</head>

<body>
  <!--Navbar-->
  <?php include "navbar.php"; ?>

  <section class="main_daftar" style="background-image: linear-gradient(to bottom, #dd2476, #ff512f); background-size: cover; height: 100%; background-position: 50% 50%; width: 100%;">
    <div class="container py-5">
      <div class="row py-4">
        <div class="col-lg-7 col-sm-12 pt-5 text-center m-auto">
          <div class="card" style="border: 0; border-radius: 20px;">
            <div class="card-body">
              <h2 style="font-weight: 700;">DAFTAR</h2>
              <p>Silahkan Isi Data Diri Pada Form Berikut</p>
              <br>
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" name="gelar_awal" class="form-control" placeholder="Gelar Awal / Kososngkan Jika Tidak Ada" style="border-radius: 50px;">
                </div>
                <div class="form-group">
                  <br>
                  <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" style="border-radius: 50px;">
                </div>
                <div class="form-group">
                  <br>
                  <input type="text" name="gelar_akhir" class="form-control" placeholder="Gelar Akhir / Kososngkan Jika Tidak Ada" style="border-radius: 50px;">
                </div>
                <div class="form-group">
                  <br>
                  <input type="text" name="nipy" class="form-control" placeholder="NIPY / Kosongkan Jika Tidak Ada" style="border-radius: 50px;">
                </div>
                <div class="form-group">
                  <br>
                  <input type="text" name="nidn" class="form-control" placeholder="NIDN / Kosongkan Jika Tidak Ada" style="border-radius: 50px;">
                </div>
                <div class="form-group">
                  <br>
                  <input type="text" name="unitkerja" class="form-control" placeholder="Unit Kerja : Contoh (Biro Adminstrasi Umum, LP3, Fakultas Hukum, dll)" style="border-radius: 50px;">
                </div>
                <div class="form-group">
                  <br>
                  <select name="pekerjaan" class="form-select" aria-label="Default select example" style="border-radius: 50px;">
                    <option selected>Pekerjaan</option>
                    <option value="Tenaga Pendidik">Tenaga Pendidik</option>
                    <option value="Tenaga Kependidikan">Tenaga Kependidikan</option>
                    <option value="Tenaga Non-Kependidikan">Tenaga Non-Kependidikan</option>
                  </select>
                </div>
                <div class="form-group">
                  <br>
                  <input type="text" name="email" class="form-control" placeholder="Email" style="border-radius: 50px;">
                </div>
                <div class="form-group">
                  <br>
                  <select name="jafung" class="form-select" aria-label="Default select example" style="border-radius: 50px;">
                    <option selected>Jabatan Fungsional / Pilih (Tidak Ada) Jika Tidak punya Jabatan Fungsional</option>
                    <option value="Tidak Ada">Tidak Ada</option>
                    <option value="Profesor">Profesor</option>
                    <option value="Doktor">Doktor</option>
                    <option value="Lektor Kepala">Lektor Kepala</option>
                    <option value="Lektor">Lektor</option>
                    <option value="Asisten Ahli">Asisten Ahli</option>
                  </select>
                </div>
                <div class="form-group">
                  <br>
                  <select name="pendidikan" class="form-select" aria-label="Default select example" style="border-radius: 50px;">
                    <option selected>Pendidikan Terakhir</option>
                    <option value="S3">S3</option>
                    <option value="S2">S2</option>
                    <option value="S1">S1</option>
                    <option value="SMA">SMA</option>
                    <option value="SMP">SMP</option>
                    <option value="SD">SD</option>
                  </select>
                </div>
                <div class="form-group">
                  <br>
                  <select name="jabatan" class="form-select" aria-label="Default select example" style="border-radius: 50px;">
                    <option selected>Pilih Jabatan / Pilih (Tidak Ada) Jika Tidak Menjabat </option>
                    <option value="Tidak Ada">Tidak Ada</option>
                    <option value="Rektor">Rektor</option>
                    <option value="Wakil Rektor 1">Wakil Rektor 1</option>
                    <option value="Wakil Rektor 2">Wakil Rektor 2</option>
                    <option value="Wakil Rektor 3">Wakil Rektor 3</option>
                    <option value="Dekan">Dekan</option>
                    <option value="Wakil Dekan 1">Wakil Dekan 1</option>
                    <option value="Wakil Dekan 2">Wakil Dekan 2</option>
                    <option value="Wakil Dekan 3">Wakil Dekan 3</option>
                    <option value="Ketua Program Studi">Ketua Program Studi</option>
                    <option value="Sek Program Studi">Sek Program Studi</option>
                    <option value="Direktur Pascasarjana">Direktur Pascasarjana</option>
                    <option value="Sek Pascasarjana">Sek Pascasarjana</option>
                    <option value="Ketua Gugus Jaminan Mutu">Ketua Gugus Jaminan Mutu</option>
                    <option value="Sekretaris Gugus Jaminan Mutu">Sekretaris Gugus Jaminan Mutu</option>
                    <option value="Kepala Biro">Kepala Biro</option>
                    <option value="Kepala Lembaga">Kepala Lembaga</option>
                    <option value="Kepala UPT">Kepala UPT</option>
                    <option value="Kepala Bagian TU">Kepala Bagian TU</option>
                    <option value="Kepala Bagian Akademik">Kepala Bagian Akademik</option>
                    <option value="Kepala Bagian Kemahasiswaan">Kepala Bagian Kemahasiswaan</option>
                    <option value="Kepala Bidang Penelitian">Kepala Bidang Penelitian</option>
                    <option value="Kepala Bidang Pengabdian Masyarakat">Kepala Bidang Pengabdian Masyarakat</option>
                    <option value="Kepala Bidang Pengembangan Penddidikan">Kepala Bidang Pengembangan Penddidikan</option>
                    <option value="Kepala Bidang Pengembangan Karir Dosen dan Profesi">Kepala Bidang Pengembangan Karir Dosen dan Profesi</option>
                    <option value="Kepala Bidang Bursa Kerja">Kepala Bidang Bursa Kerja</option>
                    <option value="Kepala Urusan Publikasi">Kepala Urusan Publikasi</option>
                    <option value="Kepala Urusan I dan HKI dan PI">Kepala Urusan I dan HKI dan PI</option>
                    <option value="Kepala Urusan Kerjasama DN">Kepala Urusan Kerjasama DN</option>
                    <option value="Kepala Urusan Program Internasional">Kepala Urusan Program Internasional</option>
                    <option value="Kepala Urusan Jurnalistik Humas">Kepala Urusan Jurnalistik Humas</option>
                    <option value="Kepala Urusan Promosi dan Humas">Kepala Urusan Promosi dan Humas</option>
                    <option value="Kepala Urusan Peng Barang">Kepala Urusan Peng Barang</option>
                    <option value="Kepala Urusan Pemeli Sarpras dan Satwa">Kepala Urusan Pemeli Sarpras dan Satwa</option>
                  </select>
                </div>
                <div class="form-group">
                  <br>
                  <input type="text" name="nohp" class="form-control" placeholder="No HP / WA" style="border-radius: 50px;">
                  <br>
                </div>
                <div class="form-group">
                  <textarea name="deskripsi" placeholder="Deskripsikan diri anda. Contoh: (Hallo nama saya admin staff, saya berasal dari tegal, dll)" class="form-control" rows="3"></textarea>
                  <br>
                </div>
                <div class="form-group">
                  <input type="file" class="form-control" name="foto" style="border-radius: 50px;">
                </div>
                <br>
                <div class="form-group">
                  <button type="submit" name="daftar" class="btn btn-primary" style="width:100%; border-radius: 50px;">Daftar</button>
                </div>
                <br>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--JS-->
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

  <script type="text/javascript">
    var nav = document.querySelector('nav');

    window.addEventListener('scroll', function() {
      if (window.pageYOffset > 200) {
        nav.classList.add('bg-dark', 'shadow');
      } else {
        nav.classList.remove('bg-dark', 'shadow');
      }
    });
  </script>
  <?php

  if (isset($_POST['daftar'])) {
    $gelar_awal = $_POST['gelar_awal'];
    $nama = $_POST['nama'];
    $gelar_akhir = $_POST['gelar_akhir'];
    $nipy = $_POST['nipy'];
    $nidn = $_POST['nidn'];
    $unitkerja = $_POST['unitkerja'];
    $pekerjaan = $_POST['pekerjaan'];
    $email = $_POST['email'];
    $jafung = $_POST['jafung'];
    $pendidikan = $_POST['pendidikan'];
    $jabatan = $_POST['jabatan'];
    $nohp = $_POST['nohp'];
    $deskripsi = $_POST['deskripsi'];
    $nama_foto = $_FILES['foto']['name'];
    $sources = $_FILES['foto']['tmp_name'];
    $folder = '../upload/';

    $cek = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_daftar WHERE nipy='$nipy'"));
    if ($cek > 0) {
      echo "<script>window.alert('nipy yang anda masukan sudah ada')
      window.location='daftar.php'</script>";
    } else {
      move_uploaded_file($sources, $folder . $nama_foto);
      $insert = mysqli_query($koneksi, "INSERT INTO tb_daftar VALUES(
        NULL,
        '$gelar_awal',
        '$gelar_akhir',
        '$nama',
        '$nipy',
        '$nidn',
        '$unitkerja',
        '$pekerjaan',
        '$email',
        '$jafung',
        '$pendidikan',
        '$jabatan',
        '$nohp',
        '$deskripsi',
        '$nama_foto')");

      if ($insert) {
        echo "<script>alert('Selamat Data Anda Sudah Tersimpan Kedalam E-Staff UPS !');document.location='daftar.php'</script>";
      } else {
        echo 'Gagal Upload !';
      }
    }
  }
  ?>
</body>

</html>
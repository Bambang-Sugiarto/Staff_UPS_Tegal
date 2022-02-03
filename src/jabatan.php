<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Pejabat</title>
</head>

<body>

  <!--Navbar-->
  <?php include "navbar.php"; ?>

  <section class="main">
    <div class="container py-5">
      <div class="row py-4">
        <div class="col-lg-8 col-sm-12 m-auto pt-5 text-center">
          <p>UNIVERSITAS PANCASAKTI TEGAL</p>
          <h1>DIREKTORI PEJABAT</h1>
          <p>Berikut ini adalah direktori pejabat di lingkungan Universitas Pancasakti Tegal</p>
          <a href="daftar.php" class="btn btn1">MULAI</a>
        </div>

      </div>
    </div>
  </section>


  <div class="container">
    <div class="row judul">
      <div class="col-md-6 col-sm-12 m-auto text-center">
        <h1>Data Pejabat</h1>
        <?php
        include "jumlah_data.php";
        ?>
        <span>Jumlah Data Yang Ditemukan : <?= $jumlah_pejabat; ?></span>
      </div>
    </div>

    <div class="row">

      <?php include "koneksi.php"; ?>
      <?php
      $query = "SELECT * FROM tb_daftar WHERE jabatan in (
        'Rektor',
        'Wakil Rektor 1',
        'Wakil Rektor 2',
        'Wakil Rektor 3',
        'Dekan',
        'Wakil Dekan 1',
        'Wakil Dekan 2',
        'Wakil Dekan 3',
        'Ketua Program Studi',
        'Sek Program Studi',
        'Direktur Pascasarjana',
        'Sek Pascasarjana',
        'Ketua Gugus Jaminan Mutu',
        'Sekretaris Gugus Jaminan Mutu',
        'Kepala Biro',
        'Kepala Lembaga',
        'Kepala UPT',
        'Kepala Bagian TU',
        'Kepala Bagian Akademik',
        'Kepala Bagian Kemahasiswaan',
        'Kepala Bidang Penelitian',
        'Kepala Bidang Pengabdian Masyarakat',
        'Kepala Bidang Pengembangan Penddidikan',
        'Kepala Bidang Pengembangan Karir Dosen dan Profesi',
        'Kepala Bidang Bursa Kerja',
        'Kepala Urusan Publikasi',
        'Kepala Urusan I dan HKI dan PI',
        'Kepala Urusan Kerjasama DN',
        'Kepala Urusan Program Internasional',
        'Kepala Urusan Jurnalistik Humas',
        'Kepala Urusan Promosi dan Humas',
        'Kepala Urusan Peng Barang',
        'Kepala Urusan Pemeli Sarpras dan Satwa'
        )";
      $query_run = mysqli_query($koneksi, $query);
      $no = 1;
      while ($row = mysqli_fetch_array($query_run)) {
      ?>
        <div class="col-md-4 col-sm-12">
          <div class="card cards" style="box-shadow: 0 5px 10px #efefef;">
            <img src="../upload/<?= $row['foto'] ?>" class="card-img-top" alt="" style="width: 288px; height: 350px; ">
            <div class="card-body">
              <h5 class="card-title">
                <p style="font-weight: 600; text-transform: uppercase;"><?= $row['nama'] ?></p>
              </h5>
              <p class="card-text">
                "<?= $row['deskripsi'] ?>"<br>

              </p>
              <a href="detail.php?id=<?= $row['id']; ?>" class="btn btn-success">Detail</a>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>


  <?php include "footer.php"; ?>


</body>

</html>
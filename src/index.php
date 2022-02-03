<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <title>E-Staff UPS</title>
</head>

<body>

  <!--Navbar-->
  <?php include "navbar.php"; ?>

  <section class="main">
    <div class="container py-5">
      <div class="row py-4">
        <div class="col-lg-7 col-sm-12 pt-5 text-center">
          <p>UNIVERSITAS PANCASAKTI TEGAL</p>
          <h1>E-STAFF UPS</h1>
          <p>Merupakan aplikasi berbasis web yang menampilkan data pegawai <br> di lingkungan Universitas Pancasakti Tegal</p>
          <a href="daftar.php" class="btn btn1">MULAI</a>
        </div>
        <div class="col-lg-5 col-sm-12 text-center">
          <img src="../assets/header-img.png" alt="buku" class="buku">
        </div>
      </div>
    </div>
  </section>

  <section class="main-2">
    <div class="container text-center">

      <h1>Hai, apa kabar?</h1>
      <div class="row">
        <div class="col-md-7 m-auto text-center">
          <h3>Apakah anda ingin mencari profil salah satu staff di Universitas Pancasakti Tegal?</h3>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section class="main-3">
    <div class="container text-center">
      <h1>Pencarian</h1>
      <div class="row">
        <div class="col-md-7 col-sm-12 m-auto">
          <form action="pencarian.php" method="GET">
            <input type="text" required name="keyword" class="form-control" placeholder="Masukan Nama Pegawai">
            <button type="submit" class="btn btn-primary">Cari</button>
          </form>
        </div>
      </div>
    </div>

  </section>

  <section class="main-2">
    <div class="container text-center">
      <h1>Indeks Pencarian</h1>
      <div class="row">
        <div class="col-md-7 m-auto text-center">
          <h3>Cari Salah Satu Staff Berdasarkan Abjad</h3>
          <a href="../src/abjad_a.php" class="btn btn-success">A</a>
          <a href="../src/abjad_b.php" class="btn btn-success">B</a>
          <a href="../src/abjad_c.php" class="btn btn-success">C</a>
          <a href="../src/abjad_d.php" class="btn btn-success">D</a>
          <a href="../src/abjad_e.php" class="btn btn-success">E</a>
          <a href="../src/abjad_f.php" class="btn btn-success">F</a>
          <a href="../src/abjad_g.php" class="btn btn-success">G</a>
          <a href="../src/abjad_h.php" class="btn btn-success">H</a>
          <a href="../src/abjad_i.php" class="btn btn-success">I</a>
          <a href="../src/abjad_j.php" class="btn btn-success">J</a>
          <a href="../src/abjad_k.php" class="btn btn-success">K</a>
          <a href="../src/abjad_l.php" class="btn btn-success">L</a>
          <a href="../src/abjad_m.php" class="btn btn-success">M</a>
          <a href="../src/abjad_n.php" class="btn btn-success">N</a>
          <a href="../src/abjad_o.php" class="btn btn-success">O</a>
          <a href="../src/abjad_p.php" class="btn btn-success mt-2 mb-2">P</a>
          <a href="../src/abjad_q.php" class="btn btn-success">Q</a>
          <a href="../src/abjad_r.php" class="btn btn-success">R</a>
          <a href="../src/abjad_s.php" class="btn btn-success">S</a>
          <a href="../src/abjad_t.php" class="btn btn-success">T</a>
          <a href="../src/abjad_u.php" class="btn btn-success">U</a>
          <a href="../src/abjad_v.php" class="btn btn-success">V</a>
          <a href="../src/abjad_w.php" class="btn btn-success">W</a>
          <a href="../src/abjad_x.php" class="btn btn-success">X</a>
          <a href="../src/abjad_y.php" class="btn btn-success">Y</a>
          <a href="../src/abjad_z.php" class="btn btn-success">Z</a>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!--footer-->
  <?php include "footer.php"; ?>
  <!--end footer-->


</body>

</html>
<?php
include "koneksi.php";

$id = $_GET['id'];
$ambilData = mysqli_query($koneksi, "SELECT * FROM tb_daftar WHERE id='$id'");
$data = mysqli_fetch_array($ambilData);
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail</title>
</head>

<body>
  <!--Navbar-->
  <?php include "navbar.php"; ?>

  <section class="main" style="width: 100%; height: 100%;">
    <div class="container py-5">
      <div class="row ">
        <div class="col-md-8 m-auto">
          <div class="card mt-5">
            <div class="card-header bg-primary text-white">
              <h5 style="font-weight: 600;" class="text-center">PROFIL STAF</h5>
            </div>
            <div class="card-body" style="background-image: linear-gradient(to bottom, #dd2476, #ff512f);">
              <div class="row">
                <div class="col-lg-8 col-sm-12 m-auto text-center text-white">
                  <img src="../upload/<?= $data['foto'] ?>" class="card-img-top" style=" width: 250px; height: 300px;">
                  <br>
                  <br>
                </div>
              </div>
              <div class="row">
                <div class="col">

                  <table class="table" style="color: white; border: 0;">
                    <tr>
                      <td>
                        Nama
                      </td>
                      <td> : </td>
                      <td>
                        <?php
                        if ($data['gelar_akhir'] > 0  && $data['gelar_awal'] > 0) {
                        ?>
                          <p style="text-transform: capitalize"><?= $data['gelar_awal'] . '. ' ?><?= $data['nama'] ?><?= ', ' . $data['gelar_akhir'] ?></p>
                        <?php
                        } elseif ($data['gelar_akhir'] > 0) {
                        ?>
                          <p style="text-transform: uppercase;"><?= $data['nama'] ?><?= ', ' . $data['gelar_akhir'] ?></p>
                        <?php
                        } else {
                        ?>
                          <p style="text-transform: uppercase;"><?= $data['nama'] ?></p>
                        <?php
                        }
                        ?>

                      </td>
                    </tr>
                    <tr>
                      <td>
                        NIPY
                      </td>
                      <td> : </td>
                      <td>
                        <?= $data['nipy']; ?>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        NIDN
                      </td>
                      <td> : </td>
                      <td>
                        <?= $data['nidn']; ?>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Unit Kerja
                      </td>
                      <td> : </td>
                      <td>
                        <?= $data['unitkerja']; ?>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Pekerjaan
                      </td>
                      <td> : </td>
                      <td>
                        <?= $data['pekerjaan']; ?>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Email
                      </td>
                      <td> : </td>
                      <td>
                        <?= $data['email']; ?>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Jabatan Fungsional
                      </td>
                      <td> : </td>
                      <td>
                        <?= $data['jafung']; ?>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Pendidikan
                      </td>
                      <td> : </td>
                      <td>
                        <?= $data['pendidikan']; ?>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Jabatan
                      </td>
                      <td> : </td>
                      <td>
                        <?= $data['jabatan']; ?>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        No HP
                      </td>
                      <td> : </td>
                      <td>
                        <?= $data['nohp']; ?>
                      </td>
                    </tr>

                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </section>

  <?php include "footer.php"; ?>

</body>

</html>
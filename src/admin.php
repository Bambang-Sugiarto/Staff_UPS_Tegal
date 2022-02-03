<?php
include "koneksi.php";
include "jumlah_data.php";
session_start();
if (empty($_SESSION['username'])) {
    echo "<script>alert('Silahkan login terlebih dahulu');
    document.location='login.php'</script>";
}



$ambilData = mysqli_query($koneksi, "SELECT * FROM tb_admin");
$data = mysqli_fetch_array($ambilData);


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../css/all.css" rel="stylesheet" type="text/css">
    <!--load all styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar_admin.php";  ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "navbar_admin.php";  ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Jumlah Profesor</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Jumlah Doktor
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_doktor ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Jumlah Pejabat
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_doktor ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Jumlah Staff</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah_staff; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
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

                                                <input type="text" name="nipy" class="form-control" placeholder="NIPY / Kosongkan Jika Tidak Ada" style="border-radius: 50px;">
                                            </div>
                                            <div class="form-group">

                                                <input type="text" name="nidn" class="form-control" placeholder="NIDN / Kosongkan Jika Tidak Ada" style="border-radius: 50px;">
                                            </div>
                                            <div class="form-group">

                                                <input type="text" name="unitkerja" class="form-control" placeholder="Unit Kerja : Contoh (Biro Adminstrasi Umum, LP3, Fakultas Hukum, dll)" style="border-radius: 50px;">
                                            </div>
                                            <div class="form-group">

                                                <select name="pekerjaan" class="form-select" aria-label="Default select example" style="border-radius: 50px;">
                                                    <option selected>Pekerjaan</option>
                                                    <option value="Tenaga Pendidik">Tenaga Pendidik</option>
                                                    <option value="Tenaga Kependidikan">Tenaga Kependidikan</option>
                                                    <option value="Tenaga Non-Kependidikan">Tenaga Non-Kependidikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">

                                                <input type="text" name="email" class="form-control" placeholder="Email" style="border-radius: 50px;">
                                            </div>
                                            <div class="form-group">

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

                                                <input type="text" name="nohp" class="form-control" placeholder="No HP / WA" style="border-radius: 50px;">

                                            </div>
                                            <div class="form-group">
                                                <textarea name="deskripsi" placeholder="Deskripsikan diri anda. Contoh: (Hallo nama saya admin staff, saya berasal dari tegal, dll)" class="form-control" rows="3"></textarea>

                                            </div>
                                            <div class="form-group">
                                                <input type="file" class="form-control" name="foto" style="border-radius: 50px;">
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" name="daftar" class="btn btn-primary" style="width:100%; border-radius: 50px;">Daftar</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <br>
                                <br>
                            </div>

                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; E-Staff-UPS, All Rightreserved 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/chart-area-demo.js"></script>
    <script src="../js/chart-pie-demo.js"></script>
    <!--JS-->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
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
        '$nama',
        '$gelar_akhir',
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
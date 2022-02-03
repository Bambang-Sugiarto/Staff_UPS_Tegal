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

$cari = $_GET['cari'];
$semuadata = array();
$ambil = $koneksi->query("SELECT * FROM tb_daftar WHERE nama LIKE '%$cari%'");
while ($pecah = $ambil->fetch_assoc()) {
    $semuadata[] = $pecah;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Pencarian</title>

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
                        <h1 class="h3 mb-0 text-gray-800" style="text-transform: capitalize;">Hasil Pencarian : <?= $cari; ?></h1>
                    </div>

                    <!-- Content Row -->
                    <div class=" container">

                        <div class="row">
                            <div class="col-md-12">
                                <?php if (empty($semuadata)) : ?>
                                    <div class="alert alert-danger" style="text-transform: capitalize;">Pencarian <?= $cari; ?> Tidak Ditemukan</div>
                                <?php endif ?>
                            </div>

                        </div>
                    </div>
                    <div class="container">
                        <div class="card" style="width: 100%;">
                            <div class="card-body">

                                <table class="table table-striped table-hover" style="display: block; padding: 5px; margin-top: 5px; width: auto; height: auto; overflow: auto;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gelar Awal</th>
                                            <th>Nama</th>
                                            <th>Gelar Akhir</th>
                                            <th>NIPY</th>
                                            <th>NIDN</th>
                                            <th>Unit</th>
                                            <th>Email</th>
                                            <th>Jafung</th>
                                            <th>Pendidikan</th>
                                            <th>Jabatan</th>
                                            <th>No HP</th>
                                            <th>Deskripsi</th>
                                            <th>Foto</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        include "koneksi.php";
                                        if (isset($_GET['cari'])) {
                                            $cari = $_GET['cari'];
                                            $query = "SELECT * FROM tb_daftar WHERE nama like '%" . $cari . "%'";
                                        } else {
                                            $query = "SELECT * FROM tb_daftar";
                                        }
                                        $result = mysqli_query($koneksi, $query);
                                        $no = 1;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>

                                            <tr>
                                                <th><?= $no++ ?></th>
                                                <td><?= $row['gelar_awal']; ?></td>
                                                <td><?= $row['nama']; ?></td>
                                                <td><?= $row['gelar_akhir']; ?></td>
                                                <td><?= $row['nipy']; ?></td>
                                                <td><?= $row['nidn']; ?></td>
                                                <td><?= $row['unitkerja']; ?></td>
                                                <td><?= $row['email']; ?></td>
                                                <td><?= $row['jafung']; ?></td>
                                                <td><?= $row['pendidikan']; ?></td>
                                                <td><?= $row['jabatan']; ?></td>
                                                <td><?= $row['nohp']; ?></td>
                                                <td><?= $row['deskripsi']; ?></td>
                                                <td><img src="../upload/<?= $row['foto']; ?>" style="width: 100px; height: 100px;" alt=""></td>
                                                <td>
                                                    <a href="hapus.php?id_profesor=<?= $row['id']; ?>" onclick="return confirm('Apakah anda yakin?');"><span class="badge bg-danger">Hapus</span></a>
                                                    <a href="edit_data.php?id=<?= $row['id']; ?>"><span class="badge bg-success px-3">Edit</span></a>
                                                </td>

                                            </tr>

                                        <?php
                                        }

                                        ?>

                                    </tbody>
                                </table>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

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
        $nama = $_POST['nama'];
        $nipy = $_POST['nipy'];
        $nidn = $_POST['nidn'];
        $unitkerja = $_POST['unitkerja'];
        $pekerjaan = $_POST['pekerjaan'];
        $email = $_POST['email'];
        $jafung = $_POST['jafung'];
        $pendidikan = $_POST['pendidikan'];
        $jabatan = $_POST['jabatan'];
        $nohp = $_POST['nohp'];
        $nama_foto = $_FILES['foto']['name'];
        $sources = $_FILES['foto']['tmp_name'];
        $folder = '../upload/';

        move_uploaded_file($sources, $folder . $nama_foto);
        $insert = mysqli_query($koneksi, "INSERT INTO tb_daftar VALUES(
        NULL,
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
        '$nama_foto')");

        if ($insert) {
            echo "<script>alert('Selamat Data Anda Sudah Tersimpan Kedalam E-Staff UPS !');document.location='admin.php'</script>";
        } else {
            echo 'Gagal Upload !';
        }
    }
    ?>
</body>

</html>
<?php
include "koneksi.php";
include "jumlah_data.php";

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
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa fa-smile"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin E-Staff UPS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin.php">
                    <i class="fa fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Direktori
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="admin_profesor.php">
                    <i class="fa fa-user"></i>
                    <span>Profesor</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="admin_doktor.php">
                    <i class="fa fa-user"></i>
                    <span>Doktor</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="admin_jabatan.php">
                    <i class="fa fa-user"></i>
                    <span>Jabatan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="admin_karyawan.php">
                    <i class="fa fa-user"></i>
                    <span>Staff</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item text-center">
                <a href="logout.php"><button class="btn btn-danger" style="border-radius: 50px; width: 90%;">LOGOUT</button></a>
            </li>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->

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
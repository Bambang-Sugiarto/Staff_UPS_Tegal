<?php
include "koneksi.php";
include "jumlah_data.php";
session_start();
if (empty($_SESSION['username'])) {
    echo "<script>alert('Silahkan login terlebih dahulu');
    document.location='login.php'</script>";
}

$ambilData = mysqli_query($koneksi, "SELECT * FROM tb_admin");
$row = mysqli_fetch_array($ambilData);

$id = $_GET['id'];
$ambilData = mysqli_query($koneksi, "SELECT * FROM tb_daftar WHERE id='$id'");
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
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
    <!--load all styles -->
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
                <a class="nav-link collapsed" href="admin_profesor.php">
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
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">



                    <!-- Topbar Search -->
                    <form method="GET" action="admin_cari.php" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input name="cari" value="<?php if (isset($_GET['cari'])) {
                                                            $_GET['cari'];
                                                        } ?>" type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fa fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hai, <?= $row['username']; ?></span>
                                <img class="img-profile rounded-circle" src="../assets/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->

                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-sm-12 pt-5 text-center m-auto">
                                <div class="card" style="border: 0; border-radius: 20px;">
                                    <div class="card-body">
                                        <h2 style="font-weight: 700;">Edit Data</h2>
                                        <p>Silahkan Edit Data Pada Form Berikut</p>
                                        <br>
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <input type="text" name="gelar_awal" value="<?= $data['gelar_awal']; ?>" class="form-control" placeholder="Nama Lengkap" style="border-radius: 50px;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="nama" value="<?= $data['nama']; ?>" class="form-control" placeholder="Nama Lengkap" style="border-radius: 50px;">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="gelar_akhir" value="<?= $data['gelar_akhir']; ?>" class="form-control" placeholder="Nama Lengkap" style="border-radius: 50px;">
                                            </div>
                                            <div class="form-group">

                                                <input type="text" name="nipy" value="<?= $data['nipy']; ?>" class="form-control" placeholder="NIPY / Kosongkan Jika Tidak Ada" style="border-radius: 50px;">
                                            </div>
                                            <div class="form-group">

                                                <input type="text" name="nidn" value="<?= $data['nidn']; ?>" class="form-control" placeholder="NIDN / Kosongkan Jika Tidak Ada" style="border-radius: 50px;">
                                            </div>
                                            <div class="form-group">

                                                <input type="text" name="unitkerja" value="<?= $data['unitkerja']; ?>" class="form-control" placeholder="Unit Kerja : Contoh (Biro Adminstrasi Umum, LP3, Fakultas Hukum, dll)" style="border-radius: 50px;">
                                            </div>
                                            <div class="form-group">

                                                <select name="pekerjaan" class="form-select" aria-label="Default select example" style="border-radius: 50px;">
                                                    <option value="<?= $data['pekerjaan']; ?>">Tenaga Pendidik</option>
                                                    <option value="Tenaga Pendidik">Tenaga Pendidik</option>
                                                    <option value="Tenaga Kependidikan">Tenaga Kependidikan</option>
                                                    <option value="Tenaga Non-Kependidikan">Tenaga Non-Kependidikan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">

                                                <input type="text" name="email" value="<?= $data['email']; ?>" class="form-control" placeholder="Email" style="border-radius: 50px;">
                                            </div>
                                            <div class="form-group">

                                                <select name="jafung" class="form-select" aria-label="Default select example" style="border-radius: 50px;">
                                                    <option value="<?= $data['jafung']; ?>"><?= $data['jafung']; ?></option>
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

                                                    <option value="<?= $data['pendidikan']; ?>">S3</option>
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

                                                    <option value="<?= $data['jabatan']; ?>"><?= $data['jabatan']; ?></option>
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

                                                <input type="text" name="nohp" value="<?= $data['nohp']; ?>" class="form-control" placeholder="No HP / WA" style="border-radius: 50px;">

                                            </div>
                                            <div class="form-group">

                                                <input type="text" name="deskripsi" value="<?= $data['deskripsi']; ?>" class="form-control" placeholder="Deskripsi" style="border-radius: 50px;">

                                            </div>
                                            <div class="form-group">
                                                <input type="file" class="form-control" value="<?= $data['foto']; ?>" name="foto" style="border-radius: 50px;">
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" name="edit" class="btn btn-primary" style="width:100%; border-radius: 50px;">EDIT</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <br>


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

    //jika klik tombol edit
    if (isset($_POST['edit'])) {
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
        //jika ada perubahan foto atau edit foto
        if ($sources != "") {
            move_uploaded_file($sources, $folder . $nama_foto);
            $update = mysqli_query($koneksi, "UPDATE tb_daftar SET
            gelar_awal='$gelar_awal',
            nama='$nama',
            gelar_akhir='$gelar_akhir',
            nipy='$nipy',
            nidn='$nidn',
            unitkerja='$unitkerja',
            pekerjaan='$pekerjaan',
            email='$email',
            jafung='$jafung',
            pendidikan='$pendidikan',
            jabatan='$jabatan',
            nohp='$nohp',
            deskripsi='$deskripsi',
            foto='$nama_foto'
            WHERE id='$id'
            ");

            if ($update) {
                echo "<script>window.alert('Selamat Data Anda Sudah Terupdate Kedalam E-Staff UPS !')
                window.location='admin.php'</script>";
            } else {
                echo 'Gagal Upload !';
            }
        } else {
            //jika tidak ada perubahan atau edit foto
            $update = mysqli_query($koneksi, "UPDATE tb_daftar SET
            gelar_awal='$gelar_awal',
            nama='$nama',
            gelar_akhir='$gelar_akhir',
            nipy='$nipy',
            nidn='$nidn',
            unitkerja='$unitkerja',
            pekerjaan='$pekerjaan',
            email='$email',
            jafung='$jafung',
            pendidikan='$pendidikan',
            jabatan='$jabatan',
            nohp='$nohp',
            deskripsi='$deskripsi'
            WHERE id='$id'
            ");

            if ($update) {
                echo "<script>window.alert('Selamat Data Anda Sudah Terupdate Kedalam E-Staff UPS !')
            window.location='admin.php'</script>";
            } else {
                echo 'Gagal Upload !';
            }
        }
    }
    ?>
</body>

</html>
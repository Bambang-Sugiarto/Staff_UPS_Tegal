<?php include "jumlah_data.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Staff</title>

    <!-- Custom fonts for this template-->
    <link href="../css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar_admin.php"; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "navbar_admin.php"; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Direktori Staff</h1>
                        <a href="admin.php" class="btn btn-primary">Tambah Data</a>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 style="color: green;">Jumlah Direktori Staff : <span class="badge bg-success px-3"><?= $jumlah_staff; ?></span> </h5>
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
                                    <?php include "koneksi.php"; ?>
                                    <?php
                                    $query = "SELECT * FROM tb_daftar";
                                    $query_run = mysqli_query($koneksi, $query);
                                    $no = 1;
                                    while ($row = mysqli_fetch_array($query_run)) {
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
                                                <a href="hapus.php?id_staff=<?= $row['id']; ?>" onclick="return confirm('Apakah anda yakin?');"><span class="badge bg-danger">Hapus</span></a>
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

</body>

</html>
<?php
include 'koneksi.php';
if (isset($_GET['id_profesor'])) {
    $id_profesor = $_GET['id_profesor'];
    $query = "DELETE FROM tb_daftar WHERE id = $id_profesor";
    $run = mysqli_query($koneksi, $query);
    if ($run) {
        header("Location: admin_profesor.php");
    } else {
        echo "gagal";
    }
}

if (isset($_GET['id_doktor'])) {
    $id_doktor = $_GET['id_doktor'];
    $query = "DELETE FROM tb_daftar WHERE id = $id_doktor";
    $run = mysqli_query($koneksi, $query);
    if ($run) {
        header("Location: admin_doktor.php");
    } else {
        echo "gagal";
    }
}

if (isset($_GET['id_jabatan'])) {
    $id_jabatan = $_GET['id_jabatan'];
    $query = "DELETE FROM tb_daftar WHERE id = $id_jabatan";
    $run = mysqli_query($koneksi, $query);
    if ($run) {
        header("Location: admin_jabatan.php");
    } else {
        echo "gagal";
    }
}

if (isset($_GET['id_staff'])) {
    $id_staff = $_GET['id_staff'];
    $query = "DELETE FROM tb_daftar WHERE id = $id_staff";
    $run = mysqli_query($koneksi, $query);
    if ($run) {
        header("Location: admin_karyawan.php");
    } else {
        echo "gagal";
    }
}

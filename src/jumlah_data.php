<?php
include "koneksi.php";

$data_profesor = mysqli_query($koneksi, "SELECT * FROM tb_daftar WHERE jafung = 'Profesor'");
$jumlah = mysqli_num_rows($data_profesor);

$data_doktor = mysqli_query($koneksi, "SELECT * FROM tb_daftar WHERE jafung = 'Doktor'");
$jumlah_doktor = mysqli_num_rows($data_doktor);

$data_pejabat = mysqli_query($koneksi, "SELECT * FROM tb_daftar WHERE jabatan in (
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
    )");
$jumlah_pejabat = mysqli_num_rows($data_pejabat);

$data_staff = mysqli_query($koneksi, "SELECT * FROM tb_daftar");
$jumlah_staff = mysqli_num_rows($data_staff);

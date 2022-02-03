<?php
include 'koneksi.php';
$keyword = $_GET['keyword'];
$semuadata = array();
$ambil = $koneksi->query("SELECT * FROM tb_daftar WHERE nama LIKE '%$keyword%'");
while ($pecah = $ambil->fetch_assoc()) {
    $semuadata[] = $pecah;
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pencarian</title>
</head>

<body>
    <!--Navbar-->
    <?php include "../src/navbar.php"; ?>

    <section class="main_daftar" style="background-image: linear-gradient(to bottom, #dd2476, #ff512f); background-size: cover; height: 100%; background-position: 50% 50%; width: 100%;">
        <div class="container py-5">
            <div class="row py-4 justify-content-center">
                <div class="garis"></div>
                <h4 class="text-white text-center" style=" text-transform: capitalize; margin-top: 50px; ">Hasil pencarian : <?= $keyword; ?></h4>
                <?php if (empty($semuadata)) : ?>
                    <div class="alert alert-danger">Pencarian <?= $keyword; ?> Tidak Ditemukan</div>
                <?php endif ?>
                <?php foreach ($semuadata as $key => $cari) : ?>
                    <div class="col-md-4 col-sm-12">
                        <div class="card" style=" margin: auto;
    
                            width: 18rem;
                            margin-top: 20px;
                            margin-bottom: 50px;
                            border: 0;
                            border-radius: 20px;">
                            <img src="../upload/<?= $cari['foto'] ?>" class="card-img-top" style=" width: 288px; height: 350px;">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <p style="font-weight: 600; text-transform: uppercase;"><?= $cari['nama'] ?></p>
                                </h5>
                                <p class="card-text">
                                    <?= $cari['deskripsi'] ?> <br>
                                </p>
                                <a href="detail.php?id=<?= $cari['id']; ?>" class="btn btn-success">Detail</a>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>

            </div>
        </div>
    </section>


</body>

</html>
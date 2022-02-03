<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>E-Staff UPS</title>
</head>

<body>

    <!--Navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container">
            <a href="index.php"><img src="../assets/logo.png" class="img" alt=""></a>
            <a class="navbar-brand" href="index.php">E-SSTAFF UPS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="profesor.php">Direktori Profesor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="doktor.php">Direktori Doktor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="jabatan.php">Direktori Pejabat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="karyawan.php">Staff</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="login.php"><button class="btn btn-light py-1 px-3" style="border-radius: 40px;">Login</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--JS-->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 200) {
                nav.classList.add('bg-dark', 'shadow');
            } else {
                nav.classList.remove('bg-dark', 'shadow');
            }
        });
    </script>
</body>

</html>
<?php
session_start();

if (!$_SESSION['login']) {
    header("Location: login.php");
    exit;
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style-home.css">

    <title>Produk MSI</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="display: flex;">  <img src="img/msi.jpg" width="100" height="40" alt="" > <p style="color: black; font-size: 30px;">
                </p></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Layanan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#wajah">Perwatan Wajah</a></li>
                            <li><a class="dropdown-item" href="#kesehatan">Produk Kesehatan</a></li>
                            <li>
                                <a class="dropdown-item" href="#body">Bodycare</a>
                            </li>
                            <li><a class="dropdown-item" href="#">Layanan Lainnya</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#moni">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#tentangkami">Contact Us</a>
                    </li>
                </ul>
                <div class="userLogo">
                    <img src="img/avatar.png.jpg" alt="">
                    <a href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a>
                </div>

            </div>
        </div>
    </nav>
    <!-- navbar -->

    <!-- vanue -->
    <div class="container" id="wajah" >
        <h1> Perawatan Wajah </h1>
        <div class="row row1">
            <div class="col-sm-3">
                <img src="img/sambun.jpeg" alt="">
                <div class="title">
                    <h4>Sabun Bamboo</h4>
                    <p>Manfaat : <br> 1. Melembabkan Wajah <br> 2. Mengurangi Beruntusan <br> 3. Menghilangkan jerawat/bekas jerawat 
                    <br> 4. Menutrisi kulit wajah</p>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="img/serum.jpeg" alt="">
                <div class="title">
                    <h4>Serum Glowing</h4>
                    <p>Manfaat : <br> Menhilangkan flek, bekas jerawat, kusam</p>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="img/facemisk.jpeg" alt="">
                <div class="title">
                    <h4>Face Misk Diamond</h4>
                    <p>Manfaat : <br> Membantu menyegarkan kulit wajah</p>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="img/produk.jpg" alt="">
                <div class="title">
                    <h4>PAKET </h4>
                    <p>Terdiri dari satu paket perawatan wajah</p>
                </div>
            </div>
            <a href="reservasi.php"><button class="btn btn-warning">PESAN SEKARANG</button></a>
            
        </div>

        <!-- row 2 -->
        <h1> Produk Kesehatan </h1>
        <div class="row row2" id="kesehatan" >
            <div class="col-sm-3">
                <img src="img/manjavikan.jpeg" alt="">
                <div class="title">
                    <h4>Manjavikan</h4>
                    <p>Manfaat :<br>Membantu bagi program hamil dan menyusui</p>
                </div>

            </div>
            <div class="col-sm-3">
                <img src="img/manjavikan.jpeg" alt="">
                <div class="title">
                    <h4>The Aouthetic</h4>
                    <p>Location : United State <br> Rating (8.4)</p>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="img/manjavikan.jpeg" alt="">
                <div class="title">
                    <h4>The Aouthetic</h4>
                    <p>Location : United State <br> Rating (8.4)</p>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="img/manjavikan.jpeg" alt="">
                <div class="title">
                    <h4>The Aouthetic</h4>
                    <p>Location : United State <br> Rating (8.4)</p>
                </div>
            </div>
            <a href="reservasi.php"><button class="btn btn-warning">PESAN SEKARANG</button></a>

        </div>

        <!-- row 3 -->
        <h1> Bodycare </h1>
        <div class="row row3" id="body" >
            <div class="col-sm-3">
                <img src="img/bodylotion.jpeg" alt="">
                <div class="title">
                    <h4>Bodylotion</h4>
                    <p>Manfaat : <br>1. Melembutkan bagian kulit yang kasar <br>2. Mencerahkan kulit <br>3. Menghilankan bekas luka 
                    <br>4. Melindungi dari sinar UV <br>4. Mencegah dehidrasi pada kulit</p>
                </div>

            </div>
            <div class="col-sm-3">
                <img src="img/bodylotion.jpeg" alt="">
                <div class="title">
                    <h4>The Aouthetic</h4>
                    <p>Location : United State <br> Rating (8.4)</p>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="img/bodylotion.jpeg" alt="">
                <div class="title">
                    <h4>The Aouthetic</h4>
                    <p>Location : United State <br> Rating (8.4)</p>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="img/bodylotion.jpeg" alt="">
                <div class="title">
                    <h4>The Aouthetic</h4>
                    <p>Location : United State <br> Rating (8.4)</p>
                </div>
            </div>
            <a href="reservasi.php"><button class="btn btn-warning">PESAN SEKARANG</button></a>
        </div>

        <!-- testimoni -->
        <h1> Testimoni </h1>
        <div class="row row4" id="moni" >
            <div class="col-sm-3">
                <img src="img/testi (1).jpeg" alt="" height=500 width=250>
                <div class="title">
                    <h4>The Aouthetic</h4>
                    <p>Location : United State <br> Rating (8.4)</p>
                </div>

            </div>
            <div class="col-sm-3">
                <img src="img/testi (2).jpeg" alt="" height=500 width=250>
                <div class="title">
                    <h4>The Aouthetic</h4>
                    <p>Location : United State <br> Rating (8.4)</p>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="img/testi (3).jpeg" alt="" height=500 width=250>
                <div class="title">
                    <h4>The Aouthetic</h4>
                    <p>Location : United State <br> Rating (8.4)</p>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="img/testi (4).jpeg" height=500 width=250>
                <div class="title">
                    <h4>The Aouthetic</h4>
                    <p>Location : United State <br> Rating (8.4)</p>
                </div>
            </div>
        </div>

    </div>
    <!-- vanue -->

    <!-- About us -->
    <section class="tentangkami" id="tentangkami">
        <div class="container">
            <br><br><br>
            <div class="row text-justify">
            <div class="col-sm-6 text-center">
                <h1 class="text-center">About</h1>
            </div>
                <div class="col-sm-6 text-center">
                    <p>Produk MSI adalah produk perawatan dan kesehatan yang dapat di gunakan untuk semua kalangan baik anak-anak hingga dewasa.
                        produk MSI terdiri dari produk untuk perawatan wajah, produk kesehatan, dan produk bodyccare. Produk yang dijual telah mendapatkan 
                        izin Badan Pengawas Makanan dan Obat-obatan (BPOM).</p>
                </div>
        </div>
    </section>
    <!-- About us -->
    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

</body>

</html>
<?php
session_start();

// if(!isset($_SESSION["signIn"]) ) {
//   header("Location: ../../sign/member/sign_in.php");
//   exit;
// }

require "config/config.php";

// query read semua produk
$produk = queryReadData("SELECT * FROM tb_produk");

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi Manufaktur</title>
    <link rel="stylesheet" href="style/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <!-- Navbar -->
    <div class="navbar navbar-expand-lg fixed-top shadow-sm" style="background-color:#012269">
        <div class="container">
            <a class="navbar-brand text-light" href="#"><span class="text-warning">E-</span>Manufaktur</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="login/login.php">Manufaktur</a>
                    </li>
                </ul>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="login/login.php"><button class="btn btn-warning me-md-2 rounded-pill" type="button"
                        style="font-size:large;font-weight:600;color:whitesmoke;">LOGIN</button></a>
            </div>
        </div>
    </div>

    <!-- HOME -->
    <div class="container-fluid"
        style="position: relative; height: 100vh; background: url('aset/Gambar.jpg') no-repeat center center; background-size: cover;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);">

            <div class="row h-100 align-items-center justify-content-center">
                <div class="col text-center">
                    <h5 style="font-size: 40px; font-weight:600;color:white;">SELAMAT DATANG DI SISTEM INFORMASI
                        MANUFAKTUR
                    </h5>
                    <p class="desk-home mt-3" style="font-size: 20; font-weight:600;color:white;">Silahkan pilih barang
                        yang
                        anda ingin
                        beli dengan berbagai barang yang kami sediakan di website kami
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- PROFILE E-Manufaktur -->
    <section id="profile" class="profile section-padding">
        <div class="container">
            <div class="row my-5">
                <div class="col-12 text-center">
                    <h2 text-center>VISI MISI Manufaktur</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-4 text-center">
                    <h4>Visi E-Manufaktur</h4>
                    <p>"Menghasilkan produk dengan standar kualitas tertinggi melalui proses manufaktur yang teliti dan
                        terus menerus meningkatkan sistem kualitas kami"</p>
                </div>
                <div class="col-4 text-center">
                    <h4>Misi E-Manufaktur</h4>
                    <p>"Menyediakan produk dan layanan berkualitas tinggi yang memenuhi dan melampaui harapan
                        pelanggan.."</p>
                </div>
                <div class="col-4 text-center">
                    <h4>Tujuan E-Manufaktur</h4>
                    <p>"Mengembangkan produk baru yang inovatif untuk memenuhi kebutuhan pasar yang berkembang.."</p>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-12 text-center">
                    <h2 class="mb-3"><span class="text-primary">Layanan </span>Kami</h2>
                    <p>Layanan Manufaktur</p>
                </div>
            </div>
            <div class="row my-5 justify-content-center">
                <div class="col-4">
                    <div class="card-layanan m-auto text-center"
                        style="width: 18rem;transition: all 0.2s;border:1px solid;border-style: dashed;">
                        <a href="login/login.php">
                            <h1 class="font-bold text-center text-warning" style="font-size:60px;"><i
                                    class="fa-solid fa-address-card"></i>
                            </h1>
                        </a>
                        <div class="card-body">
                            <a style="text-decoration: none; color:black;" href="login/login.php">Keanggotaan online
                                Manufaktur</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card-layanan m-auto text-center"
                        style="width: 18rem;transition: all 0.2s; border:1px solid;border-style: dashed;">
                        <a href="login/login.php">
                            <h1 class="font-bold text-center text-primary" style="font-size:60px;">
                                <i class="fa-solid fa-book-atlas"></i>
                            </h1>
                        </a>
                        <div class="card-body">
                            <a style="text-decoration: none; color:black;" href="login/login.php">Koleksi Manufaktur
                                online</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Koleksi E-Manufaktur -->
    <section id="profile" class="profile section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2><span class="text-primary">E-Manufaktur</span> </h2>
                </div>
            </div>
        </div>
        <div class="search-box">
            <input class="search-txt" type="text" name="" placeholder="Type To search">
            <a class="search-btn" href=","> <i class="fa-solid fa-magnifying-glass"></i></a>
        </div>
        <div class="container">
            <div class=" d-flex justify-content-space-betwen">
                <h2><i class="fa-solid fa-book-open m-3"></i>Kategori Manufaktur</h2>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <i class="fa-solid fa-trowel" style="font-size:50px;font-weight:600;color:#7277AD"></i>
                            <h5 class="card-title mt-3 mb-3">SEMEN</h5>
                            <a href="login/login.php" class="btn btn-primary" style="width:auto;">Lihat E-Manufaktur</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <i class="fa-solid fa-book-open-reader"
                                style="font-size:50px;font-weight:600;color:#F0E9DA"></i>
                            <h5 class="card-title mt-3 mb-3">KERTAS</h5>
                            <a href="login/login.php" class="btn btn-primary" style="width:auto;">Lihat E-Manufaktur</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <i class="fa-solid fa-layer-group"
                                style="font-size:50px;font-weight:600;color:#dd4b39;"></i>
                            <h5 class="card-title mt-3 mb-3">KACA</h5>
                            <a href="login/login.php" class="btn btn-primary" style="width:auto;">Lihat E-Manufaktur</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <i class="fa-solid fa-tree" style="font-size:50px;font-weight:600; color:#F75B6A;"></i>
                            <h5 class="card-title mt-3 mb-3">KAYU</h5>
                            <a href="login/login.php" class="btn btn-primary" style="width:auto;">Lihat E-Manufaktur</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3 mb-sm-0 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <i class="fa-regular fa-scale-balanced"
                                style="font-size:50px;font-weight:600;color:#012269"></i>
                            <h5 class="card-title mt-3 mb-3">BAHAN KIMIA</h5>
                            <a href="login/login.php" class="btn btn-primary" style="width:auto;">Lihat E-Manufaktur</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3 mb-sm-0 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <i class="fa-solid fa-mug-hot" style="font-size:50px;font-weight:600;color:#012269"></i>
                            <h5 class="card-title mt-3 mb-3">MAKANAN & MINUMAN</h5>
                            <a href="login/login.php" class="btn btn-primary" style="width:auto;">Lihat E-Manufaktur</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3 mb-sm-0 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <i class="fa-solid fa-wrench" style="font-size:50px;font-weight:600;color:#F4AA06;"></i>
                            <h5 class="card-title mt-3 mb-3">LOGAM</h5>
                            <a href="login/login.php" class="btn btn-primary" style="width:auto;">Lihat E-Manufaktur</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3 mb-sm-0 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <i class="fa-solid fa-bolt" style="font-size:50px;font-weight:600; color:#25483F;"></i>
                            <h5 class="card-title mt-3 mb-3">ELEKTRONIK</h5>
                            <a href="login/login.php" class="btn btn-primary" style="width:auto;">Lihat E-Manufaktur</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- produk Terbaru-->
        <div class="container">
            <div class="text-center align-center mt-5 py-2 mb-1">
                <h2><i class="fa-solid fa-book-open m-3"></i>Manufaktur Terbaru</h2>
            </div>
        </div>

        <!-- Tampilkan Buku dari Database -->
        <div class="container mt-5">
            <div class="row justify-content-center book-container">
                <?php 
                $counter = 0; // Initialize counter
                foreach ($produk as $row):
                    if ($counter < 8): // Check if counter is less than 8
                        $counter++; // Increment counter
                ?>
                <div class="col-3 card m-3" style="max-width:250px">
                    <img style="max-width: 200px; max-height: 250px;" src="imgDb/<?= $row['cover'] ?>"
                        class="card-img-top mx-auto" alt="<?= $row['produk'] ?>">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?= $row['produk'] ?></h5>
                        <p class="book-details">Produsen : <?= $row['produsen'] ?></p>
                        <p class="book-details">Produksi : <?= $row['produksi'] ?></p>
                        <p class="book-details">Tahun Produksi : <?= $row['tahun_produksi'] ?></p>
                    </div>
                    <div class="text-center">
                        <a href="login/login.php" class="btn btn-primary mx-3 mb-3" style="width:auto;">Pinjam</a>
                        <a href="javascript:void(0);" class="btn btn-primary mx-3 mb-3 detail-btn"
                            data-id="<?= $row['id_produk'] ?>" data-produk="<?= $row['produk'] ?>"
                            data-produsen="<?= $row['produsen'] ?>" data-produksi="<?= $row['produksi'] ?>"
                            data-tahun="<?= $row['tahun_produksi'] ?>" data-kategori="<?= $row['kategori'] ?>"
                            data-halaman="<?= $row['jumlah_produk'] ?>" data-deskripsi="<?= $row['deskripsi_produk'] ?>"
                            style="width:auto;">Detail</a>
                    </div>
                </div>
                <?php
                    endif;
                endforeach;
                ?>
            </div>
        </div>

        <!-- tampilan detail produk -->
        <div class="container mt-5 detail-container">
            <div class="row justify-content-center">
                <div class="col-8 card">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-5" id="detail-produk"></h5>
                        <p class="book-details">Produsen : <span id="detail-produsen"></span></p>
                        <p class="book-details">Produksi : <span id="detail-produksi"></span></p>
                        <p class="book-details">Tahun produksi : <span id="detail-tahun"></span></p>
                        <p class="book-details">Kategori : <span id="detail-kategori"></span></p>
                        <p class="book-details">Jumlah Produk : <span id="detail-halaman"></span></p>
                        <p class="book-details">Deskripsi Produk : <span id="detail-deskripsi"></span></p>
                    </div>
                    <div class="text-center">
                        <a href="login/login.php" class="btn btn-primary mx-3 mb-3" style="width:auto;">Pembelian</a>
                        <a href="javascript:void(0);" class="btn btn-secondary mx-3 mb-3" id="back-btn"
                            style="width:auto;">Kembali</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="container lihat-semua">
            <div class="text-center align-center mt-5 py-2 mb-1">
                <a href="login/login.php" class="btn btn-primary" style="width:auto;">Lihat Semua</a>
            </div>
        </div>

    </section>


    <!-- Footer -->
    <div class="container-fluid mt-5" style="background-color: #012269">
        <footer class="text-center text-lg-start text-white">
            <div class="container p-4 pb-0">
                <section class="">
                    <div class="row">
                        <div class="col-4 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">
                                E-Manufaktur
                            </h6>
                            <p>Website Ini di buat untuk memenuhi proyek Akhir Pemrograman Web</p>
                        </div>
                        <div class="col-4 mx-auto mt-3" style="max-width:max-content;">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Ferry Ardiansyah (220401163)</h6>
                        </div>

                        <div class="col-4 mx-auto mt-3 text-center">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

                            <!-- Facebook -->
                            <a class="social-icon m-1" style="background-color: #3b5998;"
                                href="https://www.facebook.com/" role="button">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <!-- Twitter -->
                            <a class="social-icon m-1" style="background-color: #55acee;" href="https://www.twitter.com"
                                role="button">
                                <i class="fab fa-twitter"></i>
                            </a>

                            <!-- Google -->
                            <a class="social-icon m-1" style="background-color: #dd4b39;" href="https://www.google.com"
                                role="button">
                                <i class="fab fa-google"></i>
                            </a>

                            <!-- Instagram -->
                            <a class="social-icon m-1" style="background-color: #ac2bac;"
                                href="https://www.instagram.com" role="button">
                                <i class="fab fa-instagram"></i>
                            </a>

                            <!-- Linkedin -->
                            <a class="social-icon m-1" style="background-color: #0082ca;"
                                href="https://www.linkedin.com" role="button">
                                <i class="fab fa-linkedin-in"></i>
                            </a>

                            <!-- Github -->
                            <a class="social-icon m-1" style="background-color: #333333;" href="https://www.github.com"
                                role="button">
                                <i class="fab fa-github"></i>
                            </a>
                        </div>

                    </div>
                </section>
            </div>

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                &copy; 2024 E-Manufaktur
            </div>
        </footer>
    </div>

    <script>
    document.querySelectorAll('.detail-btn').forEach(button => {
        button.addEventListener('click', function() {
            // Mengambil data dari atribut data-*
            const produk = this.getAttribute('data-produk');
            const produsen = this.getAttribute('data-produsen');
            const produksi = this.getAttribute('data-produksi');
            const tahun = this.getAttribute('data-tahun');
            const kategori = this.getAttribute('data-kategori');
            const halaman = this.getAttribute('data-halaman');
            const deskripsi = this.getAttribute('data-deskripsi');

            // Menampilkan detail produk
            document.getElementById('detail-produk').innerText = produk;
            document.getElementById('detail-produsen').innerText = produsen;
            document.getElementById('detail-produksi').innerText = produksi;
            document.getElementById('detail-tahun').innerText = tahun;
            document.getElementById('detail-kategori').innerText = kategori;
            document.getElementById('detail-halaman').innerText = halaman;
            document.getElementById('detail-deskripsi').innerText = deskripsi;

            // Sembunyikan container produk dan tampilkan container detail
            document.querySelector('.book-container').style.display = 'none';
            document.querySelector('.lihat-semua').style.display = 'none';
            document.querySelector('.detail-container').style.display = 'block';
        });
    });

    document.getElementById('back-btn').addEventListener('click', function() {
        // Tampilkan container produk dan sembunyikan container detail
        document.querySelector('.book-container').style.display = 'flex';
        document.querySelector('.lihat-semua').style.display = '';
        document.querySelector('.detail-container').style.display = 'none';
    });

    document.addEventListener('DOMContentLoaded', function() {
        // Sembunyikan semua produk ke-9 dan seterusnya
        let books = document.querySelectorAll('.book-container .col-3');
        for (let i = 8; i < books.length; i++) {
            books[i].style.display = 'none';
        }
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-0/3Hj5Og8cH+zZ2/IpCW5yfK4J/B2H+qgUls/Qm3u2p/5bbso9v6jfgjeKNP2L6V" crossorigin="anonymous">
    </script>
</body>

</html>
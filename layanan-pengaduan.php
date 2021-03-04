<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/w3.css">

    <!-- Bootstrap Icon -->
    <script src="https://kit.fontawesome.com/48a54999f7.js" crossorigin="anonymous"></script>

    <!-- My CSS -->
    <link rel="stylesheet" href="css/mycss/layanan-pengaduan.css">

    <!-- Fontawesome Icon -->
    
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>


    <title>Desa Gunasari</title>
</head>

<body>
   <!-- Navbar -->
   <section class="navigasi">
        <nav class="navbar navbar-expand-md bg-dark navbar-light custom-navbar sticky-top">
            <!-- icon kanan -->
            <a class="navbar-brand" href="#">
                <img src="img/icon/logo-smd.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">BERANDA</a>
                    </li>
        
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            KELEMBAGAAN DESA
                        </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">BPD</a>
                            <a href="#" class="dropdown-item">LPM</a>
                            <a href="#" class="dropdown-item">PKK</a>
                            <a href="#" class="dropdown-item">Kader</a>
                            <a href="#" class="dropdown-item">MUI</a>
                            <a href="#" class="dropdown-item">Karang Taruna</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="daftar-aparatur.html">APARATUR DESA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="layanan-desa.html">LAYANAN DESA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="layanan-pengaduan.html">LAYANAN PENGADUAN</a>
                    </li>
                </ul>
        
                <ul class="navbar-nav social-media">
                    <li><a href="https://www.facebook.com" target="_blank">
                            <img src="img/icon/036-facebook.png" alt="">
                        </a>
                    </li>
                    <li><a href="https://www.instagram.com" target="_blank">
                            <img src="img/icon/029-instagram.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
   </section>

   <header>
        <div class="row justify-content-center mt-5">
            <div class="col-sm-6 text-center">
                <img src="img/icon/Layanan Pengaduan.png" alt="" class="sm-header md-header lg-header"> 
            </div>
        </div>
   </header>

   <section class="form mb-5" id="form">
        <div class="container py-4">
            <div class="d-flex flex-column">
                <div class="row">
                    <div class="col">
                        <form action="/action_page.php" class="was-validated">
                            <div class="row justify-content-center">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap :</label>
                                        <input type="text" class="form-control" id="nama" placeholder="Masukan nama lengkap..." name="nama">
                                    </div>
                                </div>
                            </div>
            
                            <div class="row justify-content-center">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="NIK">NIK :</label>
                                        <input type="text" class="form-control" id="NIK" placeholder="Masukan NIK..." name="nama" required>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Wajib mengisi NIK!!!</div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="row justify-content-center">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="aduan">Aduan :</label>
                                        <textarea name="aduan" id="aduan" class="form-control" placeholder="Masukan aduan disini..." required></textarea>
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Dilarang membuat aduan kosong!!!</div>
                                    </div>
                                </div>
                            </div>
            
                            <div class="row justify-content-center">
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
   </section>

    <!-- Footer -->
    <footer class="footer mt-5" id="footer">
        <div class="container-fluid bg-dark text-light">
            <div class="row">
                <div class="col-md-12">
                    <h6 class="text-center">&copy Copyright Gunasari.</h6>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- My Script -->
    <script src="js/script.js"></script>
</body>

</html>
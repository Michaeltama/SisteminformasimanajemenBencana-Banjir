<!doctype php>
<php lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Data Banjir</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/slick.css"/>

        <link href="css/tooplate-little-fashion.css" rel="stylesheet">
        
<!--

Tooplate 2127 Little Fashion

https://www.tooplate.com/view/2127-little-fashion

-->
    </head>
    
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section>
    
        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <a class="navbar-brand" href="beranda.php">
                        <strong><span>Data</span> Terjadinya Banjir</strong>
                    </a>

                    <div class="d-lg-none">
                        <a href="sign-in.php" class="bi-person custom-icon me-3"></a>

                        <a href="product-detail.php" class="bi-bag custom-icon"></a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="beranda.php">Beranda</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="about.php">Tentang</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="mitigasi.php">mitigasi</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="data.php">Data</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="berita.php">Berita</a>
                            </li>

                            <li class="nav-item">
                                <a href ="https://dibi.bnpb.go.id/"
                                class="nav-link">Peta</a>

                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="sign-in.php" class="bi-person custom-icon me-3"></a>

                            <a href="product-detail.php" class="bi-bag custom-icon"></a>
                        </div>
                    </div>
                </div>
            </nav>

            <header class="site-header section-padding d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12">
                            <h1>
                                <span class="d-block text-primary">Data</span>
                                <span class="d-block text-dark">Banjir</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </header>

           



            <div class="card">
            <div class="card-header text-white bg-secondary">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Korban Meninggal</th>
                            <th scope="col">Korban Menderita</th>

                            <th scope="col">Kerusakan Rumah</th>
                            <th scope="col">Kerusakan Bangunan lain</th>
                            
                        </tr>
                    </thead>
                    <?php 
        include 'koneksi.php';
        $query = mysqli_query($konek, "select * from data"); // nama table
        while ($data = mysqli_fetch_array($query))  ?> 
                    <tbody>
                        <?php
                    
                        $sql2   = "select * from data order by id desc";
                        $q2     = mysqli_query($konek, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id         = $r2['id'];
                            $waktu       = $r2['waktu'];
                            $jumlah       = $r2['jumlah'];
                            $korban1     = $r2['korban1'];
                            $korban2 = $r2['korban1'];
                            $kerusakan1   = $r2['kerusakan1'];
                            $kerusakan2 = $r2['kerusakan1'];

                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $waktu ?></td>
                                <td scope="row"><?php echo $jumlah ?></td>
                                <td scope="row"><?php echo $korban1 ?></td>
                                <td scope="row"><?php echo $korban2 ?></td>
                                <td scope="row"><?php echo $kerusakan1 ?></td>
                                <td scope="row"><?php echo $kerusakan2 ?></td>
                                <td scope="row">
                                    
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    
                </table>
            </div>
        </div>








           
         
                             

        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-10 me-auto mb-4">
                        <h4 class="text-white mb-3"><a href="beranda.php">Data</a> Banjir</h4>
                        <p class="copyright-text text-muted mt-lg-5 mb-4 mb-lg-0">Copyright © 2022 <strong>banjir pedia</strong></p>
                        <br>
                        <p class="copyright-text">Designed by <a href="https://www.tooplate.com/" target="_blank">Kelompok 1</a></p>
                    </div>

                    <div class="col-lg-5 col-8">
                        <h5 class="text-white mb-3">Sitemap</h5>

                        <ul class="footer-menu d-flex flex-wrap">
                            <li class="footer-menu-item"><a href="about.php" class="footer-menu-link">Story</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Products</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Privacy policy</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">FAQs</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-4">
                        <h5 class="text-white mb-3">Social</h5>

                        <ul class="social-icon">

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                            <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-skype"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Headroom.js"></script>
        <script src="js/jQuery.headroom.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
                    </php>
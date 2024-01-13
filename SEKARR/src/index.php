<?php
include('koneksi.php'); // Sesuaikan dengan file koneksi.php yang Anda miliki
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>Shoes Catalog</title>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
</head>

<body>
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="index.php" class="logo">
                            <p>Katalog Sepatu</p>
                        </a>
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#product">Produk</a></li>
                            <li class="scroll-to-section"><a href="#subscribe">Contact</a></li>
                            <li class="scroll-to-section"><a href="#footer">Footer</a></li>
 
                            <!-- Akhir logika PHP untuk menu -->
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4> High Heels</h4>
                                <span>Carilah Sepatu Impianmu bersama ami</span>
                                <div class="main-border-button">
                                    <a href="produk.php">Detail</a>
                                </div>
                            </div>
                            <img src="assets/images/1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Sneakers</h4>
                                            <span>Sepatu Terbaik Untuk wanita</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Sneakers</h4>
                                                <p>Sepatu model ini selalu mencuri perhatian dunia mode</p>
                                                <div class="main-border-button">
                                                    <a href="produk.php">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/2.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>FLAT SHOES</h4>
                                            <span>Wanita yang menyukai sepatu flats biasanya wanita yang memiliki kepribadian simple dan feminin</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>FLAT SHOES</h4>
                                                <p>Sepatu flats biasanya memiliki sol yang datar dan ciri khas yaitu di bagian depan yang tertutup dan memiliki desain feminin yang beragam</p>
                                                <div class="main-border-button">
                                                    <a href="produk.php">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/3.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>ESPRADILLES</h4>
                                            <span>Sepatu dengan tampilan sol yang dianyam dengan tali rami</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>ESPRADILLES</h4>
                                                <p>Sepatu dengan tampilan sol yang dianyam dengan tali rami</p>
                                                <div class="main-border-button">
                                                    <a href="produk.php">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/4.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>SANDAL</h4>
                                            <span>Sandal bisa menjadi pilihan yang tepat sebagai alas kakimu</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>SANDAL</h4>
                                                <p>Sandal bisa menjadi pilihan yang tepat sebagai alas kakimu </p>
                                                <div class="main-border-button">
                                                    <a href="produk.php">Detail</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="assets/images/5.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sisipkan bagian PHP untuk menampilkan produk dari database -->
    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="left-images">
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Bagian PHP untuk menampilkan produk lainnya -->
                    <!-- Akhir bagian PHP untuk produk lainnya -->
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir bagian PHP untuk menampilkan produk -->

    <!-- Sisipkan bagian PHP untuk menampilkan kontak -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2>Silahkan Hubungi Kami</h2>
                        <span>Bagikan Pengalaman Anda Bersama Kami</span>
                    </div>
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                            <div class="col-lg-5">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Your Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-5">
                                <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li>Phone:<br><span>1234567890</span></li>
                                <li>Office Location:<br><span>Tegal</span></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li>Work Hours:<br><span>07:30 AM - 9:30 PM Daily</span></li>
                                <li>Email:<br><span>Sekar@gmail.com</span></li>
                                <li>Social Media:<br><span><a href="#">Facebook</a>, <a href="#">Instagram</a>, <a href="#">Behance</a>, <a href="#">Linkedin</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir bagian PHP untuk menampilkan kontak -->

    <!-- Bagian PHP untuk menampilkan footer -->
    <footer>
        <div class="container" id="footer">
            <div class="row">
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>
                        <br>Sekar Retno Ningsih <b>22041044</b></a></p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Akhir bagian PHP untuk footer -->

    <!-- Script JavaScript dan jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/quantity.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- Akhir script JavaScript dan jQuery -->
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Zakon Law</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">

    <!-- Favicon -->
    <link href="img/zakon-ico.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/cubeportfolio.min.css">
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <img src="img/zakon-ico.ico" alt="Carousel Image" id="zakon-ico" width="50px" height="50px">
                            <a href="index.html" class="nav-item nav-link active">BERANDA</a>
                            <a href="about.html" class="nav-item nav-link">KONTAK</a>
                            <a href="service.html" class="nav-item nav-link">TENTANG</a>

                        </div>
                        <div class="ml-auto">
                            <a class="btn" href="">BUAT PERJANJIAN</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->

        <!-- Carousel Start -->
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/carousel-1.jpg" alt="Carousel Image">
                    <div class="carousel-caption">
                        <br><br>
                        <h1 class="animated fadeInLeft">Selalu terhubung dengan pengacara handal di berbagai daerah</h1>
                        <p class="animated fadeInRight">Percayakan kasus Anda dengan kami, pasti teratasi!</p>
                        <br><br>

                        <form action="" method="get" class="cari-form">
                            <select class="form-control" id="jenis-hukum">
                                <option value="">Pilih jenis hukum</option>
                                <option value="ekonomi">Ekonomi</option>
                                <option value="keluarga">Keluarga</option>
                                <option value="pidana">Pidana</option>
                                <option value="tataNegara">Tata Negara</option>
                            </select>
                            <button type="submit" class="form-control">Cari</button>
                        </form>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/carousel-2.jpg" alt="Carousel Image">
                    <div class="carousel-caption">
                        <br>
                        <h1 class="animated fadeInLeft">Kami hadir untuk mempermudah dalam mencari pengacara</h1>
                        <p class="animated fadeInRight">Percayakan kasus Anda dengan kami, pasti teratasi!</p>
                        <br><br>

                        <form action="" method="get" class="cari-form">
                            <select class="form-control" id="jenis-hukum">
                                <option value="">Pilih jenis hukum</option>
                                <option value="ekonomi">Ekonomi</option>
                                <option value="keluarga">Keluarga</option>
                                <option value="pidana">Pidana</option>
                                <option value="tataNegara">Tata Negara</option>
                            </select>
                            <button type="submit" class="form-control">Cari</button>
                        </form>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/carousel-3.jpg" alt="Carousel Image">
                    <div class="carousel-caption">
                        <br>
                        <h1 class="animated fadeInLeft">Tentukan pengacaramu dan lakukan negoisasi segera</h1>
                        <p class="animated fadeInRight">Percayakan kasus Anda dengan kami, pasti teratasi!</p>
                        <br><br>

                        <form action="" method="get" class="cari-form">
                            <select class="form-control" id="jenis-hukum">
                                <option value="">Pilih jenis hukum</option>
                                <option value="ekonomi">Ekonomi</option>
                                <option value="keluarga">Keluarga</option>
                                <option value="pidana">Pidana</option>
                                <option value="tataNegara">Tata Negara</option>
                            </select>
                            <button type="submit" class="form-control">Cari</button>
                        </form>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Carousel End -->

        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header">
                    <h2>PENGACARA</h2>
                    <p>Kami merupakan lembaga yang menyediakan pengacara yang <br>handal dan berpengalaman</p>
                </div>

                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item" onclick="myhref('lawyer');">
                        <script type="text/javascript">
                            function myhref(web) {
                                window.location.href = web;
                            }
                        </script>
                        <i class="fa fa-quote-right"></i>
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h2 class="text-center">Bidang Ekonomi</h2>
                            </div>
                            <div class="col-12">
                                <p>
                                    Ekspor impor, pelanggaran izin, devisa, transportasi, dsb
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item" onclick="myhref('lawyer');">
                        <script type="text/javascript">
                            function myhref(web) {
                                window.location.href = web;
                            }
                        </script>
                        <i class="fa fa-quote-right"></i>
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h2 class="text-center">Bidang Keluarga</h2>
                            </div>
                            <div class="col-12">
                                <p>
                                    Perceraian, sengketa warisan, penganiayaan, aborsi illegal, dsb
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item" onclick="myhref('lawyer');">
                        <script type="text/javascript">
                            function myhref(web) {
                                window.location.href = web;
                            }
                        </script>
                        <i class="fa fa-quote-right"></i>
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h2 class="text-center">Bidang Pidana</h2>
                            </div>
                            <div class="col-12">
                                <p>
                                    Pembunuhan, pencurian, penipuan, pemerasan, pemerkosaan, dsb
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item" onclick="myhref('lawyer');">
                        <script type="text/javascript">
                            function myhref(web) {
                                window.location.href = web;
                            }
                        </script>
                        <i class="fa fa-quote-right"></i>
                        <div class="row align-items-center">
                            <div class="col-12">
                                <h2 class="text-center">Bidang Tata Negara</h2>
                            </div>
                            <div class="col-12">
                                <p>
                                    Penggusuran, hak guna bangunan, gugatan warga, dsb
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- FAQs Start -->
        <div class="faqs">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="faqs-img">
                            <img src="img/faqs.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="section-header">
                            <h2>TENTANG KAMI</h2>
                        </div>
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                        <span>1</span> Apa bukti berdirinya lembaga Kami?
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                        <span>2</span> Bagaimana alur mencari pengacara?
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                        <span>3</span> Berapa rata-rata biaya pengacaranya?
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                        <span>4</span> Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseFive">
                                        <span>5</span> Lorem ipsum dolor sit amet?
                                    </a>
                                </div>
                                <div id="collapseFive" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn" href="">Ask more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs End -->

        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header">
                    <h2>REVIEW DARI KLIEN</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <i class="fa fa-quote-right"></i>
                        <div class="row align-items-center">
                            <div class="col-3">
                                <img src="img/testimonial-1.jpg" alt="">
                            </div>
                            <div class="col-9">
                                <h2>Client Name</h2>
                                <p>Profession</p>
                            </div>
                            <div class="col-12">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <i class="fa fa-quote-right"></i>
                        <div class="row align-items-center">
                            <div class="col-3">
                                <img src="img/testimonial-2.jpg" alt="">
                            </div>
                            <div class="col-9">
                                <h2>Client Name</h2>
                                <p>Profession</p>
                            </div>
                            <div class="col-12">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <i class="fa fa-quote-right"></i>
                        <div class="row align-items-center">
                            <div class="col-3">
                                <img src="img/testimonial-3.jpg" alt="">
                            </div>
                            <div class="col-9">
                                <h2>Client Name</h2>
                                <p>Profession</p>
                            </div>
                            <div class="col-12">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <i class="fa fa-quote-right"></i>
                        <div class="row align-items-center">
                            <div class="col-3">
                                <img src="img/testimonial-4.jpg" alt="">
                            </div>
                            <div class="col-9">
                                <h2>Client Name</h2>
                                <p>Profession</p>
                            </div>
                            <div class="col-12">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <i class="fa fa-quote-right"></i>
                        <div class="row align-items-center">
                            <div class="col-3">
                                <img src="img/testimonial-1.jpg" alt="">
                            </div>
                            <div class="col-9">
                                <h2>Client Name</h2>
                                <p>Profession</p>
                            </div>
                            <div class="col-12">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <i class="fa fa-quote-right"></i>
                        <div class="row align-items-center">
                            <div class="col-3">
                                <img src="img/testimonial-2.jpg" alt="">
                            </div>
                            <div class="col-9">
                                <h2>Client Name</h2>
                                <p>Profession</p>
                            </div>
                            <div class="col-12">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <i class="fa fa-quote-right"></i>
                        <div class="row align-items-center">
                            <div class="col-3">
                                <img src="img/testimonial-3.jpg" alt="">
                            </div>
                            <div class="col-9">
                                <h2>Client Name</h2>
                                <p>Profession</p>
                            </div>
                            <div class="col-12">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- contact -->
        <div id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>KONTAK</h2>
                        </div>
                    </div>

                </div>
                <div class="white_color">
                    <div class="row">

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <form class="contact_bg">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="col-md-12">
                                            <input class="contactus" placeholder="Nama lengkap" type="text" name="nama">
                                        </div>
                                        <div class="col-md-12">
                                            <input class="contactus" placeholder="Email" type="text" name="Email">
                                        </div>
                                        <div class="col-md-12">
                                            <input class="contactus" placeholder="Nomor telepon" type="text" name="nomor">
                                        </div>
                                        <div class="col-md-12">
                                            <textarea class="textarea" placeholder="Pesan" type="text" name="pesan"></textarea>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <button class="send">Kirim</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div id="map">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
    <!-- end contact -->


    <!-- contact -->
    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>BUAT PERJANJIAN</h2>
                    </div>
                </div>

            </div>
            <div class="white_color">
                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <form class="contact_bg">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="col-md-12">
                                        <input class="contactus" placeholder="Nama lengkap" type="text" name="nama_lengkap">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="contactus" placeholder="Email" type="text" name="Email">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="contactus" placeholder="Nomor telepon" type="text" name="nomor_telepon">
                                    </div>
                                    <div class="col-md-12">
                                        <select class="contactus" id="jenis-hukum">
                                            <option value="">Pilih jenis hukum</option>
                                            <option value="ekonomi">Ekonomi</option>
                                            <option value="keluarga">Keluarga</option>
                                            <option value="pidana">Pidana</option>
                                            <option value="tataNegara">Tata Negara</option>
                                        </select>
                                    </div>
                                    <!-- <div class="col-md-12">
                                        <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                                    </div> -->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <button class="send">Kirim</button>
                                    </div>
                                </div>


                        </form>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <form class="contact_bg">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <input class="contactus" placeholder="Pilih tanggal" type="datetime-local" name="tanggal">
                                </div>
                                <div class="col-md-12">
                                    <select class="contactus" id="jenis-hukum">
                                        <option value="">Pilih pengacara</option>
                                        <option value="Hotman Saris">Hotman Saris</option>
                                        <option value="Adnan Boyang">Adnan Boyang</option>
                                        <option value="Elsa Carif">Elsa Carif</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <select class="contactus" id="jenis-hukum">
                                        <option value="">Pilih pertemuan</option>
                                        <option value="online">Online</option>
                                        <option value="offline">Offline</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <input type="checkbox" id="setuju" name="setuju" value="setuju">
                                    <label for="setuju">Menyetujui ketentuan online & offline</label><br>
                                </div>
                                <br><br>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <button class="send">Cari</button>
                                    <input class="cek-tiket" placeholder="Cek tiket" name="cek_tiket">


                                </div>
                            </div>
                            <!-- 
                            <form action="" method="get" class="cari-form">
                            <select class="form-control" id="jenis-hukum">
                                <option value="">Pilih jenis hukum</option>
                                <option value="ekonomi">Ekonomi</option>
                                <option value="keluarga">Keluarga</option>
                                <option value="pidana">Pidana</option>
                                <option value="tataNegara">Tata Negara</option>
                            </select>
                            <button type="submit" class="form-control">Cari</button>
                        </form> -->

                    </form>
                </div>
            </div>
            <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"> -->
            <!-- <div id="map"> -->
            <!-- <div class="col-xl-6 col-md-12">

                    <div class="col-xl-6 col-md-12">
                        <input class="contactus" placeholder="Your Name" type="text" name="Your Name">
                    </div>
                    <div class="col-md-12">
                        <input class="contactus" placeholder="Email" type="text" name="Email">
                    </div>
                    <div class="col-md-12">
                        <input class="contactus" placeholder="Phone Number" type="text" name="Phone Number">
                    </div>
                    <div class="col-md-12">
                        <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <button class="send">Send</button>
                    </div>
                </div> -->
            <!-- </div> -->
            <!-- </div> -->
        </div>
    </div>

    </div>
    </div>
    </div>
    </div>
    <!-- end contact -->


    <!-- Newsletter Start -->
    <div class="newsletter">
        <div class="container">
            <div class="section-header">
                <h2>Ikuti Website Kami dan <br>Dapatkan info Terbaru</h2>
            </div>
            <div class="form">
                <input class="form-control" placeholder="Email here">
                <button class="btn">Submit</button>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->




    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="footer-about">
                        <h2>About Us</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu lectus a leo tristique dictum nec non quam. Suspendisse convallis, tortor eu placerat rhoncus, lorem quam iaculis felis, sed eleifend lacus neque id eros. Integer convallis volutpat neque
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-8">
                    <div class="row">
                        <!-- <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Services Areas</h2>
                                <a href="">Civil Law</a>
                                <a href="">Family Law</a>
                                <a href="">Business Law</a>
                                <a href="">Education Law</a>
                                <a href="">Immigration Law</a>
                            </div>
                        </div> -->
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Menu</h2>
                                <a href="">Beranda</a>
                                <a href="">Tentang</a>
                                <a href="">Kontak</a>
                                <a href="">Buat Perjanjian</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-contact">
                                <h2>Get In Touch</h2>
                                <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                                <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                                <p><i class="fa fa-envelope"></i>info@example.com</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container footer-menu">
            <div class="f-menu">
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-youtube"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <div class="container copyright">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; <a href="">LawCorporate</a>, All Right Reserved.</p>
                </div>
                <div class="col-md-6">
                    <p>Designed By <a href="">RizqiIlham</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


    <script>
        // This example adds a marker to indicate the position of Bondi Beach in Sydney,
        // Australia.
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 40.645037,
                    lng: -73.880224
                },
            });

            var image = 'images/maps-and-flags.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
    <!-- end google map js -->


</body>

</html>
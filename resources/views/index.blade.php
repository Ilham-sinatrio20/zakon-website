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

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">

    <style type="text/css">
        #popup {
            display: none;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif

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
                            <a href="index" class="nav-item nav-link">BERANDA</a>
                            <a href="#about" class="nav-item nav-link">TENTANG</a>
                            <a href="#kontak" class="nav-item nav-link">KONTAK</a>
                        </div>
                        <div class="ml-auto">
                            <a class="btn" href="#janji">BUAT PERJANJIAN</a>

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

                        <form action="lawyer" method="get" class="cari-form">
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

                        <form action="lawyer" method="get" class="cari-form">
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

                        <form action="lawyer" method="get" class="cari-form">
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

        <!-- Lawyer List Start -->
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
        <!-- Lawyer List End -->

        <!-- About Start -->
        <section id="about">
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
                                            Lembaga kami sudah terdaftar di Kementerian Hukum dan Kementerian ketenagakerjaan sejak tahun 2015. Selain itu, kantor offline nya dapat dikunjungi di lokasi yang tertera di website
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
                                            Dalam mencari pengacara, klien dapat melihat detail pengacara terlebih dahulu sesuai bidang hukum yang dipilih. Jika sudah, maka klien dapat mengisi perjanjian di bagian buat perjanjian untuk mendapatkan tiket perjanjian. Tiket yang telah terbuat dapat di cek di dalam fitur cek tiket
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
                                            Biaya pengacara dapat di negosiasi apabila sudah melakukan pertemuan via offline maupun online
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                            <span>4</span> Apa saja kasus yang ditangani?
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Secara umum, bidang hukum yang tersedia adalah bidang Ekonomi, Keluarga, Pidana, dan Negara. Untuk detail kasus per bidang, dapat dilihat di daftar pengacara
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseFive">
                                            <span>5</span> Mengapa saya harus memilih lembaga ini?
                                        </a>
                                    </div>
                                    <div id="collapseFive" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lembaga ini sudah terdaftar di badan hukum. Selain itu, lembaga ini menaungi pengacara-pengacara handal yang merupakan lulusan universitas ternama dan juga berpengalaman dari kasus-kasus sebelumnya seperti yang terdapat di detail pengacara
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseSix">
                                            <span>6</span> Apa saja yang dilakukan saat pertemuan?
                                        </a>
                                    </div>
                                    <div id="collapseSix" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Pertemuan akan mendiskusikan terkait kasus yang diberikan, pengecekan pengacara yang dipilih, alur pendampingan, biaya dsb
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <a class="btn" href="">Ask more</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->

        <!-- Review Client Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header">
                    <h2>REVIEW DARI KLIEN</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">

                    @foreach ($feedback as $respon)
                    <div class="testimonial-item">
                        <i class="fa fa-quote-right"></i>
                        <div class="row align-items-center">
                            <div class="col-3">
                                <img src="img/testimonial-1.jpg" alt="">
                            </div>
                            <div class="col-9">
                                <h2>{{ $respon -> nama_sender }}</h2>
                                <p>{{ $respon -> email_sender }}</p>
                            </div>
                            <div class="col-12">
                                <p>
                                    {{ $respon -> pesan }}
                                </p>
                            </div>
                            <div class="col-12">
                                <input data-value="{{ $respon->rating }}" name="rating" id="rating" data-role="rating" data-star-color="yellow" data-stared-color="yellow">
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Review Client End -->

        <!-- Contact Start -->
        <div id="kontak" class="contact">
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
                            <form action="{{ url('add.feedback') }}" method="POST" class="contact_bg">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="col-md-12">
                                            <input class="contactus" placeholder="Nama lengkap" type="text" name="nama_sender" required>
                                        </div>
                                        <div class="col-md-12">
                                            <input class="contactus" placeholder="Email" type="email" name="email_sender" required>
                                        </div>
                                        <div class="col-md-12">
                                            <input class="contactus" placeholder="Nomor telepon" type="text" name="phone_sender" required>
                                        </div>
                                        <div class="col-md-12">
                                            <textarea class="textarea" placeholder="Pesan" type="text" name="pesan" required></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="rating" class="contactus no-border" style="margin-bottom: 0">Beri Rating</label>
                                            <input class="contactus no-border" name="rating" id="rating" data-role="rating" data-star-color="yellow" data-stared-color="yellow">
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
        <!-- Contact End -->


        <!--Transaction Start -->
        <section id="janji" class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>BUAT PERJANJIAN</h2>
                        </div>
                    </div>

                </div>
                <div class="white_color">

                    <form action="" method="GET" class="contact_bg">
                        <div class="col-md-12">
                            <input class="cek-tiket" placeholder="Cek tiket" name="cari">
                            <button type="submit" class="send" name="kirim">Cari</button>
                        </div>
                    </form>

                    <?php
                    if (isset($_GET['kirim'])) {
                        $getValue = $_GET['cari'];

                    ?>
                        <script>
                            window.location = '/<?php echo $getValue; ?>/hasilCari';
                        </script>
                    <?php
                    }

                    ?>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <form action="{{ url('add.transaksi') }}" method="POST" class="contact_bg2" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="contactus" placeholder="Nama lengkap" type="text" name="nama_klien" required>
                                </div>

                                <div class="col-md-6">
                                    <input class="contactus" placeholder="Email" type="email" name="email_klien" required>
                                </div>

                                <div class="col-md-6">
                                    <input class="contactus" placeholder="Nomor telepon" type="text" name="phone" required>
                                </div>
                                <div class="col-md-3">
                                    <select class="contactus" id="jenis_hukum" name="jenis_hukum" required>
                                        <option value="">Pilih jenis hukum</option>
                                        <option value="ekonomi">Ekonomi</option>
                                        <option value="keluarga">Keluarga</option>
                                        <option value="pidana">Pidana</option>
                                        <option value="negara">Negara</option>
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <select class="contactus" id="pengacara" name="pengacara" required></select>
                                </div>

                                <!-- <div class="col-md-3">
                                    <select class="contactus" id="id_pengacara" name="id_pengacara"></select>
                                </div> -->

                                <script type="text/javascript">
                                    var pilihLawyer = {
                                        ekonomi: ['@foreach($tampilEkonomi as $ek){{ $ek -> nama_lawyer }}', '@endforeach'],
                                        keluarga: ['@foreach($tampilKeluarga as $kel){{ $kel -> nama_lawyer }}', '@endforeach'],
                                        pidana: ['@foreach($tampilPidana as $pid){{ $pid -> nama_lawyer }}', '@endforeach'],
                                        negara: ['@foreach($tampilNegara as $neg){{ $neg -> nama_lawyer }}', '@endforeach']
                                    }

                                    //Membuat variabel main dan sub sebagai wadah id select di atas
                                    var main = document.getElementById('jenis_hukum');
                                    var sub = document.getElementById('pengacara');
                                    // var id = document.getElementById('id_pengacara');

                                    // Men-trigger event ketika main terdapat perubahan
                                    main.addEventListener('change', function() {

                                        //Mendapatkan variabel pilihLawyer
                                        var selected_option = pilihLawyer[this.value];

                                        //removing the sub menu options using while loop
                                        while (sub.options.length > 0) {

                                            sub.options.remove(0);
                                        }

                                        //conver the selected object into array and create a options for each array elements
                                        //using option constructor it will create html element with the given value and innerText
                                        Array.from(selected_option).forEach(function(el) {

                                            let option = new Option(el, el);

                                            //append the child option in sub menu
                                            sub.appendChild(option);

                                        });

                                    });
                                </script>

                                <div class="col-md-3">
                                    <input class="contactus" placeholder="Pilih tanggal" type="date" name="tgl_meet" required>
                                </div>

                                <div class="col-md-3">
                                    <input class="contactus" placeholder="Pilih waktu" type="time" name="waktu_meet" required>
                                </div>

                                <div class="col-md-6">
                                    <select class="contactus" id="jenis_meet" name="jenis_meet" required>
                                        <option value="">Pilih pertemuan</option>
                                        <option value="online">Online</option>
                                        <option value="offline">Offline</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <textarea class="textarea" placeholder="Deskripsi sekilas kasus" type="text" name="deskripsi" required></textarea>
                                </div>


                                <div class="modal fade" id="contohModal" role="dialog" arialabelledby="modalLabel" area-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <!-- <img src="img/about.jpg" width="" height="" alt="..."> -->
                                                <table>
                                                    <tr>
                                                        <td><b>Online</b></td>
                                                        <td><b>Offline</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jaringan harus benar-benar stabil&nbsp;</td>
                                                        <td>Klien datang ke kantor Zakon Law sesuai jam pertemuan</td><br>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Video camera wajib on</td>
                                                        <td>Jam pertemuan offline sama dengan jam online</td>

                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Klien memasuki link zoom yang sudah dikirimkan oleh admin</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pastikaan keadaan terbebas dari gangguan seperti keramaian dsb</td>
                                                    </tr>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Durasi pertemuan menyesuaikan</td>
                                                    </tr>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- <button type="submit" class="btn btn-primary btn-block" data-toggle="modal" data-target="#contohModal">Get Started</button> -->

                                <div class="col-md-6">
                                    <input type="checkbox" id="setuju" name="setuju" value="setuju" required>
                                    <a href="" for="setuju" data-toggle="modal" data-target="#contohModal"><u>Menyetujui ketentuan online & offline</u></a><br>
                                </div>
                                <br><br>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <button class="send">Kirim</button>
                                </div>
                                <br><br><br><br>

                            </div>
                    </div>
                    </form>


                </div>

            </div>
        </section>
        <!-- Transaction End -->


        <!-- Newsletter Start -->
        <div class="newsletter">
            <div class="container">
                <div class="section-header">
                    <h2>Ikuti Website Kami dan <br>Dapatkan info Terbaru</h2>
                </div>

                <form action="{{ url('add.email') }}" method="POST" class="form" enctype="multipart/form-data">
                @csrf
                    <input class="form-control" name="email_suscriber" placeholder="Ketik email anda">
                    <button class="btn">Submit</button>
                </form>
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
                                Zakon Law merupakan lembaga yang memudahkan masyarakat dalam mencari pengacara-pengacara yang sesuai dengan kasus yang dialami.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-8">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="footer-link">
                                    <h2>Menu</h2>
                                    <a href="indeks">Beranda</a>
                                    <a href="#about">Tentang</a>
                                    <a href="#kontak">Kontak</a>
                                    <a href="#janji">Buat Perjanjian</a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="footer-contact">
                                    <h2>Get In Touch</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>Jln Soekarno Hatta, Malang</p>
                                    <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                                    <p><i class="fa fa-envelope"></i>zakonlaw@gmail.com</p>
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
                        <p>&copy; <a href="">ZakonLaw</a>, All Right Reserved.</p>
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
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>

</body>

</html>

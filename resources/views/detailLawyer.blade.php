<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Zakon Law</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">
    <meta content="Law Firm Website Template" name="description">

    <!-- Favicon -->
    <link href="../img/zakon-ico.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/cubeportfolio.min.css">
    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
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
                        <a class="btn_back" href="/lawyer">BACK</a>
                    </div>
                </nav>
                <div class="cbp-l-member-name">Hotman Saris</div>
                <div class="cbp-l-member-position">Ekonomi</div>
            </div>
        </div>
        <!-- Nav Bar End -->

        <!-- Page Header Start -->
        <div class="page-header2">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="cbp-l-member-img">
                            <img src="{{ $lawyer->picture }}" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <section id="detailLawyer" class="home-section bg-gray paddingbot-60" data-ride="detailLawyer">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div id="filters-container" class="cbp-l-filters-alignLeft">
                            <div data-filter=".biodata" class="cbp-filter-item-active cbp-filter-item">Biodata</div>
                            <div data-filter=".daftarKasus" class="cbp-filter-item">Daftar Kasus</div>
                        </div>


                        <div id="grid-container" class="cbp-l-grid-team">
                            <ul>
                                <li class="cbp-item biodata">

                                    <!-- Info Biodata Start -->
                                    <div class="faqs">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div id="accordion">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                                                    <span>1</span>Biodata Pribadi
                                                                </a>
                                                            </div>
                                                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <table>
                                                                        <tr>
                                                                            <td>Nama</td>
                                                                            <td>:</td>
                                                                            <td> {{ $lawyer->nama_lawyer }}</td>
                                                                            <!-- </tr>
                                                                        <tr>
                                                                            <td>Jenis kelamin</td>
                                                                            <td>:</td>
                                                                            <td>Laki-laki</td>
                                                                        </tr> -->
                                                                        <tr>
                                                                            <td>Tempat/ Tgl Lahir</td>
                                                                            <td>:&nbsp;&nbsp;</td>
                                                                            <td> {{ $lawyer->place_birth }}, {{ $lawyer->date_birth }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Kewarnegaraan</td>
                                                                            <td>:</td>
                                                                            <td>{{ $lawyer->negara }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Alamat</td>
                                                                            <td>:</td>
                                                                            <td>{{ $lawyer->address }}</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                                                    <span>2</span> Pendidikan
                                                                </a>
                                                            </div>
                                                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <table>
                                                                        <td>2014 - 2016</td>
                                                                        <td>:</td>
                                                                        <td>{{ $lawyer->last_edu }}</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                                                    <span>3</span> Kontak
                                                                </a>
                                                            </div>
                                                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <table>
                                                                        <tr>
                                                                            <td>No. Telp</td>
                                                                            <td>:</td>
                                                                            <td>{{ $lawyer->phone}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Email</td>
                                                                            <td>:</td>
                                                                            <td>{{ $lawyer->email}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Website</td>
                                                                            <td>:</td>
                                                                            <td>{{ $lawyer->website}}</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </li>
                                <!-- Info Biodata End -->

                                <!-- Info Daftar Kasus Start -->
                                <li class="cbp-item daftarKasus">
                                    <div class="faqs">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div id="accordion2">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                                                    <span>1</span>2018
                                                                </a>
                                                            </div>
                                                            <div id="collapseOne" class="collapse show" data-parent="#accordion2">
                                                                <div class="card-body">
                                                                    <table>
                                                                        <tr>
                                                                            <td>{{ $lawyer->pengalaman}}</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                                                    <span>2</span> 2019
                                                                </a>
                                                            </div>
                                                            <div id="collapseTwo" class="collapse" data-parent="#accordion2">
                                                                <div class="card-body">
                                                                    <table>
                                                                        <tr>
                                                                            <td>{{ $lawyer->pengalaman}}</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                                                    <span>3</span> 2021
                                                                </a>
                                                            </div>
                                                            <div id="collapseThree" class="collapse" data-parent="#accordion2">
                                                                <div class="card-body">
                                                                    <table>
                                                                        <tr>
                                                                            <td>{{ $lawyer->pengalaman}}</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </li>
                                <!-- Info Daftar Kasus End -->

                            </ul>
                        </div>

                    </div>

                </div>
            </div>
    </div>

    </section>
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/lib/isotope/isotope.pkgd.min.js"></script>

    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.easing.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery.scrollTo.js"></script>
    <script src="/js/jquery.appear.js"></script>
    <script src="/js/stellar.js"></script>
    <script src="/js/jquery.cubeportfolio.min.js"></script>
    <script src="/js/jquery.cubeportfolio.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/nivo-lightbox.min.js"></script>
    <script src="/js/custom.js"></script>
    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
</body>

</html>
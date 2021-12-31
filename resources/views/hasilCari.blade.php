<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Zakon Law</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">

    <!-- Favicon -->
    <link href="../img/zakon-ico.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/cubeportfolio.min.css">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

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
                            <a class="btn_back" href="/index">BACK</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->

        <!-- Result Transaction Start -->
        <section class="contact">
            <div class="container" id="janji">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>DETAIL PERJANJIAN</h2>
                        </div>
                    </div>

                </div>
                <div class="white_color">

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                        <form action="{{ route('add-transaksi') }}" class="contact_bg2" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-6">
                                    <p><b>Nama Lengkap</b></p>
                                    <div class="contactus">
                                        <p>{{$transaksi->nama_klien}}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <p><b>Email klien</b></p>
                                    <div class="contactus">
                                        <p>{{$transaksi->email_klien}}</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p><b>Nomor telepon klien</b></p>
                                    <div class="contactus">
                                        <p>{{$transaksi->phone}}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <p><b>Jenis hukum</b></p>
                                    <div class="contactus">
                                        <p>{{$transaksi->jenis_hukum}}</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <p><b>Tanggal pertemuan</b></p>
                                    <div class="contactus">
                                        <p>{{ date('d-m-Y', strtotime($transaksi->tgl_meet)) }}</p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <p><b>Waktu pertemuan</b></p>
                                    <div class="contactus">
                                        <p>{{$transaksi->waktu_meet}}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <p><b>Jenis pertemuan</b></p>
                                    <div class="contactus">
                                        <p>{{$transaksi->jenis_meet}}</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <p><b>Deskripsi</b></p>
                                    <div class="contactus">
                                        <p>{{$transaksi->deskripsi}}</p>
                                    </div>
                                </div>

                                {{-- <div class="col-md-6">
                                    <p><b>Status</b></p>
                                    <div class="contactus">
                                        <p>{{$transaksi->status}}</p>
                                    </div>
                                </div> --}}

                                <div class="col-md-6">
                                    <p><b>Keterangan</b></p>
                                    <div class="contactus">
                                        <p>{{$transaksi->keterangan}}</p>
                                    </div>
                                </div>

                                <script>
                                    function printContent(el) {
                                        // "<style type='text/css'>#btn-print{display:none;}</style>";
                                        document.getElementById("send").style.display = "none"
                                        // document.getElementById("btn-print")
                                        var restorepage = document.body.innerHTML
                                        var printcontent = document.getElementById(el).innerHTML
                                        document.body.innerHTML = printcontent
                                        window.print()
                                        document.body.innerHTML = restorepage
                                        document.getElementById("send").style.display = "block"
                                    }

                                </script>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <button id="send" class="send" onclick="printContent('janji')">Cetak</button>
                                </div>
                            </div>
                    </div>


                    </form>
                </div>
            </div>
        </section>

        <!-- Result Transaction End -->

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
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/isotope/isotope.pkgd.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>


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

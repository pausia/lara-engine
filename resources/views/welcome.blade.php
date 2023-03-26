<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Jaldari Nusantara</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="frontend/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="frontend/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="frontend/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="frontend/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="frontend/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('frontend/assets/css/theme.css') }}" rel="stylesheet" />

</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-5 d-block"
            data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand" href="index.html"><img src="frontend/assets/img/logo-jalabri.svg"
                        height="34" alt="logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon">
                    </span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page"
                                href="#service">Visi</a></li>
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page"
                                href="#destination">Team Kami</a></li>
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page"
                                href="#booking">Tujuan</a></li>
                        <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page"
                                href="#testimonial">Testimonial</a></li>
                        @if (Auth::check())
                        @else
                            <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page"
                                    href="{{ url('/login') }}">Login</a></li>
                            <li class="nav-item px-3 px-xl-4"><a
                                    class="btn btn-outline-dark order-1 order-lg-0 fw-medium"
                                    href="{{ url('/daftar') }}">Sign Up</a></li>
                        @endif
                        <li class="nav-item dropdown px-3 px-lg-0"> <a
                                class="d-inline-block ps-0 py-2 pe-3 text-decoration-none dropdown-toggle fw-medium"
                                href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">EN</a>
                            <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg" style="border-radius:0.3rem;"
                                aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">EN</a></li>
                                <li><a class="dropdown-item" href="#!">BN</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section style="padding-top: 7rem;">
            <div class="bg-holder" style="background-image:url(frontend/assets/img/hero/hero-bg.svg);">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 hero-img"
                            src="frontend/assets/img/hero/hero-img.png" alt="hero-header" /></div>
                    <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
                        <h4 class="fw-bold text-primary mb-3">Jaga Laut dan Perairan <br> Darat Terintegrasi</h4>
                        <h1 class="hero-title">Jaladri Nusantara</h1>
                        <p class="mb-4 fw-medium">Peran kelompok masyarakat dalam Pengawasan SDKP yang <br
                                class="d-none d-xl-block" />efektif untuk mewujudkan pemanfaatan SDKP yang tertib dan<br
                                class="d-none d-xl-block" />bertanggung jawab.</p>
                        <div class="text-center text-md-start">
                            @if (Auth::check())
                                <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow"
                                    href="{{ url('/dashboard') }}" role="button">Dashboard</a>
                            @else
                                <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow"
                                    href="{{ url('/daftar') }}" role="button">Daftar</a>
                            @endif
                                        
                            <div class="modal fade" id="popupVideo" tabindex="-1" aria-labelledby="popupVideo"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <iframe class="rounded" style="width:100%;max-height:500px;" height="500px"
                                            src="https://www.youtube.com/embed/_lhdhL4UDIo"
                                            title="YouTube video player"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen="allowfullscreen"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-5 pt-md-9" id="service">

            <div class="container">
                <div class="position-absolute z-index--1 end-0 d-none d-lg-block"><img
                        src="frontend/assets/img/category/shape.svg" style="max-width: 200px" alt="service" /></div>
                <div class="mb-7 text-center">
                    <h5 class="text-secondary">Apa yang kami lakukan? </h5>
                    <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Visi & Misi Kami</h3>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6 mb-6">
                        <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                            <div class="card-body p-xxl-5 p-4"> <img src="frontend/assets/img/category/icon1.png"
                                    width="75" alt="Service" />
                                <h4 class="mb-3">Memperpendek Laporan</h4>
                                <p class="mb-0 fw-medium">Mengefektifkan dan memperpendek rantai pelaporan pelanggaran kelautan dan perikanan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-6">
                        <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                            <div class="card-body p-xxl-5 p-4"> <img src="frontend/assets/img/category/icon2.png"
                                    width="75" alt="Service" />
                                <h4 class="mb-3">Kontribusi Masyarakat</h4>
                                <p class="mb-0 fw-medium">Mendorong dan mempermudah kontribusi masyarakat terkait pelanggaran kelautan dan perikanan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-6">
                        <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                            <div class="card-body p-xxl-5 p-4"> <img src="frontend/assets/img/category/icon3.png"
                                    width="75" alt="Service" />
                                <h4 class="mb-3">Mempercepat Laporan</h4>
                                <p class="mb-0 fw-medium">Mempercepat distribusi pelaporan pelanggaran kelautan dan perikanan kepada pihak berwenang.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-6">
                        <div class="card service-card shadow-hover rounded-3 text-center align-items-center">
                            <div class="card-body p-xxl-5 p-4"> <img src="frontend/assets/img/category/icon4.png"
                                    width="75" alt="Service" />
                                <h4 class="mb-3">Tata Kelola Aman</h4>
                                <p class="mb-0 fw-medium">Meningkatkan tata kelola pemerintahan yang baik lingkup Ditjen. PSDKP. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-5" id="destination">

            <div class="container">
                <div class="position-absolute start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4"><img
                        src="frontend/assets/img/dest/shape.svg" alt="destination" /></div>
                <div class="mb-7 text-center">
                    <h5 class="text-secondary">Partisipan Masyarakat dalam Pengawasan SDKP</h5>
                    <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Team Kami</h3>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card overflow-hidden shadow"> <img class="card-img-top"
                                src="frontend/assets/img/dest/team-01.png" alt="Rome, Italty" />
                            
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card overflow-hidden shadow"> <img class="card-img-top"
                                src="frontend/assets/img/dest/team-02.png" alt="London, UK" />
                            
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card overflow-hidden shadow"> <img class="card-img-top"
                                src="frontend/assets/img/dest/team-03.png" alt="Full Europe" />

                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section id="booking">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="mb-4 text-start">
                            <h5 class="text-secondary">Tujuan </h5>
                            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">Tujuan kami Jaladri Nusantara</h3>
                        </div>
                        <div class="d-flex align-items-start mb-5">
                            <div class="bg-primary me-sm-4 me-3 p-3" style="border-radius: 13px"> <img
                                    src="frontend/assets/img/steps/lapor.svg" width="22" alt="steps" />
                            </div>
                            <div class="flex-1">
                                <h5 class="text-secondary fw-bold fs-0">Kualitas Laporan</h5>
                                <p>Informasi lengkap, jelas dan deskriftif,<br> cepat saat atau setelah terjadi pelanggaran, <br class="d-none d-sm-block">dan benar dan tepat.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mb-5">
                            <div class="bg-danger me-sm-4 me-3 p-3" style="border-radius: 13px"> <img
                                    src="frontend/assets/img/steps/respon.svg" width="22" alt="steps" />
                            </div>
                            <div class="flex-1">
                                <h5 class="text-secondary fw-bold fs-0">Respon </h5>
                                <p>Diketahui dengan cepat dan tepat oleh petugas, <br>ditangani oleh petugas yang paling dekat /  <br class="d-none d-sm-block">siap dan secara kolaboratif.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-start">
                        <div class="row align-items-center">
                            <div class="d-flex align-items-start mb-5">
                                <div class="bg-info me-sm-4 me-3 p-3" style="border-radius: 13px"> <img
                                        src="frontend/assets/img/steps/data.svg" width="22" alt="steps" /></div>
                                <div class="flex-1">
                                    <h5 class="text-secondary fw-bold fs-0">Data dan Trend</h5>
                                    <p>Laporan, Modus dan pola pelanggaran <br class="d-none d-sm-block">terdata, termonitor dan terevaluasi.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-5">
                                <div class="bg-dark me-sm-4 me-3 p-3" style="border-radius: 13px"> <img
                                        src="frontend/assets/img/steps/polis.svg" width="22" alt="steps" /></div>
                                <div class="flex-1">
                                    <h5 class="text-secondary fw-bold fs-0">Policy</h5>
                                    <p>Kebijakan yang tepat.</p>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section id="testimonial">

            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="mb-8 text-start">
                            <h5 class="text-secondary">Testimonials </h5>
                            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">What people say
                                about Us.</h3>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6">
                        <div class="pe-7 ps-5 ps-lg-0">
                            <div class="carousel slide carousel-fade position-static" id="testimonialIndicator"
                                data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button class="active" type="button" data-bs-target="#testimonialIndicator"
                                        data-bs-slide-to="0" aria-current="true" aria-label="Testimonial 0"></button>
                                    <button class="false" type="button" data-bs-target="#testimonialIndicator"
                                        data-bs-slide-to="1" aria-current="true" aria-label="Testimonial 1"></button>
                                    <button class="false" type="button" data-bs-target="#testimonialIndicator"
                                        data-bs-slide-to="2" aria-current="true" aria-label="Testimonial 2"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item position-relative active">
                                        <div class="card shadow" style="border-radius:10px;">
                                            <div class="position-absolute start-0 top-0 translate-middle"> <img
                                                    class="rounded-circle fit-cover"
                                                    src="frontend/assets/img/testimonial/author.png" height="65"
                                                    width="65" alt="" /></div>
                                            <div class="card-body p-4">
                                                <p class="fw-medium mb-4">&quot;On the Windows talking painted pasture
                                                    yet its express parties use. Sure last upon he same as knew next. Of
                                                    believed or diverted no.&quot;</p>
                                                <h5 class="text-secondary">Mike taylor</h5>
                                                <p class="fw-medium fs--1 mb-0">Lahore, Pakistan</p>
                                            </div>
                                        </div>
                                        <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                                            style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                                    </div>
                                    <div class="carousel-item position-relative ">
                                        <div class="card shadow" style="border-radius:10px;">
                                            <div class="position-absolute start-0 top-0 translate-middle"> <img
                                                    class="rounded-circle fit-cover"
                                                    src="frontend/assets/img/testimonial/author2.png" height="65"
                                                    width="65" alt="" /></div>
                                            <div class="card-body p-4">
                                                <p class="fw-medium mb-4">&quot;Jadoo is recognized as one of the
                                                    finest travel agency in the world. When it came to planning a trip,
                                                    I found them to be dependable.&quot;</p>
                                                <h5 class="text-secondary">Thomas Wagon</h5>
                                                <p class="fw-medium fs--1 mb-0">CEO of Red Button</p>
                                            </div>
                                        </div>
                                        <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                                            style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                                    </div>
                                    <div class="carousel-item position-relative ">
                                        <div class="card shadow" style="border-radius:10px;">
                                            <div class="position-absolute start-0 top-0 translate-middle"> <img
                                                    class="rounded-circle fit-cover"
                                                    src="frontend/assets/img/testimonial/author3.png" height="65"
                                                    width="65" alt="" /></div>
                                            <div class="card-body p-4">
                                                <p class="fw-medium mb-4">&quot;On the Windows talking painted pasture
                                                    yet its express parties use. Sure last upon he same as knew next. Of
                                                    believed or diverted no.&quot;</p>
                                                <h5 class="text-secondary">Kelly Willium</h5>
                                                <p class="fw-medium fs--1 mb-0">Khulna, Bangladesh</p>
                                            </div>
                                        </div>
                                        <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                                            style="border-radius:10px;transform:translate(25px, 25px)"> </div>
                                    </div>
                                </div>
                                <div class="carousel-navigation d-flex flex-column flex-between-center position-absolute end-0 top-lg-50 bottom-0 translate-middle-y z-index-1 me-3 me-lg-0"
                                    style="height:60px;width:20px;">
                                    <button class="carousel-control-prev position-static" type="button"
                                        data-bs-target="#testimonialIndicator" data-bs-slide="prev"><img
                                            src="frontend/assets/img/icons/up.svg" width="16"
                                            alt="icon" /></button>
                                    <button class="carousel-control-next position-static" type="button"
                                        data-bs-target="#testimonialIndicator" data-bs-slide="next"><img
                                            src="frontend/assets/img/icons/down.svg" width="16"
                                            alt="icon" /></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <div class="position-relative pt-9 pt-lg-8 pb-6 pb-lg-8">
            <div class="container">
                <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2 flex-center">
                    <div class="col">
                        <div class="card shadow-hover mb-4" style="border-radius:10px;">
                            <div class="card-body text-center"> <img class="img-fluid"
                                    src="frontend/assets/img/partner/al.png" alt="" /></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-hover mb-4" style="border-radius:10px;">
                            <div class="card-body text-center"> <img class="img-fluid"
                                    src="frontend/assets/img/partner/pol-air.png" alt="" /></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-hover mb-4" style="border-radius:10px;">
                            <div class="card-body text-center"> <img class="img-fluid"
                                    src="frontend/assets/img/partner/kkp.png" alt="" /></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-hover mb-4" style="border-radius:10px;">
                            <div class="card-body text-center"> <img class="img-fluid"
                                    src="frontend/assets/img/partner/bakamla.png" alt="" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-6">

            <div class="container">
                <div class="py-8 px-5 position-relative text-center"
                    style="background-color: rgba(223, 215, 249, 0.199);border-radius: 129px 20px 20px 20px;">
                    <div class="position-absolute start-100 top-0 translate-middle ms-md-n3 ms-n4 mt-3"> <img
                            src="frontend/assets/img/cta/send.png" style="max-width:70px;" alt="send icon" /></div>
                    <div class="position-absolute end-0 top-0 z-index--1"> <img
                            src="frontend/assets/img/cta/shape-bg2.png" width="264" alt="cta shape" /></div>
                    <div class="position-absolute start-0 bottom-0 ms-3 z-index--1 d-none d-sm-block"> <img
                            src="frontend/assets/img/cta/shape-bg1.png" style="max-width: 340px;" alt="cta shape" />
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <h2 class="text-secondary lh-1-7 mb-7">Subscribe to get information, latest news and other
                                interesting offers about Jaladri Nusantara</h2>
                            <form class="row g-3 align-items-center w-lg-75 mx-auto">
                                <div class="col-sm">
                                    <div class="input-group-icon">
                                        <input class="form-control form-little-squirrel-control" type="email"
                                            placeholder="Enter email " aria-label="email" /><img
                                            class="input-box-icon" src="frontend/assets/img/cta/mail.svg"
                                            width="17" alt="mail" />
                                    </div>
                                </div>
                                <div class="col-sm-auto">
                                    <button class="btn btn-danger orange-gradient-btn fs--1">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pb-0 pb-lg-4">

            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-7 col-12 mb-4 mb-md-6 mb-lg-0 order-0"> <img class="mb-4"
                            src="frontend/assets/img/logo-jalabri.svg" width="150" alt="Jaldri Nusantara" />
                        <p class="fs--1 text-secondary mb-0 fw-medium">Book your trip in minute, get full Control for
                            much longer.</p>
                    </div>

                    <div class="col-lg-2 col-md-4 mb-4 mb-lg-0 order-lg-2 order-md-3">
                        <h4 class="footer-heading-color fw-bold font-sans-serif mb-3 mb-lg-4">Contact</h4>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Help/FAQ</a></li>
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Press</a></li>
                            <li class="mb-2"><a class="link-900 fs-1 fw-medium text-decoration-none"
                                    href="#!">Affiliate</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-5 col-12 mb-4 mb-md-6 mb-lg-0 order-lg-4 order-md-1">
                        <div class="icon-group mb-4"> <a class="text-decoration-none icon-item shadow-social"
                                id="facebook" href="#!"><i class="fab fa-facebook-f"> </i></a><a
                                class="text-decoration-none icon-item shadow-social" id="instagram" href="#!"><i
                                    class="fab fa-instagram"> </i></a><a
                                class="text-decoration-none icon-item shadow-social" id="twitter" href="#!"><i
                                    class="fab fa-twitter"> </i></a></div>

                    </div>
                </div>
            </div><!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <div class="py-5 text-center">
            <p class="mb-0 text-secondary fs--1 fw-medium">All rights reserved@Jaladri Nusantara </p>
        </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="frontend/assets/js/theme.js"></script>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap"
        rel="stylesheet">
</body>

</html>

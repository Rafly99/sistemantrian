<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.css">

    <style>
        h1 {
            text-align: center;
            font-weight: bold;
            font-size: 110pt;
        }
        .bg-biru {
            background-color: #0a4275;
        }
        .carousel-inner img {
        max-width: 100%;
        height: auto;
        }
        .img-carousel{
            width: 620px;
        }
        .img-logo
        {
            width: 120px;
            height: 60px;
        }
    </style>

<body class="overflow-hidden">
    <div class="container.fluid ">
        <nav class="navbar navbar-lg bg-biru">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="" class="navbar-brand fixed-center text-white">
                        <img src="<?= base_url() ?>assets/image/logo.svg" alt="logo" class="img-logo">
                        Welcome to NeoPrint
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="<?php echo base_url(); ?>admin/dashboard" class="nav-link text-white">
                        <i class="fas fa-user"></i>
                        Dashboard
                    </a>
                </li>
            </ul>
        </nav>

        <section class="content">
            <div class="row my-1 mx-1">
                <div class="col-md-8 bg-biru text-center" >
                    <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" >
                                <img src="<?= base_url() ?>assets/image/stiker.jpg" alt="Slide 1" class="img-fluid img-carousel">
                            </div>
                            <div class="carousel-item">
                                <img src="<?= base_url() ?>assets/image/kartunama.jpg" alt="Slide 2" class="img-fluid img-carousel">
                            </div>
                            <div class="carousel-item">
                                <img src="<?= base_url() ?>assets/image/katalog.jpg" alt="Slide 2" class="img-fluid img-carousel">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-1">
                        <h5 class="card-header bg-biru text-center text-white">ANTRIAN SAAT INI</h5>
                        <div class="card-body p-2">
                            <h1 id="nomor-antrian">A01</h1>
                        </div>
                        <div class="card-footer text-center">
                            <h5>LOKET 1</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mx-1 text-white">
                <div class="col-md-3">
                    <div class="card mb-1">
                        <h5 class="card-header text-center bg-biru">LOKET 1</h5>
                        <div class="card-body px-2 py-1">
                            <div class="row">
                                <div class="col-5 text-center">
                                    <img src="<?= base_url() ?>assets/image/user.png" alt="user-avatar" class="img-circle img-fluid " width="100">
                                </div>
                                <div class="col-7 bg-gray">
                                    <h3 class="lead text-center pt-2">Antrian No</h3>
                                    <h2 class="text-center text-bold">0</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-1">
                        <h5 class="card-header text-center bg-biru">LOKET 2</h5>
                        <div class="card-body px-2 py-1">
                            <div class="row">
                                <div class="col-5 text-center">
                                    <img src="<?= base_url() ?>assets/image/user.png" alt="user-avatar" class="img-circle img-fluid" width="100">
                                </div>
                                <div class="col-7 bg-gray">
                                    <h3 class="lead text-center pt-2">Antrian No</h3>
                                    <h2 class="text-center text-bold">0</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-1">
                        <h5 class="card-header text-center bg-biru">LOKET 3</h5>
                        <div class="card-body px-2 py-1">
                            <div class="row">
                                <div class="col-5 text-center">
                                    <img src="<?= base_url() ?>assets/image/user.png" alt="user-avatar" class="img-circle img-fluid" width="100">
                                </div>
                                <div class="col-7 bg-gray">
                                    <h3 class="lead text-center pt-2">Antrian No</h3>
                                    <h2 class="text-center text-bold">0</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mb-1">
                        <h5 class="card-header text-center bg-biru">LOKET 4</h5>
                        <div class="card-body px-2 py-1">
                            <div class="row">
                                <div class="col-5 text-center">
                                    <img src="<?= base_url() ?>assets/image/user.png" alt="user-avatar" class="img-circle img-fluid" width="100">
                                </div>
                                <div class="col-7 bg-gray">
                                    <h3 class="lead text-center pt-2">Antrian No</h3>
                                    <h2 class="text-center text-bold">0</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="">
            <!-- Footer -->
            <footer class="text-center text-white bg-biru">
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2023 Copyright:
                    <a class="text-white" href="#">Neo Print Digital</a>
                </div>
                <!-- Copyright -->
            </footer>
            <!-- Footer -->
            
        </section>
    </div>
    
    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
    <script src="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?= base_url() ?>views/layout/footer.php"></script>

    <script>
        var currentQueueNumber = $noAntrian; // Contoh nilai antrian saat ini
        setAntrianToModel(currentQueueNumber);
        $('#nomor-antrian').text(currentQueueNumber);
</script>
</body>

</html>
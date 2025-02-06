<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('vendor/landingpage/') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('vendor/landingpage/') ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('vendor/landingpage/') ?>assets/css/style.css" rel="stylesheet">
    

    <!-- Style -->
    <style>
        #hero {
            background: linear-gradient(rgba(55, 142, 181, 0.5), rgba(55, 142, 181, 0.2)), url("<?= base_url('vendor/images/') . $settings['sampul_website'] ?>") no-repeat center center fixed;
            background-size: cover;
        }

        .logo img {
            max-width: 180px; /* Ubah sesuai kebutuhan */
            height: auto;
        }
    </style>
</head>

<body>

<script src="<?= base_url('vendor/landingpage/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color:rgb(75, 153, 188);">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="logo">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">
                    <img src="<?= base_url()?>vendor/admin/assets/img/tegal.png" alt="Dinas" />
                </a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pengajuanDropdown" role="button" data-bs-toggle="dropdown">
                            Menu
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= base_url('suratonline')?>">Pengajuan Penelitian</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('formcontroller')?>">Pencarian Informasi Kependudukan</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="alurDropdown" role="button" data-bs-toggle="dropdown">
                            Alur
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= base_url('alur_magang')?>">Alur Magang</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('alur_kependudukan')?>">Alur Kependudukan</a></li>
                        </ul>
                    </li>

                    <li><a class="nav-link scrollto" href="#tracking">Tracking</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <style>
    .whatsapp-float {
        position: fixed;
        bottom: 20px; /* Jarak dari bawah */
        right: 20px;  /* Jarak dari kanan */
        z-index: 1000;
        background-color: #25d366; /* Warna hijau khas WhatsApp */
        color: white;
        border-radius: 50%; /* Membuat lingkaran */
        width: 70px; /* Ukuran lingkaran */
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .whatsapp-float:hover {
        transform: scale(1.1); /* Membesarkan tombol saat dihover */
        box-shadow: 0px 6px 14px rgba(0, 0, 0, 0.3); /* Bayangan saat dihover */
    }
    .whatsapp-float i {
        font-size: 36px; /* Ukuran ikon WhatsApp */
    }
</style>


<a href="https://wa.me/6289616835711" target="_blank" class="whatsapp-float">
    <i class="fab fa-whatsapp"></i>
</a>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title><?= $title?></title>
	<link rel="icon" type="image/x-icon" href="<?= base_url()?>assets/img/favicon.ico" />
	<!-- Font Awesome icons (free version)-->
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" <link
		href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet"
		type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="<?= base_url()?>assets/css/styles.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?= base_url();?>assets/jquery-ui-1.12.1/jquery-ui.css">

</head>

<body id="page-top" style="background: url('/mnt/data/th.jpg') no-repeat center center fixed; background-size: cover;">
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color:rgb(56, 105, 155);">
		<div class="container">
			<div class="container">
				<a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?= base_url()?>assets/img/tegal.png" alt="Dinas" /></a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
					data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
					aria-label="Toggle navigation">
					<span style="font-family: 'Arial', sans-serif; color: white; font-size: 16px;">Menulis</span>
					<i class="fas fa-bars ml-1" style="color: white;"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav text-uppercase ml-auto">
	<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Home</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pengajuanDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                MENU
            </a>
            <div class="dropdown-menu" aria-labelledby="pengajuanDropdown">
                <a class="dropdown-item" href="<?= base_url('suratonline')?>">Pengajuan Penelitian</a>
                <a class="dropdown-item" href="<?= base_url('formcontroller')?>">Pencarian Informasi Kependudukan</a>
            </div>
        </li>
		 <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="alurDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Alur
            </a>
            <div class="dropdown-menu" aria-labelledby="alurDropdown">
                <a class="dropdown-item " href="<?= base_url('alur_magang')?>">Alur Magang</a>
                <a class="dropdown-item " href="<?= base_url('alur_kependudukan')?>">Alur Kependudukan</a>
            </div>
        </li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('tracking')?>">Track Surat</a></li>
        <li class="nav-item"><a class="nav-link" target="_blank" href="<?= base_url('auth/login')?>">Login</a></li>
    </ul>
</div>

		</div>
	</nav>
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


<a href="https://wa.me/6281234567890" target="_blank" class="whatsapp-float">
    <i class="fab fa-whatsapp"></i>
</a>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

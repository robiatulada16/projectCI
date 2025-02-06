<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>link google form</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('vendor/landingpage/') ?>vendor/admin/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('vendor/landingpage/') ?>vendor/admin/assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('vendor/landingpage/') ?>vendor/assets/css/style.css" rel="stylesheet">
    

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

        <!-- ======= Hero Section ======= -->
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

    </style>
    
</head>



    
<!-- Tambahkan CSS untuk styling -->
<!-- Section untuk Google Form -->
<section id="form-container" class="my-5">
  <div class="container text-center">
    <h2 class="text-center mb-4">Isi Formulir di Bawah Ini</h2>
    <p class="text-center mb-3">Silakan klik tombol di bawah untuk membuka Google Form dan berikan informasi yang dibutuhkan.</p>

    <div class="google-form-link" onclick="openGoogleForm()">
      Buka Google Formulir
    </div>
  </div>
</section>

<!-- Tambahkan JavaScript -->
<script>
    function openGoogleForm() {
        window.open("https://docs.google.com/forms/d/e/1FAIpQLSdyGiPO0j9So27-4II9aXnsUORu2TofaMk7ULH5abKhSI3cyw/viewform", "_blank");
    }
</script>

<!-- CSS Styling -->
<style>
    .google-form-link {
        display: inline-block;
        background-color: #4285F4;
        color: white;
        padding: 15px 30px;
        font-size: 18px;
        font-weight: bold;
        border-radius: 25px;
        cursor: pointer;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: background-color 0.3s, transform 0.3s;
    }

    .google-form-link:hover {
        background-color:rgb(0, 0, 0);
        transform: translateY(-2px);
    }

    .google-form-link:active {
        background-color: #3367d6;
        transform: translateY(1px);
    }
</style>

</body>
    </div>
  </div>
</section>
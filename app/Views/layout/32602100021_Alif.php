<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Layouting</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <body>
        <div class="navbar">
            <div class="navbar-icon">
                <i class="fa-solid fa-circle-user fa-2x1"></i>
            </div>
            <div class="navbar-page">
            <ul type='none'>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Portofolio</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="navbar-sosmed">
            <ul type='none'>
                <li><i class="fa-brands fa-linkedin fa-lg"></i></li>
                <li><i class="fa-brands fa-Instagram fa-lg"></i></li>
                <li><i class="fa-brands fa-facebokk fa-lg"></i></li>
                <li><i class="fa-brands fa-square-whatsapp fa-lg"></i></li>
            </ul>
        </div>
</div>
        <head>
            <title>Layouting</title>
        </head>
        <body>
            <div class="navbar">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Portofolio</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
</div>
<div class="navbar-sosmed">
    <ul>
        <li>Linkeidn</li>
        <li>Instagram</li>
        <li>Facebook</li>
        <li>Whatsapps</li>
    </ul>
</div>
        <div class="banner">
            <span class="name">
                Alif Hakim Al Faruq
            </span>
            <span class="description">
                Mahasiswa lulusan teknik informatika angkatan 2024
            </span>
        </div>
        <?php $this->renderSection('content')?>
    </body>
</html>
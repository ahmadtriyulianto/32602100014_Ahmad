<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Layouting</title>
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
                <li><i class="fa-brands fa-linkedid fa-lg"></i></li>
                <li><i class="fa-brands fa-instagram fa-lg"></i></li>
                <li><i class="fa-brands fa-facebook fa-lg"></i></li>
                <li><i class="fa-brands fa-square-whatsapp fa-lg"></i></li>
            </ul>
        </div>
    </div>
    <div class="navber">
        <span class="name">
            Ahmad Tri Yulianto
        </span> <br>
        <span class="description"> 
            Mahasiswa Teknik Informatika Angkatan 21
        </span>
    </div>
    <?= $this->renderSection ('content') ?>
</body>
</html>
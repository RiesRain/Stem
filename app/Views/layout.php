<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= base_url() ?>/style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title></title>

</head>

<body>
    <div class="sidebar open">
        <div class="logo-details">
            <span class="iconify" data-icon="ri:steam-line" style="color: white;" data-width="100"></span>
            <div class="logo_name">S-Tem</div>
        </div>
        <ul class="nav-list">
            <li>
                <a href="<?= '/game'?> ">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Game</span>
                </a>
                <span class="tooltip">Game</span>
            </li>
            <li>
                <a href="<?= '/genre'?> ">
                    <i class='bx bx-folder'></i>
                    <span class="links_name">Genre</span>
                </a>
                <span class="tooltip">Genre</span>
            </li>
            <li>
                <a href="<?= '/publisher'?> ">
                    <i class='bx bx-cart-alt'></i>
                    <span class="links_name">Publisher</span>
                </a>
                <span class="tooltip">Publisher</span>
            </li>

            <li>
                <a href="<?= '/auth/logout'?> ">
                    <i class='bx exit'></i>
                    <span class="links_name">LogOut</span>
                </a>
                <span class="tooltip">LogOut</span>
            </li>
        </ul>
    </div>


    <div class="content mt-5" >
        <div class="container">
            <?= $this->renderSection(('content')) ?>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>
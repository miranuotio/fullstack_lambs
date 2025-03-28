<?php 
session_start();
?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="Mira N." />
        <title>Lambs</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="img/logolammas.JPG" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Fontti -->
        <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
        <!-- JS -->
        <link href="js.js/" rel="javascript" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body style="background-color: grey; font-family: 'Alegreya';" class="d-flex flex-column h-100">
        <main class="flex-shrink-0">

            <!-- Navigaatio-->

            <nav style="font-family: 'alegreya';" class="navbar navbar-expand-lg navbar-dark bg-black">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.php"><img src="img/logoiso.JPG" alt="index.php" style="width:120px;height:48px;"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Media</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                    <li><a class="dropdown-item" href="media.php">For media</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Login</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                    <li><a class="dropdown-item" href="login.php">Login</a></li>
                                    <?php if(!isset($_SESSION['sposti'])): ?>
                                    <li><a class="dropdown-item" href="kalenteriK.php">Calendar</a></li>
                                    <li><a class="dropdown-item" href="uutiset.php">News</a></li>
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                    <?php else : ?> 
                                </ul>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
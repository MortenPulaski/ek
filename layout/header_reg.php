<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Projektseite_FISI" />
    <meta name="author" content="Marcin Paluch" />
    <title>Meine Projektseite</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="./favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="./assets/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="text-warning2 navbar-brand" href="./#page-top">Meine Projektseite</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="text-warning2 nav-link" href="./about.php">Über mich</a></li>
                    <li class="nav-item"><a class="text-warning2 nav-link" href="./#services">Services</a></li>
                    <li class="nav-item"><a class="text-warning2 nav-link" href="./kontakt.php">Kontakt</a></li>
                    <li class="nav-item">
                        <span class="text-danger nav-link">Willkommen, <?php echo htmlspecialchars($_SESSION['username']); ?>!</span>
                    </li>
                    <li class="nav-item"><a class="text-danger nav-link" href="./logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
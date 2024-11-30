<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php'); // Weiterleitung zur Login-Seite
    exit;
}
?>

<?php require_once('./layout/header_reg.php'); ?>

<div id="portfolio">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="assets/img/portfolio/fullsize/12.jpg" title="Project Name">
                    <img class="img-fluid" src="assets/img/portfolio/thumbnails/12.jpg" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Category</div>
                        <div class="project-name">Project Name</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="assets/img/portfolio/fullsize/9.jpg" title="Project Name">
                    <img class="img-fluid" src="assets/img/portfolio/thumbnails/9.jpg" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Category</div>
                        <div class="project-name">Project Name</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="assets/img/portfolio/fullsize/19.jpg" title="Project Name">
                    <img class="img-fluid" src="assets/img/portfolio/thumbnails/19.jpg" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Category</div>
                        <div class="project-name">Project Name</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="assets/img/portfolio/fullsize/10.jpg" title="Project Name">
                    <img class="img-fluid" src="assets/img/portfolio/thumbnails/10.jpg" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Category</div>
                        <div class="project-name">Project Name</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="assets/img/portfolio/fullsize/11.jpg" title="Project Name">
                    <img class="img-fluid" src="assets/img/portfolio/thumbnails/11.jpg" alt="..." />
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">Category</div>
                        <div class="project-name">Project Name</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="assets/img/portfolio/fullsize/7.jpg" title="Project Name">
                    <img class="img-fluid" src="assets/img/portfolio/thumbnails/7.jpg" alt="..." />
                    <div class="portfolio-box-caption p-3">
                        <div class="project-category text-white-50">Category</div>
                        <div class="project-name">Project Name</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Call to action-->
<section class="page-section bg-dark text-white">
    <div class="container px-4 px-lg-5 text-center">
        <h2 class="text-warning mb-4">Fange jetzt mit Docker an!</h2>
        <a class="text-warning btn btn-primary" href="https://www.docker.com/products/docker-desktop/">Jetzt downloaden!</a>
    </div>
</section>

<?php require_once('./layout/footer.php'); ?>
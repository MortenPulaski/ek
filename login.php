<?php require_once('./layout/header.php'); ?>

<section class="page-section" id="login" style="background-image: url('./assets/img/portfolio/fullsize/12.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh; padding: 60px 0; background-color: rgba(255, 255, 255, 0.5);">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold">Login für registrierte Benutzer</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8">
                <form action="/login" method="post">
                    <div class="form-group">
                        <label for="username">Benutzername</label>
                        <input type="text" id="username" name="username" placeholder="Benutzername" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Passwort</label>
                        <input type="password" id="password" name="password" placeholder="Passwort" required class="form-control"><br>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Einloggen" class="btn btn-primary"><hr>
                    </div>
                    <div class="form-group">
                        <a href="/forgot-password">Passwort vergessen?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<?php require_once('./layout/footer.php'); ?>
<?php require_once('./code/UserRegister.php'); ?>

<?php require_once('./layout/header.php'); ?>

<!-- Register-->
<header class="register">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h2 class="text-warning font-weight-bold">Registrierung für neue Benutzer</h2>
                <hr class="divider" />
            </div>
            <div class="mt-auto">
                <h2 class="text-danger"><?php if (isset($success)) {
                    echo $success;
                } ?></h2>
                <h2 class="text-danger"><?php if (isset($error))
                    echo htmlspecialchars($error); ?></h2>
            </div>
            <div class="text-warning col-lg-8">
                <form action="./register.php" method="post">
                    <div class="form-group">
                        <hr>
                        <label for="email">Geben Sie Ihre Emailadresse ein</label>
                        <input type="text" id="email" name="email" placeholder="Email" required
                            class="form-control"><br>
                    </div>
                    <div class="form-group">
                        <label for="password">Vergeben Sie Ihr Passwort</label>
                        <input type="password" id="password" name="password" placeholder="Passwort" required
                            class="form-control"><br>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Registrieren" class="btn btn-primary">
                        <hr>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>

<?php require_once('./layout/footer.php'); ?>
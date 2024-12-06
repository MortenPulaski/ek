<?php require_once('./code/UserLogin.php'); ?>

<?php require_once('./layout/header.php'); ?>

<!-- Login-->
<header class="login">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h2 class="text-warning font-weight-bold">Login für registrierte Benutzer</h2>
                <hr class="divider" />
            </div>
            <div class="mt-auto">
                <h2 class="text-danger"><?php if (isset($error))
                    echo "$error"; ?></h2>
                <h2 class="text-danger"><?php if (isset($db_error))
                    echo "$db_error"; ?></h2>
            </div>
            <div class="text-warning col-lg-8">
                <form action="./login.php" method="post">
                    <div class="form-group">
                        <hr>
                        <label for="username">Email</label>
                        <input type="text" id="email" name="email" placeholder="Email" required
                            class="form-control"><br>
                    </div>
                    <div class="form-group">
                        <label for="password">Passwort</label>
                        <input type="password" id="password" name="password" placeholder="Passwort" required
                            class="form-control"><br>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Einloggen" class="btn btn-primary">
                        <hr>
                    </div>
                    <div class="form-group">
                        <a href="./register.php">Kein Benutzerkonto? Hier registrieren!</a>
                        <hr>
                    </div>
                    <div class="form-group">
                        <a href="https://www.brain-fit.com/">Passwort vergessen?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>

<?php require_once('./layout/footer.php'); ?>
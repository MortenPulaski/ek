<?php
session_start();
$servername = "localhost";
$username = "root"; // Standardbenutzername für XAMPP
$password = ""; // Standardpasswort ist leer
$dbname = "user_registration";

// Verbindung zur Datenbank herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung erfolgreich war
if ($conn->connect_error) {
    error_log("Verbindung fehlgeschlagen: " . $conn->connect_error);
    die("Verbindung zur Datenbank konnte nicht hergestellt werden.");
}

// Beispiel für die Verarbeitung des Login-Formulars
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Überprüfen, ob der Benutzername existiert
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($hashed_password);
    $stmt->fetch();
    $stmt->close();

    // Passwort überprüfen
    if ($hashed_password && password_verify($password, $hashed_password)) {
        // Setze die Benutzersitzung
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Weiterleitung zur Portfolio-Seite
        header('Location: secret.php');
        exit;
    } else {
        // Fehlermeldung anzeigen
        $error = "Ungültiger Benutzername oder Passwort!!!";
    }
}

$conn->close();
?>

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
            </div>
            <div class=" text-warning col-lg-8">
                <form action="./login.php" method="post">
                    <div class="form-group">
                        <hr>
                        <label for="username">Benutzername</label>
                        <input type="text" id="username" name="username" placeholder="Benutzername" required
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
                        <a href="./register.php">Kein Benutzerkonto? Hier registrieren!</a><hr>
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
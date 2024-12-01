<?php
$servername = "localhost";
$username = "root"; // Standardbenutzername für XAMPP
$password = ""; // Standardpasswort ist leer
$dbname = "user_registration";

// Verbindung zur Datenbank herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung erfolgreich war
if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// Überprüfen, ob das Formular gesendet wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT); // Passwort hashen

    // SQL-Statement zum Einfügen des Benutzers
    $sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";

    if ($conn->query($sql) === TRUE) {
        $success = "Registrierung erfolgreich!";
    } else {
        echo "Fehler: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<?php require_once('./layout/header.php'); ?>

<!-- Register-->
<header class="login">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h2 class="text-warning font-weight-bold">Registrierung für neue Benutzer</h2>
                <hr class="divider" />
            </div>
            <div class="mt-auto">
                <h2 class="text-danger"><?php if (isset($success))
                    echo "$success"; ?></h2>
            </div>
            <div class=" text-warning col-lg-8">
                <form action="./register.php" method="post">
                    <div class="form-group">
                        <hr>
                        <label for="username">Wählen Sie Ihren Benutzernamen</label>
                        <input type="text" id="username" name="username" placeholder="Benutzername" required
                            class="form-control"><br>
                    </div>
                    <div class="form-group">
                        <label for="password">Vergeben Sie ein Passwort</label>
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
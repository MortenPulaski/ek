<?php
$servername = "localhost";
$username = "root"; // Standardbenutzername für XAMPP
$password = ""; // Standardpasswort ist leer
$dbname = "user_registration";

$conn = null;
$error = null;
$success = null;

try {
    // Verbindung zur Datenbank herstellen
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Überprüfen, ob die Verbindung erfolgreich war
    if ($conn->connect_error) {
        throw new Exception("Verbindung zur Datenbank konnte nicht hergestellt werden!");
    }

    // Überprüfen, ob das Formular gesendet wurde
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST['username'];
        $pass = password_hash($_POST['password'], PASSWORD_DEFAULT); // Passwort hashen

        // Überprüfen, ob der Benutzername bereits existiert
        $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE username = ?");
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();

        if ($count > 0) {
            $error = "Der Benutzer ist bereits registriert! Bitte wählen Sie einen anderen Benutzernamen aus!";
        } else {
            // Vorbereitete Anweisung zum Einfügen des Benutzers
            $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $user, $pass);

            if ($stmt->execute()) {
                $success = "Registrierung erfolgreich!<br><a href='./login.php'>Hier geht es zum Login!</a>";
            } else {
                error_log("Fehler: " . $stmt->error);
            }

            $stmt->close();
        }
    }
} catch (Exception $e) {
    // Fehlerbehandlung: Datenbank nicht erreichbar
    $error = "Die Datenbank ist derzeit nicht verfügbar! Bitte versuchen Sie es später erneut!";
    error_log("Datenbankfehler: " . $e->getMessage());
}

if ($conn) {
    $conn->close();
}
?>

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
                        <label for="username">Wählen Sie Ihren Benutzernamen</label>
                        <input type="text" id="username" name="username" placeholder="Benutzername" required
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
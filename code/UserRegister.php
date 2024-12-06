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
        $email = $_POST['email'];
        $pass = password_hash($_POST['password'], PASSWORD_DEFAULT); // Passwort hashen

        // Überprüfen, ob der Benutzername bereits existiert
        $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();

        if ($count > 0) {
            $error = "Der Benutzer ist bereits registriert! Bitte wählen Sie einen anderen Benutzernamen aus!";
        } else {
            // Vorbereitete Anweisung zum Einfügen des Benutzers
            $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $email, $pass);

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
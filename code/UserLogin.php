<?php
session_start();

// Variablen für die Verbindung mit der Datenbank setzen
$servername = "localhost";
$username = "www"; // Standardbenutzername für XAMPP
$password = "0815"; // Standardpasswort ist leer
$dbname = "user_registration";

// Initialisiere die Verbindung
$conn = null;

try {
    // Verbindung zur Datenbank herstellen
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Überprüfen, ob die Verbindung erfolgreich war
    if ($conn->connect_error) {
        throw new Exception("Verbindung zur Datenbank fehlgeschlagen: " . $conn->connect_error);
    }
} catch (Exception $e) {
    error_log($e->getMessage());
    $db_error = "Die Datenbank ist derzeit nicht verfügbar! Bitte versuchen Sie es später erneut!";
}

// Verarbeitung des Login-Formulars
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($conn) && !$conn->connect_error) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Überprüfen, ob der Benutzername existiert
        $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($hashed_password);
        $stmt->fetch();
        $stmt->close();

        // Passwort überprüfen
        if ($hashed_password && password_verify($password, $hashed_password)) {
            // Setze die Benutzersitzung
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;

            // Weiterleitung zur Portfolio-Seite
            header('Location: secret.php');
            exit;
        } else {
            // Fehlermeldung anzeigen
            $error = "Ungültiger Benutzername oder Passwort!!!";
        }
    } else {
        // Wenn die Verbindung nicht erfolgreich war, zeige die Fehlermeldung an
        $error = $db_error;
    }
}

if ($conn) {
    $conn->close();
}
?>
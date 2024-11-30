<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php'); // Weiterleitung zur Login-Seite
    exit;
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Geschützte Seite</title>
</head>
<body>
    <h1>Willkommen auf der geschützten Seite!</h1>
    <p><a href="logout.php">Ausloggen</a></p>
</body>
</html>
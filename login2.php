<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $password = $_POST['password'];

    // Setze hier dein Passwort
    $correct_password = '0815';

    if ($password === $correct_password) {
        $_SESSION['loggedin'] = true;
        header('Location: protected.php'); // Weiterleitung zur geschützten Seite
        exit;
    } else {
        $error = 'Falsches Passwort!';
    }
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form method="post">
        <label for="password">Passwort:</label>
        <input type="password" name="password" id="password" required>
        <button type="submit">Einloggen</button>
    </form>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
</body>
</html>
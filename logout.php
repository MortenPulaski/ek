<?php
session_start();
session_destroy(); // Beende die Sitzung
header('Location: login.php'); // Weiterleitung zur Login-Seite
exit;
?>
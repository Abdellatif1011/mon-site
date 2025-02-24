<?php
if (isset($_GET['index'])) {
    $index = intval($_GET['index']); // Sécurisation
    $index = $index - 1; // Pour que l'index soit à 0
    echo $index;
    setcookie("index", $index, time() + 3600, "/"); // Stocke l'index pendant 1 heure
    header("Location: ../resultat.php"); // Redirection vers la page résultat
    exit();
}
?>

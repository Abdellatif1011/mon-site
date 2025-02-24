<?php
    require_once("cookie-and-session/session.php");
    require_once("cookie-and-session/cookie.php");



    // Vérification si le cookie existe
if (!isset($_COOKIE['index'])) {
    die("Aucun étudiant sélectionné.");
}

$index = intval($_COOKIE['index']); // Récupération et sécurisation de l'index
$etudiants = verification_cookie(); 

// Vérifier si l'index est valide
if (!isset($etudiants[$index])) {
    die("Index invalide.");
    header("Location: recherche.php");
    exit();
}

$moyenne = $etudiants[$index]['moyenne'];
$etudiant = $etudiants[$index]['etudiant'];
$status = $moyenne >= 10 ? "Félicitations, vous avez été admis!" : "Malheureusement, votre admission n'a pas été retenue.";
    
    // if (!isset($_POST['etudiant']) || !isset($_POST['maths']) || !isset($_POST['informatique'])) {
    //     header("Location: recherche.php");
    //     exit();
    // } else {
    //     $etudiant = htmlspecialchars($_POST['etudiant']);
    //     $maths = (float)$_POST['maths'];
    //     $informatique = (float)$_POST['informatique'];
    //     $moyenne = ($maths + $informatique) / 2;
    //     $status = $moyenne >= 10 ? "Félicitations, vous avez été admis!" : "Malheureusement, votre admission n'a pas été retenue.";
    // }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat d'Admission</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="result-card">
            <div class="banner">
                <img src="https://pemaster-fssm.uca.ma/assets/media/logos/logoFssm.png" alt="Logo de l'université" class="logo" loading="lazy">
                <h1>Résultats d'Admission</h1>
            </div>

            <div class="content">
                <h2 class="student-name">Bienvenu, <span id="student-name"><?php echo $etudiant; ?></span></h2>

                <div class="result-box">
                    <p>Votre Résultat est</p>
                    <p class="result-value" id="result-value"><?php echo number_format($moyenne, 2, ',', ''); ?></p>
                </div>

                <p class="admission-status" id="admission-status">
                    <?php echo $status; ?>
                </p>
            </div>

            <div class="footer">
                <p>Faculté des Sciences Semlalia - Université Cadi Ayyad</p>
                <p>Avenue Prince Moulay Abdellah, BP 2390, 40000 Marrakech</p>
            </div>
        </div>
    </div>

    <script >
          // change style admission-status
            const admissionStatus = document.getElementById('admission-status');
            if (admissionStatus.textContent.includes("Félicitations")) {
                admissionStatus.style.color = 'green';
            } else {
                admissionStatus.style.color = 'red';
            }
    </script>
</body>
</html>

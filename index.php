<?php
$id ="etudiant";
$mdp ="1234";
$erreur_modepasse = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $username;
    echo $password;
    if ($username==  $id && $password == $mdp) {
        echo "Bienvenue";
        header('Location: recherche.php');
        
    } else {
        $erreur_modepasse = 'Identifiant ou mot de passe incorrect';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://pemaster-fssm.uca.ma/assets/media/logos/logoFssm.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <title>Connexion de etudaint</title>
    <style>
        .container {
            background-color: #fff;
            max-width: 450px;
            background-image: url("images/iconstd.png");
            background-repeat: no-repeat;
            background-position: left 230px top 48px;
            background-size: 400px;
        }
        .erreur_modepasse {
            color: red;
            font-size: 1.2em;
            text-align: center;
            margin-top: 10px;
            display: none;
        }
    </style>
</head>
<body lang="fr">
    <header>
        <div class="marquee-container">
            <div class="marquee-wrapper">
                <div class="marquee-content">
                    <img src="https://pemaster-fssm.uca.ma/assets/media/logos/logoFssm.png" alt="loge fssm">
                    <span class="nom-fssm">Faculté des Sciences Semlalia de Marrakech</span>
                    <span class="nom-uca">Université Cadi Ayyad</span>
                    <span class="nom-Pw">Programmation Web</span>
                </div>
                <div class="marquee-content"> 
                    <img src="https://pemaster-fssm.uca.ma/assets/media/logos/logoFssm.png" alt="loge fssm">
                    <span class="nom-fssm">Faculté des Sciences Semlalia de Marrakech</span>
                    <span class="nom-uca">Université Cadi Ayyad</span>
                    <span class="nom-Pw">Programmation Web</span>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="banner">
                <h1>Bienvenue dans votre espace</h1>
                <div class="text"> <i></i>Espace étudiant</div>
                <div class="erreur_modepasse"> <?php echo $erreur_modepasse; ?></div>
            </div>
            <form action="index.php" method="post">
                <div class="input-group">
                    <label for="username">Identifiant</label>
                    <input type="text" id="username" name="username" placeholder="Entrez votre identifiant">
                </div>
                <div class="input-group">
                    <label for="password">Mot de Passe</label>
                    <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe">
                </div>
                <div class="oublie">
                    <a href="oublie.html">Mot de passe oublié ?</a>
                </div>
                <input type="submit" name="submit" value="Valider" class="button">
            </form>
        </div>
    </section>
    <footer>
        <p>&copy; 2024 Faculté des Sciences Semlalia de Marrakech. Tous droits réservés.</p>
        <p>Contact: <a href="mailto:contact@fssm.uca.ma">oumansour@fssm.uca.ma</a></p>
    </footer>
    <script>
        // display erreur modepasse
        const erreur_modepasse = document.querySelector('.erreur_modepasse');
        if (erreur_modepasse.textContent.trim() !== '') {
            erreur_modepasse.style.display = 'block';
        }
    </script>
</body>
</html>

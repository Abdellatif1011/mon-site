<?php 
require_once("cookie-and-session/session.php");
require_once("cookie-and-session/cookie.php");
require_once("cookie-and-session/deconnexion.php");


$erreur = "";
if (isset($_POST['Ajouter'])) {
    if (!empty($_POST['etudiant']) && !empty($_POST['maths']) && !empty($_POST['informatique'])) {
        ajouter_cookie();
        header("location:recherche.php");
        exit();
    }else{
        $erreur = "Veuillez remplir tous les champs";
    }
}
if (isset($_POST['afficher'])) {
    if (!empty($_POST['etudiant']) && !empty($_POST['maths']) && !empty($_POST['informatique'])) {
        ajouter_cookie();
        header("location:tabList.php");
        exit();
    }
    else{
        header("location:tabList.php");
        exit();
    }

}
if (isset($_POST['Deconnexion'])) {
    deconnexion();
    header("location:index.php");
    exit();
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://pemaster-fssm.uca.ma/assets/media/logos/logoFssm.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <title>Page de l'Étudiant</title>
    <style>
        button {
            
            color: white;
            padding: 10px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-afficher{
            background-color: #28a745;
        }
        .btn-ajouter{
            background-color: #17a2b8;
        }
        .btn-deconnection{
            background-color: #dc3545;
        }
        .form {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 500px;
        }
        .col {
            display: flex;
            flex-direction: column;
        }
        .row {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
        }
                tr:hover {
            background-color: lightgray;
            cursor: pointer;
        }


    </style>
</head>
<body>
    <?php require_once("statice/header.php");?>
    <section>
        <main>
            <form class="form" action="recherche.php" method="post">
                <div style="display : <?= empty($erreur)? "none" : "block" ?> ; color : red;"><?= empty($erreur) ? '' : $erreur ?></div>
                <div class="col">
                    <div class="row">
                        <label for="etudiant">Étudiant :</label>
                        <input type="text" id="etudiant" name="etudiant"  placeholder="Nom de l'étudiant">
                    </div>
                    <div class="row">
                        <label for="maths">Maths :</label>
                        <input type="number" id="maths" name="maths"  min="0" max="20" placeholder="Note sur 20">
                    </div>
                    <div class="row">
                        <label for="informatique">Informatique :</label>
                        <input type="number" id="informatique" name="informatique"  min="0" max="20" placeholder="Note sur 20">
                    </div>
                </div>
                <div class="buttons">
                    <button type="submit" name="Ajouter" class="btn-ajouter">Ajouter</button>
                    <button type="submit" name="afficher" class="btn-afficher">Afficher</button>
                    <button type="submit" name="Deconnexion" class="btn-deconnection">Deconnexion</button>
                </div>
            </form>
        </main>
    </section>
    <?php require_once("statice/footer.php");?>
</body>
</html>
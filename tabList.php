<?php 
require_once("cookie-and-session/session.php");
require_once("cookie-and-session/cookie.php");
require_once("cookie-and-session/supprimer.php");
require_once("cookie-and-session/deconnexion.php");

//  supprimer cookie 
if (isset($_POST['supprimer'])) {
    supprimer_cookie();
    header("location:tabList.php");
    exit();
}
// deconnexion a la fin de la session
if (isset($_POST['deconnexion'])) {
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
        .btn-ajouter{
            background-color: #17a2b8;
        }
        .btn-deconnection{
            background-color: #dc3545;
        }
        .btn-supprimer{
            background-color: #ffc107;
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
        button > a {
            color: white;
            text-decoration: none;
        }
        .container {
            background-color: #fff;
            max-width: 750px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            overflow: auto ! important;
        }
        tr {
            border-bottom: 1px solid #ddd;
            font-family: Arial, sans-serif;
            font-size: 16px;
            color: #333;
        }
        th , td { 
            padding: 10px;
            text-align: left;
        }
        tr:hover {
            background-color: lightgray;
            cursor: pointer;
        }
        .rotour {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

    </style>
</head>
<body>
    <?php require_once("statice/header.php");?>
    <section>
        <div class="container">
            <h1> Table de moyenne de etudaint</h1>
            <main>
                <table id="myTable">
                    <tr>
                        <th>Nom complet</th>
                        <th>Moyenne </th>
                        <th>Observation </th>
                    </tr>
                    <tbody >
                    <!-- afficher les données a la cookie  --> 
                    <?php afficher(); ?>
                    </tbody>
                </table>
            </main>
            <div class="rotour">
                <form action="recherche.php" method="post">
                    <button class="btn-ajouter" type="submit">Ajouter</button>
                </form>
                <form action="tabList.php" method="post">
                    <button class="btn-supprimer" name ="supprimer" type="submit">Supprimer</button>
                </form>
                <form action="tabList.php" method="post">
                    <button class="btn-deconnection" name="deconnexion" type="submit">Deconnexion</button>

            </div>
        </div>
    </section>
    <?php require_once("statice/footer.php");?>
<script>
    document.querySelectorAll("#myTable tbody tr").forEach((row, index) => {
        document.querySelectorAll("#myTable tbody tr").forEach((row, index) => {
        row.addEventListener("click", () => {
            // Création d'un cookie via une requête PHP
            document.location.href = "cookie-and-session/set_cookie.php?index=" + index;
        });
    });
    });

</script>

</body>
</html>
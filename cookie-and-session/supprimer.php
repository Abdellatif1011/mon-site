<?php
// fonction afficher
function afficher() {
    $etudiants = verification_cookie();
    foreach ($etudiants as $etudiant) {
        echo "<tr>";
        echo "<td>".$etudiant['etudiant']."</td>";
        echo "<td>".$etudiant['moyenne']."</td>";
        echo "<td>".$etudiant['observation']."</td>";
        echo "</tr>";
    }
}
// fonction supprimer cookie
function supprimer_cookie(){
    setcookie('etudiants', '', time() - (24 * 3600), '/');
}
?>
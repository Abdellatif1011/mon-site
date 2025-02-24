<?php

// fonction ajouter information de un etudiant a un tableau
function ajouter($etudiants, $etudiant, $moyenne, $observation) {
    $etudiants[] = [
        'etudiant' => $etudiant,
        'moyenne' => $moyenne,
        'observation' => $observation
    ];
    return $etudiants;
}
//  fonction veriffiction cookie
function verification_cookie(){
    if(isset($_COOKIE['etudiants'])){
        return unserialize($_COOKIE['etudiants']);
    }
    return [];
}
// fonction ajouter cookie
function ajouter_cookie() {
    $etudiant = $_POST['etudiant'];
    $maths = $_POST['maths'];
    $informatique = $_POST['informatique'];
    $moyenne = ($maths + $informatique) / 2;
    $observation = ($moyenne >= 10) ? "Votre admission a été retenue." : "Votre admission n'a pas été retenue.";
    // ajouter a cookie
    $etudiants = verification_cookie();
    $etudiants = ajouter($etudiants,$etudiant, $moyenne , $observation);
    setcookie('etudiants', serialize($etudiants), time() + (24 * 3600), '/'); // 1 jour
}
?>
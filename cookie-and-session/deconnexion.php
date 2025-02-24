<?php
// fonction deconnexion
include_once('supprimer.php');

function deconnexion(){
    session_unset();
    session_destroy();
    supprimer_cookie();
}


?>
<?php
// session veriffiction a page 
session_start();
if(!isset($_SESSION['login']) ){
    header("location:index.php");
    exit();
}
?>
<?php
//Accés aux données
require 'Modele.php';

$billets = getBillets();

//Affichage
require 'vueAccueil.php';
?>
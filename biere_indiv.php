<?php

require_once 'database.php';
require_once 'app/model/dataConnection.php';
require_once 'app/model/nosbieres.model.php';

//Connection bd
$databaseConnection = getDatabaseConnection();
//nom biere 
$bieres = getNameBiere($databaseConnection);
//Quantite biere panier
$quantite=0;

//Génération de la page
$page_title = 'biere';


ob_start();
require_once 'app/view/parts/biere_indiv.view.php';
$content = ob_get_clean();
$css = "public/css/biere_indiv.css";
require_once 'app/view/common/layout.php';
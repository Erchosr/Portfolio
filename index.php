<?php
// Point d'entrée principal
require_once 'config.php';
require_once 'functions.php';

// Récupération de la page demandée
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Vérification que la page existe
$page_file = 'pages/' . $page . '.php';
if (!file_exists($page_file)) {
    $page = '404';
    $page_file = 'pages/404.php';
}

// Chargement de la page
include 'includes/header.php';
include $page_file;
include 'includes/footer.php';
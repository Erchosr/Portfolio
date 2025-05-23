<?php
// Titre de la page
$page_titles = [
    'home' => 'Accueil',
    'competences' => 'Compétences',
    'projets' => 'Projets',
    'experience' => 'Expérience',
    'veille' => 'Veille Technologique',
    'certifications' => 'Certifications',
    'contact' => 'Contact',
    'legal' => 'Mentions Légales',
    '404' => 'Page non trouvée'
];

$current_page = isset($_GET['page']) ? $_GET['page'] : 'home';
$page_title = $page_titles[$current_page] ?? SITE_TITLE;
$full_title = $page_title . ' | ' . SITE_TITLE;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $full_title ?></title>
    <meta name="description" content="<?= SITE_DESCRIPTION ?>">
    
    <!-- Styles -->
    <link rel="stylesheet" href="<?= CSS_URL ?>style.css">
    
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <nav>
        <div class="container">
            <div class="nav-content">
                <div class="profil">
                    <img src="<?= IMAGES_URL ?>profile.png" alt="<?= PERSONAL_NAME ?>">
                    <h1><?= PERSONAL_NAME ?></h1>
                </div>
                
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </div>
                
                <ul class="nav-links">
                    <li><a href="<?= page_url('home') ?>" class="<?php active_class('home'); ?>">Accueil</a></li>
                    <li><a href="<?= page_url('competences') ?>" class="<?php active_class('competences'); ?>">Compétences</a></li>
                    <li><a href="<?= page_url('projets') ?>" class="<?php active_class('projets'); ?>">Projets</a></li>
                    <li><a href="<?= page_url('experience') ?>" class="<?php active_class('experience'); ?>">Expérience</a></li>
                    <li><a href="<?= page_url('veille') ?>" class="<?php active_class('veille'); ?>">Veille Technologique</a></li>
                    <li><a href="<?= page_url('certifications') ?>" class="<?php active_class('certifications'); ?>">Certifications</a></li>
                    <li><a href="<?= page_url('contact') ?>" class="<?php active_class('contact'); ?>">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>


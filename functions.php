<?php
// Fonctions utilitaires

/**
 * Génère l'URL d'une page
 */
function page_url($page = 'home') {
    return BASE_URL . '?page=' . $page;
}

/**
 * Vérifie si la page actuelle est la page spécifiée
 */
function is_current_page($page) {
    $current_page = isset($_GET['page']) ? $_GET['page'] : 'home';
    return $current_page === $page;
}

/**
 * Affiche une classe si la page actuelle est la page spécifiée
 */
function active_class($page, $class = 'active') {
    echo is_current_page($page) ? $class : '';
}

/**
 * Nettoie les données d'entrée
 */
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
 * Traite le formulaire de contact
 */
function process_contact_form() {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        return null;
    }
    
    // Récupération et nettoyage des données
    $name = clean_input($_POST['name'] ?? '');
    $email = clean_input($_POST['email'] ?? '');
    $subject = clean_input($_POST['subject'] ?? '');
    $message = clean_input($_POST['message'] ?? '');
    
    // Validation
    $errors = [];
    
    if (empty($name)) {
        $errors[] = 'Le nom est obligatoire.';
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'L\'email est invalide.';
    }
    
    if (empty($subject)) {
        $errors[] = 'Le sujet est obligatoire.';
    }
    
    if (empty($message)) {
        $errors[] = 'Le message est obligatoire.';
    }
    
    // Résultat
    if (empty($errors)) {
        // Dans un environnement de production, vous enverriez un email ici
        // mail(PERSONAL_EMAIL, "Contact portfolio: $subject", $message, "From: $email");
        
        return [
            'success' => true,
            'message' => 'Votre message a été envoyé avec succès. Je vous répondrai dans les plus brefs délais.'
        ];
    } else {
        return [
            'success' => false,
            'errors' => $errors
        ];
    }
}


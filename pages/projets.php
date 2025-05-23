<?php
// Données des projets
$projects = [
   [
       'id' => 'arobatic',
       'title' => 'Site Web pour Arobatic',
       'description' => 'Développement d\'un site web avec formulaire de contact pour la gestion des clients',
       'technologies' => ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL'],
       'image' => IMAGES_URL . 'formulaire.png',
       'github' => 'https://github.com/Erchosr/Formulaire',
       'details' => 'Durant mon stage chez Arobatic, j\'ai développé un site web complet intégrant un système de formulaire de contact avancé pour la gestion des clients. Ce projet m\'a permis de mettre en pratique mes compétences en développement web et de travailler en équipe avec les professionnels de l\'entreprise.

       Le formulaire de contact que j\'ai conçu comprend plusieurs fonctionnalités avancées :
       - Validation côté client avec JavaScript pour une meilleure expérience utilisateur
       - Validation côté serveur avec PHP pour garantir la sécurité des données
       - Protection contre les attaques par injection SQL et XSS
       - Système de notification par email pour alerter l\'équipe des nouvelles demandes
       - Interface d\'administration pour gérer les demandes reçues
       
       J\'ai également implémenté un système de gestion de base de données pour stocker les informations des clients, ainsi qu\'une interface utilisateur intuitive pour faciliter la navigation et l\'utilisation du site. Le projet a été développé en suivant les bonnes pratiques de développement web et en respectant les standards du W3C.'
   ],
   [
       'id' => 'gtl-digital',
       'title' => 'API REST pour la gestion des emails - GTL Digital',
       'description' => 'Développement d\'une API REST pour la gestion des emails, permettant d\'afficher, supprimer et télécharger des emails et leurs pièces jointes',
       'technologies' => ['PHP', 'API', 'JSON', 'Swagger.ui', 'Documentation technique'],
       'github' => 'https://github.com/Erchosr/API_Rest',
       'details' => 'Pour GTL Digital, j\'ai développé une API REST complète dédiée à la gestion des emails. Cette API offre plusieurs fonctionnalités essentielles :

       - Affichage d\'un email spécifique via URL sous format JSON
       - Suppression d\'emails via URL
       - Consultation des emails non lus via URL
       - Téléchargement des images contenues dans les emails vers un stockage local
       
       L\'API a été conçue selon les principes REST, avec une architecture claire et des endpoints bien définis. J\'ai utilisé PHP pour le backend et mis en place une structure modulaire facilitant la maintenance et l\'évolution future du projet.
       
       Un aspect important de ce projet a été la documentation technique. J\'ai utilisé Swagger.ui pour créer une documentation interactive de l\'API, permettant aux développeurs de comprendre facilement comment utiliser chaque endpoint, quels paramètres sont nécessaires et quelles réponses attendre.
       
       Ce projet m\'a permis d\'approfondir mes connaissances en développement d\'API, en architecture REST et en documentation technique, des compétences essentielles pour un développeur web moderne.'
   ],
   [
       'id' => 'portfolio',
       'title' => 'Task-Manager',
       'description' => 'Developpement d\'un site web de gestion de taches avec creations, modification, suppression, partage de collaboration et gestion de profil',
       'technologies' => ['PHP', 'Laravel', 'CSS', 'MySQL'],
       'image' => IMAGES_URL . 'Task.jpg',
       'github' => 'https://github.com/Erchosr/Task-Manager',
       'details' => 'Ce portfolio a été créé pour présenter mes compétences, mes projets et mon parcours professionnel. J\'ai développé ce site de A à Z en utilisant PHP pour le backend, avec HTML, CSS et JavaScript pour le frontend.

       Caractéristiques principales du portfolio :
       - Architecture MVC (Modèle-Vue-Contrôleur) pour une organisation claire du code
       - Design responsive s\'adaptant à tous les appareils (mobile, tablette, desktop)
       - Animations et transitions pour améliorer l\'expérience utilisateur
       - Section de veille technologique régulièrement mise à jour
       - Formulaire de contact sécurisé
       - Optimisation SEO pour une meilleure visibilité
       
       Ce projet m\'a permis de mettre en pratique l\'ensemble des compétences acquises durant ma formation, tout en servant de vitrine pour mes réalisations professionnelles. J\'ai particulièrement travaillé sur l\'aspect UX/UI pour créer une expérience utilisateur fluide et agréable, avec une attention particulière portée à l\'accessibilité.'
   ]
];

// Projets académiques
$academicProjects = [
   [
       'id' => 'ppe1',
       'title' => 'Projet PPE1: Gestion de Stock',
       'description' => 'Application de gestion de stock développée dans le cadre du BTS SIO',
       'technologies' => ['PHP', 'MySQL', 'Bootstrap'],
       'details' => 'Ce projet consistait à développer une application web pour gérer les stocks d\'une entreprise fictive. J\'ai implémenté les fonctionnalités de CRUD (Create, Read, Update, Delete) pour les produits, les fournisseurs et les commandes. L\'application permet également de générer des rapports sur l\'état des stocks et d\'alerter les utilisateurs lorsque certains produits atteignent un seuil critique.

       J\'ai utilisé PHP pour le backend, MySQL pour la base de données et Bootstrap pour l\'interface utilisateur. Ce projet m\'a permis de mettre en pratique mes connaissances en développement web et en gestion de base de données, tout en apprenant à concevoir une application répondant à des besoins métiers spécifiques.'
   ],
   [
       'id' => 'ppe2',
       'title' => 'Projet PPE2: Application Mobile',
       'description' => 'Application mobile de suivi de santé développée en équipe',
       'technologies' => ['Java', 'Android Studio', 'SQLite'],
       'details' => 'Dans ce projet d\'équipe, nous avons développé une application mobile Android pour le suivi de la santé des utilisateurs. L\'application permet aux utilisateurs de suivre leurs activités physiques, leur alimentation et divers indicateurs de santé comme le poids, la tension artérielle et la fréquence cardiaque.

       J\'étais responsable du développement de l\'interface utilisateur et de la gestion de la base de données SQLite. J\'ai conçu des écrans intuitifs et ergonomiques pour faciliter la saisie et la visualisation des données de santé. J\'ai également implémenté un système de graphiques pour permettre aux utilisateurs de suivre leur progression au fil du temps.

       Ce projet m\'a permis de découvrir le développement mobile sur Android et de travailler en équipe en utilisant Git pour la gestion de version et Trello pour la répartition des tâches.'
   ],
   [
       'id' => 'ppe3',
       'title' => 'Projet PPE3: Système de Réservation',
       'description' => 'Système de réservation en ligne pour une salle de sport',
       'technologies' => ['PHP', 'JavaScript', 'MySQL', 'API REST'],
       'details' => 'Ce projet consistait à développer un système de réservation en ligne pour une salle de sport. Les utilisateurs peuvent réserver des cours collectifs, des séances avec un coach personnel ou des créneaux pour utiliser certains équipements spécifiques.

       J\'ai implémenté un calendrier interactif permettant de visualiser les disponibilités en temps réel, un système d\'authentification sécurisé pour les membres et les administrateurs, et une API REST pour la communication entre le frontend et le backend. L\'application inclut également un système de notifications par email pour rappeler aux utilisateurs leurs réservations à venir.

       Ce projet m\'a permis d\'approfondir mes connaissances en développement d\'applications web dynamiques et de me familiariser avec les concepts d\'API REST et d\'architecture orientée services.'
   ],
   [
       'id' => 'ppe4',
       'title' => 'Projet PPE4: Tableau de Bord',
       'description' => 'Tableau de bord pour la visualisation de données',
       'technologies' => ['JavaScript', 'Chart.js', 'PHP', 'MySQL'],
       'details' => 'Dans ce projet, j\'ai développé un tableau de bord interactif pour visualiser les données d\'une entreprise fictive spécialisée dans la vente en ligne. Le tableau de bord présente différentes métriques commerciales comme le chiffre d\'affaires, le nombre de commandes, le panier moyen et le taux de conversion.

       J\'ai utilisé Chart.js pour créer des graphiques interactifs (histogrammes, camemberts, courbes d\'évolution) et PHP pour récupérer les données de la base de données MySQL. Le tableau de bord inclut également des fonctionnalités de filtrage par période, par catégorie de produits et par région géographique.

       Ce projet m\'a permis de développer mes compétences en visualisation de données et en développement frontend, tout en apprenant à concevoir des interfaces utilisateur qui facilitent l\'analyse et la prise de décision.'
   ]
];
?>

<header>
   <div class="page">
       <h1 class="neon-blue">Mes Projets</h1>
   </div>
</header>

<main class="box fadeUp" style="animation-delay: 1s;">
   <h2>Projets Réalisés</h2>
   
   <div class="projects-container">
       <?php foreach ($projects as $project): ?>
           <div class="project-card" data-id="<?= $project['id'] ?>">
               <div class="project-image">
                   <img src="<?= $project['image'] ?>" alt="<?= $project['title'] ?>">
               </div>
               <h3><?= $project['title'] ?></h3>
               <p><?= $project['description'] ?></p>
               
               <div class="project-technologies">
                   <?php foreach ($project['technologies'] as $tech): ?>
                       <span class="tech-tag"><?= $tech ?></span>
                   <?php endforeach; ?>
               </div>
               
               <div class="project-actions">
                   <button class="btn btn-primary view-details" data-id="<?= $project['id'] ?>">
                       Voir détails
                   </button>
                   
                   <div class="project-links">
                       <?php if (isset($project['github'])): ?>
                           <a href="<?= $project['github'] ?>" target="_blank" title="GitHub">
                               <i class="fab fa-github"></i>
                           </a>
                       <?php endif; ?>
                       
                       <?php if (isset($project['demo'])): ?>
                           <a href="<?= $project['demo'] ?>" target="_blank" title="Démo">
                               <i class="fas fa-external-link-alt"></i>
                           </a>
                       <?php endif; ?>
                   </div>
               </div>
           </div>
       <?php endforeach; ?>
   </div>
</main>
<br>
<!-- Modals pour les détails des projets -->
<?php foreach ($projects as $project): ?>
   <div id="modal-<?= $project['id'] ?>" class="modal">
       <div class="modal-content">
           <span class="close">&times;</span>
           <h2><?= $project['title'] ?></h2>
           
           <div class="modal-image">
               <img src="<?= $project['image'] ?>" alt="<?= $project['title'] ?>">
           </div>
           
           <div class="project-technologies">
               <?php foreach ($project['technologies'] as $tech): ?>
                   <span class="tech-tag"><?= $tech ?></span>
               <?php endforeach; ?>
           </div>
           
           <div class="modal-details">
               <p><?= $project['details'] ?></p>
           </div>
           
           <div class="modal-actions">
               <?php if (isset($project['github'])): ?>
                   <a href="<?= $project['github'] ?>" target="_blank" class="btn btn-dark">
                       <i class="fab fa-github"></i> GitHub
                   </a>
               <?php endif; ?>
               
               <?php if (isset($project['demo'])): ?>
                   <a href="<?= $project['demo'] ?>" target="_blank" class="btn btn-primary">
                       <i class="fas fa-external-link-alt"></i> Démo
                   </a>
               <?php endif; ?>
               
               <button class="btn btn-danger close-modal">Fermer</button>
           </div>
       </div>
   </div>
<?php endforeach; ?>


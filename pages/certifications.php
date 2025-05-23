<?php
// Données des certifications
$certifications = [
   [
       'id' => 'cert1',
       'title' => 'Conception Web Responsive',
       'organization' => 'FreeCodeCamp',
       'date' => 'Juin 2023',
       'description' => 'Cette certification valide mes compétences en conception de sites web responsifs. J\'ai appris à créer des mises en page adaptatives qui fonctionnent sur différents appareils, à utiliser les media queries CSS et à appliquer les principes du design responsive.',
       'skills' => ['HTML5', 'CSS3', 'Flexbox', 'Grid', 'Media Queries', 'Design Responsive'],
       'image' => IMAGES_URL . 'fcc-responsive.jpg',
       'credential' => 'https://www.freecodecamp.org/certification/Erwankal/responsive-web-design'
   ],
   [
       'id' => 'cert2',
       'title' => 'Algorithmes JavaScript et Structures de Données',
       'organization' => 'FreeCodeCamp',
       'date' => 'Octobre 2024',
       'description' => 'Cette certification atteste de mes compétences en programmation JavaScript, incluant les fondamentaux du langage, les structures de données, les algorithmes de tri et de recherche, ainsi que la programmation orientée objet et fonctionnelle en JavaScript.',
       'skills' => ['JavaScript', 'Algorithmes', 'Structures de Données', 'ES6', 'Programmation Fonctionnelle', 'Expressions Régulières'],
       'image' => IMAGES_URL . 'fcc-javascript.jpg',
       'credential' => 'https://www.freecodecamp.org/certification/Erwankal/javascript-algorithms-and-data-structures-v8'
   ],
   [
       'id' => 'cert3',
       'title' => 'Bibliothèques de Développement Front-End',
       'organization' => 'FreeCodeCamp',
       'date' => 'Novembre 2024',
       'description' => 'Cette certification valide mes compétences dans l\'utilisation des bibliothèques et frameworks front-end populaires. J\'ai appris à développer des interfaces utilisateur interactives avec React, à gérer l\'état avec Redux, et à styliser mes applications avec Bootstrap et Sass.',
       'skills' => ['React', 'Redux', 'Bootstrap', 'jQuery', 'Sass', 'Gestion d\'État'],
       'image' => IMAGES_URL . 'fcc-frontend.jpg',
       'credential' => 'https://www.freecodecamp.org/certification/Erwankal/front-end-development-libraries'
   ]
];

// Formations en cours
$ongoingTrainings = [
   [
       'title' => 'Formation React.JS',
       'description' => 'Je suis actuellement une formation complète sur React.JS sur la plateforme Dyma. Cette formation couvre les fondamentaux de React, les hooks, la gestion d\'état, le routing, et l\'intégration avec des API REST. Elle me permettra de développer des applications web modernes et interactives.',
       'progress' => 5,
       'color' => 'rgb(0, 128, 0)'
   ]
];

// Objectifs de formation
$trainingGoals = [
   [
       'title' => 'AWS Certified Developer',
       'description' => 'Je prévois de passer la certification AWS Certified Developer pour approfondir mes connaissances sur les services cloud et le développement d\'applications cloud-native.',
       'target' => 'Décembre 2024'
   ],
   [
       'title' => 'Certification en Data Science',
       'description' => 'Je souhaite acquérir des compétences en data science et en apprentissage automatique pour pouvoir développer des applications intelligentes et analyser des données complexes.',
       'target' => 'Mars 2025'
   ],
   [
       'title' => 'Certification en Accessibilité Web',
       'description' => 'Je veux me spécialiser dans le développement de sites web accessibles, conformes aux normes WCAG, pour garantir que mes applications sont utilisables par tous.',
       'target' => 'Juin 2024'
   ]
];
?>

<header>
   <div class="page">
       <h1 class="neon-red">Certifications</h1>
   </div>
</header>

<main class="box fadeUp" style="animation-delay: 1s;">
   <h2>Mes Certifications</h2>
   
   <div class="certifications-container">
       <?php foreach ($certifications as $cert): ?>
           <div class="certification-card">
               <div class="certification-header">
                   <div class="certification-icon">
                       <i class="fas fa-award"></i>
                   </div>
                   <div class="certification-title">
                       <h3><?= $cert['title'] ?></h3>
                       <p class="organization"><i class="fas fa-file-alt"></i> <?= $cert['organization'] ?></p>
                       <p class="date"><i class="far fa-calendar"></i> <?= $cert['date'] ?></p>
                   </div>
               </div>
               
               <div class="certification-body">
                   <p><?= $cert['description'] ?></p>
                   
                   <div class="certification-skills">
                       <h4>Compétences acquises :</h4>
                       <div class="skills">
                           <?php foreach ($cert['skills'] as $skill): ?>
                               <span class="skill-tag"><?= $skill ?></span>
                           <?php endforeach; ?>
                       </div>
                   </div>
                   
                   <?php if (isset($cert['credential'])): ?>
                       <a href="<?= $cert['credential'] ?>" target="_blank" class="btn btn-primary">
                           Voir le certificat <i class="fas fa-external-link-alt"></i>
                       </a>
                   <?php endif; ?>
               </div>
           </div>
       <?php endforeach; ?>
   </div>
</main>
<br>
<main class="box fadeUp" style="animation-delay: 1.5s;">
   <h2>Formations en Cours</h2>
   
   <div class="ongoing-trainings">
       <?php foreach ($ongoingTrainings as $training): ?>
           <div class="training-card">
               <h3><?= $training['title'] ?></h3>
               <p><?= $training['description'] ?></p>
               <div class="progress-container">
                   <div class="progress-bar" style="width: <?= $training['progress'] ?>%; background-color: <?= $training['color'] ?>;"></div>
               </div>
               <p class="progress-text"><?= $training['progress'] ?>% complété</p>
           </div>
       <?php endforeach; ?>
   </div>
</main>
<br>


<?php
// Données des compétences techniques
$skills = [
    [
        'name' => 'HTML',
        'image' => IMAGES_URL . 'html.png',
        'level' => 85,
        'color' => 'rgb(255, 0, 0)',
        'description' => 'Compétence avancée dans la création de structures de pages web. Utilisé dans divers projets de développement web.'
    ],
    [
        'name' => 'CSS',
        'image' => IMAGES_URL . 'css.png',
        'level' => 80,
        'color' => 'rgb(0, 0, 255)',
        'description' => 'Compétence avancée dans le stylage des pages web. Utilisé pour créer des designs responsives et attrayants.'
    ],
    [
        'name' => 'JavaScript',
        'image' => IMAGES_URL . 'js.png',
        'level' => 60,
        'color' => 'rgb(255, 255, 0)',
        'description' => 'Compétence intermédiaire dans le développement front-end. Utilisé pour ajouter de l\'interactivité aux sites web.'
    ],
    [
        'name' => 'PHP',
        'image' => IMAGES_URL . 'php.png',
        'level' => 65,
        'color' => 'rgb(180, 0, 180)',
        'description' => 'Compétence intermédiaire dans le développement back-end. Utilisé pour créer des applications web dynamiques.'
    ],
    [
        'name' => 'SQL',
        'image' => IMAGES_URL . 'SQL.png',
        'level' => 50,
        'color' => 'rgb(255, 176, 29)',
        'description' => 'Compétence intermédiaire dans la gestion de bases de données relationnelles. Utilisé pour créer et manipuler des bases de données.'
    ],
    [
        'name' => 'Bootstrap',
        'image' => IMAGES_URL . 'Bootstrap.png',
        'level' => 65,
        'color' => 'rgb(106, 11, 173)',
        'description' => 'Compétence avancée dans l\'utilisation de ce framework CSS pour créer des designs responsives.'
    ],
    [
        'name' => 'Python',
        'image' => IMAGES_URL . 'Python.png',
        'level' => 40,
        'color' => 'rgb(25, 255, 25)',
        'description' => 'Compétence intermédiaire dans le développement de scripts et d\'applications. Utilisé pour l\'automatisation et le développement back-end.'
    ],
    [
        'name' => 'Java',
        'image' => IMAGES_URL . 'Java.png',
        'level' => 36,
        'color' => 'rgb(167, 33, 33)',
        'description' => 'Compétence intermédiaire dans le développement d\'applications. Utilisé pour créer des applications Android et des systèmes d\'information.'
    ]
];

// Compétences professionnelles
$professionalSkills = [
    [
        'name' => 'Gestion de Projet',
        'level' => 59,
        'color' => 'rgb(128, 0, 128)',
        'items' => ['Méthodologie Agile', 'Planification et organisation', 'Gestion des délais', 'Documentation technique']
    ],
    [
        'name' => 'Travail d\'Équipe',
        'level' => 85,
        'color' => 'rgb(0, 128, 0)',
        'items' => ['Communication efficace', 'Collaboration', 'Partage de connaissances', 'Résolution de problèmes en groupe']
    ],
    [
        'name' => 'Analyse et Résolution de Problèmes',
        'level' => 75,
        'color' => 'rgb(0, 0, 255)',
        'items' => ['Débogage', 'Optimisation de code', 'Recherche de solutions', 'Veille technologique']
    ],
    [
        'name' => 'Adaptabilité',
        'level' => 80,
        'color' => 'rgb(255, 0, 0)',
        'items' => ['Apprentissage rapide', 'Flexibilité', 'Autonomie', 'Curiosité intellectuelle']
    ]
];

// Compétences BTS SIO SLAM
$sioSkills = [
    [
        'name' => 'Développement d\'Applications',
        'level' => 75,
        'color' => 'rgb(75, 0, 130)',
        'description' => 'Conception et développement d\'applications web et mobiles selon les besoins des utilisateurs.'
    ],
    [
        'name' => 'Gestion de Bases de Données',
        'level' => 65,
        'color' => 'rgb(255, 215, 0)',
        'description' => 'Conception, implémentation et maintenance de bases de données relationnelles.'
    ],
    [
        'name' => 'Cybersécurité',
        'level' => 60,
        'color' => 'rgb(255, 0, 0)',
        'description' => 'Mise en œuvre de solutions de sécurité pour protéger les données et les systèmes d\'information.'
    ],
    [
        'name' => 'Support et Maintenance',
        'level' => 65,
        'color' => 'rgb(0, 128, 0)',
        'description' => 'Assistance aux utilisateurs, maintenance des applications et résolution des incidents.'
    ]
];
?>

<header>
    <div class="page">
        <h1 class="neon-red">Compétences</h1>
    </div>
</header>

<main class="box fadeUp" style="animation-delay: 1s;">
    <h2>Compétences Techniques</h2>
    
    <div class="skills-container">
        <?php foreach ($skills as $skill): ?>
            <div class="skill-card">
                <img src="<?= $skill['image'] ?>" alt="<?= $skill['name'] ?>">
                <h2><?= $skill['name'] ?></h2>
                <div class="progress-container">
                    <div class="progress-bar" style="width: <?= $skill['level'] ?>%; background-color: <?= $skill['color'] ?>;"></div>
                </div>
                <p><?= $skill['description'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</main>
<br>
<main class="box fadeUp" style="animation-delay: 1.5s;">
    <h2>Compétences Professionnelles</h2>
    
    <div class="skills-container">
        <?php foreach ($professionalSkills as $skill): ?>
            <div class="skill-card">
                <h2><?= $skill['name'] ?></h2>
                <div class="progress-container">
                    <div class="progress-bar" style="width: <?= $skill['level'] ?>%; background-color: <?= $skill['color'] ?>;"></div>
                </div>
                <ul>
                    <?php foreach ($skill['items'] as $item): ?>
                        <li><?= $item ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
</main>
<br>
<main class="box fadeUp" style="animation-delay: 2s;">
    <h2>Compétences BTS SIO SLAM</h2>
    
    <div class="skills-container">
        <?php foreach ($sioSkills as $skill): ?>
            <div class="skill-card">
                <h2><?= $skill['name'] ?></h2>
                <div class="progress-container">
                    <div class="progress-bar" style="width: <?= $skill['level'] ?>%; background-color: <?= $skill['color'] ?>;"></div>
                </div>
                <p><?= $skill['description'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</main>


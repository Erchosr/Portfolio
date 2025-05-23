<?php
// Catégories de veille
$categories = [
   ['id' => 'all', 'name' => 'Toutes les catégories'],
   ['id' => 'cybersecurite', 'name' => 'Cybersécurité'],
   ['id' => 'intelligence-artificielle', 'name' => 'Intelligence Artificielle'],
];

// Articles de veille
$articles = [
   // Cybersécurité
   [
       'id' => 'article1',
       'title' => 'Google a trouvé une arme de destruction massive pour devenir le leader de l’IA',
       'summary' => '',
       'content' => 'À l’occasion de sa conférence annuelle I/O, Google a trouvé surement l’astuce idéale pour faire de Gemini l’une des intelligences artificielles les plus performantes du moment. Avec « Personal Context », Google entend devenir un véritable assistant personnel.',
       'image' => IMAGES_URL . 'gemini.jpg',
       'date' => '21 mai 2025',
       'category' => 'intelligence-artificielle',
       'source' => 'Numerama',
       'link' => 'https://www.numerama.com/tech/1973821-google-a-trouve-une-arme-de-destruction-massive-pour-devenir-le-leader-de-lia.html',
       'tags' => ['Google', 'Intelligence Artificielle']
   ],
   [
       'id' => 'article2',
       'title' => 'Cette nouvelle arnaque sophistiquée sur Instagram cible les jeunes parents',
       'summary' => '',
       'content' => 'Une arnaque sur Instagram, particulièrement sophistiquée, cible les jeunes parents. Son but ? Leur voler de très grosses sommes d\'argent grâce à un phishing en deux étapes.',
       'image' => IMAGES_URL . 'une-phishing-insta.jpg',
       'date' => '19 mai 2025',
       'category' => 'cybersecurite',
       'source' => 'Numerama',
       'link' => 'https://www.numerama.com/cyberguerre/1973065-cette-nouvelle-arnaque-sophistiquee-sur-instagram-cible-les-jeunes-parents.html',
       'tags' => ['Cybersécuriter', 'Vulnérabilités', 'Résaux sociaux']
   ],
   [
       'id' => 'article3',
       'title' => 'Pédocriminalité sur Telegram : l’enfer derrière l’écran',
       'summary' => '',
       'content' => 'Cinquante-cinq hommes ont été arrêtés en France, soupçonnés d’avoir participé à un vaste réseau pédocriminel via Telegram, une messagerie chiffrée devenue la nouvelle plaque tournante de contenus illégaux...',
       'image' => IMAGES_URL . 'pedo-telegram-ofmin-595x240.webp',
       'date' => '22 Mai 2025',
       'category' => 'cybersecurite',
       'source' => 'ZATAZ',
       'link' => 'https://www.zataz.com/pedocriminalite-sur-telegram-lenfer-derriere-lecran/',
       'tags' => ['Cybersécuriter', 'Résaux sociaux', 'Criminalité', 'Sécurité']
   ],
   
   // Intelligence Artificielle
   [
       'id' => 'article4',
       'title' => 'Surveillance au travail : la CNIL durcit le ton',
       'summary' => '',
       'content' => 'Depuis janvier 2025, la CNIL a infligé pour 104 000 euros d’amendes via sa procédure simplifiée, ciblant en majorité des pratiques abusives de surveillance des salariés au sein des entreprises françaises...',
       'image' => IMAGES_URL . 'sanction.webp',
       'date' => '22 Mai 2025',
       'category' => 'cybersecurite',
       'source' => 'ZATAZ',
       'link' => 'https://www.zataz.com/surveillance-au-travail-la-cnil-durcit-le-ton/',
       'tags' => ['Cybersécuriter','CNIL', 'Surveillance']
   ],
   [
       'id' => 'article5',
       'title' => 'L’IA pousse 91 % des responsables de la sécurité à réévaluer les risques liés au cloud hybride',
       'summary' => '',
       'content' => 'Une nouvelle étude montre que l’IA compromet la cybersécurité en raison de l’augmentation des volumes de données, de menaces LLM et d’inquiétudes croissantes concernant le cloud public. Tribune – Gigamon, un leader de l’observabilité avancée, dévoile l’édition 2025 de son étude sur la sécurité du cloud hybride. Celle-ci révèle que les infrastructures de cloud hybride […]

The post L’IA pousse 91 % des responsables de la sécurité à réévaluer les risques liés au cloud hybride.',
       'image' => IMAGES_URL . 'cloud-security.jpg',
       'date' => '15 mars 2025',
       'category' => 'intelligence-artificielle',
       'source' => 'Under News',
       'link' => 'https://www.undernews.fr/reseau-securite/lia-pousse-91-des-responsables-de-la-securite-a-reevaluer-les-risques-lies-au-cloud-hybride.html',
       'tags' => ['Intellligence Artificielle', 'Cloud', 'Sécuriter', 'Risque']
   ],
   [
       'id' => 'article6',
       'title' => 'Comprendre et prévenir les malware IA',
       'summary' => '',
       'content' => 'L’intelligence artificielle (IA) continue de révolutionner notre quotidien, que ce soit dans les domaines de la santé, de l’industrie ou encore des loisirs. Cependant, comme toute technologie puissante, elle n’est pas à l’abri d’être détournée à des fins malveillantes. Parmi ces utilisations pernicieuses, la création de malwares par l’IA constitue une menace grandissante pour les […]',
       'image' => IMAGES_URL . 'malware.jpg',
       'date' => '8 mars 2025',
       'category' => 'intelligence-artificielle',
       'source' => 'Under News',
       'link' => 'https://www.undernews.fr/malwares-virus-antivirus/comprendre-et-prevenir-les-malware-ia.html',
       'tags' => ['IA générative', 'Ransomware', 'Cybersécuriter', 'Menace']
   ],
];

// Fonction pour obtenir le nom de la catégorie
function getCategoryName($categoryId, $categories) {
   foreach ($categories as $category) {
       if ($category['id'] === $categoryId) {
           return $category['name'];
       }
   }
   return $categoryId;
}
?>

<header>
   <div class="page">
       <h1 class="neon-blue">Veille Technologique</h1>
   </div>
</header>

<main class="box fadeUp" style="animation-delay: 1s;">
   <h2>Qu'est-ce que la Veille Technologique ?</h2>
   
   <p>La veille technologique est un processus continu de surveillance et d'analyse des évolutions technologiques dans un domaine spécifique. Elle consiste à collecter, analyser et diffuser des informations pertinentes sur les innovations, les tendances émergentes et les avancées scientifiques qui pourraient impacter un secteur d'activité.</p>
   
   <p>Pour un professionnel de l'informatique, la veille technologique est essentielle pour :</p>
   
   <ul>
       <li><strong>Rester compétitif</strong> : Dans un domaine qui évolue aussi rapidement que l'informatique, se tenir informé des dernières technologies est crucial pour maintenir son expertise à jour.</li>
       <li><strong>Anticiper les changements</strong> : Identifier les tendances émergentes permet de se préparer aux évolutions futures et d'adapter ses compétences en conséquence.</li>
       <li><strong>Stimuler l'innovation</strong> : La connaissance des avancées technologiques peut inspirer de nouvelles idées et solutions dans ses propres projets.</li>
       <li><strong>Prendre des décisions éclairées</strong> : Une bonne veille permet de faire des choix technologiques pertinents, basés sur des informations fiables et actuelles.</li>
   </ul>
   
   <p>Dans le cadre de mon BTS SIO, j'ai choisi de me concentrer sur trois domaines technologiques en pleine expansion : la Cybersécurité, l'Intelligence Artificielle et la Robotique. Ces domaines représentent des enjeux majeurs pour l'avenir de l'informatique et offrent de nombreuses opportunités professionnelles.</p>
</main>
<br>
<main class="box fadeUp" style="animation-delay: 1.5s;">
   <h2>Actualités Technologiques</h2>
   
   <div class="category-filter">
       <h3>Filtrer par catégorie</h3>
       <div class="filter-buttons">
           <?php foreach ($categories as $category): ?>
               <button class="filter-btn <?= $category['id'] === 'all' ? 'active' : '' ?>" data-category="<?= $category['id'] ?>">
                   <?= $category['name'] ?>
               </button>
           <?php endforeach; ?>
       </div>
   </div>
   
   <div class="articles-container">
       <?php foreach ($articles as $article): ?>
           <div class="article-card" data-category="<?= $article['category'] ?>">
               <div class="article-image">
                   <img src="<?= $article['image'] ?>" alt="<?= $article['title'] ?>">
               </div>
               
               <div class="article-meta">
                   <span class="article-date"><i class="far fa-calendar"></i> <?= $article['date'] ?></span>
                   <span class="article-category"><i class="fas fa-tag"></i> 
                       <?= getCategoryName($article['category'], $categories) ?>
                   </span>
               </div>
               
               <h3><?= $article['title'] ?></h3>
               <p><?= $article['summary'] ?></p>
               
               <div class="article-actions">
                   <button class="btn btn-primary view-details" data-id="<?= $article['id'] ?>">
                       Lire plus
                   </button>
                   
                   <a href="<?= $article['link'] ?>" target="_blank" class="article-source">
                       Source <i class="fas fa-external-link-alt"></i>
                   </a>
               </div>
           </div>
       <?php endforeach; ?>
   </div>
</main>
<br>
<main class="box fadeUp" style="animation-delay: 2s;">
   <h2>Ma Démarche de Veille</h2>
   
   <div class="veille-approach">
       <div class="veille-section">
           <h3>Outils de Veille</h3>
           <ul>
               <li>Feedly : Agrégateur de flux RSS pour suivre les blogs et sites d'actualités technologiques</li>
               <li>Twitter : Suivi des experts et influenceurs du domaine</li>
               <li>LinkedIn : Articles et publications professionnelles</li>
               <li>GitHub : Tendances et nouveaux projets open source</li>
               <li>Newsletters spécialisées : Réception régulière d'actualités ciblées</li>
           </ul>
       </div>
       
       <div class="veille-section">
           <h3>Domaines Surveillés</h3>
           <ul>
               <li>Cybersécurité : Nouvelles menaces, techniques de protection, bonnes pratiques</li>
               <li>Intelligence Artificielle : Avancées en IA générative, applications pratiques, éthique</li>
           </ul>
       </div>
       
       <div class="veille-section">
           <h3>Sources Principales</h3>
           <ul>
               <li>Sites spécialisés : Numerama, AI News</li>
               <li>Blogs techniques : ZATAZ, Under News</li>
               <li>Chaînes YouTube : Computerphile, Two Minute Papers</li>
               <li>Forums et communautés : Reddit (r/cybersecurity, r/MachineLearning,)</li>
           </ul>
       </div>
   </div>
</main>

<!-- Modals pour les détails des articles -->
<?php foreach ($articles as $article): ?>
   <div id="modal-<?= $article['id'] ?>" class="modal">
       <div class="modal-content">
           <span class="close">&times;</span>
           <h2><?= $article['title'] ?></h2>
           
           <div class="article-meta">
               <span class="article-date"><i class="far fa-calendar"></i> <?= $article['date'] ?></span>
               <span class="article-category"><i class="fas fa-tag"></i> 
                   <?= getCategoryName($article['category'], $categories) ?>
               </span>
               <span class="article-source">Source: <?= $article['source'] ?></span>
           </div>
           
           <div class="article-image-full">
               <img src="<?= $article['image'] ?>" alt="<?= $article['title'] ?>">
           </div>
           
           <div class="article-content">
               <p class="article-summary"><?= $article['summary'] ?></p>
               <p><?= $article['content'] ?></p>
           </div>
           
           <div class="article-tags">
               <h3>Tags</h3>
               <div class="tags">
                   <?php foreach ($article['tags'] as $tag): ?>
                       <span class="tag"><?= $tag ?></span>
                   <?php endforeach; ?>
               </div>
           </div>
           
           <div class="modal-actions">
               <button class="btn btn-danger close-modal">Fermer</button>
               <a href="<?= $article['link'] ?>" target="_blank" class="btn btn-primary">
                   Voir la source <i class="fas fa-external-link-alt"></i>
               </a>
           </div>
       </div>
   </div>
<?php endforeach; ?>


<header>
    <div class="page">
        <h1 class="neon-blue">Bienvenue</h1>
        <h3>Je m'appelle <?= PERSONAL_NAME ?></h3>
    </div>
</header>

<main class="box fadeUp" style="animation-delay: 1s;">
    <h1 id="presentation">Présentation</h1>
    <p>
        Je m'appelle Erwan Arnaud, actuellement étudiant en BTS SIO SLAM au lycée Paul Sabatier à Carcassonne.
        Passionné par le développement informatique, j'ai choisi l'option SLAM pour approfondir mes compétences
        en programmation et en génie logiciel.
    </p>

    <h2>Sujets étudiés en SLAM :</h2>
    <div class="grid-2-cols">
        <ul>
            <li>Programmation : HTML, CSS, JavaScript, PHP, SQL, etc.</li>
            <li>Algorithmique et structures de données</li>
            <li>Bases de données</li>
            <li>Réseaux et télécommunications</li>
        </ul>
        <ul>
            <li>Systèmes d'exploitation</li>
            <li>Architecture matérielle</li>
            <li>Génie logiciel</li>
            <li>Sécurité informatique</li>
        </ul>
    </div>

    <div class="text-center mt-4">
        <a href="<?= IMAGES_URL ?>CV_de_Erwan_Arnaud.pdf" target="_blank" class="btn btn-primary">
            Voir mon CV
        </a>
    </div>
    <br>
</main>
<br>
<main class="box fadeUp" style="animation-delay: 1.5s;">
    <h1 id="motivation">Motivation</h1>
    <p>
        Le codage m'intéresse énormément car il permet de créer des solutions innovantes et de résoudre des problèmes
        complexes. Aujourd'hui, le codage est essentiel dans de nombreux domaines, allant du développement web à
        l'intelligence artificielle, en passant par la cybersécurité et les systèmes embarqués.
    </p>
    <p>
        Le développement web, en particulier, me passionne car il permet de créer des interfaces utilisateur
        interactives
        et attrayantes. J'aime l'idée de pouvoir transformer des idées en réalité numérique, en créant des sites web et
        des applications qui répondent aux besoins des utilisateurs.
    </p>
    <p>
        Travailler dans le développement web me permettrait de combiner ma créativité avec mes compétences techniques
        pour créer des expériences utilisateur exceptionnelles. Je suis motivé par l'idée de contribuer à des projets
        qui ont un impact positif sur les utilisateurs et les entreprises.
    </p>
</main>
<br>
<main class="box fadeUp" style="animation-delay: 2s;">
    <h1>Parcours et Objectifs</h1>
    <p>
        Mon parcours en BTS SIO SLAM m'a permis d'acquérir une solide formation en développement informatique.
        J'ai pu mettre en pratique mes connaissances lors de mes stages en entreprise, où j'ai travaillé sur des
        projets concrets et collaboré avec des professionnels du secteur.
    </p>
    <p>
        Mes objectifs à court terme sont de valider mon BTS avec d'excellentes notes et de poursuivre mes études
        en licence professionnelle ou en école d'ingénieur pour approfondir mes connaissances en développement web
        et en intelligence artificielle.
    </p>
    <p>
        À long terme, je souhaite devenir développeur full-stack ou spécialiste en cybersécurité, et contribuer
        à des projets innovants qui répondent aux défis technologiques actuels.
    </p>

    <div class="cta-buttons">
        <div class="text-center mt-5">
            <a href="<?= IMAGES_URL ?>Tableau.pdf" target="_blank"
                class="btn btn-primary">
                Voir mon Tableau de Synthèse
            </a>
        </div>
        <a href="<?= page_url('projets') ?>" class="btn btn-secondary">
            Voir mes projets <i class="fas fa-arrow-right"></i>
        </a>
        <a href="<?= page_url('competences') ?>" class="btn btn-success">
            Mes compétences <i class="fas fa-arrow-right"></i>
        </a>
    </div>
</main>
<br>
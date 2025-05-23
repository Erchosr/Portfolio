<header>
    <div class="page">
        <h1 class="neon-red">Page non trouvée</h1>
    </div>
</header>

<main class="box fadeUp" style="animation-delay: 1s;">
    <div class="error-container">
        <div class="error-code">404</div>
        <h2>Oups ! La page que vous recherchez n'existe pas.</h2>
        <p>Il semble que vous ayez suivi un lien cassé ou que vous ayez entré une URL qui n'existe pas sur ce site.</p>
        <a href="<?= page_url('home') ?>" class="btn btn-primary">
            <i class="fas fa-home"></i> Retour à l'accueil
        </a>
    </div>
</main>


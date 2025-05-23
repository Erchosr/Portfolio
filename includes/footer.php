<footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p><i class="fas fa-envelope"></i> <?= PERSONAL_EMAIL ?></p>
                    <p><i class="fas fa-phone"></i> <?= PERSONAL_PHONE ?></p>
                </div>
                
                <div class="footer-section">
                    <h3>Liens Rapides</h3>
                    <ul>
                        <li><a href="<?= page_url('home') ?>">Accueil</a></li>
                        <li><a href="<?= page_url('projets') ?>">Projets</a></li>
                        <li><a href="<?= page_url('contact') ?>">Contact</a></li>
                        <li><a href="<?= page_url('legal') ?>">Mentions Légales</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Réseaux Sociaux</h3>
                    <div class="social-links">
                        <a href="<?= PERSONAL_GITHUB ?>" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="<?= PERSONAL_LINKEDIN ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?= CURRENT_YEAR ?> <?= PERSONAL_NAME ?>. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
    
    <!-- Scripts -->
    <script src="<?= JS_URL ?>main.js"></script>
    <?php if (in_array($current_page, ['experience', 'veille', 'projets'])): ?>
    <script src="<?= JS_URL ?>modal.js"></script>
    <?php endif; ?>
</body>
</html>


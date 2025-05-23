<?php
// Traitement du formulaire de contact
$form_result = process_contact_form();
?>

<header>
    <div class="page">
        <h1 class="neon-blue">Contact</h1>
    </div>
</header>

<main class="box fadeUp" style="animation-delay: 1s;">
    <div class="contact-container">
        <div class="contact-info">
            <h2>Contactez-moi</h2>
            <p>
                N'hésitez pas à me contacter pour discuter de projets, d'opportunités professionnelles ou simplement pour
                échanger sur des sujets liés au développement web et à l'informatique.
            </p>
            
            <div class="contact-methods">
                <div class="contact-method">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <h3>Email</h3>
                        <p><?= PERSONAL_EMAIL ?></p>
                    </div>
                </div>
                
                <div class="contact-method">
                    <i class="fas fa-phone"></i>
                    <div>
                        <h3>Téléphone</h3>
                        <p><?= PERSONAL_PHONE ?></p>
                    </div>
                </div>
                
                <div class="contact-method">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <h3>Localisation</h3>
                        <p><?= PERSONAL_LOCATION ?></p>
                    </div>
                </div>
                
                <div class="contact-method">
                    <i class="fab fa-linkedin"></i>
                    <div>
                        <h3>LinkedIn</h3>
                        <a href="<?= PERSONAL_LINKEDIN ?>" target="_blank">linkedin.com/in/erwan-arnaud</a>
                    </div>
                </div>
                
                <div class="contact-method">
                    <i class="fab fa-github"></i>
                    <div>
                        <h3>GitHub</h3>
                        <a href="<?= PERSONAL_GITHUB ?>" target="_blank">github.com/Erchosr</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<br>
<main class="box fadeUp" style="animation-delay: 1.5s;">
    <h2>Disponibilité</h2>
    <p>
        Je suis actuellement à la recherche d'opportunités professionnelles dans le domaine du développement web et de
        la programmation. Je suis disponible pour des stages, des alternances ou des emplois à temps plein.
    </p>
    <p>
        Je suis particulièrement intéressé par les postes de développeur web, développeur full-stack ou spécialiste en
        cybersécurité. Je suis ouvert à la mobilité géographique et au télétravail.
    </p>
    <p>
        N'hésitez pas à me contacter pour discuter de vos besoins et de la façon dont je pourrais contribuer à votre
        entreprise ou à vos projets.
    </p>
</main>


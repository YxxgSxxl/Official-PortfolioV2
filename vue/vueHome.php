<?php
null
    ?>
<!-- Main Content -->
<main>
    <section class="home-container">
        <div class="home-content">
            <div class="home-one">
                <h1>Enchanté, moi c'est Alex.</h1>
                <p>
                    Un développeur amateur et passionné. Actuellement en BUT MMI à l'Université de Haute Alsace de
                    Mulhouse.
                </p>
            </div>
            <div class="home-two">

            </div>
        </div>

    </section>
    <section class="about-container">
        <div class="about-content">
            <h2 id="about">À propos de moi</h2>
            <p>Je suis un développeur web basé à Mulhouse, France. Je suis passionné par l'informatique, le web et
                la musique. J'ai une expérience dans le développement front-end et back-end, ainsi que dans
                la
                conception de sites web.
            </p>
            <p>
                Découvrez le code de mes projets opensource sur Github:
            </p>
            <div class="about-git">
                <a class="welcome-picture" title="Mon profil Github" href="https://github.com/YxxgSxxl" target="_blank">
                    <img src="https://avatars.githubusercontent.com/u/114391274?v=4" alt="">
                </a>
                <h2 style="margin-top: 30px; font-size: 1em;">Mon profil Github</h2>
            </div>
        </div>
    </section>

    <section class="projects-container">
        <h2 id="projects">Projets</h2>

        <?php include 'components/projectsSample.php'; ?>

        <a href="https://alexeckes.com/index.php?action=projects">
            <div class="more-projects">
                <button type="button">
                    Plus de projets
                </button>
            </div>
        </a>
    </section>

    <section class="contact-container">
        <hgroup>
            <h2 id="contact">Contact</h2>
            <h3>Envie de me contacter ?</h3>
        </hgroup>
        <small style="color: grey; margin: 0;">* <span style="font-size: 2em;">→</span> Obligatoire</small>
        <?php include 'components/contactForm.php'; ?>
    </section>
</main>

<script src="./js/projects.js"></script>
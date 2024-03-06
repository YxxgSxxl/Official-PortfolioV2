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
                <a class="welcome-picture" title="Mon profil Github" href="https://github.com/YxxgSxxl" target="_blank">
                    <img src="https://avatars.githubusercontent.com/u/114391274?v=4" alt="">
                </a>
                <h2 style="margin-top: 30px; font-size: 1em;">Mon profil Github</h2>
            </div>
        </div>

    </section>
    <section class="about-container">
        <div class="about-content">
            <h2 id="about">À propos de moi</h2>
            <p>Je suis un développeur web basé à Mulhouse, France. Je suis passionné par l'informatique, le web et
                la musique. J'ai une expérience dans le développement front-end et back-end, ainsi que dans
                la
                conception de sites web.</p>
            <p>

            </p>
        </div>
    </section>

    <section class="projects-container">
        <h2>Projets</h2>
        <div class="projects-grid">
            <?php include 'components/projectsSample.php'; ?>
        </div>
    </section>

    <section class="contact-container">
        <h2 id="contact">Contact</h2>
        <small style="color: grey; margin: 0;">* <span style="font-size: 2em;">→</span> Obligatoire</small>
        <?php include 'components/contactForm.php'; ?>
    </section>
</main>
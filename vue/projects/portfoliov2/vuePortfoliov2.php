<?php
null
    ?>

<!-- Main Content -->
<main>
    <section class="project-content">
        <h1>Portfolio V2</h1>
        <small style="font-size: 0.8rem; text-align: start; transform: translateY(-10px);">Vous êtes actuellement sur ce projet ^^</small>
        <p>
            Pour ce projet, j'ai d'abord du me procurer un nom de domaine (DNS) chez <a
                href="https://www.ovhcloud.com/fr/" class="links-highlight" target="_blank">OVH</a> ainsi qu'un serveur
            web.
            J'ai opté pour
            un VPS (Virtual Private Server) de petite capacité de chez <a href="https://www.ionos.fr/"
                class="links-highlight" target="_blank">IONOS</a>. J'ai ensuite sécurisé
            un maximum le VPS tout d'abord en changeant le mot de passe root et en interdisant la connexion à celui-ci,
            j'ai par la suite ajouté des règles sur les ports ouverts via le pare feu de chez IONOS, puis, avec <a
                href="https://doc.ubuntu-fr.org/ufw" class="links-highlight" target="_blank">ufw</a> pour
            un effet double action. Par la suite, j'ai installé quelques outils d'analyse pour scanner mon VPS: <a
                href="https://doc.ubuntu-fr.org/rkhunter" class="links-highlight" target="_blank">rkhunter</a>
            afin de détecter les potentiels rootkit sur le serveur et <a href="https://doc.ubuntu-fr.org/aide_hips"
                class="links-highlight" target="_blank">aide</a> (Advanced Intrusion Detection Environment), qui va se
            charger de détecter tout changement louches dans les fichiers systèmes.
        </p>
        <p>
            J'ai par la suite alloué une mémoire SWAP sur mon VPS. J'ai choisi de faire cela car mon VPS a une faible
            capacité de mémoire ce qui pourrait permettre au cas où il manquerait de la mémoire, d'en utiliser via cette
            zone du disque dur.
        </p>
        <p>
            Rédaction en cours...
        </p>
    </section>
</main>
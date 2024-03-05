<?php
null
    ?>

<form class="contact-form" onsubmit="sendEmail(); reset(); return false">
    <input type="text" placeholder="Nom Complet *" name="name" id="contact-name" autocomplete="off" required>
    <input type="email" placeholder="Email *" name="email" id="contact-email" autocomplete="off" required>
    <input type="text" placeholder="Sujet *" name="subject" id="contact-subject" autocomplete="off" required>
    <textarea name="message" id="contact-message" cols="30" rows="10" placeholder="Message *" autocomplete="off" required></textarea>
    <input type="submit" value="Envoyer" class="submit-button" id="submit-button" autocomplete="off">
</form>
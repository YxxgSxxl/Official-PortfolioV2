////////////////////////// HEADER COMPONENT //////////////////////////
// burger Menu //
let burgerIcon = document.querySelector(".header-burgericon"); // burgerIcon to open headerMenu
let exitMenu = document.querySelector(".header-menuexit") // Cross to close headerMenu
let headerMenu = document.querySelector(".header-menu"); // headerMenu with all the hyperlinks
let menuTag = document.querySelectorAll("ul li a"); // All headerMenu hyperlinks


// Burger Menu Opening
burgerIcon.addEventListener("click", () => {
    headerMenu.classList.toggle('header-open');
    burgerIcon.classList.add('no-visibility');
})

// Closing Header Menu
exitMenu.addEventListener("click", () => {
    headerMenu.classList.toggle('header-open');
    burgerIcon.classList.remove('no-visibility');
})

// Closing Header Menu When Clicking On A Hyperlink
for (let i = 0; i < menuTag.length; i++) {
    menuTag[i].addEventListener("click", function () {
        headerMenu.classList.toggle("header-open");
        burgerIcon.classList.remove('no-visibility');
    });
}

////////////////////////// CONTACT FORM MAILER //////////////////////////
function sendEmail() {
    const name = document.getElementById("contact-name").value;
    const email = document.getElementById("contact-email").value;
    const subject = document.getElementById("contact-subject").value;
    const messageMail = document.getElementById("contact-message").value;

    Email.send({
        SecureToken : "6d3c734e-88ee-4294-afe1-06c6e9768930",
        To: 'contact.eckesalex14@gmail.com',
        From: "eckes.alex14@gmail.com",
        Subject: "Email: " + email + " || Sujet: " + subject,
        Body: messageMail
    }).then(
        message => {
            if (message == "OK") {
                alert("Email envoyé avec succès !");
                console.log("Email, envoyé avec succès !" + '\n', "Nom: " + name + '\n', "Prenom: " + email + '\n', "Sujet: " + subject + '\n', "Message: " + messageMail);
            } else {
                alert("Erreur lors de l'envoi du mail !" + " Le message d'erreur est le suivant: " + message);
                console.error("Erreur lors de l'envoi du mail !" + '\n', "Nom: " + name + '\n', "Prenom: " + email + '\n', "Sujet: " + subject + '\n', "Message: " + messageMail);
            }
        })
}
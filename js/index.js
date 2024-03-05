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
    const message = document.getElementById("contact-message").value;

    Email.send({
        Host: "smtp.elasticemail.com",
        Username: "contact.eckesalex14@gmail.com",
        Password: "B5B89BFF7B1733C5C2DBC029A1FA3EA0B556",
        To: 'contact.eckesalex14@gmail.com',
        From: "eckes.alex14@gmail.com",
        Subject: "Mail: " + email + "Sujet: " + subject,
        Body: message
    }).then(
        message => alert(message)
    ).then(
        console.log("Mail, envoyé avec succès !" + '\n', "Nom: " + name + '\n', "Prenom: " + email + '\n', "Sujet: " + subject + '\n', "Message: " + message)
    );
}
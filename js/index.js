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

////////////////////////// PROJECTS SECTION FETCH //////////////////////////
let projectContainer = document.querySelector(".project-container");

// Fetch function that dumps JSON format files and returnes it
function fetchData(path) {
    return fetch(path)
        .then(r => { return r.json() })
        .then(json => {
            return json;
        });
}

// Process the data of projects and display it in the HTML page
function processData(projects) {
    projects.forEach(project => {
        projectContainer.innerHTML += `
        <button type="button" class="project-style">
        <a href="${project.link}" class="open-project">
            <h3>${project.title}</h3>
            <p>
            ${project.description}
            </p>
            <div class="project-icons">
                ${project.icons}
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none"
                stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <g fill="none" fill-rule="evenodd">
                    <path d="M18 14v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8c0-1.1.9-2 2-2h5M15 3h6v6M10 14L20.2 3.8" />
                </g>
            </svg>
        </a>
        </button>
        `;
    });
}

goFetch();

// function that waits for the fetch to be done and then process the data to display it
async function goFetch() {
    let projects = await fetchData("./projects-data/projectsSample.json");

    processData(projects);
}


////////////////////////// CONTACT FORM MAILER SYSTEM //////////////////////////
function sendEmail() {
    const name = document.getElementById("contact-name").value;
    const email = document.getElementById("contact-email").value;
    const subject = document.getElementById("contact-subject").value;
    const messageMail = document.getElementById("contact-message").value;

    Email.send({
        SecureToken: "6d3c734e-88ee-4294-afe1-06c6e9768930",
        To: 'contact.eckesalex14@gmail.com',
        From: 'eckes.alex14@gmail.com',
        Subject: "Sujet: " + subject + " || Email: " + email + " || Nom: " + name,
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
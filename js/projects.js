////////////////////////// PROJECTS SECTION FETCH //////////////////////////
let moreprojectContainer = document.querySelector(".moreproject-container");

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
        moreprojectContainer.innerHTML += `
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
    let projects = await fetchData("./projects-data/projects.json");

    processData(projects);
}
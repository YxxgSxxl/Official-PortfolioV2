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
    menuTag[i].addEventListener("click", function() {
        headerMenu.classList.toggle("header-open");
        burgerIcon.classList.remove('no-visibility');
      });
}
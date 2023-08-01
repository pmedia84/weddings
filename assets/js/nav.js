//nav button active states
const navBtn = document.querySelector('.nav-btn');
const navLinks = document.querySelector('.nav-links');
const navClose = document.querySelector('#nav-close');
navBtn.addEventListener('click', () => {
    const isOpened = navBtn.getAttribute('aria-expanded') === "true";

    if (isOpened ? closenavLinks() : opennavLinks());
})
navClose.addEventListener('click', () => {
    const isOpened = navBtn.getAttribute('aria-expanded') === "true";

    if (isOpened ? closenavLinks() : opennavLinks());
})

function opennavLinks() {
    navBtn.setAttribute('aria-expanded', "true");
    navLinks.setAttribute('data-state', "opened");
}
function closenavLinks() {
    navBtn.setAttribute('aria-expanded', "false");
    navLinks.setAttribute('data-state', "closing");
    navLinks.addEventListener('animationend', () => {
        navLinks.setAttribute('data-state', "closed");

    }, { once: true })
}

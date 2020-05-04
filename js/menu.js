const menuButton = document.querySelector('.menu-button');
const closeButton = document.querySelector('.close-button');
const nav = document.querySelector('nav');

HandleMenu = () => {
    if (nav.classList.contains('slide-up')){
        nav.classList.remove('slide-up');
        closeButton.classList.remove('hidden');
        menuButton.classList.add('hidden');
    }
    else {
        nav.classList.add('slide-up');
        closeButton.classList.add('hidden');
        menuButton.classList.remove('hidden');
    }
}

menuButton.addEventListener('click', () => {
    HandleMenu();
})

closeButton.addEventListener('click', () => {
    HandleMenu();
})
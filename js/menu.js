let menuButton = document.querySelector('.menu-button');
const nav = document.querySelector('nav');

HandleMenu = () => {
    if (nav.classList.contains('hidden'))
        nav.classList.remove('hidden');
    else 
        nav.classList.add('hidden');
}

menuButton.addEventListener('click', () => {
    HandleMenu();
    console.log('clicked')
})
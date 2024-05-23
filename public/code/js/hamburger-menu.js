let closeButton = document.getElementById('close-menu');
let hamburgerMenu = document.getElementById('hamburger-menu');
let mobileMenu = document.getElementById('mobile-menu')
let menu = document.getElementById('menu')


hamburgerMenu.addEventListener('click', () => {
    mobileMenu.style.display = 'flex'
})

closeButton.addEventListener('click',() => {
    console.log('test')
    mobileMenu.style.display = 'none';
})
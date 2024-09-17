import '../css/style.scss';


document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const menuContainer = document.querySelector('.menu-navigation-container');

    // Fonction pour vérifier si la largeur de l'écran est inférieure à 768px
    function checkScreenWidth() {
        if (window.innerWidth <= 768) {
            // Activer le comportement du menu toggle uniquement pour les petits écrans
            menuToggle.addEventListener('click', function() {
                menuToggle.classList.toggle('open');
                menuContainer.classList.toggle('open');
            });
        } else {
            // Réinitialiser le menu pour les grands écrans
            menuToggle.classList.remove('open');
            menuContainer.classList.remove('open');
        }
    }

    // Vérification au chargement de la page et lors des redimensionnements
    checkScreenWidth();
    window.addEventListener('resize', checkScreenWidth);
});

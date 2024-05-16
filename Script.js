document.addEventListener('DOMContentLoaded', function() {
    
    document.querySelectorAll('.animate-left, .animate-right, .animateTS').forEach(function(element) {
        element.classList.add('animate-done');
    });

    document.querySelectorAll('.animateTS').forEach(function(element) {
        element.classList.add('animate-done');
    });
});


document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche l'envoi réel du formulaire

    // Affiche le message de confirmation
    document.getElementById('confirmationMessage').style.display = 'block';

    // Réinitialise le formulaire
    document.getElementById('contactForm').reset();
});

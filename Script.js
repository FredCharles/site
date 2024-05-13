document.addEventListener('DOMContentLoaded', function() {
    
    document.querySelectorAll('.animate-left, .animate-right, .animateTS').forEach(function(element) {
        element.classList.add('animate-done');
    });

    document.querySelectorAll('.animateTS').forEach(function(element) {
        element.classList.add('animate-done');
    });
});

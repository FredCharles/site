document.addEventListener('DOMContentLoaded', function() {
    
    document.querySelectorAll('.animate-left, .animate-right, .animateTS').forEach(function(element) {
        element.classList.add('animate-done');
    });

    document.querySelectorAll('.animateTS').forEach(function(element) {
        element.classList.add('animate-done');
    });
});


document.getElementById('jobApplicationForm').addEventListener('submit', function(event) {
    let cv = document.getElementById('cv').files[0];
    let fileSizeLimit = 5 * 1024 * 1024; // 5MB limit

    if (cv.size > fileSizeLimit) {
        alert('La taille du fichier doit être inférieure à 5 Mo.');
        event.preventDefault();
    }
});


document.addEventListener('DOMContentLoaded', function() {
    let faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(function(question) {
        question.addEventListener('click', function() {
            let answer = this.nextElementSibling;
            let allAnswers = document.querySelectorAll('.faq-answer');
            
            // Close all other answers
            allAnswers.forEach(function(ans) {
                if (ans !== answer) {
                    ans.style.display = 'none';
                }
            });

            // Toggle the current answer
            if (answer.style.display === 'block') {
                answer.style.display = 'none';
            } else {
                answer.style.display = 'block';
            }
        });
    });
});


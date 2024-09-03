import './bootstrap';
import 'bootstrap';


document.getElementById('scrollToTop').addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' })
});


document.addEventListener("DOMContentLoaded", function() {
    // Funzione per cambiare la lingua
    window.changeLang = function(lang) {
        // Memorizza la selezione nel localStorage
        localStorage.setItem('selectedLang', lang);
        
        const currentLangElement = document.getElementById('currentLang');
        const langElements = document.querySelectorAll('.dropdown-content-lang .dropdown-item');
        
        langElements.forEach(item => {
            const selectedLang = item.getAttribute('data-lang');
            if (selectedLang === lang) {
                currentLangElement.innerHTML = item.innerHTML;
            }
        });
    }
    
    // Recupera la selezione salvata dal localStorage
    const savedLang = localStorage.getItem('selectedLang');
    if (savedLang) {
        const currentLangElement = document.getElementById('currentLang');
        const langElements = document.querySelectorAll('.dropdown-content-lang .dropdown-item');
        
        langElements.forEach(item => {
            const selectedLang = item.getAttribute('data-lang');
            if (selectedLang === savedLang) {
                currentLangElement.innerHTML = item.innerHTML;
            }
        });
    }
});


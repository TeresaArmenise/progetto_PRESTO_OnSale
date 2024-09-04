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
        
        // Aggiorna l'elemento corrente della lingua
        updateCurrentLang(lang);
    }
    
    // Funzione per aggiornare l'elemento corrente della lingua e nascondere l'opzione selezionata
    function updateCurrentLang(lang) {
        let currentLangElement = document.getElementById('currentLang');
        let langElements = document.querySelectorAll('.dropdown-content-lang .dropdown-item');
        
        langElements.forEach(item => {
            let selectedLang = item.getAttribute('data-lang');
            if (selectedLang === lang) {
                currentLangElement.innerHTML = item.innerHTML;
                // Nascondi l'opzione selezionata
                item.style.display = 'none';
            } else {
                // Mostra tutte le altre opzioni
                item.style.display = 'block';
            }
        });
    }
    
    // Recupera la selezione salvata dal localStorage
    let savedLang = localStorage.getItem('selectedLang');
    if (savedLang) {
        updateCurrentLang(savedLang);
    } else {
        // Se non c'è una lingua salvata, mostra tutte le opzioni
        let langElements = document.querySelectorAll('.dropdown-content-lang .dropdown-item');
        langElements.forEach(item => {
            item.style.display = 'block';
        });
    }
});

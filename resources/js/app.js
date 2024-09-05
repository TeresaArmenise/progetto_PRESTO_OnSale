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

// Funzione per aggiornare le valutazioni AI al cambio di immagine
document.addEventListener('DOMContentLoaded', function () {
    let carousel = document.getElementById('carouselExampleIndicatorsFade');

    if (carousel) {
        carousel.addEventListener('slid.bs.carousel', function (event) {
            let activeIndex = event.to;

            // Nascondi subito tutte le valutazioni AI
            let allRatings = document.querySelectorAll('.carousel-item .col-6[id^="ratings-"]'); // Seleziona solo gli elementi di valutazione AI
            allRatings.forEach(function (rating) {
                rating.classList.add('d-none'); // Nascondi immediatamente solo le valutazioni
            });

            // Mostra la valutazione AI della slide attiva con un ritardo
            let activeRatings = document.getElementById('ratings-' + activeIndex);
            if (activeRatings) {
                setTimeout(function () {
                    activeRatings.classList.remove('d-none'); // Mostra con ritardo
                }, 100);
            }
        });

        // Mostra subito la valutazione della prima immagine al caricamento della pagina con un ritardo
        let initialRatings = document.getElementById('ratings-0');
        if (initialRatings) {
            setTimeout(function () {
                initialRatings.classList.remove('d-none');
            }, 10);
        }
    }
});

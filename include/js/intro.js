// Intro.js

// Wenn die gesamte Seite geladen ist, führ den folgenden Code aus
document.addEventListener('DOMContentLoaded', function() {
    // Button für die Aktion und den scrollbaren Text holen
    const actionButton = document.getElementById('action-button'); 
    const scrollableText = document.getElementById('scrollable-text'); 

    // Mach sicher, dass der Button beim Laden der Seite versteckt ist
    actionButton.style.display = 'none'; // Button bleibt unsichtbar, bis wir scrollen

    // Hier hören wir auf das Scrollen im Textbereich
    scrollableText.addEventListener('scroll', function() {
        // Überprüfen, ob wir ganz nach unten gescrollt haben
        if (scrollableText.scrollTop + scrollableText.clientHeight >= scrollableText.scrollHeight) {
            // Wenn wir am Ende sind, Button sichtbar machen
            actionButton.style.display = 'block'; // Jetzt kann man den Button sehen
        }
    });
});

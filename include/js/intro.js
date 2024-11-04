document.addEventListener('DOMContentLoaded', function() {
    const actionButton = document.getElementById('action-button');

    // Button anzeigen, nachdem die Animation abgeschlossen ist (20 Sekunden)
    setTimeout(function() {
        actionButton.style.display = 'block';
    }, 20000);
});

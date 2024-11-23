<!-- Footer CSS für Styling -->
<header>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet"> <!-- Google Fonts -->
    <link rel="stylesheet" href="../css/styles.css"> <!-- Pfad zur CSS-Datei -->
</header>

<!-- Footer-Container -->
<footer class="footer-custom">
    <div class="footer-left">
        <!-- Linke Inhalte könnten hier ergänzt werden -->
    </div>
    <div class="footer-right">
        <a class="footer-link" href="../../impressum/impressum.php">Impressum</a> <!-- Impressum-Link -->
    </div>
</footer>

<!-- Styles für den Footer -->
<style>
/* Footer Styling */
.footer-custom {
    background-color: #285238; /* Dunkles Grün */
    padding: 10px 20px;
    display: flex;
    justify-content: space-between; /* Linke und rechte Inhalte verteilen */
    align-items: center;
    flex-wrap: wrap; /* Inhalt wird bei schmalem Bildschirm umgebrochen */
    box-sizing: border-box; /* Padding wird in die Gesamtbreite einbezogen */
}

/* Link Styling */
.footer-link {
    font-family: "bangers"; /* Nur Helvetica für den Link */
    font-size: 16px;
    color: #FFD700; /* Gelb wie "Die Energieretter" */
    text-decoration: none;
    transition: color 0.3s;
}

.footer-link:hover {
    color: #fff; /* Weiß beim Hover für besseren Kontrast */
}

/* Optional: Falls linker Inhalt hinzugefügt wird */
.footer-left {
    display: flex;
    align-items: center;
}

/* Rechter Bereich */
.footer-right {
    display: flex;
    align-items: center;
    margin-left: auto; /* Abstand von links, um den Inhalt ganz nach rechts zu rücken */
}

/* Responsives Verhalten */
@media (max-width: 600px) {
    .footer-right {
        margin-left: 0; /* Entfernt den Abstand, damit es bei kleinen Bildschirmen korrekt angezeigt wird */
    }
    .footer-custom {
        flex-direction: column; /* Stellt die Inhalte untereinander dar */
        align-items: flex-start; /* Alles linksbündig bei schmalem Bildschirm */
    }
    .footer-right {
        margin-top: 10px; /* Abstand zwischen den Bereichen */
        align-self: flex-end; /* "Impressum" bleibt am rechten Rand, wenn Platz vorhanden ist */
    }
}
</style>

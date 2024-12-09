<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zukunftsenergien</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/styles.css">

    <!-- Navigation einbinden -->
    <nav class="navbar-custom">
        <!-- Branding -->
        <a class="navbar-brand" href="../../mission/missionsstart.php">Die Energieretter</a>
        <!-- Hauptmenü -->
        <div class="menu">
            <a href="../../index.php" class="menu-link menu-item">Vorspann</a>
            <div class="dropdown menu-item">
                <button class="dropbtn menu-link">Mission</button>
                <div class="dropdown-content">
                    <a href="../../mission/superhelden.php">Die Superhelden</a>
                    <a href="../../mission/missionsstart.php">Missionsstart</a>
                    <a href="../../mission/codeeingabe.php">Code-Eingabe</a>
                </div>
            </div>
            <div class="dropdown menu-item" style="margin-right: 50px;">
                <button class="dropbtn menu-link">Retterwissen</button>
                <div class="dropdown-content">
                    <a href="../../retterwissen/zukunftsenergien.php">Zukunftsenergie</a>
                    <a href="../../retterwissen/innovationen.php">Innovationen</a>
                    <a href="../../retterwissen/klimaschaeden.php">Klimaschäden</a>
                </div>
            </div>
        </div>
    </nav>

    <style>
/* Allgemeine Layout-Einstellungen */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    overflow-x: hidden; /* Verhindert horizontales Scrollen */
}

/* Layout der Sprechblasen */
main {
    padding: 20px;
    display: flex;
    flex-direction: column; /* Stellt sicher, dass die Sprechblasen untereinander stehen */
    gap: 15px; /* Abstand zwischen den Sprechblasen */
    max-height: 90vh; /* Maximale Höhe des Inhaltsbereichs */
    overflow-y: auto; /* Ermöglicht das vertikale Scrollen */
    margin-top: 100px; /* Abstand von der Navbar */
    padding-right: 10px; /* Optional, um etwas Abstand für den Scrollbalken zu schaffen */
}

/* Sprechblasen */
.sprechblase {
    position: relative;
    background: #fff;
    border: 2px solid #333;
    border-radius: 10px; /* Kleinere Rundung */
    padding: 10px 20px; /* Etwas mehr Padding für eine breitere Sprechblase */
    font-size: 14px; /* Etwas größere Schriftgröße */
    line-height: 1.3; /* Engere Zeilenhöhe */
    color: black;
    text-align: justify;
    box-sizing: border-box;
    width: fit-content; /* Sprechblase nimmt nur so viel Platz wie der Text benötigt */
    max-width: 500px; /* Breitere Sprechblasen */
    margin-left: 20px; /* Sprechblasen leicht nach innen verschieben */
    margin-right: 20px; /* Etwas Abstand zur rechten Seite */
}

/* Lautsprechersymbol oben rechts */
.sprechblase img {
    width: 16px; /* Lautsprechersymbol auf 16px setzen */
    height: 16px;
    cursor: pointer;
    position: absolute;
    top: 10px;
    right: 10px; /* Lautsprechersymbol oben rechts in die Ecke setzen */
}

/* Sprechblase Pfeil */
.sprechblase::after {
    content: '';
    position: absolute;
    bottom: -8px; /* Verkleinerter Pfeil */
    left: 20px; /* Etwas näher an der Sprechblase */
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 8px 8px 0 8px; /* Kleinere Pfeilgröße */
    border-color: #fff transparent transparent transparent;
}

.sprechblase::before {
    content: '';
    position: absolute;
    bottom: -10px; /* Verkleinerter Pfeil */
    left: 18px; /* Etwas näher an der Sprechblase */
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 10px 10px 0 10px; /* Kleinere Pfeilgröße */
    border-color: #333 transparent transparent transparent;
}

/* Stil für anklickbare Wörter - Energieretter Gelb */
.sprechblabe span {
    color: #e8a723; /* Energieretter Gelb */
    cursor: pointer;
    text-decoration: underline;
}

/* Anordnung der Sprechblasen */
#sprechblase1 {
    align-self: flex-start; /* Sprechblase 1 nach links */
}

#sprechblase2 {
    align-self: flex-end; /* Sprechblase 2 nach rechts */
}
/* Mehr Abstand für Sprechblase 3, damit sie nicht zu nah am Footer steht */
#sprechblase3 {
    align-self: flex-start; /* Sprechblase 3 nach links */
    margin-bottom: 55px; /* Mehr Abstand nach unten */
}

#sprechblase3 {
    align-self: flex-start; /* Sprechblase 3 nach links */
}

/* Buttons */
.buttons {
    margin-top: 5px; /* Weniger Platz zwischen Button und Text */
    display: flex;
    gap: 8px;
}

.button {
    background-color: #e8a723;
    color: white;
    border: none;
    padding: 6px 10px; /* Kleinere Button-Größe */
    border-radius: 5px;
    cursor: pointer;
    font-size: 10px; /* Kleinere Schriftgröße für Buttons */
}

.button:hover {
    background-color: #d67b00;
}

/* Karte (Overlay) */
.karte {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: white;
    padding: 12px; /* Weniger Padding für das Overlay */
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    max-width: 60%; /* Kleinere Breite für die Karte */
    z-index: 1000;
    display: none;
}

.karte h2 {
    margin-top: 0;
}

.karte p {
    font-size: 12px; /* Kleinere Schriftgröße */
    line-height: 1.4; /* Kleinere Zeilenhöhe */
}

.close-button {
    background: #e8a723;
    border: none;
    padding: 6px 10px; /* Kleinere Button-Größe */
    color: white;
    border-radius: 5px;
    cursor: pointer;
    font-size: 10px; /* Kleinere Schriftgröße */
}

.close-button:hover {
    background: #d67b00;
}


    </style>
</head>

<body>
    <!-- Hintergrundvideo -->
    <video autoplay muted loop id="backgroundVideo">
        <source src="../bilder_retterwissen/background_video.mp4" type="video/mp4">
        <source src="video/background_video.webm" type="video/webm">
    </video>

    <main>
		
      <!-- Erste Sprechblase -->
<div class="sprechblase" id="sprechblase1">
    <p id="simple1">Sonnenenergie, oder auch <span onclick="zeigeKarte('Solarenergie', 'Solarenergie ist Energie, die von der Sonne kommt. Sie ist besonders umweltfreundlich.')">Solarenergie</span> genannt, ist Energie, die von der <span onclick="zeigeKarte('Sonne', 'Die Sonne ist die Quelle der Solarenergie und strahlt eine riesige Menge an Energie aus.')">Sonne</span> kommt. Die Sonne strahlt eine große Menge an Energie aus. Ein kleiner Teil dieser Strahlen erreicht die Erde und erwärmt sie. Die Menschen können diese Energie nutzen und in andere Energien umwandeln. Die Sonnenstrahlen liefern weit mehr Energie, als Mensch und Natur brauchen können. Mit <span onclick="zeigeKarte('Solarmodulen', 'Solarmodule sind Geräte, die Sonnenenergie in Strom umwandeln.')">Solarmodulen</span> kann man die Sonnenenergie einfangen und in <span onclick="zeigeKarte('Strom', 'Strom ist die umgewandelte Energie, die für den Betrieb von Geräten genutzt wird.')">Strom</span> verwandeln. Das Besondere daran ist, dass sie keine schädlichen Gase produziert und deshalb gut für die <span onclick="zeigeKarte('Umwelt', 'Die Nutzung von Solarenergie hilft, die Umwelt zu schonen, da keine CO2-Emissionen entstehen.')">Umwelt</span> ist.</p>
    <p id="detailed1" style="display:none;">Solarenergie wird durch die Nutzung von Photovoltaikzellen erzeugt, die Sonnenlicht in elektrische Energie umwandeln. Diese Technologie hat das Potenzial, unseren gesamten Energiebedarf zu decken, ohne dabei die Umwelt zu belasten. Sie kann in Haushalten und großen Solarkraftwerken eingesetzt werden.</p>
    <div class="buttons">
        <button class="button" onclick="toggleText('1')">Zu einer ausführlicheren Erklärung</button>
    </div>
    <!-- Audio einbinden --> 
    <img src="../../images/audio.png" alt="Vorlesen" onclick="vorlesen('Sonnenenergie, oder auch Solarenergie genannt, ist Energie, die von der Sonne kommt. Die Sonne strahlt eine große Menge an Energie aus. Ein kleiner Teil dieser Strahlen erreicht die Erde und erwärmt sie. Die Menschen können diese Energie nutzen und in andere Energien umwandeln. Die Sonnenstrahlen liefern weit mehr Energie, als Mensch und Natur brauchen können. Mit Solarmodulen kann man die Sonnenenergie einfangen und in Strom verwandeln. Das Besondere daran ist, dass sie keine schädlichen Gase produziert und deshalb gut für die Umwelt ist.')">
</div>

<!-- Zweite Sprechblase -->
<div class="sprechblase" id="sprechblase2">
    <p id="simple2">Die Technik, um <span onclick="zeigeKarte('Sonnenenergie', 'Solarenergie wird durch die Nutzung von Solarmodulen erzeugt, die Sonnenstrahlen in Strom umwandeln.')">Sonnenenergie</span> zu nutzen, wird immer besser. Manche Häuser haben schon <span onclick="zeigeKarte('Solarzellen', 'Solarzellen sind Photovoltaikzellen, die auf Dächern installiert werden, um Sonnenenergie zu sammeln.')">Solarzellen</span> auf dem Dach, die ihren eigenen <span onclick="zeigeKarte('Strom', 'Der Strom wird durch Photovoltaikmodule aus Sonnenenergie erzeugt.')">Strom</span> erzeugen. Sogar <span onclick="zeigeKarte('Autos', 'Autos, die mit Solarenergie betrieben werden, nutzen Solarmodule zur Stromerzeugung.')">Autos</span> oder <span onclick="zeigeKarte('Taschenlampen', 'Taschenlampen, die mit Solarenergie betrieben werden, sind eine umweltfreundliche Alternative zu batteriebetriebenen Lampen.')">Taschenlampen</span> können mit Sonnenenergie betrieben werden!</p>
    <p id="detailed2" style="display:none;">Solarmodule bestehen aus Photovoltaikzellen, die Licht absorbieren und es in elektrische Energie umwandeln. Sie werden häufig auf Dächern installiert und können zur Eigenversorgung oder zum Einspeisen in das öffentliche Stromnetz genutzt werden.</p>
    <div class="buttons">
        <button class="button" onclick="toggleText('2')">Zu einer ausführlicheren Erklärung</button>
    </div>
    <!-- Audio einbinden -->
    <img src="../../images/audio.png" alt="Vorlesen" onclick="vorlesen('Die Technik, um Sonnenenergie zu nutzen, wird immer besser. Manche Häuser haben schon Solarzellen auf dem Dach, die ihren eigenen Strom erzeugen. Sogar Autos oder Taschenlampen können mit Sonnenenergie betrieben werden!')">
</div>

<!-- Dritte Sprechblase -->
<div class="sprechblase" id="sprechblase3">
    <p id="simple3">Nahe dem Äquator ist die energiereiche <span onclick="zeigeKarte('Sonneneinstrahlung', 'Sonneneinstrahlung ist die Menge an Sonnenenergie, die auf die Erde trifft. Sie ist in Äquatornähe besonders stark.')">Sonneneinstrahlung</span> besonders hoch. Deshalb ist es vor allem dort sinnvoll, mit Hilfe der <span onclick="zeigeKarte('Sonnenenergie', 'Die Solarenergie ist in Regionen nahe des Äquators aufgrund der starken Sonneneinstrahlung besonders effektiv.')">Sonnenenergie</span> <span onclick="zeigeKarte('Strom zu erzeugen', 'Die Erzeugung von Strom durch Solarenergie ist in Regionen mit hoher Sonneneinstrahlung am effektivsten.')">Strom zu erzeugen</span>. In Wüsten wie der Sahara ist es immer sonnig und auch Länder wie Australien und Mexiko sind gut für <span onclick="zeigeKarte('Solarmodule', 'Solarmodule können in Regionen mit hoher Sonneneinstrahlung besonders effizient Strom erzeugen.')">Solarmodule</span>. In Europa haben auch Spanien, Italien und Griechenland viel Sonne. Diese Orte sind perfekt für <span onclick="zeigeKarte('Solarmodule', 'Die Installation von Solarmodulen in sonnenreichen Regionen bietet großes Potenzial zur Nutzung von Solarenergie.')">Solarmodule</span>!</p>
    <p id="detailed3" style="display:none;">Solarenergie spielt eine zentrale Rolle im Klimaschutz, da sie keine CO2-Emissionen verursacht und den Bedarf an fossilen Brennstoffen verringert. Sie ist eine saubere und nachhaltige Energiequelle, die zur Bekämpfung des Klimawandels beiträgt.</p>
    <div class="buttons">
        <button class="button" onclick="toggleText('3')">Zu einer ausführlicheren Erklärung</button>
    </div>
    <!-- Audio einbinden -->
    <img src="../../images/audio.png" alt="Vorlesen" onclick="vorlesen('Nahe dem Äquator ist die energiereiche Sonneneinstrahlung besonders hoch. Deshalb ist es vor allem dort sinnvoll, mit Hilfe der Sonnenenergie Strom zu erzeugen. In Wüsten wie der Sahara ist es immer sonnig und auch Länder wie Australien und Mexiko sind gut für Solarmodule. In Europa haben auch Spanien, Italien und Griechenland viel Sonne. Diese Orte sind perfekt für Solarmodule!')">
</div>

    </main>

    <!-- Karte (Overlay) -->
    <div class="karte" id="karte">
        <h2 id="karte-titel"></h2>
        <p id="karte-text"></p>
        <button class="close-button" onclick="schließeKarte()">Schließen</button>
    </div>

    <script>
        // Karte anzeigen
        function zeigeKarte(titel, text) {
            document.getElementById('karte-titel').textContent = titel;
            document.getElementById('karte-text').textContent = text;
            document.getElementById('karte').style.display = 'block';
        }

        // Karte schließen
        function schließeKarte() {
            document.getElementById('karte').style.display = 'none';
        }

        // Text vorlesen
        function vorlesen(text) {
            const synth = window.speechSynthesis;
            const utterance = new SpeechSynthesisUtterance(text);
            utterance.lang = 'de-DE';
            synth.speak(utterance);
        }

        // Umschalten der Texte (zwischen einfach und detailliert)
        function toggleText(id) {
            const simpleText = document.getElementById('simple' + id);
            const detailedText = document.getElementById('detailed' + id);
            const button = document.querySelector('#sprechblase' + id + ' .button');

            if (detailedText.style.display === "none") {
                detailedText.style.display = "block";
                simpleText.style.display = "none";
                button.textContent = "Zurück zur kurzen Erklärung";
            } else {
                detailedText.style.display = "none";
                simpleText.style.display = "block";
                button.textContent = "Zu einer ausführlicheren Erklärung";
            }
        }
    </script>

    <!-- Footer -->
    <footer class="footer-custom">
        <div class="footer-links">
            <a href="../../impressum/impressum.php">Impressum</a>
        </div>
    </footer>
</body>
</html>

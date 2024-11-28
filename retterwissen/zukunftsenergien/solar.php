<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zukunftsenergien</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../../include/css/styles.css">

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
        
        <!-- Dropdown-Menü -->
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
      body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: space-between;
    padding: 20px;
    background-color: #f4f4f4;
}

#infoText {
    width: 50%;
    font-family: Verdana, Geneva, sans-serif;
    font-size: 16px;
    line-height: 1.6;
    color: #333;
    background-color: rgba(255, 255, 255, 0.8); /* Transparentes Weiß */
    padding: 20px;
    border-radius: 8px;
    box-shadow: none; /* Schatten entfernt */
}

#infoText h1 {
    font-family: 'Bangers', cursive; /* Schriftart Bangers */
    text-align: center;
    color: #e8a723; /* Farbe #e8a723 */
}

#infoText p {
    cursor: pointer;
}

#infoText p:hover {
    color: #ff6347; /* Starker Kontrast beim Hover (rot) */
}

#interactiveBtn {
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #008CBA;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

#interactiveBtn:hover {
    background-color: #005f73;
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
    <div id="infoText">
        <h1>Alles über Sonnenenergie</h1>
        <p onclick="highlightText(this)">Sonnenenergie, oder auch Solarenergie genannt, ist Energie, die von der Sonne kommt. Die Sonne strahlt eine große Menge an Energie aus. Ein kleiner Teil dieser Strahlen erreicht die Erde und erwärmt sie. Die Menschen können diese Energie nutzen und in andere Energien umwandeln. Die Sonnenstrahlen liefern weit mehr Energie, als Mensch und Natur brauchen können. Mit Solarmodulen kann man die Sonnenenergie einfangen und in Strom verwandeln. Das Besondere daran ist, dass sie keine schädlichen Gase produziert und deshalb gut für die Umwelt ist.</p>
        
        <p onclick="highlightText(this)">Die Technik, um Sonnenenergie zu nutzen, wird immer besser. Manche Häuser haben schon Solarzellen auf dem Dach, die ihren eigenen Strom erzeugen. Sogar Autos oder Taschenlampen können mit Sonnenenergie betrieben werden!</p>
        
        <p onclick="highlightText(this)">Nahe dem Äquator ist die energiereiche Sonneneinstrahlung besonders hoch. Deshalb ist es vor allem dort sinnvoll, mit Hilfe der Sonnenenergie Strom zu erzeugen. In Wüsten wie der Sahara ist es immer sonnig und auch Länder wie Australien und Mexiko sind gut für Solarmodule. In Europa haben auch Spanien, Italien und Griechenland viel Sonne. Diese Orte sind perfekt für Solarmodule!</p>
        
        <button id="interactiveBtn" onclick="changeColor()">Klicke hier, um den Text einzufärben</button>
    </div>

    <script>
        // Funktion, um den Text zu markieren
        function highlightText(element) {
            element.style.backgroundColor = "#ffff99"; // Heller gelber Hintergrund
            setTimeout(function() {
                element.style.backgroundColor = ""; // Hintergrund nach einer Sekunde zurücksetzen
            }, 1000);
        }

        // Funktion, um die Schriftfarbe des Textes zu ändern
        function changeColor() {
            const paragraphs = document.querySelectorAll('#infoText p');
            const contrastColors = ['#000000', '#FFFFFF', '#FF0000', '#00FF00', '#0000FF', '#FFFF00']; // Starke Kontrastfarben
            const randomColor = contrastColors[Math.floor(Math.random() * contrastColors.length)];
            paragraphs.forEach(paragraph => {
                paragraph.style.color = randomColor;
            });
        }
    </script>
    </main>
	
<script>
    // Funktion, um Icons schweben zu lassen
    function floatIcons() {
        const icons = document.querySelectorAll('.icon-container img'); // Alle Icons auswählen

        icons.forEach(icon => {
            let position = 0; // Startposition
            let direction = 1; // Bewegung nach oben oder unten
            const maxMovement = 15; // Maximale Bewegung in Pixel
            const stepSize = 0.25; // Bewegungsschritt

            const iconFloat = () => {
                if (position >= maxMovement || position <= -maxMovement) {
                    direction *= -1; // Richtung wechseln
                }
                position += direction * stepSize; // Position aktualisieren
                icon.style.transform = `translateY(${position}px)`; // Icon bewegen
                requestAnimationFrame(iconFloat); // Animation wiederholen
            };

            iconFloat(); // Animation starten
        });
    }

    // Funktion für Hover-Effekt auf Buttons
    function buttonHoverEffect() {
        const buttons = document.querySelectorAll('.button'); // Alle Buttons auswählen
        buttons.forEach(button => {
            button.addEventListener('mouseover', () => {
                button.classList.add('hovered'); // Klasse hinzufügen bei Hover
            });
            button.addEventListener('mouseout', () => {
                button.classList.remove('hovered'); // Klasse entfernen bei Hover-Ende
            });
        });
    }

    // Startet die Funktionen nach dem Laden der Seite
    document.addEventListener('DOMContentLoaded', () => {
        floatIcons(); // Icons schweben lassen
        buttonHoverEffect(); // Hover-Effekt aktivieren
    });
</script>

<!-- Footer -->
<footer class="footer-custom">
    <div class="footer-links">
        <a href="../../impressum/impressum.php">Impressum</a>
    </div>
</footer>

</body>
</html>

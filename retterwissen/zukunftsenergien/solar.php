<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solarenergie</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../include/css/styles.css">

    <!-- Navigation einbinden -->
    <nav class="navbar-custom">
        <a class="navbar-brand" href="../../mission/missionsstart.php">Die Energieretter</a>
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
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Container für Sonne und Text */
        .main-container {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            flex: 1; /* Nimmt den verbleibenden Platz ein */
            padding: 20px;
            overflow-x: hidden;
        }

        /* Schwebe-Icons */
        .icon-container {
            position: absolute;
            left: 10%; /* Sonne weiter vom Rand entfernt */
            top: 40%; /* Sonne etwas höher verschoben */
            transform: translateY(-50%);
            transition: transform 0.2s ease;
        }

        .icon-container img {
            width: 250px; /* Größere Sonne */
            height: 250px;
        }

        /* Info-Text */
        .info-text {
            font-size: 1.5rem;
            color: white;
            text-align: left;
            margin-left: 250px; /* Text weiter nach rechts verschoben */
            max-width: 45%; /* Text nimmt etwas mehr Platz ein */
            font-family: 'Helvetica', sans-serif; /* Helvetica für den Fließtext */
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5); /* Durchsichtiger Hintergrund für bessere Lesbarkeit */
            border-radius: 10px;
            height: 100%;
            overflow-y: auto; /* Scrollbar für den Text */
        }

        /* Scrollbar-Stil */
        .info-text::-webkit-scrollbar {
            width: 8px;
        }

        .info-text::-webkit-scrollbar-thumb {
            background-color: #888;
            border-radius: 4px;
        }

        .info-text::-webkit-scrollbar-thumb:hover {
            background-color: #555;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        footer a {
            color: white;
            text-decoration: none;
        }

    </style>
</head>

<body>
    <!-- Hintergrundvideo -->
    <video autoplay muted loop id="backgroundVideo">
        <source src="bilder_retterwissen/background_video.mp4" type="video/mp4">
        <source src="video/background_video.webm" type="video/webm">
    </video>

    <main class="main-container">
        <!-- Schwebe-Icons -->
        <div class="icon-container">
            <img src='../bilder_retterwissen/sonne.png' alt="Sonne" id="icon-sun">
        </div>

        <!-- Info-Text -->
        <div class="info-text">
            <p>
                Sonnenenergie, oder auch Solarenergie genannt, ist Energie, die von der Sonne kommt. Die Sonne strahlt eine große Menge an Energie aus. Ein kleiner Teil dieser Strahlen erreicht die Erde und erwärmt sie. Die Menschen können diese Energie nutzen und in andere Energien umwandeln. Die Sonnenstrahlen liefern weit mehr Energie, als Mensch und Natur brauchen können. Mit Solarmodulen kann man die Sonnenenergie einfangen und in Strom verwandeln. Das Besondere daran ist, dass sie keine schädlichen Gase produziert und deshalb gut für die Umwelt ist.
                <br><br>
                Die Technik, um Sonnenenergie zu nutzen, wird immer besser. Manche Häuser haben schon Solarzellen auf dem Dach, die ihren eigenen Strom erzeugen. Sogar Autos oder Taschenlampen können mit Sonnenenergie betrieben werden!
                <br><br>
                Nahe dem Äquator ist die energiereiche Sonneneinstrahlung besonders hoch. Deshalb ist es vor allem dort sinnvoll, mit Hilfe der Sonnenenergie Strom zu erzeugen. In Wüsten wie der Sahara ist es immer sonnig und auch Länder wie Australien und Mexiko sind gut für Solarmodule. In Europa haben auch Spanien, Italien und Griechenland viel Sonne. Diese Orte sind perfekt für Solarmodule!
            </p>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer-custom">
        <div class="footer-left"></div>
        <div class="footer-right">
            <a class="footer-link" href="../../impressum/impressum.php">Impressum</a>
        </div>
    </footer>

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

        // Startet die Funktion nach dem Laden der Seite
        document.addEventListener('DOMContentLoaded', () => {
            floatIcons(); // Icons schweben lassen
        });
    </script>
</body>
</html>


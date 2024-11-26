<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innovationen</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

    <!-- Navigation einbinden -->
    <?php include '../include/partials/nav.php'; ?>

    <style>
        /* Body und allgemeine Layout-Einstellungen */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('bilder_retterwissen/galaxie_retterwissen.jpeg') no-repeat center center fixed;
            background-size: cover;
        }

        /* Hauptcontainer */
        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: calc(100vh - 100px); /* Platz für Navigation und Footer berücksichtigen */
            position: relative;
        }

        /* Pfeile Positionierung */
        .arrow-container {
            position: absolute;
            top: 40%; /* Pfeile etwas höher positioniert */
            width: 100%; /* Volle Breite */
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .arrow-container .arrow {
            width: 150px; /* Größere Pfeile */
            height: 150px;
            cursor: pointer;
        }

        /* Text unter den Pfeilen */
        .arrow-text {
            position: absolute;
            font-size: 18px;
            color: white;
            font-family: 'Bangers', cursive; /* Schriftart Bangers */
            text-align: center;
            width: 100%; /* Volle Breite */
        }

        .arrow-text-left {
            left: 0;
            top: 130%; /* Text direkt unter dem linken Pfeil */
        }

        .arrow-text-right {
            right: 0;
            top: 130%; /* Text direkt unter dem rechten Pfeil */
        }

        /* Schwebe-Icons */
        .icon-container {
            display: flex;
            justify-content: space-around;
            gap: 150px; /* Großer Abstand zwischen den Icons */
            position: relative;
            margin-bottom: 60px;
        }

        .icon-container img {
            width: 130px; /* Größe der Icons */
            height: 130px;
            transition: transform 0.3s ease;  /* Hinzufügen eines sanften Übergangs */
        }

        .icon-container img:hover {
            transform: scale(1.1);  /* Vergrößern der Icons bei Hover */
        }

        /* Buttons */
        .button-container {
            display: flex;
            gap: 100px; /* Großer Abstand zwischen den Buttons */
        }

        .button-container a {
            display: inline-block;
            padding: 20px 30px; /* Größe der Buttons */
            font-size: 22px; /* Schriftgröße */
            text-decoration: none;
            color: white;
            background-color: #1e2460; /* Blaue Buttons */
            border-radius: 10px; /* Abgerundete Ecken */
            transition: background-color 0.3s ease, transform 0.3s ease;
            font-family: 'Bangers', cursive;
        }

        .button-container a:hover {
            background-color: #004080; /* Dunklerer Blauton bei Hover */
            transform: scale(1.05); /* Leichtes Vergrößern bei Hover */
        }

        /* Footer Styling */
        footer {
            text-align: center;
            padding: 10px;
            background-color: #285238;
            color: white;
            font-size: 14px;
            position: relative;
        }
    </style>
</head>

<body>
    <main>
        <!-- Pfeile an den Seitenrändern -->
        <div class="arrow-container">
            <!-- Linker Pfeil -->
            <a href="zukunftsenergien.php" class="arrow-left">
                <img src="bilder_retterwissen/pfeil_l_blau.png" alt="Pfeil Links" class="arrow">
            </a>

            <!-- Rechter Pfeil -->
            <a href="klimaschaeden.php" class="arrow-right">
                <img src="bilder_retterwissen/pfeil_r_blau.png" alt="Pfeil Rechts" class="arrow">
            </a>
        </div>

        <!-- Text unter den Pfeilen -->
        <div class="arrow-text arrow-text-left">
            Zu den Zukunftsenergien
        </div>
        <div class="arrow-text arrow-text-right">
            Zu den Klimaschäden
        </div>

        <!-- Schwebe-Icons -->
        <div class="icon-container">
            <img src="bilder_retterwissen/pflanze.png" alt="pflanze" id="icon-pflanze"> <!-- Pflanze für nachhaltige Innovationen -->
            <img src="bilder_retterwissen/technologie.png" alt="technologie" id="icon-technologie"> <!-- Technologie für zukünftige Innovationen -->
        </div>

        <!-- Buttons -->
        <div class="button-container">
            <a href="innovationen/nachhaltige_innovationen.php" class="button" id="button-nachhaltige-innovationen">Nachhaltige Innovationen</a>
            <a href="innovationen/technologische_innovationen.php" class="button" id="button-technologische-innovationen">Technologische Innovationen</a>
        </div>
    </main>

    <!-- Footer -->
    <?php include '../include/partials/footer.php'; ?>

    <script>
        // Funktion für das langsame und weniger weite Schweben der Icons
        function floatIcons() {
            const icons = document.querySelectorAll('.icon-container img');
            icons.forEach(icon => {
                let position = 0;
                let direction = 1;
                const maxMovement = 15;  // Weniger Bewegung (max. 15px nach oben/unten)
                const stepSize = 0.25;  // Sehr langsame Bewegung (0.25px pro Frame)

                const iconFloat = () => {
                    if (position >= maxMovement || position <= -maxMovement) {
                        direction *= -1;  // Richtungswechsel, wenn das Limit erreicht ist
                    }
                    position += direction * stepSize;  // Schrittgröße (langsamer)
                    icon.style.transform = `translateY(${position}px)`;  // Anwenden der Bewegung
                    requestAnimationFrame(iconFloat);  // Animation fortsetzen
                };

                iconFloat();
            });
        }

        // Initialisierungen
        document.addEventListener('DOMContentLoaded', () => {
            floatIcons(); // Start der Schwebe-Animation
        });
    </script>
</body>
</html>



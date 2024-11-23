<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zukunftsenergien</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

    <!-- Navigation einbinden -->
    <?php include '../../retterwissen/include_retterwissen/partials_retterwissen/nav.php'; ?>


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
            width: 130px; /* Noch größere Icons */
            height: 130px;
        }

        /* Buttons */
        .button-container {
            display: flex;
            gap: 100px; /* Noch größerer Abstand zwischen den Buttons */
        }

        .button-container a {
            display: inline-block;
            padding: 20px 30px; /* Noch größere Buttons */
            font-size: 22px; /* Noch größere Schrift */
            text-decoration: none;
            color: white;
            background-color: #285238;
            border-radius: 10px; /* Abgerundete Ecken */
            transition: background-color 0.3s ease;
            font-family: 'Bangers', cursive;
        }

        .button-container a.hovered {
            background-color: #45a049;
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
        <!-- Schwebe-Icons -->
        <div class="icon-container">
            <img src="bilder_retterwissen/sonne.png" alt="Sonne" id="icon-sun">
            <img src="bilder_retterwissen/wasser.png" alt="Wasser" id="icon-water">
            <img src="bilder_retterwissen/wind.png" alt="Wind" id="icon-wind">
        </div>

        <!-- Buttons -->
        <div class="button-container">
            <a href="zukunftsenergien/solar.php" class="button" id="button-sun">Sonnenenergie</a>
            <a href="zukunftsenergien/wasser.php" class="button" id="button-water">Wasserenergie</a>
            <a href="zukunftsenergien/wind.php" class="button" id="button-wind">Windenergie</a>
        </div>
    </main>

    <!-- Footer -->
    <?php include '../../retterwissen/include_retterwissen/partials_retterwissen/footer.php'; ?>


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

        // Buttons Hover-Effekt mit JavaScript
        function buttonHoverEffect() {
            const buttons = document.querySelectorAll('.button');
            buttons.forEach(button => {
                button.addEventListener('mouseover', () => {
                    button.classList.add('hovered');
                });
                button.addEventListener('mouseout', () => {
                    button.classList.remove('hovered');
                });
            });
        }

        // Initialisierungen
        document.addEventListener('DOMContentLoaded', () => {
            floatIcons(); // Start der Schwebe-Animation
            buttonHoverEffect(); // Start der Button-Hover-Effekte
        });
    </script>
</body>
</html>

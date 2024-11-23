<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klimaschäden</title>

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
        }

        /* Schwebe-Icons */
        .icon-container {
            display: flex;
            justify-content: space-around;
            gap: 100px; /* Großer Abstand zwischen den Icons */
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
            gap: 50px; /* Abstand zwischen den Buttons */
        }

        .button-container a {
            display: inline-block;
            padding: 20px 30px; /* Größe der Buttons */
            font-size: 22px; /* Schriftgröße */
            text-decoration: none;
            color: white;
            background-color: #ff4d4d; /* Rote Buttons */
            border-radius: 10px; /* Abgerundete Ecken */
            transition: background-color 0.3s ease, transform 0.3s ease;
            font-family: 'Bangers', cursive;
        }

        .button-container a:hover {
            background-color: #ff1a1a; /* Dunklerer Rotton bei Hover */
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
        <!-- Schwebe-Icons -->
        <div class="icon-container">
            <img src="bilder_retterwissen/hitzewelle.png" alt="Hitzewelle" id="icon-hitzewelle">
            <img src="bilder_retterwissen/unwetter.png" alt="Unwetter" id="icon-unwetter">
            <img src="bilder_retterwissen/thermometer.png" alt="Thermometer" id="icon-thermometer">
        </div>

        <!-- Buttons -->
        <div class="button-container">
            <a href="klimaschaeden/hitzewellen.php" class="button" id="button-hitzewellen">Hitzewellen</a>
            <a href="klimaschaeden/unwetter.php" class="button" id="button-unwetter">Unwetter</a>
            <a href="klimaschaeden/thermometer.php" class="button" id="button-thermometer">Thermometer</a>
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


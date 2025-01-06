<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zukunftsenergien</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">

    <style>
        /* ICONS */
        .ZUKUNFTSENERGIE-icons-container {
            display: flex;
            justify-content: center; /* Zentrieren der Icons */
            align-items: center; /* Vertikales Zentrieren */
            gap: 115px; /* Regelmäßiger Abstand zwischen den Icons */
            position: relative;
            margin-top: 15%; /* Abstand vom oberen Rand */
        }

        .ZUKUNFTSENERGIE-icons-container img {
            width: 160px; /* Größere Breite */
            height: 160px; /* Größere Höhe */
        }

        /* BUTTONS */
        .ZUKUNFTSENERGIE-button-container {
            display: flex;
            justify-content: center; /* Zentrieren der Buttons */
            align-items: center;
            gap: 130px; /* Regelmäßiger Abstand zwischen den Buttons */
            position: relative;
            margin-top: 3%; /* Abstand zu den Icons */
        }

        .ZUKUNFTSENERGIE-button-container a {
            display: inline-block;
            padding: 15px 30px; /* Größere Padding */
            font-size: 18px;
            text-decoration: none;
            color: white;
            background-color: #285238; 
            border-radius: 10px;
            transition: background-color 0.3s ease;
            font-family: 'Bangers', cursive;
            text-align: center; /* Text zentrieren */
        }

        .ZUKUNFTSENERGIE-button-container a.hovered {
            background-color: #FFD700; /* Leicht heller beim Hover */
        }

        .ZUKUNFTSENERGIE-hintergrundbild {
            position: absolute;
            bottom: -4%;
            left: -10%;
            height: 40%;
            width: auto;
        }
    </style>
</head>

<body>

    <?php include '../include/nav.php'; ?>

    <img class="ZUKUNFTSENERGIE-hintergrundbild" src="../../images/wasserkraftwerk.png" alt="Wasserkraftwerk">

    <!-- ICONS -->
    <div class="ZUKUNFTSENERGIE-icons-container">
        <a href="zukunftsenergien/solar.php"><img src="bilder_retterwissen/sonne.png" alt="Sonne"></a>
        <a href="zukunftsenergien/wasser.php"><img src="bilder_retterwissen/wasser.png" alt="Wasser"></a>
        <a href="zukunftsenergien/wind.php"><img src="bilder_retterwissen/wind.png" alt="Wind"></a>
    </div>

    <!-- BUTTONS -->
    <div class="ZUKUNFTSENERGIE-button-container">
        <a href="zukunftsenergien/solar.php" class="button" id="ZUKUNFTSENERGIE-BUTTON-SUN">SONNENENERGIE</a>
        <a href="zukunftsenergien/wasser.php" class="button" id="ZUKUNFTSENERGIE-BUTTON-WATER">WASSERENERGIE</a>
        <a href="zukunftsenergien/wind.php" class="button" id="ZUKUNFTSENERGIE-BUTTON-WIND">WINDENERGIE</a>
    </div>

    <script>
        // FLOAT
        function floatIcons() {
            const icons = document.querySelectorAll('.ZUKUNFTSENERGIE-icons-container img'); // Alle Icons auswählen

            icons.forEach(icon => {
                let position = 0; // Startposition
                let direction = 1; // Bewegung nach oben  unten
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

        // HOVER
        function buttonHoverEffect() {
            const buttons = document.querySelectorAll('.ZUKUNFTSENERGIE-button-container .button'); // Alle Buttons auswählen
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
</body>
</html>



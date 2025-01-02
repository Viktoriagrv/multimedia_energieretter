<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zukunftsenergien</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">

    <style>
        /* Hauptcontainer */
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
			
        }

	
		
        main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%; /* Nimmt die volle Höhe ein */
            width: 100%;
        }

        /* ICONS */
        .icon-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 150px; /* Abstand zwischen den Icons */
            margin-bottom: 60px; /* Optionaler Abstand zu den Buttons */
        }

        .icon-container img {
            width: 160px; /* Größere Breite */
            height: 160px; /* Größere Höhe */
        }

        /* BUTTONS */
        .button-container {
            display: flex;
            justify-content: center; /* Buttons zentrieren */
            gap: 160px; /* Regelmäßige horizontale Abstände */
        }

        .button-container a {
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

        .button-container a.hovered {
            background-color: #FFD700; /* Leicht heller beim Hover */
        }
		
		.HINTERGRUNDBILD-ZUKUNFT1 {
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


    <main>
	
    <img class="HINTERGRUNDBILD-ZUKUNFT1" src="../../images/wasserkraftwerk.png" alt="Wasserkraftwerk">

 
    </div>
        <!-- ICONS -->
        <div class="icon-container">
            <a href="zukunftsenergien/solar.php"><img src="bilder_retterwissen/sonne.png" alt="Sonne"></a>
            <a href="zukunftsenergien/wasser.php"><img src="bilder_retterwissen/wasser.png" alt="Wasser"></a>
            <a href="zukunftsenergien/wind.php"><img src="bilder_retterwissen/wind.png" alt="Wind"></a>
        </div>

        <!-- BUTTONS -->
        <div class="button-container">
            <a href="zukunftsenergien/solar.php" class="button" id="BUTTON_SUN">SONNENENERGIE</a>
            <a href="zukunftsenergien/wasser.php" class="button" id="BUTTON_WATER">WASSERENERGIE</a>
            <a href="zukunftsenergien/wind.php" class="button" id="BUTTON_WIND">WINDENERGIE</a>
        </div>
    </main>

    <script>
        // FLOAT
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

        // HOVER
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
</body>
</html>




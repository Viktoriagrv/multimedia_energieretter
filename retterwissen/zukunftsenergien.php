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
		
		body{
			background-color: #e3f2fd; /* HELLBLAUER HINTERGRUND */
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



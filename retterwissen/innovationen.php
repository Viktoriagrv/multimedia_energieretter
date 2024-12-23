<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innovationen</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/styles.css">

    <!-- Navigation einbinden -->
  <nav class="navbar-custom">

    <!-- Branding -->
    <a class="navbar-brand" href="../mission/missionsstart.php">Die Energieretter</a>
    
    <!-- Hauptmenü -->
    <div class="menu">

       
        <a href="../index.php" class="menu-link menu-item">Vorspann</a>

        
        <div class="dropdown menu-item">
            <button class="dropbtn menu-link">Mission</button>
            <div class="dropdown-content">
                <a href="../mission/superhelden.php">Die Superhelden</a>
                <a href="../mission/missionsstart.php">Missionsstart</a>
                <a href="../mission/codeeingabe.php">Spiel fortsetzen</a>
            </div>
        </div>
        
        <!-- Dropdown-Menü -->
        <div class="dropdown menu-item" style="margin-right: 50px;">
            <button class="dropbtn menu-link">Retterwissen</button>
            <div class="dropdown-content">
                <a href="../retterwissen/zukunftsenergien.php">Zukunftsenergie</a>
                <a href="../retterwissen/innovationen.php">Innovationen</a>
                <a href="../retterwissen/klimaschaeden.php">Klimaschäden</a>
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
        }

        /* Schwebe-Icons */
        .icon-container {
            display: flex;
            justify-content: space-around;
            gap: 100px;
            position: relative;
            margin-bottom: 60px;
        }

        .icon-container img {
            width: 130px;
            height: 130px;
        }

        /* Buttons */
        .button-container {
            display: flex;
            gap: 50px;
        }

        .button-container a {
            display: inline-block;
            padding: 20px 30px;
            font-size: 22px;
            text-decoration: none;
            color: white;
            background-color: #285238;
            border-radius: 10px;
            transition: background-color 0.3s ease;
            font-family: 'Bangers', cursive;
        }

        .button-container a.hovered {
            background-color: #45a049;
        }

    
    </style>
</head>

<body>
    <!-- Hintergrundvideo -->
<video autoplay muted loop id="backgroundVideo">
    <source src="bilder_retterwissen/background_video.mp4" type="video/mp4">
    <source src="video/background_video.webm" type="video/webm">
</video>


    <main>
        <!-- Schwebe-Icons -->
        <div class="icon-container">
            <img src="bilder_retterwissen/pflanze.png" alt="Pflanzlich" id="icon-pflanze">
            <img src="bilder_retterwissen/technologie.png" alt="Technologisch" id="icon-technologie">
        </div>

        <!-- Buttons -->
        <div class="button-container">
            <a href="zukunftsenergien/" class="button" id="button-pflanze">Pflanzliche Innovationen</a>
            <a href="zukunftsenergien/" class="button" id="button-technologie">Technologische Innovationen</a>
        </div>
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
        <a href="../impressum/impressum.php">Impressum</a>
    </div>
</footer>
 <!-- Footer-Container -->


 
</body>
</html>

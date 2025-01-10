<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Missions-Start</title>
	
    <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/styles.css">

	
</head>

<body>
	
	<div class="ALLES">
	
		<?php include '../include/nav.php'; ?>

		 <!-- Hintergrundvideo -->
			<video autoplay muted loop id="backgroundVideo">
				<source src="../retterwissen/bilder_retterwissen/background_video.mp4" type="video/mp4">
				<source src="../retterwissen/bilder_retterwissen/background_video.mp4" type="video/webm">
			</video>

		<main>

			<div class="icon-container">
				<img class="WELT-STARTSEITE" src="../images/weltkugel.png" alt="Weltkugel">
				<img class="HERO-STARTSEITE" src="../images/Prinz.png" alt="Golden Knight">
			</div>

			<div class="BLASE-STARTSEITE"> 
				<p>Bevor du mit der Mission startest, solltest du dir einen von uns Superhelden als Mitstreiter wählen.</p>
			</div>

			<button class="HELFEN-STARTSEITE" onclick="window.location.href='superhelden.php'">Zu den Superhelden</button>

		</main>
   </div>  
	
	<script>
		// Funktion, um Icons schweben zu lassen
				function floatIcons() {
				const icons = document.querySelectorAll('.icon-container img'); // Alle Icons auswählen

        		icons.forEach(icon => {
					let position = 0; // Startposition
					let direction = 1; // Bewegung nach oben oder unten
					const maxMovement = 6; // Maximale Bewegung in Pixel
					const stepSize = 0.1; // Bewegungsschritt

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
				
				// Startet die Funktionen nach dem Laden der Seite
				document.addEventListener('DOMContentLoaded', () => {
					floatIcons(); // Icons schweben lassen
				});
		
	</script>
	
</body>
</html>


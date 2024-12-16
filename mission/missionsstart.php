<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Missions-Start</title>

    

    <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="../css/styles.css">

	<style>
		
		.WEG{
			visibility: hidden;
			transition-delay: 0s;
		}
		

		.WELT{
			position:absolute;
			top: 20%;
			left: 45%;
			height: 60%;
			width:auto;
			visibility:visible;
			transition-property: height, top, left;						/* betreffende Deklarationen (über Pseudoklassen) */
			transition-duration: 5s;							/* Dauer (n) */
			transition-timing-function: ease-in-out;				/* Geschwindigkeit (ease, ease-in, ease-out, ease-in-out, linear) */
			transition-delay: 2s;
		}
	
		
		.BLASE{
			position: absolute;
			padding: 25px;
			top:20%;
			left:23%;
			height:20%;
			width: 10%;
			font-family: verdana;
			color: #285238;
			text-align: left;
			border-radius: 20px 20px 20px 0px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			z-index: 4;
			visibility:visible;
		}
		
		.HERO{
			position:absolute;
			height:40%;
			bottom:15%;
			left:6%;
			visibility:visible;
			
		}
		
		.HELFEN{
			position:absolute;
			bottom: 28%;
			left:23%;
			height:5%;
			width: 15%;
            font-size: 1.5rem;
            text-decoration: none;
            color: white;
            background-color: #285238;
            border-radius: 10px;
            font-family: 'Bangers';
			visibility: visible;
			cursor: pointer;
		}
		
		.HELFEN:mouseover{
			background-color: #45a049;
		}
		
		
		.ZEIGEN{
			transition-property: all;
			transition-delay: 1.5s;
			visibility: visible;
			opacity: 1;
		}
		
	
		</style>

</head>

<body>
	
	<?php include '../include/nav.php'; ?>
	
	 <!-- Hintergrundvideo -->
		<video autoplay muted loop id="backgroundVideo">
			<source src="../retterwissen/bilder_retterwissen/background_video.mp4" type="video/mp4">
			<source src="../retterwissen/bilder_retterwissen/background_video.mp4" type="video/webm">
		</video>
	
	
	
    <main>
		
		
			<div class="icon-container">
				<img class="WELT" src="../images/weltkugel.png" alt="Weltkugel">
				<img class="HERO" src="../images/Prinz.png" alt="Golden Knight">
			</div>
						
			<div class="BLASE"> 
				<p>Kurze Erklärung vom Superhelden</p>
			</div>
			
			<button class="HELFEN" onclick="window.location.href='superhelden.php'">Hier kannst du helfen!</button>
			

    </main>
     
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
					buttonHoverEffect(); // Hover-Effekt aktivieren
				});
		
	</script>
	
</body>
</html>


<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Missions-Start</title>

    

    <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/styles.css">

	<style>
		
		.WELT-STARTSEITE{
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
	
		
		.BLASE-STARTSEITE{
			position: absolute;
			padding: 25px;
			top:21%;
			left:22%;
			height:auto;
			width: 13%;
			font-family: "open sans";
			font-size: 1.7rem;
			color: #285238;
			text-align: left;
			border-radius: 20px 20px 20px 0px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			z-index: 4;
			visibility:visible;
		}
		
		.HERO-STARTSEITE{
			position:absolute;
			height:40%;
			width:auto;
			bottom:15%;
			left:6%;
			visibility:visible;
			
		}
		
		.HELFEN-STARTSEITE{
			position:absolute;
			bottom:20%;
			left:23%;
			height:7%;
			width: auto;
			padding: 15px;
           	font-family: "bangers";
			font-size: 2rem;
			color: #e8a723;
			letter-spacing: 0.05em;
			border: 2px solid #285238;
			border-radius: 5px;
			background-color: #285238;
			cursor: pointer;
		}
		
		.HELFEN-STARTSEITE:hover{
			color: #285238;
			background-color: #45a049;
			border: 2px solid #285238;
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
				<img class="WELT-STARTSEITE" src="../images/weltkugel.png" alt="Weltkugel">
				<img class="HERO-STARTSEITE" src="../images/Prinz.png" alt="Golden Knight">
			</div>
						
			<div class="BLASE-STARTSEITE"> 
				<p>Bevor du mit der Mission startest, solltest du dir einen von uns Superhelden als Mitstreiter wählen.</p>
			</div>
			
			<button class="HELFEN-STARTSEITE" onclick="window.location.href='superhelden.php'">Zu den Superhelden</button>
			

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
				});
		
	</script>
	
</body>
</html>


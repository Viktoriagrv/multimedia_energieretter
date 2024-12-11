<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Die Energieretter</title>

    
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
	
	
	<style>	
		
		.STARTBUTTON{
			position: absolute;
			justify-content: center;
			background-color: transparent;
			border: 0;
			font-family:  "bangers";
			font-size: 12rem;
			line-height: 1.1;
			color: #e8a723;
			border: none;
			top: 25%;
			left: 20%;
			text-align: center;				
			width:60%;
			visibility: visible;
			transition-delay: 0s;
			cursor:pointer;
		}
		
		.STARTBUTTON:hover {
			transform: scale(1.3);
		}
		
		.WEG{
			visibility: hidden;
			transition-delay: 0s;
		}
		
		.KLEIN{
			position: absolute;
			top: 10%;
			left:20%;
			font-size: 5rem;
			transform: none;
			cursor: auto;
			}	
		
		.KLEIN:hover{
			transform: none;
		}
		
		.SCROLL{
			position: relative;
			justify-content: center;
			align-items:center;
			top: 4rem;
			width:800px;
			height:400px;
			background-color:transparent;
			font-family:verdana;
			font-size: 2rem;
			color:#FFFFFF;
			text-align: justify;
			overflow:hidden;
			visibility: hidden;
			opacity: 0;
		}
		
		
		.MINI {
			position: relative;
			height: 50%;
			align-items: center;
			left: 30%;
		}
			
		.PAUSE{
			position:absolute;
			bottom: 10%;
			left: 27%;
			height:5%;
			width: 20%;
            font-size: 1.5rem;
            text-decoration: none;
            color: white;
            background-color: #285238;
            border-radius: 10px;
            font-family: 'Bangers', cursive;
			z-index: 5;
			visibility: hidden;
			cursor: pointer;
		}
		
		.PAUSE:hover {
            background-color: #45a049;
        }
		
		.WEITER{
			position:absolute;
			bottom: 10%;
			left: 52%;
			height:5%;
			width: 20%;
            font-size: 1.5rem;
            text-decoration: none;
            color: white;
            background-color: #285238;
            border-radius: 10px;
            font-family: 'Bangers', cursive;
			z-index: 5;
			visibility: hidden;
			cursor: pointer;
		}
		
		.WEITER:mouseover {
            background-color: #45a049;
        }
			
		.WELT{
			position:absolute;
			top: 34.7%;
			Left:41.7%;
			height: 22%;
			width:auto;
			visibility: hidden;
			transition-property: height, top, left;						/* betreffende Deklarationen (über Pseudoklassen) */
			transition-duration: 5s;							/* Dauer (n) */
			transition-timing-function: ease-in-out;				/* Geschwindigkeit (ease, ease-in, ease-out, ease-in-out, linear) */
			transition-delay: 2s;
		}
		
		.GROSS{
			top: 20%;
			left: 35%;
			height: 60%;
			visibility:visible;
		}
		
		.WELT:focus{
			height: 60%;
		}
		
		.BLASE{
			position: absolute;
			padding: 25px;
			top:27%;
			left:20%;
			height:20%;
			width: 10%;
			font-family: verdana;
			color: #285238;
			text-align: left;
			border-radius: 20px 20px 20px 0px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			z-index: 4;
			visibility:hidden;
		}
		
		.HERO{
			position:absolute;
			height:45%;
			bottom:15%;
			left:4%;
			visibility:hidden;
			
		}
		
		.HELFEN{
			position:absolute;
			bottom: 22%;
			left:19%;
			height:5%;
			width: 15%;
            font-size: 1.5rem;
            text-decoration: none;
            color: white;
            background-color: #285238;
            border-radius: 10px;
            font-family: 'Bangers';
			visibility: hidden;
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
		
		.BLASEZEIGEN{
			transition-property: all;
			transition-delay: 7s;
			visibility: visible;
		}
				
		</style>

</head>

<body>
	
	<?php include 'include/nav.php'; ?>
	
       <!-- Hintergrundvideo -->
		<video autoplay muted loop id="backgroundVideo">
			<source src="retterwissen/bilder_retterwissen/background_video.mp4" type="video/mp4">
			<source src="retterwissen/bilder_retterwissen/background_video.mp4" type="video/webm">
		</video>

	
		<main>	
				
			<button id="START" class="STARTBUTTON">Die Welt ist <br> in Gefahr!</button>
			
			<div class="SCROLL" id="scrolltext"> 
				<p><br><br><br><br><br>
					Wir befinden uns im Jahr 2050. In der Vergangenheit haben die Menschen viel zu wenig Zunkunftsenergien genutzt. Die fossilen Brennstoffe haben unsere Umwelt verschmutzt. Nun breitet sich die Dunkelheit aus. Die Zukunft unserer Erde steht auf dem Spiel!<br><br>
					Aber zum Glück hast du die Chance, etwas zu verändern! Wähle dir einen Verbündeten und reise als Energieretter zurück in die Vergangenheit, um die Welt vor dieser düsteren Zukunft zu bewahren. Hier auf unserer Website kannst du entdecken, welche Energiequellen uns helfen, die Umwelt zu schützen – ob mit der Kraft der Sonne, dem Wind oder dem Wasser.<br><br>
					Bist du bereit für dieses Abenteuer? Begib dich auf eine spannende Reise, lerne die mächtigen Energien unserer Erde kennen, und hilf mit, eine bessere Zukunft zu gestalten. Werde ein wahrer Energieretter und schütze unseren Planeten!
					<br><br><br><br>
				</p>
				<img class="MINI" src="images/weltkugel.png" alt="Weltkugel">
				<br><br><br><br><br>
			</div>
				
			<div class="icon-container">
				<img class="WELT" src="images/weltkugel.png" alt="Weltkugel">
				<img class="HERO" src="images/Prinz.png" alt="Golden Knight">
			</div>
						
			<div class="BLASE"> 
				<p>Kurze Erklärung vom Superhelden</p>
			</div>
			
			<button class="HELFEN" onclick="window.location.href='mission/superhelden.php'">Hier kannst du helfen!</button>
			
			
									
			<button class="PAUSE">Pause</button>
			<button class="WEITER">Schneller</button>
		
	</main>
			
	
	<script> 
		
	
		document.querySelector(".STARTBUTTON").addEventListener("click", TextStarten);
		document.querySelector(".WEITER").addEventListener("click", TextStarten);
		document.querySelector(".PAUSE").addEventListener("click", TextPause);

			let timer1;
			let textEnde = false; 															// prüft, ob der Text zu Ende ist

		// Funktion zum Starten des Textes
		function TextStarten(){
			document.querySelector(".STARTBUTTON").classList.add("KLEIN");
			document.querySelector(".SCROLL").classList.add("ZEIGEN");
			document.querySelector(".PAUSE").classList.add("ZEIGEN");
			document.querySelector(".WEITER").classList.add("ZEIGEN");
			document.querySelector("#scrolltext").scrollTop -=-1;

			// Startet den Timer, der den Text scrollen lässt
			timer1 = setInterval(scrollText, 60); 												// Text scrollt alle 60ms
			}

		// Funktion, die den Text kontinuierlich scrollt
		function scrollText() {
			let scrollTextElement = document.querySelector("#scrolltext");

			// Wenn das Ende des Textes erreicht ist, stoppt der Timer und ruft AbschlussStarten auf
			if (scrollTextElement.scrollTop + scrollTextElement.clientHeight >= scrollTextElement.scrollHeight) {
				clearInterval(timer1);
				if (!textEnde) {
					textEnde = true;
					AbschlussStarten();
					}
				} 

			else {
				scrollTextElement.scrollTop += +1; 											// Scrollt den Text um 1 Pixel
				}
			}
		

		// Funktion zum Pausieren des Textes
		function TextPause(){
			clearInterval(timer1); 															// Stoppt den Scroll-Timer
			}

		// Funktion, die nach dem Ende des Textes ausgeführt wird
		function AbschlussStarten(){
			document.querySelector(".STARTBUTTON").classList.add("WEG");
			document.querySelector(".SCROLL").classList.remove("ZEIGEN");
			document.querySelector(".PAUSE").classList.remove("ZEIGEN");
			document.querySelector(".WEITER").classList.remove("ZEIGEN");
			document.querySelector(".WELT").classList.add("GROSS");
			document.querySelector(".HERO").classList.add("BLASEZEIGEN");
			document.querySelector(".BLASE").classList.add("BLASEZEIGEN");
			document.querySelector(".HELFEN").classList.add("BLASEZEIGEN");
			}
		
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

	
	
	<footer class="footer-custom">
    <div class="footer-links">
        <a href="impressum/impressum.php">Impressum</a>
    </div>
</footer>
</body>
</html>

<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Die Superhelden</title>
	
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
	
	
    <style>

				
		.SCHRIFTZUG{
			position: absolute;
			top: 40%;
			left: 8%;
			font-family: "bangers";
			font-size: 5rem;
			color: #e8a723;
			line-height: 1.1;
			letter-spacing: 0.05em;
			}
		
		.BILD{
			position: fixed;
			height: 30%;
			width: auto;
			margin: 5rem;
			}
		
		.BILDINFOBOX-SCARLET{
			position: absolute;
			bottom:12%;
			left: 5%;
			height:70%;
			width: auto;
			visibility: hidden;
			}
		
		.BILDINFOBOX-KNIGHT{
			position: absolute;
			bottom:12%;
			left: 5%;
			height:70%;
			width: auto;
			transform: rotateY(0deg);
			animation-name: FLIEGEN;						/* Name (keyframe) */
			animation-duration: 2s;							/* Dauer (n) */
			animation-timing-function: linear;				/* Geschwindigkeit (ease, ease-in, ease-out, ease-in-out, linear) */
			animation-delay: 0s;							/* Verzögerung (n) */
			animation-iteration-count: 1;					/* Wiederholungen (n, infinite) */
			animation-direction: normal;					/* Abspielrichtung (normal, reverse, alternate, alternate-reverse) */
			animation-fill-mode: none;						/* Endzustand (none, forwards, backwards, both) */
			animation-play-state: paused;					/* für JavaScript (running, paused) */
			z-index:5;
		}
		
		@keyframes FLIEGEN {
			49.99% {
				bottom:50%;
				left: 60%;
				transform: rotateY(0deg);
			}
			50% {
				bottom:50%;
				left: 60%;
				transform: rotateY(180deg);
			}
			
			99.99%{
				bottom:12%;
				left: 5%;
				transform: rotateY(180deg);
			}
			
			100% {
				bottom:12%;
				left: 5%;
				transform: rotateY(0deg);
			}
		}
		
		.BILDINFOBOX-BLAZE{
			position: absolute;
			bottom:12%;
			left: 10%;
			height:75%;
			width: auto;
			transform: rotateY(180deg);
		}
		
		.BLUMEN-INFOBOX{
			position: absolute;
			bottom:0%;
			left: 3%;
			height:50%;
			width: auto;
			visibility:hidden;
			z-index:5;
		}
		
		.BILDINFOBOX-THUNDER{
			position: absolute;
			bottom:12%;
			left: 10%;
			height:70%;
			width: auto;
			animation-name: RENNEN;							/* Name (keyframe) */
			animation-duration: 0.5s;							/* Dauer (n) */
			animation-timing-function: linear;				/* Geschwindigkeit (ease, ease-in, ease-out, ease-in-out, linear) */
			animation-delay: 0s;							/* Verzögerung (n) */
			animation-iteration-count: 1;					/* Wiederholungen (n, infinite) */
			animation-direction: normal;					/* Abspielrichtung (normal, reverse, alternate, alternate-reverse) */
			animation-fill-mode: none;						/* Endzustand (none, forwards, backwards, both) */
			animation-play-state: paused;					/* für JavaScript (running, paused) */
			z-index:5;
		}
		
		@keyframes RENNEN{
			49.99% {
				bottom:12%;
				left: 90%;
				transform: rotateY(0deg);
			}
			50% {
				bottom:12%;
				left: 90%;
				transform: rotateY(180deg);
			}
			
			99.99%{
				bottom:12%;
				left: 10%;
				transform: rotateY(180deg);
			}
			
			100% {
				bottom:12%;
				left: 10%;
				transform: rotateY(0deg);
			}
		}
		
		.BILDINFOBOX-TITAN{
			position: absolute;
			bottom:12%;
			left: 10%;
			height:70%;
			width: auto;
			z-index:5;
		}
		
		.ERDE-TITAN{
			position: absolute;
			bottom:69%;
			left: 3%;
			height:60%;
			width: auto;
			visibility: hidden;
			z-index:4;
		}
		
		.BILDINFOBOX-SONIC{
			position: absolute;
			bottom:15%;
			left: 20%;
			height:68%;
			width: auto;
			z-index:5;
			}
		
		.SCHUTZSCHILD{
			position: absolute;
			bottom:1%;
			left: 1%;
			height:96%;
			width: auto;
			visibility: hidden;
			opacity: 0.3;
			z-index:3;
			animation-name: DREHEN;							/* Name (keyframe) */
			animation-duration: 2s;							/* Dauer (n) */
			animation-timing-function: linear;				/* Geschwindigkeit (ease, ease-in, ease-out, ease-in-out, linear) */
			animation-delay: 0s;							/* Verzögerung (n) */
			animation-iteration-count: infinite;			/* Wiederholungen (n, infinite) */
			animation-direction: normal;					/* Abspielrichtung (normal, reverse, alternate, alternate-reverse) */
			animation-fill-mode: none;						/* Endzustand (none, forwards, backwards, both) */
			animation-play-state: running;
		}
		
		
		@keyframes DREHEN {									/* Prozentwerte beziehen sich auf die Dauer der Animation */
			50% {											/* bei 50% der Dauer werden die folgenden Deklarationen dargestellt */
				transform: rotate(180deg);
			}
			100% {											/* bei 100% der Dauer werden die folgenden Deklarationen dargestellt */
				transform: rotate(360deg);
			}
		}

		.TEXTBLOCK{
			position: absolute;
			top: 21%;
			left: 50%;
			height: auto;
			width: 43%;
			z-index:4;
			}
		
		.NAME{
			position: absolute;
			top: 8%;
			left: 50%;
			font-family: "bangers";
			color: #e8a723;
			font-size: 4rem;
			letter-spacing: 0.05em;
			text-align: left;
			}
		
		.TITEL{
			font-family: "open sans";
			color: #285238;
			font-size: 1.5rem;
			text-align: left;
			}
		
		.TEXT{
			font-family: "open sans";
			color: #285238;
			font-size: 1.5rem;
			text-align: justify;
			}
		
				
		.AUSWAHL{
			position: absolute;
			padding: 8px;
			bottom: 7%;
			right: 23%;
			font-family: "bangers";
			font-size: 2rem;
			color: #e8a723;
			letter-spacing: 0.05em;
			border: 2px solid #285238;
			border-radius: 5px;
			background-color: #285238;
			cursor: pointer;
			}
		
		.AUSWAHL:hover{
			color: #285238;
			background-color: #45a049;
			border: 2px solid #285238;
			}
		
		.SCARLETSHADE {
			position: absolute;
			top: 10%;
			left: 40%;
			cursor: pointer;
			}
		
				
		.GOLDENKNIGHT {
			position: absolute;
			top: 10%;
			left: 60%;
			cursor: pointer;
			}
		
		.GREENBLAZE {
			position: absolute;
			top: 10%;
			left: 80%;
			cursor: pointer;
			}
		
		.THUNDERBOLT {
			position: absolute;
			top: 50%;
			left: 35%;
			cursor: pointer;
			}
		
		.CYBERTITAN {
			position: absolute;
			top: 50%;
			left: 55%;
			cursor: pointer;
			}
		
		.SONICSHIELD {
			position: absolute;
			top: 50%;
			left:75%;
			cursor: pointer;
			}
		
		.INFOSCARLETSHADE {
			flex-direction: row;
			position: absolute;
			padding: 30px;
			top: 15%;
			left: 25%;
			height:60%;
			width: 50%;
			border-radius: 20px 20px 20px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			}
		
		
		.INFOGOLDENKNIGHT {
			flex-direction: row;
			position: absolute;
			padding: 30px;
			top: 15%;
			left: 25%;
			height:60%;
			width: 50%;
			border-radius: 20px 20px 20px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			}
		
		
		.INFOGREENBLAZE {
			flex-direction: row;
			position: absolute;
			padding: 30px;
			top: 15%;
			left: 25%;
			height:60%;
			width: 50%;
			border-radius: 20px 20px 20px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			}
		
		
		.INFOTHUNDERBOLT {
			flex-direction: row;
			position: absolute;
			padding: 30px;
			top: 15%;
			left: 25%;
			height:60%;
			width: 50%;
			border-radius: 20px 20px 20px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			}
		
		
		.INFOCYBERTITAN {
			flex-direction: row;
			position: absolute;
			padding: 30px;
			top: 15%;
			left: 25%;
			height:60%;
			width: 50%;
			border-radius: 20px 20px 20px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			}
		
		
		.INFOSONICSHIELD {
			flex-direction: row;
			position: absolute;
			padding: 30px;
			top: 15%;
			left: 25%;
			height:60%;
			width: 50%;
			border-radius: 20px 20px 20px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			}	
		
		.ZEIGEN {
			visibility: visible;
			}
		
		#buttonSCS{
			position: absolute;
			right:20px;
			top: 20px;	
			}
		
		#buttonGK{
			position: absolute;
			right:20px;
			top: 20px;	
			}
		
		#buttonGB{
			position: absolute;
			right:20px;
			top: 20px;	
			}
		
		#buttonTB{
			position: absolute;
			right:20px;
			top: 20px;	
			}
		
		#buttonCT{
			position: absolute;
			right:20px;
			top: 20px;	
			}
		
		#buttonSOS{
			position: absolute;
			right:20px;
			top: 20px;	
			}
		
	</style>
  
	

</head>

<body>
	
	<?php include '../include/nav.php'; ?>
	
	<!-- Hintergrundvideo -->
	<video autoplay muted loop id="backgroundVideo">
		<source src="../videos/background_video.mp4" type="video/mp4">
		
	</video>
	
	

			<div class="SCHRIFTZUG">
				WÄHLE DEINEN <br/> SUPERHELDEN
			</div>
			
		
			<div class="icon-container">
				<div class="SCARLETSHADE">
					<img class="BILD" src="../images/BadGirl.png" alt="Scarlet Shade">
				</div>

				<div class="GOLDENKNIGHT">
					<img class="BILD" src="../images/Prinz.png" alt="Golden Knight">
				</div>

				<div class="GREENBLAZE">
					<img class="BILD" src="../images/Prinzessin.png" alt="Green Blaze">
				</div>
			
				<div class="THUNDERBOLT">
					<img class="BILD" src="../images/AquaBoy.png" alt="Thunder Bolt">
				</div>

				<div class="CYBERTITAN">
					<img class="BILD" src="../images/Biest.png" alt="Cyber Titan">
				</div>

				<div class="SONICSHIELD">
					<img class="BILD" src="../images/BadBoy.png" alt="Sonic Shield">
				</div>
	</div>
			
			<div class="INFOSCARLETSHADE">
				<button id="buttonSCS">&times;</button>
				
					<div><img class="BILDINFOBOX-SCARLET" src="../images/BadGirl.png" alt="Scarlet Shade"></div>
					
						<a class=NAME>Scarlet Shade</a>
						<div class="TEXTBLOCK">
						<a class="TITEL"><strong>Superkraft:</strong></a><br>
							<a class="TEXT" style="text-align: left">Unsichtbarkeit und Tarnung</a>
						<br><br>
						<a class="TITEL"><strong>Beschreibung:</strong></a><br>
							<a class="TEXT" style="text-align: justify">Scarlet Shade trägt einen roten Umhang und eine passende rote Maske, die sie bei Bedarf unsichtbar machen. Sie kann sich lautlos bewegen und ist eine hervorragende Spionin, die Geheimnisse aufdeckt und Gerechtigkeit bringt.</a>
					</div>
					<br><br>
				
				<button class="AUSWAHL" onclick="window.location.href='klimaschaeden/klimaschaeden_scarlet.php'">Auswählen</button>
			</div>

			<div class="INFOGOLDENKNIGHT">
				<button id="buttonGK">&times;</button>
				
				<div><img class="BILDINFOBOX-KNIGHT" src="../images/Prinz.png" alt="Golden Knight"></div>
				
				<a class=NAME>Golden Knight</a>
				
				<div class="TEXTBLOCK">
					<a class="TITEL"><strong>Superkraft:</strong></a><br>
					<a class="TEXT">Schutzzauber und Fliegen</a>
					<br><br>
					<a class="TITEL"><strong>Beschreibung:</strong></a><br>
					<a class="TEXT">Golden Knight kann Schutzschilde für sich und andere errichten und fliegt mit übernatürlicher Anmut über den Himmel, um Menschen vor Gefahren zu bewahren.</a>
				</div>
				
				<button class="AUSWAHL" onclick="window.location.href='klimaschaeden/klimaschaeden_knight.php'">Auswählen</button>
			</div>

			<div class="INFOGREENBLAZE">
				<button id="buttonGB">&times;</button>
				
				<img class="BILDINFOBOX-BLAZE" src="../images/Prinzessin.png" alt="Green Blaze">
				<img class="BLUMEN-INFOBOX" src="../images/blumenwiese.png" alt="Blumenwiese mit Biene">
				
				<a class=NAME>Green Blaze</a>
				
				<div class="TEXTBLOCK">				
					<a class="TITEL"><strong>Superkraft:</strong></a><br>
					<a class="TEXT">Pflanzenkontrolle</a>
					<br><br>
					<a class="TITEL"><strong>Beschreibung:</strong></a><br>
					<a class="TEXT">Green Blaze ist eine Meisterin der Natur. Sie kann Pflanzen wachsen lassen, heilen und sogar zu Schutzschilden formen. Sie setzt sich für den Schutz der Natur und den Erhalt des Ökosystems ein.</a>
				</div>
				
				<button class="AUSWAHL" onclick="window.location.href='klimaschaeden/klimaschaeden_blaze.php'">Auswählen</button>
			</div>

			<div class="INFOTHUNDERBOLT">
				<button id="buttonTB">&times;</button>
				
				<img class="BILDINFOBOX-THUNDER" src="../images/AquaBoy.png" alt="Thunderbolt">
				
				<a class=NAME>Thunderbolt</a><br>
				
				<div class="TEXTBLOCK">
					<a class="TITEL"><strong>Superkraft:</strong></a><br>
					<a class="TEXT">Überschallgeschwindigkeit</a>
					<br><br>
					<a class="TITEL"><strong>Beschreibung:</strong></a>
					<br><a class="TEXT">Thunderbolt, von Blitzen durchzogen, kann sich blitzschnell bewegen und sogar durch die Zeit reisen. Er nutzt seine Geschwindigkeit, um Menschen zu retten und Verbrecher zu stoppen.</a>
				</div>
				
				<button class="AUSWAHL" onclick="window.location.href='klimaschaeden/klimaschaeden_thunder.php'">Auswählen</button>
			</div>

			<div class="INFOCYBERTITAN">
				<button id="buttonCT">&times;</button>
				
				<img class="ERDE-TITAN" src="../images/weltkugel.png" alt="Weltkugel">
				<img class="BILDINFOBOX-TITAN" src="../images/Biest.png" alt="Cyber Titan">
				
				<a class=NAME>Cyber Titan</a>
				
				<div class="TEXTBLOCK">
					<a class="TITEL"><strong>Superkraft:</strong></a><br>
					<a class="TEXT">Übermenschliche Stärke und technologische Kontrolle</a>
					<br><br>
					<a class="TITEL"><strong>Beschreibung:</strong></a><br>
					<a class="TEXT">Cyber Titan ist eine Mischung aus Mensch und Maschine. Mit enormer Kraft und der Fähigkeit, Technologie zu kontrollieren, bekämpft er Feinde, die die Menschheit bedrohen.</a>
				</div>
				
				<button class="AUSWAHL" onclick="window.location.href='klimaschaeden/klimaschaeden_titan.php'">Auswählen</button>
			</div>

			<div class="INFOSONICSHIELD">
				<button id="buttonSOS">&times;</button>
				
				<img class="SCHUTZSCHILD" src="../images/schutzschild.png" alt="Funkelnder Lichtkreis">
				<img class="BILDINFOBOX-SONIC" src="../images/BadBoy.png" alt="Sonic Shield">
				
				<a class=NAME>Sonic Shield</a>
				
				<div class="TEXTBLOCK">
					<a class="TITEL"><strong>Superkraft:</strong></a><br>
					<a class="TEXT">Schallwellenmanipulation</a>
					<br><br>
					<a class="TITEL"><strong>Beschreibung:</strong></a><br>
					<a class="TEXT">Sonic Shield kann Schallwellen erzeugen und kontrollieren, um massive Wände zu zerstören oder Verteidigungsfelder zu schaffen. Er kann zudem mit elektrischen Geräten kommunizieren und sie auch ohne Strom zu benutzen.</a>
				</div>
				
				<button class="AUSWAHL" onclick="window.location.href='klimaschaeden/klimaschaeden_sonic.php'">Auswählen</button>
			</div>
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

				
				//Funktion, um Infobox von Scralet Shade anzeigen zu lassen 
				document.querySelector('.SCARLETSHADE').addEventListener('click',ZeigeScarletShade);   //Bei Anklicken des Bildes "SCARLETSHADE" öffnet sich Infobox
					document.querySelector('#buttonSCS').addEventListener('click',ScarletShadeAus);			// Bei KLicken des Schließen-Buttons schließt sich die Infobox

					document.querySelector(".BILDINFOBOX-SCARLET").addEventListener("mouseover",ScarletWeg);
					document.querySelector(".BILDINFOBOX-SCARLET").addEventListener("mouseout",ScarletDa);

					function ZeigeScarletShade() {
						document.querySelector(".INFOGOLDENKNIGHT").classList.remove("ZEIGEN");
						document.querySelector(".INFOGREENBLAZE").classList.remove("ZEIGEN");
						document.querySelector(".INFOTHUNDERBOLT").classList.remove("ZEIGEN");
						document.querySelector(".INFOCYBERTITAN").classList.remove("ZEIGEN");
						document.querySelector(".INFOSONICSHIELD").classList.remove("ZEIGEN");
						document.querySelector(".INFOSCARLETSHADE").classList.add("ZEIGEN");
						document.querySelector(".BILDINFOBOX-SCARLET").classList.add("ZEIGEN");
					}

					function ScarletWeg(){
						document.querySelector(".BILDINFOBOX-SCARLET").classList.remove("ZEIGEN");
					}

					function ScarletDa(){
						document.querySelector(".BILDINFOBOX-SCARLET").classList.add("ZEIGEN");
					}

					function ScarletShadeAus() {
						document.querySelector(".INFOSCARLETSHADE").classList.remove("ZEIGEN");
						document.querySelector(".BILDINFOBOX-SCARLET").classList.remove("ZEIGEN");
					}


				document.querySelector('.GOLDENKNIGHT').addEventListener('click',ZeigeGoldenKnight);
					document.querySelector('#buttonGK').addEventListener('click',GoldenKnightAus);

					function ZeigeGoldenKnight() {
						document.querySelector(".INFOSCARLETSHADE").classList.remove("ZEIGEN");
						document.querySelector(".BILDINFOBOX-SCARLET").classList.remove("ZEIGEN");
						document.querySelector(".INFOGREENBLAZE").classList.remove("ZEIGEN");
						document.querySelector(".INFOTHUNDERBOLT").classList.remove("ZEIGEN");
						document.querySelector(".INFOCYBERTITAN").classList.remove("ZEIGEN");
						document.querySelector(".INFOSONICSHIELD").classList.remove("ZEIGEN");
						document.querySelector(".INFOGOLDENKNIGHT").classList.add("ZEIGEN");
					}

					document.querySelector(".BILDINFOBOX-KNIGHT").addEventListener("click", KnightFliegt);

					function KnightFliegt(){
						document.querySelector(".BILDINFOBOX-KNIGHT").style.animationPlayState = "running";

						const hero = document.querySelector(".BILDINFOBOX-KNIGHT");					// Die nächsten drei Schritte sind mit ChatGPT programmiert: Entferne die Animation, indem du den `animation-name` auf "none" setzt
						hero.style.animation = "none";												// Erzwungene Neuberechnung des Styles, um den Browser die Änderung registrieren zu lassen
						void hero.offsetWidth;														// Füge die Animation wieder hinzu
						hero.style.animation = "FLIEGEN 2s linear 1 forwards";
					}

					function GoldenKnightAus() {
						document.querySelector(".INFOGOLDENKNIGHT").classList.remove("ZEIGEN");
					}

				document.querySelector('.GREENBLAZE').addEventListener('click',ZeigeGreenBlaze);
					document.querySelector('#buttonGB').addEventListener('click',GreenBlazeAus);

					document.querySelector(".BILDINFOBOX-BLAZE").addEventListener("mouseover",BlumenDa);
					document.querySelector(".BILDINFOBOX-BLAZE").addEventListener("mouseout",BlumenWeg);

					function ZeigeGreenBlaze() {
						document.querySelector(".INFOSCARLETSHADE").classList.remove("ZEIGEN");
						document.querySelector(".BILDINFOBOX-SCARLET").classList.remove("ZEIGEN");
						document.querySelector(".INFOGOLDENKNIGHT").classList.remove("ZEIGEN");
						document.querySelector(".INFOTHUNDERBOLT").classList.remove("ZEIGEN");
						document.querySelector(".INFOCYBERTITAN").classList.remove("ZEIGEN");
						document.querySelector(".INFOSONICSHIELD").classList.remove("ZEIGEN");
						document.querySelector(".INFOGREENBLAZE").classList.add("ZEIGEN");
					}

					function BlumenDa(){
						document.querySelector(".BLUMEN-INFOBOX").classList.add("ZEIGEN");
					}

					function BlumenWeg(){
						document.querySelector(".BLUMEN-INFOBOX").classList.remove("ZEIGEN");
					}

					function GreenBlazeAus() {
						document.querySelector(".INFOGREENBLAZE").classList.remove("ZEIGEN");
					}

				document.querySelector('.THUNDERBOLT').addEventListener('click',ZeigeThunderBolt);
					document.querySelector('#buttonTB').addEventListener('click',ThunderBoltAus);

					function ZeigeThunderBolt() {
						document.querySelector(".INFOSCARLETSHADE").classList.remove("ZEIGEN");
						document.querySelector(".BILDINFOBOX-SCARLET").classList.remove("ZEIGEN");
						document.querySelector(".INFOGOLDENKNIGHT").classList.remove("ZEIGEN");
						document.querySelector(".INFOGREENBLAZE").classList.remove("ZEIGEN");
						document.querySelector(".INFOCYBERTITAN").classList.remove("ZEIGEN");
						document.querySelector(".INFOSONICSHIELD").classList.remove("ZEIGEN");
						document.querySelector(".INFOTHUNDERBOLT").classList.add("ZEIGEN");
					}

					document.querySelector(".BILDINFOBOX-THUNDER").addEventListener("click",ThunderRennt);

					function ThunderRennt(){
						document.querySelector(".BILDINFOBOX-THUNDER").style.animationPlayState = "running";

						const thunder = document.querySelector(".BILDINFOBOX-THUNDER");					// Die nächsten drei Schritte sind mit ChatGPT programmiert: Entferne die Animation, indem du den `animation-name` auf "none" setzt
						thunder.style.animation = "none";												// Erzwungene Neuberechnung des Styles, um den Browser die Änderung registrieren zu lassen
						void thunder.offsetWidth;														// Füge die Animation wieder hinzu
						thunder.style.animation = "RENNEN 0.5s linear 1 forwards";
					}

					function ThunderBoltAus() {
						document.querySelector(".INFOTHUNDERBOLT").classList.remove("ZEIGEN");
					}

				document.querySelector('.CYBERTITAN').addEventListener('click',ZeigeCyberTitan);
					document.querySelector('#buttonCT').addEventListener('click',CyberTitanAus);

					function ZeigeCyberTitan() {
						document.querySelector(".INFOSCARLETSHADE").classList.remove("ZEIGEN");
						document.querySelector(".BILDINFOBOX-SCARLET").classList.remove("ZEIGEN");
						document.querySelector(".INFOGOLDENKNIGHT").classList.remove("ZEIGEN");
						document.querySelector(".INFOGREENBLAZE").classList.remove("ZEIGEN");
						document.querySelector(".INFOTHUNDERBOLT").classList.remove("ZEIGEN");
						document.querySelector(".INFOSONICSHIELD").classList.remove("ZEIGEN");
						document.querySelector(".INFOCYBERTITAN").classList.add("ZEIGEN");
					}

					document.querySelector(".BILDINFOBOX-TITAN").addEventListener("mouseover",ErdeTitanDa);
					document.querySelector(".BILDINFOBOX-TITAN").addEventListener("mouseout",ErdeTitanWeg);


					function ErdeTitanDa(){
						document.querySelector(".ERDE-TITAN").classList.add("ZEIGEN");
					}

					function ErdeTitanWeg(){
						document.querySelector(".ERDE-TITAN").classList.remove("ZEIGEN");
					}

					function CyberTitanAus() {
						document.querySelector(".INFOCYBERTITAN").classList.remove("ZEIGEN");
					}

				document.querySelector('.SONICSHIELD').addEventListener('click',ZeigeSonicShield);
					document.querySelector('#buttonSOS').addEventListener('click',SonicShieldAus);

					function ZeigeSonicShield() {
						document.querySelector(".INFOSCARLETSHADE").classList.remove("ZEIGEN");
						document.querySelector(".BILDINFOBOX-SCARLET").classList.remove("ZEIGEN");
						document.querySelector(".INFOGOLDENKNIGHT").classList.remove("ZEIGEN");
						document.querySelector(".INFOGREENBLAZE").classList.remove("ZEIGEN");
						document.querySelector(".INFOTHUNDERBOLT").classList.remove("ZEIGEN");
						document.querySelector(".INFOCYBERTITAN").classList.remove("ZEIGEN");
						document.querySelector(".INFOSONICSHIELD").classList.add("ZEIGEN");
					}
		
					document.querySelector(".BILDINFOBOX-SONIC").addEventListener("mouseover",SchutzschildDa);
					document.querySelector(".BILDINFOBOX-SONIC").addEventListener("mouseout",SchutzschildWeg);


					function SchutzschildDa(){
						document.querySelector(".SCHUTZSCHILD").classList.add("ZEIGEN");
					}

					function SchutzschildWeg(){
						document.querySelector(".SCHUTZSCHILD").classList.remove("ZEIGEN");
					}

					function SonicShieldAus() {
						document.querySelector(".INFOSONICSHIELD").classList.remove("ZEIGEN");
					}

	</script>

 
</body>
</html>


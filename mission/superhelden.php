<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Die Superhelden</title>
	
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">


</head>

<body>
	
	<?php include '../include/nav.php'; ?>
	
	<!-- Hintergrundvideo -->
	<video autoplay muted loop id="backgroundVideo">
		<source src="../videos/background_video.mp4" type="video/mp4">
		
	</video>

			<div class="SCHRIFTZUG-AUSWAHL">
				WÄHLE DEINEN <br/> SUPERHELDEN
			</div>
			
		
			<div class="icon-container">
				<div class="SCARLETSHADE">
					<img class="BILD-AUSWAHL" src="../images/BadGirl.png" alt="Scarlet Shade">
				</div>

				<div class="GOLDENKNIGHT">
					<img class="BILD-AUSWAHL" src="../images/Prinz.png" alt="Golden Knight">
				</div>

				<div class="GREENBLAZE">
					<img class="BILD-AUSWAHL" src="../images/Prinzessin.png" alt="Green Blaze">
				</div>
			
				<div class="THUNDERBOLT">
					<img class="BILD-AUSWAHL" src="../images/AquaBoy.png" alt="Thunder Bolt">
				</div>

				<div class="CYBERTITAN">
					<img class="BILD-AUSWAHL" src="../images/Biest.png" alt="Cyber Titan">
				</div>

				<div class="SONICSHIELD">
					<img class="BILD-AUSWAHL" src="../images/BadBoy.png" alt="Sonic Shield">
				</div>
	</div>
			
			<div class="INFOSCARLETSHADE">
				<button id="buttonSCS">&times;</button>
				
					<div><img class="BILDINFOBOX-SCARLET-AUSWAHL" src="../images/BadGirl.png" alt="Scarlet Shade"></div>
					
						<a class=NAME-AUSWAHL>Scarlet Shade</a>
						<div class="TEXTBLOCK-AUSWAHL">
						<a class="TITEL-AUSWAHL"><strong>Superkraft:</strong></a><br>
							<a class="TEXT-AUSWAHL" style="text-align: left">Unsichtbarkeit und Tarnung</a>
						<br><br>
						<a class="TITEL-AUSWAHL"><strong>Beschreibung:</strong></a><br>
							<a class="TEXT-AUSWAHL" style="text-align: justify">Scarlet Shade trägt einen roten Umhang und eine passende rote Maske, die sie bei Bedarf unsichtbar machen. Sie kann sich lautlos bewegen und ist eine hervorragende Spionin, die Geheimnisse aufdeckt und Gerechtigkeit bringt.</a>
					</div>
					<br><br>
				
				<button class="AUSWAHL" onclick="window.location.href='klimaschaeden/klimaschaeden_scarlet.php'">Auswählen</button>
			</div>

			<div class="INFOGOLDENKNIGHT">
				<button id="buttonGK">&times;</button>
				
				<div><img class="BILDINFOBOX-KNIGHT-AUSWAHL" src="../images/Prinz.png" alt="Golden Knight"></div>
				
				<a class=NAME-AUSWAHL>Golden Knight</a>
				
				<div class="TEXTBLOCK-AUSWAHL">
					<a class="TITEL-AUSWAHL"><strong>Superkraft:</strong></a><br>
					<a class="TEXT-AUSWAHL">Schutzzauber und Fliegen</a>
					<br><br>
					<a class="TITEL-AUSWAHL"><strong>Beschreibung:</strong></a><br>
					<a class="TEXT-AUSWAHL">Golden Knight kann Schutzschilde für sich und andere errichten und fliegt mit übernatürlicher Anmut über den Himmel, um Menschen vor Gefahren zu bewahren.</a>
				</div>
				
				<button class="AUSWAHL" onclick="window.location.href='klimaschaeden/klimaschaeden_knight.php'">Auswählen</button>
			</div>

			<div class="INFOGREENBLAZE">
				<button id="buttonGB">&times;</button>
				
				<img class="BILDINFOBOX-BLAZE-AUSWAHL" src="../images/Prinzessin.png" alt="Green Blaze">
				<img class="BLUMEN-INFOBOX-AUSWAHL" src="../images/blumenwiese.png" alt="Blumenwiese mit Biene">
				
				<a class=NAME-AUSWAHL>Green Blaze</a>
				
				<div class="TEXTBLOCK-AUSWAHL">				
					<a class="TITEL-AUSWAHL"><strong>Superkraft:</strong></a><br>
					<a class="TEXT-AUSWAHL">Pflanzenkontrolle</a>
					<br><br>
					<a class="TITEL-AUSWAHL"><strong>Beschreibung:</strong></a><br>
					<a class="TEXT-AUSWAHL">Green Blaze ist eine Meisterin der Natur. Sie kann Pflanzen wachsen lassen, heilen und sogar zu Schutzschilden formen. Sie setzt sich für den Schutz der Natur und den Erhalt des Ökosystems ein.</a>
				</div>
				
				<button class="AUSWAHL" onclick="window.location.href='klimaschaeden/klimaschaeden_blaze.php'">Auswählen</button>
			</div>

			<div class="INFOTHUNDERBOLT">
				<button id="buttonTB">&times;</button>
				
				<img class="BILDINFOBOX-THUNDER-AUSWAHL" src="../images/AquaBoy.png" alt="Thunderbolt">
				
				<a class=NAME-AUSWAHL>Thunderbolt</a><br>
				
				<div class="TEXTBLOCK-AUSWAHL">
					<a class="TITEL-AUSWAHL"><strong>Superkraft:</strong></a><br>
					<a class="TEXT-AUSWAHL">Überschallgeschwindigkeit</a>
					<br><br>
					<a class="TITEL-AUSWAHL"><strong>Beschreibung:</strong></a>
					<br><a class="TEXT-AUSWAHL">Thunderbolt, von Blitzen durchzogen, kann sich blitzschnell bewegen und sogar durch die Zeit reisen. Er nutzt seine Geschwindigkeit, um Menschen zu retten und Verbrecher zu stoppen.</a>
				</div>
				
				<button class="AUSWAHL" onclick="window.location.href='klimaschaeden/klimaschaeden_thunder.php'">Auswählen</button>
			</div>
	
			<div class="RAHMEN-INFO">
				<button class="TITAN-ZU" id="buttonCT">&times;</button>
				<img class="BILDINFOBOX-TITAN-AUSWAHL" src="../images/Biest.png" alt="Cyber Titan">
				<button class="AUSWAHL-TITAN" onclick="window.location.href='klimaschaeden/klimaschaeden_titan.php'">Auswählen</button>
			</div>

			<div class="INFOCYBERTITAN">
			
				<a class=NAME-AUSWAHL>Cyber Titan</a>
				
				<div class="TEXTBLOCK-AUSWAHL">
					<a class="TITEL-AUSWAHL"><strong>Superkraft:</strong></a><br>
					<a class="TEXT-AUSWAHL">Übermenschliche Stärke und technologische Kontrolle</a>
					<br><br>
					<a class="TITEL-AUSWAHL"><strong>Beschreibung:</strong></a><br>
					<a class="TEXT-AUSWAHL">Cyber Titan ist eine Mischung aus Mensch und Maschine. Mit enormer Kraft und der Fähigkeit, Technologie zu kontrollieren, bekämpft er Feinde, die die Menschheit bedrohen.</a>
				</div>
				
			</div>
	
			<img class="BLACKSCREEN" src="../images/blackscreen.png" alt="Schwarzer Bildschirm">

			<div class="INFOSONICSHIELD">
				<button id="buttonSOS">&times;</button>
				
				<img class="SCHUTZSCHILD-AUSWAHL" src="../images/schutzschild.png" alt="Funkelnder Lichtkreis">
				<img class="BILDINFOBOX-SONIC-AUSWAHL" src="../images/BadBoy.png" alt="Sonic Shield">
				
				<a class=NAME-AUSWAHL>Sonic Shield</a>
				
				<div class="TEXTBLOCK-AUSWAHL">
					<a class="TITEL-AUSWAHL"><strong>Superkraft:</strong></a><br>
					<a class="TEXT-AUSWAHL">Schallwellenmanipulation</a>
					<br><br>
					<a class="TITEL-AUSWAHL"><strong>Beschreibung:</strong></a><br>
					<a class="TEXT-AUSWAHL">Sonic Shield kann Schallwellen erzeugen und kontrollieren, um massive Wände zu zerstören oder Verteidigungsfelder zu schaffen. Er kann zudem mit elektrischen Geräten kommunizieren und sie auch ohne Strom zu benutzen.</a>
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

					document.querySelector(".BILDINFOBOX-SCARLET-AUSWAHL").addEventListener("mouseover",ScarletWeg);
					document.querySelector(".BILDINFOBOX-SCARLET-AUSWAHL").addEventListener("mouseout",ScarletDa);

					function ZeigeScarletShade() {
						document.querySelector(".INFOGOLDENKNIGHT").classList.remove("ZEIGEN");
						document.querySelector(".INFOGREENBLAZE").classList.remove("ZEIGEN");
						document.querySelector(".INFOTHUNDERBOLT").classList.remove("ZEIGEN");
						document.querySelector(".INFOCYBERTITAN").classList.remove("ZEIGEN");
						document.querySelector(".INFOSONICSHIELD").classList.remove("ZEIGEN");
						document.querySelector(".INFOSCARLETSHADE").classList.add("ZEIGEN");
						document.querySelector(".BILDINFOBOX-SCARLET-AUSWAHL").classList.add("ZEIGEN");
						document.querySelector(".AUSWAHL").classList.add("ZEIGEN");
					}

					function ScarletWeg(){
						document.querySelector(".BILDINFOBOX-SCARLET-AUSWAHL").classList.remove("ZEIGEN");
					}

					function ScarletDa(){
						document.querySelector(".BILDINFOBOX-SCARLET-AUSWAHL").classList.add("ZEIGEN");
					}

					function ScarletShadeAus() {
						document.querySelector(".INFOSCARLETSHADE").classList.remove("ZEIGEN");
						document.querySelector(".BILDINFOBOX-SCARLET-AUSWAHL").classList.remove("ZEIGEN");
						
					}


				document.querySelector('.GOLDENKNIGHT').addEventListener('click',ZeigeGoldenKnight);
					document.querySelector('#buttonGK').addEventListener('click',GoldenKnightAus);

					function ZeigeGoldenKnight() {
						document.querySelector(".INFOSCARLETSHADE").classList.remove("ZEIGEN");
						document.querySelector(".BILDINFOBOX-SCARLET-AUSWAHL").classList.remove("ZEIGEN");
						document.querySelector(".INFOGREENBLAZE").classList.remove("ZEIGEN");
						document.querySelector(".INFOTHUNDERBOLT").classList.remove("ZEIGEN");
						document.querySelector(".INFOCYBERTITAN").classList.remove("ZEIGEN");
						document.querySelector(".INFOSONICSHIELD").classList.remove("ZEIGEN");
						document.querySelector(".INFOGOLDENKNIGHT").classList.add("ZEIGEN");
					}

					document.querySelector(".BILDINFOBOX-KNIGHT-AUSWAHL").addEventListener("click", KnightFliegt);

					function KnightFliegt(){
						document.querySelector(".BILDINFOBOX-KNIGHT-AUSWAHL").style.animationPlayState = "running";

						const hero = document.querySelector(".BILDINFOBOX-KNIGHT-AUSWAHL");					// Die nächsten drei Schritte sind mit ChatGPT programmiert: Entferne die Animation, indem du den `animation-name` auf "none" setzt
						hero.style.animation = "none";												// Erzwungene Neuberechnung des Styles, um den Browser die Änderung registrieren zu lassen
						void hero.offsetWidth;														// Füge die Animation wieder hinzu
						hero.style.animation = "FLIEGEN 2s linear 1 forwards";
					}

					function GoldenKnightAus() {
						document.querySelector(".INFOGOLDENKNIGHT").classList.remove("ZEIGEN");
					}

				document.querySelector('.GREENBLAZE').addEventListener('click',ZeigeGreenBlaze);
					document.querySelector('#buttonGB').addEventListener('click',GreenBlazeAus);

					document.querySelector(".BILDINFOBOX-BLAZE-AUSWAHL").addEventListener("mouseover",BlumenDa);
					document.querySelector(".BILDINFOBOX-BLAZE-AUSWAHL").addEventListener("mouseout",BlumenWeg);

					function ZeigeGreenBlaze() {
						document.querySelector(".INFOSCARLETSHADE").classList.remove("ZEIGEN");
						document.querySelector(".BILDINFOBOX-SCARLET-AUSWAHL").classList.remove("ZEIGEN");
						document.querySelector(".INFOGOLDENKNIGHT").classList.remove("ZEIGEN");
						document.querySelector(".INFOTHUNDERBOLT").classList.remove("ZEIGEN");
						document.querySelector(".INFOCYBERTITAN").classList.remove("ZEIGEN");
						document.querySelector(".INFOSONICSHIELD").classList.remove("ZEIGEN");
						document.querySelector(".INFOGREENBLAZE").classList.add("ZEIGEN");
					}

					function BlumenDa(){
						document.querySelector(".BLUMEN-INFOBOX-AUSWAHL").classList.add("ZEIGEN");
					}

					function BlumenWeg(){
						document.querySelector(".BLUMEN-INFOBOX-AUSWAHL").classList.remove("ZEIGEN");
					}

					function GreenBlazeAus() {
						document.querySelector(".INFOGREENBLAZE").classList.remove("ZEIGEN");
					}

				document.querySelector('.THUNDERBOLT').addEventListener('click',ZeigeThunderBolt);
					document.querySelector('#buttonTB').addEventListener('click',ThunderBoltAus);

					function ZeigeThunderBolt() {
						document.querySelector(".INFOSCARLETSHADE").classList.remove("ZEIGEN");
						document.querySelector(".BILDINFOBOX-SCARLET-AUSWAHL").classList.remove("ZEIGEN");
						document.querySelector(".INFOGOLDENKNIGHT").classList.remove("ZEIGEN");
						document.querySelector(".INFOGREENBLAZE").classList.remove("ZEIGEN");
						document.querySelector(".INFOCYBERTITAN").classList.remove("ZEIGEN");
						document.querySelector(".INFOSONICSHIELD").classList.remove("ZEIGEN");
						document.querySelector(".INFOTHUNDERBOLT").classList.add("ZEIGEN");
					}

					document.querySelector(".BILDINFOBOX-THUNDER-AUSWAHL").addEventListener("click",ThunderRennt);

					function ThunderRennt(){
						document.querySelector(".BILDINFOBOX-THUNDER-AUSWAHL").style.animationPlayState = "running";

						const thunder = document.querySelector(".BILDINFOBOX-THUNDER-AUSWAHL");					// Die nächsten drei Schritte sind mit ChatGPT programmiert: Entferne die Animation, indem du den `animation-name` auf "none" setzt
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
						document.querySelector(".BILDINFOBOX-SCARLET-AUSWAHL").classList.remove("ZEIGEN");
						document.querySelector(".INFOGOLDENKNIGHT").classList.remove("ZEIGEN");
						document.querySelector(".INFOGREENBLAZE").classList.remove("ZEIGEN");
						document.querySelector(".INFOTHUNDERBOLT").classList.remove("ZEIGEN");
						document.querySelector(".INFOSONICSHIELD").classList.remove("ZEIGEN");
						document.querySelector(".INFOCYBERTITAN").classList.add("ZEIGEN");
						document.querySelector(".RAHMEN-INFO").classList.add("ZEIGEN");
						document.querySelector(".AUSWAHL-TITAN").classList.add("ZEIGEN");
						document.querySelector(".TITAN-ZU").classList.add("ZEIGEN");
					}

					document.querySelector(".BILDINFOBOX-TITAN-AUSWAHL").addEventListener("mouseover",BlackScreenDa);
					document.querySelector(".BILDINFOBOX-TITAN-AUSWAHL").addEventListener("mouseout",BlackScreenWeg);


					function BlackScreenDa(){
						document.querySelector(".BLACKSCREEN").classList.add("ZEIGEN");
						document.querySelector(".AUSWAHL-TITAN").classList.remove("ZEIGEN");
						document.querySelector(".TITAN-ZU").classList.remove("ZEIGEN");
					}

					function BlackScreenWeg(){
						document.querySelector(".BLACKSCREEN").classList.remove("ZEIGEN");
						document.querySelector(".AUSWAHL-TITAN").classList.add("ZEIGEN");
						document.querySelector(".TITAN-ZU").classList.add("ZEIGEN");
					}

					function CyberTitanAus() {
						document.querySelector(".INFOCYBERTITAN").classList.remove("ZEIGEN");
						document.querySelector(".AUSWAHL-TITAN").classList.remove("ZEIGEN");
						document.querySelector(".TITAN-ZU").classList.remove("ZEIGEN");
					}

				document.querySelector('.SONICSHIELD').addEventListener('click',ZeigeSonicShield);
					document.querySelector('#buttonSOS').addEventListener('click',SonicShieldAus);

					function ZeigeSonicShield() {
						document.querySelector(".INFOSCARLETSHADE").classList.remove("ZEIGEN");
						document.querySelector(".BILDINFOBOX-SCARLET-AUSWAHL").classList.remove("ZEIGEN");
						document.querySelector(".INFOGOLDENKNIGHT").classList.remove("ZEIGEN");
						document.querySelector(".INFOGREENBLAZE").classList.remove("ZEIGEN");
						document.querySelector(".INFOTHUNDERBOLT").classList.remove("ZEIGEN");
						document.querySelector(".INFOCYBERTITAN").classList.remove("ZEIGEN");
						document.querySelector(".INFOSONICSHIELD").classList.add("ZEIGEN");
					}
		
					document.querySelector(".BILDINFOBOX-SONIC-AUSWAHL").addEventListener("mouseover",SchutzschildDa);
					document.querySelector(".BILDINFOBOX-SONIC-AUSWAHL").addEventListener("mouseout",SchutzschildWeg);


					function SchutzschildDa(){
						document.querySelector(".SCHUTZSCHILD-AUSWAHL").classList.add("ZEIGEN");
					}

					function SchutzschildWeg(){
						document.querySelector(".SCHUTZSCHILD-AUSWAHL").classList.remove("ZEIGEN");
					}

					function SonicShieldAus() {
						document.querySelector(".INFOSONICSHIELD").classList.remove("ZEIGEN");
					}

	</script>

 
</body>
</html>


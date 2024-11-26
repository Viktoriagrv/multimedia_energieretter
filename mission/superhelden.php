<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Die Superhelden</title>
	
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../include/css/styles.css">
    <style>

				
		.Schriftzug{
			position: fixed;
			top: center;
			left: 3rem;
			font-family: "bangers";
			font-size: 5rem;
			color: #e8a723;
			line-height: 1.1;
			}
		
		.BILD{
			position: fixed;
			height: 30%;
			width: auto;
			margin: 5rem;
			}
		
		.BILDBOX{
			display:flex;
			justify-content: space-around;
			}
		
		.BILDINFOBOX{
			position: relative;
			top:10%;
			left: 25px;
			height: 350px;
			width: auto;
			}
		
		.TEXTBLOCK{
			position: absolute;
			left: 350px;
			top: 35px;
			padding: 20px;
			}
		
		.NAME{
			font-family: "bangers";
			color: #e8a723;
			font-size: 2.5rem;
			text-align: center;
			}
		
		.TITEL{
			font-family: verdana bold;
			color: #285238;
			text-decoration: underline;
			font-size: 1.5rem;
			text-align: left;
			}
		
		.TEXT{
			font-family: verdana bold;
			color: #285238;
			font-size: 1.5rem;
			text-align: left;
			}
		
		.CLOSE{
			font-size: 1rem bold;
			background-color: #285238;
			color: #e8a723;
			border:3px solid #285238;
			border-radius: 3px;
			}
		
		.CLOSE:hover{
			background-color: #45a049;
			color: #285238;
			}
		
		.AUSWAHL{
			position: absolute;
			padding: 8px;
			bottom: 20px;
			left: 300px;
			font-family: "bangers";
			font-size: 2rem;
			color: #e8a723;
			border: 2px solid #285238;
			border-radius: 5px;
			background-color: #285238;
			}
		
		.AUSWAHL:hover{
			color: #285238;
			background-color: #45a049;
			border: 2px solid #285238;
		}
		
		.SCARLETSHADE {
			position: absolute;
			top: 50px;
			left: 500px;
			}
		
		.GOLDENKNIGHT {
			position: absolute;
			top: 50px;
			left: 750px;
			}
		
		.GREENBLAZE {
			position: absolute;
			top: 50px;
			left: 1000px;
			}
		
		.THUNDERBOLT {
			position: absolute;
			top: 300px;
			left: 500px;
			}
		
		.CYBERTITAN {
			position: absolute;
			top: 300px;
			left: 750px;
			}
		
		.SONICSHIELD {
			position: absolute;
			top: 300px;
			left: 1000px;
			}
		
		.INFOSCARLETSHADE {
			flex-direction: row;
			position: sticky;
			padding: 30px;
			top: 200px;
			left: 650px;
			height:400px;
			width: 650px;
			border-radius: 20px 20px 20px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			}
		.SICHTBAR {
			visibility: visible;
			}
		
		.INFOGOLDENKNIGHT {
			flex-direction: row;
			position: sticky;
			padding: 30px;
			top: 200px;
			left: 650px;
			height:400px;
			width: 650px;
			border-radius: 20px 20px 20px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			}
		.SICHTBAR {
			visibility: visible;
			}
		
		.INFOGREENBLAZE {
			flex-direction: row;
			position: sticky;
			padding: 30px;
			top: 200px;
			left: 650px;
			height:400px;
			width: 650px;
			border-radius: 20px 20px 20px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			}
		.SICHTBAR {
			visibility: visible;
			}
		
		.INFOTHUNDERBOLT {
			flex-direction: row;
			position: sticky;
			padding: 30px;
			bottom: 200px;
			left: 650px;
			height:400px;
			width: 650px;
			border-radius: 20px 20px 20px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			}
		.SICHTBAR {
			visibility: visible;
			}
		
		.INFOCYBERTITAN {
			flex-direction: row;
			position: sticky;
			padding: 30px;
			top: 200px;
			left: 650px;
			height:400px;
			width: 650px;
			border-radius: 20px 20px 20px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			}
		.SICHTBAR {
			visibility: visible;
			}
		
		.INFOSONICSHIELD {
			flex-direction: row;
			position: sticky;
			padding: 30px;
			top: 200px;
			left: 650px;
			height:400px;
			width: 650px;
			border-radius: 20px 20px 20px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			}		
		.SICHTBAR {
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
	
	<!-- Einbinden der Navigationsleiste -->
	<?php include '../include/partials/nav.php'; ?>
	
	<main>

			<div class="Schriftzug">
				WÄHLE DEINEN <br/> SUPERHELDEN
			</div>
			
		<div  class="icon-container">
			<div class="BILDBOX">
				<div class="SCARLETSHADE">
					<img class="BILD" src="../images/BadGirl.png" alt="Scarlet Shade">
				</div>

				<div class="GOLDENKNIGHT">
					<img class="BILD" src="../images/Prinz.png" alt="Golden Knight">
				</div>

				<div class="GREENBLAZE">
					<img class="BILD" src="../images/Prinzessin.png" alt="Green Blaze">
				</div>
			</div>  

			<div>
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
				
					<div><img class="BILDINFOBOX" src="../images/BadGirl.png" alt="Scarlet Shade"></div>
					<div class="TEXTBLOCK">
						<a class=NAME>Scarlet Shade</a>
						<br>
						<a class="TITEL">Superkraft:</a><a class="TEXT">Unsichtbarkeit und Tarnung</a>
						<br>
						<a class="TITEL">Beschreibung:</a><a class="TEXT">Scarlet Shade trägt einen roten Umhang und eine passende rote Maske, die sie bei Bedarf unsichtbar machen. Sie kann sich lautlos bewegen und ist eine hervorragende Spionin, die Geheimnisse aufdeckt und Gerechtigkeit bringt.</a>
					</div>
					<br><br>
				
				<button class="AUSWAHL" onclick="window.location.href='missionsstart.php'">Auswählen</button>
			</div>

			<div class="INFOGOLDENKNIGHT">
				<button id="buttonGK">&times;</button>
				
				<div><img class="BILDINFOBOX" src="../images/Prinz.png" alt="Golden Knight"></div>
				<div class="TEXTBLOCK">
					<a class=NAME>Golden Knight</a>
					<br>
					<a class="TITEL">Superkraft:</a> <a class="TEXT">Schutzzauber und Fliegen</a>
					<br>
					<a class="TITEL">Beschreibung:</a> <a class="TEXT">Golden Knight kann Schutzschilde für sich und andere errichten und fliegt mit übernatürlicher Anmut über den Himmel, um Menschen vor Gefahren zu bewahren.</a>
					<br><br>
				</div>
				
				<button class="AUSWAHL" onclick="window.location.href='missionsstart.php'">Auswählen</button>
			</div>

			<div class="INFOGREENBLAZE">
				<button id="buttonGB">&times;</button>
				
				<div><img class="BILDINFOBOX" src="../images/Prinzessin.png" alt="Green Blaze"></div>
				
				<div class="TEXTBLOCK">
					<a class=NAME>Green Blaze</a>
					<br>
					<a class="TITEL">Superkraft:</a> <a class="TEXT">Pflanzenkontrolle</a>
					<br>
					<a class="TITEL">Beschreibung:</a> <a class="TEXT">Green Blaze ist eine Meisterin der Natur. Sie kann Pflanzen wachsen lassen, heilen und sogar zu Schutzschilden formen. Sie setzt sich für den Schutz der Natur und den Erhalt des Ökosystems ein.</a>
					<br><br>
				</div>
				
				<button class="AUSWAHL" onclick="window.location.href='missionsstart.php'">Auswählen</button>
			</div>

			<div class="INFOTHUNDERBOLT">
				<button id="buttonTB">&times;</button>
				
				<div><img class="BILDINFOBOX" src="../images/AquaBoy.png" alt="Thunder Bolt"></div>
				
				<div class="TEXTBLOCK">
					<a class=NAME>Thunderbolt</a><br>
					<a class="TITEL">Superkraft:</a> <a class="TEXT">Überschallgeschwindigkeit</a>
					<br>
					<a class="TITEL">Beschreibung:</a> <a class="TEXT">Thunderbolt, von Blitzen durchzogen, kann sich blitzschnell bewegen und sogar durch die Zeit reisen. Er nutzt seine Geschwindigkeit, um Menschen zu retten und Verbrecher zu stoppen.</a>
					<br><br>
				</div>
				
				<button class="AUSWAHL" onclick="window.location.href='missionsstart.php'">Auswählen</button>
			</div>

			<div class="INFOCYBERTITAN">
				<button id="buttonCT">&times;</button>
				
				<div><img class="BILDINFOBOX" src="../images/Biest.png" alt="Cyber Titan"></div>
				
				<div class="TEXTBLOCK">
					<a class=NAME>Cyber Titan</a><br>
					<a class="TITEL">Superkraft:</a> <a class="TEXT">Übermenschliche Stärke und technologische Kontrolle</a>
					<br>
					<a class="TITEL">Beschreibung:</a> <a class="TEXT">Cyber Titan ist eine Mischung aus Mensch und Maschine. Mit enormer Kraft und der Fähigkeit, Technologie zu kontrollieren, bekämpft er Feinde, die die Menschheit bedrohen.</a>
					<br><br>
				</div>
				
				<button class="AUSWAHL" onclick="window.location.href='missionsstart.php'">Auswählen</button>
			</div>

			<div class="INFOSONICSHIELD">
				<button id="buttonSOS">&times;</button>
				
				<div><img class="BILDINFOBOX" src="../images/BadBoy.png" alt="Sonic Shield"></div>
				<div class="TEXTBLOCK">
					<a class=NAME>Sonic Shield</a><br>
					<a class="TITEL">Superkraft:</a> <a class="TEXT">Schallwellenmanipulation</a>
					<br>
					<a class="TITEL">Beschreibung:</a> <a class="TEXT">Sonic Shield kann Schallwellen erzeugen und kontrollieren, um massive Wände zu zerstören oder Verteidigungsfelder zu schaffen. Er kann zudem mit elektrischen Geräten kommunizieren und sie auch ohne Strom zu benutzen.</a>
					<br><br>
				</div>
				
				<button class="AUSWAHL" onclick="window.location.href='missionsstart.php'">Auswählen</button>
			</div>
		</div>
		</main>
	
			<script>
				
        // Funktion für das langsame und weniger weite Schweben der Icons
        function floatIcons() {
            const icons = document.querySelectorAll('.icon-container');
            icons.forEach(icon => {
                let position = 0;
                let direction = 1;
                const maxMovement = 15;  // Weniger Bewegung (max. 15px nach oben/unten)
                const stepSize = 0.25;  // Sehr langsame Bewegung (0.25px pro Frame)

                const iconFloat = () => {
                    if (position >= maxMovement || position <= -maxMovement) {
                        direction *= -1;  // Richtungswechsel, wenn das Limit erreicht ist
                    }
                    position += direction * stepSize;  // Schrittgröße (langsamer)
                    icon.style.transform = `translateY(${position}px)`;  // Anwenden der Bewegung
                    requestAnimationFrame(iconFloat);  // Animation fortsetzen
                };

                iconFloat();
            });
        }

				document.querySelector('.SCARLETSHADE').addEventListener('click',ZeigeScarletShade);
				document.querySelector('#buttonSCS').addEventListener('click',ScarletShadeAus);
				
				function ZeigeScarletShade() {
					document.querySelector(".INFOSCARLETSHADE").classList.add("SICHTBAR");
					}
				function ScarletShadeAus() {
					document.querySelector(".INFOSCARLETSHADE").classList.remove("SICHTBAR");
					}


				document.querySelector('.GOLDENKNIGHT').addEventListener('click',ZeigeGoldenKnight);
				document.querySelector('#buttonGK').addEventListener('click',GoldenKnightAus);
				
				function ZeigeGoldenKnight() {
					document.querySelector(".INFOGOLDENKNIGHT").classList.add("SICHTBAR");
					}
				function GoldenKnightAus() {
					document.querySelector(".INFOGOLDENKNIGHT").classList.remove("SICHTBAR");
					}

				document.querySelector('.GREENBLAZE').addEventListener('click',ZeigeGreenBlaze);
				document.querySelector('#buttonGB').addEventListener('click',GreenBlazeAus);
				
				function ZeigeGreenBlaze() {
					document.querySelector(".INFOGREENBLAZE").classList.add("SICHTBAR");
					}
				function GreenBlazeAus() {
					document.querySelector(".INFOGREENBLAZE").classList.remove("SICHTBAR");
					}

				document.querySelector('.THUNDERBOLT').addEventListener('click',ZeigeThunderBolt);
				document.querySelector('#buttonTB').addEventListener('click',ThunderBoltAus);
				
				function ZeigeThunderBolt() {
					document.querySelector(".INFOTHUNDERBOLT").classList.add("SICHTBAR");
					}
				function ThunderBoltAus() {
					document.querySelector(".INFOTHUNDERBOLT").classList.remove("SICHTBAR");
					}

				document.querySelector('.CYBERTITAN').addEventListener('click',ZeigeCyberTitan);
				document.querySelector('#buttonCT').addEventListener('click',CyberTitanAus);
				
				function ZeigeCyberTitan() {
					document.querySelector(".INFOCYBERTITAN").classList.add("SICHTBAR");
					}
				function CyberTitanAus() {
					document.querySelector(".INFOCYBERTITAN").classList.remove("SICHTBAR");
					}

				document.querySelector('.SONICSHIELD').addEventListener('click',ZeigeSonicShield);
				document.querySelector('#buttonSOS').addEventListener('click',SonicShieldAus);
				
				function ZeigeSonicShield() {
					document.querySelector(".INFOSONICSHIELD").classList.add("SICHTBAR");
					}

				function SonicShieldAus() {
					document.querySelector(".INFOSONICSHIELD").classList.remove("SICHTBAR");
					}


			</script>

    
	
 <!-- Einbinden des Footers -->
  <?php include '../include/partials/footer.php'; ?> 
	   
   
</body>
</html>


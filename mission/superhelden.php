<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Die Superhelden</title>

    
   
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">		<!-- Einbinden der Google Fonts -->   
    <!--<link rel="stylesheet" href="../include/css/styles.css"> -->		
	<link rel="stylesheet" href="../include/css/styles.css"> 								<!-- Einbinden der CSS-Datei -->

    <style>
		
		.Schriftzug{
			position:absolute;
			top: 150px;
			left: 30px;
			font-family: "bangers";
			font-size: 80px;
			color: #e8a723;
			line-height: 1.1;
			}
		
		.BILD{
			height: 200px;
			width: auto;
			}
		
		.BILDINFOBOX{
			height: 200px;
			width: auto;
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
			position: absolute;
			padding: 30px;
			top: 50px;
			left: 400px;
			height:300px;
			width: 600px;
			border-radius: 20px 20px 20px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			text-align: center;
			visibility: hidden;
			}
		
		.INFOGOLDENKNIGHT {
			position: absolute;
			padding: 30px;
			top: 50px;
			left: 400px;
			height:300px;
			width: 600px;
			border-radius: 20px 20px 20px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			text-align: center;
			visibility: hidden;
			}
		
		.INFOGREENBLAZE {
			position: absolute;
			padding: 30px;
			top: 50px;
			left: 400px;
			height:300px;
			width: 600px;
			border-radius: 20px 20px 20px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			text-align: center;
			visibility: hidden;
			}
		
		.INFOTHUNDERBOLT {
			position: absolute;
			padding: 30px;
			top: 50px;
			left: 400px;
			height:300px;
			width: 600px;
			border-radius: 20px 20px 20px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			text-align: center;
			visibility: hidden;
			}
		
		.INFOCYBERTITAN {
			position: absolute;
			padding: 30px;
			top: 50px;
			left: 400px;
			height:300px;
			width: 600px;
			border-radius: 20px 20px 20px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			text-align: center;
			visibility: hidden;
			}
		
		.INFOSONICSHIELD {
			position: absolute;
			padding: 30px;
			top: 50px;
			left: 400px;
			height:300px;
			width: 600px;
			border-radius: 20px 20px 20px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			text-align: center;
			visibility: hidden;
			}
		
		.SICHTBAR {
			visibility: visible;
			}
		
	</style>
  
	<!-- Einbinden der Navigationsleiste -->
	
	
</head>

<body>	

			
		<div class="Schriftzug">
		WÄHLE DEINEN <br/> SUPERHELDEN
		</div>
		
		<div>
			<div class="SCARLETSHADE">
				<img class="BILD" src=../images/BadGirl.png alt="Scarlet Shade">
			</div>

			<div class="GOLDENKNIGHT">
				<img class="BILD" src=../images/Prinz.png alt="Golden Knight">
			</div>

			<div class="GREENBLAZE">
				<img class="BILD" src=../images/Prinzessin.png alt="Green Blaze">
			</div>
		</div>	
		
		<div>
			<div class="THUNDERBOLT">
				<img class="BILD" src=../images/AquaBoy.png alt="Thunder Bolt">
			</div>

			<div class="CYBERTITAN">
				<img class="BILD" src=../images/Biest.png alt="Cyber Titan">
			</div>

			<div class="SONICSHIELD">
				<img class="BILD" src=../images/BadBoy.png alt="Sonic Shield">
			</div>
		</div>
	
		<div class="INFOSCARLETSHADE">
			<img class="BILDINFOBOX" src=../images/BadGirl.png alt="Scarlet Shade">
			<button id="buttonSCS">&times;</button>
			Scarlet Shade<br>
			Superkraft: Unsichtbarkeit und Tarnung<br>
			Beschreibung: Scarlet Shade trägt einen roten Umhang und eine passende rote Maske, die sie bei Bedarf unsichtbar machen. Sie kann sich lautlos bewegen und ist eine hervorragende Spionin, die Geheimnisse aufdeckt und Gerechtigkeit bringt.
			<br><br>
			<button onclick="window.location.href='missionsstart.php'">Auswählen</button>
		</div>

   		<div class="INFOGOLDENKNIGHT">
			<img class="BILDINFOBOX" src=../images/Prinz.png alt="Golden Knight">
			<button id="buttonGK">&times;</button>
			Golden Knight<br>
			Superkraft: Schutzzauber und Fliegen<br>
			Beschreibung: Golden Knight kann Schutzschilde für sich und andere errichten und fliegt mit übernatürlicher Anmut über den Himmel, um Menschen vor Gefahren zu bewahren.
			<br><br>
			<button onclick="window.location.href='missionsstart.php'">Auswählen</button>
		</div>
			
		<div class="INFOGREENBLAZE">
			<img class="BILDINFOBOX" src=../images/Prinzessin.png alt="Green Blaze">
			<button id="buttonGB">&times;</button>
			Green Blaze<br>
			Superkraft: Pflanzenkontrolle<br>
			Beschreibung: Green Blaze ist eine Meisterin der Natur. Sie kann Pflanzen wachsen lassen, heilen und sogar zu Schutzschilden formen. Sie setzt sich für den Schutz der Natur und den Erhalt des Ökosystems ein.
			<br><br>
			<button onclick="window.location.href='missionsstart.php'">Auswählen</button>
		</div>
			
		<div class="INFOTHUNDERBOLT">
			<img class="BILDINFOBOX" src=../images/AquaBoy.png alt="Thunder Bolt">
			<button id="buttonTB">&times;</button>
			Thunderbolt<br>
			Superkraft: Überschallgeschwindigkeit<br>
			Beschreibung: Thunderbolt, von Blitzen durchzogen, kann sich blitzschnell bewegen und sogar durch die Zeit reisen. Er nutzt seine Geschwindigkeit, um Menschen zu retten und Verbrecher zu stoppen.
			<br><br>
			<button onclick="window.location.href='missionsstart.php'">Auswählen</button>
		</div>
			
		<div class="INFOCYBERTITAN">
			<img class="BILDINFOBOX" src=../images/Biest.png alt="Cyber Titan">
			<button id="buttonCT">&times;</button>
			Cyber Titan<br>
			Superkraft: Übermenschliche Stärke und technologische Kontrolle<br>
			Beschreibung: Cyber Titan ist eine Mischung aus Mensch und Maschine. Mit enormer Kraft und der Fähigkeit, Technologie zu kontrollieren, bekämpft er Feinde, die die Menschheit bedrohen.
			<br><br>
			<button onclick="window.location.href='missionsstart.php'">Auswählen</button>
		</div>
			
		<div class="INFOSONICSHIELD">
			<img class="BILDINFOBOX" src=../images/BadBoy.png alt="Sonic Shield">
			<button id="buttonSOS">&times;</button>
			Sonic Shield<br>
			Superkraft: Schallwellenmanipulation<br>
			Beschreibung: Sonic Shield kann Schallwellen erzeugen und kontrollieren, um massive Wände zu zerstören oder Verteidigungsfelder zu schaffen. Er kann zudem mit elektrischen Geräten kommunizieren und sie auch ohne Strom zu benutzen.
			<br><br>
			<button onclick="window.location.href='missionsstart.php'">Auswählen</button>
		</div>
	

    <script>
		
		document.querySelector('.SCARELTSHADE').addEventListener('click',ZeigeScarletShade);
		document.querySelector('#buttonSCS').addEventListener('click',ScarletShadeAus);
		
		document.querySelector('.GOLDENKNIGHT').addEventListener('click',ZeigeGoldenKnight);
		document.querySelector('#buttonGK').addEventListener('click',GoldenKnightAus);
		
		document.querySelector('.GREENBLAZE').addEventListener('click',ZeigeGreenBlaze);
		document.querySelector('#buttonGB').addEventListener('click',GreenBlazeAus);
		
		document.querySelector('.THUNDERBOLT').addEventListener('click',ZeigeThunderBolt);
		document.querySelector('#buttonTB').addEventListener('click',ThunderBoltAus);
		
		document.querySelector('.CYBERTITAN').addEventListener('click',ZeigeCyberTitan);
		document.querySelector('#buttonCT').addEventListener('click',CyberTitanAus);
		
		document.querySelector('.SONICSHIELD').addEventListener('click',ZeigeSonicShield);
		document.querySelector('#buttonSOS').addEventListener('click',SonicShieldAus);
		
		
		function ZeigeScarletShade() {
			document.querySelector(".INFOSCARLETSHADE").classList.add("SICHTBAR");
			}
		
		function ScarletShadeAus() {
			document.querySelector(".INFOSCARLETSHADE").classList.remove("SICHTBAR");
			}
		
		
		function ZeigeGoldenKnight() {
			document.querySelector(".INFOGOLDENKNIGHT").classList.add("SICHTBAR");
			}
		
		function GoldenKnightAus() {
			document.querySelector(".INFOGOLDENKNIGHT").classList.remove("SICHTBAR");
			}
		
		function ZeigeGreenBlaze() {
			document.querySelector(".INFOGREENBLAZE").classList.add("SICHTBAR");
			}
		
		function GreenBlazeAus() {
			document.querySelector(".INFOGREENBLAZE").classList.remove("SICHTBAR");
			}
		
	
		function ZeigeThunderBolt() {
			document.querySelector(".INFOTHUNDERBOLT").classList.add("SICHTBAR");
			}
		
		function ThunderBoltAus() {
			document.querySelector(".INFOTHUNDERBOLT").classList.remove("SICHTBAR");
			}
		
		function ZeigeCyberTitan() {
			document.querySelector(".INFOCYBERTITAN").classList.add("SICHTBAR");
			}
		
		function CyberTitanAus() {
			document.querySelector(".INFOCYBERTITAN").classList.remove("SICHTBAR");
			}
		
		
		function ZeigeSonicShield() {
			document.querySelector(".INFOSONICSHIELD").classList.add("SICHTBAR");
			}
		
		function SonicShieldAus() {
			document.querySelector(".INFOSONICSHIELD").classList.remove("SICHTBAR");
			}
		
		
	</script>

    
	
 <!-- Einbinden des Footers -->
   
	   
   
</body>
</html>

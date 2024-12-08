<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Windräder bauen</title>

    

    <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="../../css/styles.css">

	<style>
		.PLATZIERUNG{
			position: absolute;
			height:90%;
			width: 90%;	
			top:10%;
			left:5%;
		}
		
		.WELTKARTE{
			position:absolute;
			top:10%;
			left:0%;
			height:70%;
			width:auto;
			z-index: 1;
			}
		
		.WINDRAD{
			position:relative;
			right: 5%;
			height:20%;
			width:auto;
			z-index: 4;
			
		}
		
		.DROP-ELEMENT {
			position: relative;
			height: 30px;
			width: 30px;
			border-radius: 40%;
			background-color: lightgrey;
			z-index: 3;
		}
		.DRAG-ELEMENT {
			float: left;
			height: 100px;
			width: 100px;
			background-color: purple;
			border-radius: 100%;
			z-index: 4;
		}
		
		#DROPEUROPA{
			position: absolute;
			top: 22%;
			left: 31%;
			
		}
		
		#DROPAUSTRALIEN{
			position: absolute;
			top: 62%;
			right: 39%;
		}
		
		#DROPASIEN{
			position: absolute;
			top: 30%;
			left: 47%;
		}
		
		#DROPSAHARA{
			position: absolute;
			top: 38%;
			left: 33%;
		}
		
		#DROPNIAGARA{
			position: absolute;
			top: 20%;
			left: 15%;
		}
		
		#DROPAMAZONAS{
			position: absolute;
			bottom:43%;
			left: 18%;
		}
		
		#DROPATLANTIK{
			position: absolute;
			top:30%;
			left: 22%;
		}
		
		.EUROPA{
			position: absolute;
			top:18%;
			left:25%;
			height: auto;
			width: 10%;
			padding: 30px;
			font-family: verdana;
			color: #285238;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.AUSTRALIEN{
			position: absolute;
			top:55%;
			right: 35%;
			height: auto;
			width: 10%;
			padding: 30px;
			font-family: verdana;
			color: #285238;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.ASIEN{
			position: absolute;
			top:30%;
			right: 45%;
			height: auto;
			width: 10%;
			padding: 30px;
			font-family: verdana;
			color: #285238;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.SAHARA{
			position: absolute;
			top: 50%;
			left: 28%;
			height: auto;
			width: 10%;
			padding: 30px;
			font-family: verdana;
			color: #285238;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.NIAGARA{
			position: absolute;
			top: 35%;
			left: 15%;
			height: auto;
			width: 10%;
			padding: 30px;
			font-family: verdana;
			color: #285238;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.AMAZONAS{
			position: absolute;
			bottom:43%;
			left: 20%;
			height: auto;
			width: 10%;
			padding: 30px;
			font-family: verdana;
			color: #285238;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.ATLANTIK{
			position: absolute;
			bottom:45%;
			left: 20%;
			height: auto;
			width: 10%;
			padding: 30px;
			font-family: verdana;
			color: #285238;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.ZEIGEN{
			visibility: visible;
		}

	</style>
</head>

<body>
	
	 <!-- Hintergrundvideo -->
		<video autoplay muted loop id="backgroundVideo">
			<source src="../../retterwissen/bilder_retterwissen/background_video.mp4" type="video/mp4">
			<source src="../../retterwissen/bilder_retterwissen/background_video.mp4" type="video/webm">
		</video>
	
	
<!-- Navigation einbinden -->
		  <nav class="navbar-custom">

				<!-- Branding -->
				<a class="navbar-brand" href="../missionsstart.php">Die Energieretter</a>

				<!-- Hauptmenü -->
				<div class="menu">


					<a href="../../index.php" class="menu-link menu-item">Vorspann</a>


					<div class="dropdown menu-item">
						<button class="dropbtn menu-link">Mission</button>
						<div class="dropdown-content">
							<a href="../superhelden.php">Die Superhelden</a>
							<a href="../missionsstart.php">Missionsstart</a>
							<a href="../codeeingabe.php">Spiel fortsetzen</a>
						</div>
					</div>

					<!-- Dropdown-Menü -->
					<div class="dropdown menu-item" style="margin-right: 50px;">
						<button class="dropbtn menu-link">Retterwissen</button>
						<div class="dropdown-content">
							<a href="../../retterwissen/zukunftsenergien.php">Zukunftsenergie</a>
							<a href="../retterwissen/innovationen.php">Innovationen</a>
							<a href="../../retterwissen/klimaschaeden.php">Klimaschäden</a>
						</div>
					</div>
				</div>
			</nav>

		
    <main>
		
		<div class="PLATZIERUNG">
			<img class="WELTKARTE" src="../../images/Weltkarte_rot.png" alt="Weltkarte in alarm-rot">
			<div class='DROP-ELEMENT' class="EUROPA" id='DROPEUROPA'></div>
			<div class='DROP-ELEMENT' class="AUSTRALIEN" id='DROPAUSTRALIEN'></div>
			<div class='DROP-ELEMENT'  class="ASIEN" id='DROPASIEN'></div>
			<div class='DROP-ELEMENT' class="SAHARA" id="DROPSAHARA"></div>
			<div class='DROP-ELEMENT' class="NIAGARA" id="DROPNIAGARA"></div>
			<div class='DROP-ELEMENT' class="AMAZONAS" id="DROPAMAZONAS"></div>
			<div class='DROP-ELEMENT' class="ATLANTIK" id="DROPATLANTIK"></div>
			<div class='DROP-ELEMENT'></div>
			<div class='DROP-ELEMENT'></div>
		</div>
		
		<img class="WINDRAD" class='DRAG-ELEMENT' id='DRAGA' draggable='true' src="../../images/windraeder.png" alt="Zwei Windräder">
		<img class="WINDRAD" class='DRAG-ELEMENT' id='DRAGB' draggable='true' src="../../images/windraeder.png" alt="Zwei Windräder">
		<img class="WINDRAD" class='DRAG-ELEMENT' id='DRAGC' draggable='true' src="../../images/windraeder.png" alt="Zwei Windräder">
		
		<div class="EUROPA">
			Die Küstenregionen Europas
		</div>
		
		<div class="AUSTRALIEN">
			Die weiten Steppen Australiens
		</div>
		
		<div class="ASIEN">
			Die hohen Berge Asiens
		</div>
		
		<div class="SAHARA">
			Das sonnige Wüstenmeer Afrikas
		</div>
		
		<div class="NIAGARA">
			Die gewaltigen Wasserfälle Nordamerikas
		</div>
		
		<div class="AMAZONAS">
			Der mächtige Strom im Herzen des Regenwaldes
		</div>
		
		<div class="ATLANTIK">
			Der starken Strömungen des Atlantischen Ozeans
		</div>
		
		
			
    </main>
	
			
	<script>
		
			//Funktionen, um Infoboxen der einzelnen Standorte anzeigen zu lassen 
				document.querySelector('#DROPEUROPA').addEventListener('mouseover',ZeigeEuropa);   	//Bei Mouseover wird die Funktion "ZeigeEuropa" ausgeführt und es öffnet sich eine kleine Info zu dem Standort
				document.querySelector('#DROPEUROPA').addEventListener('mouseout',EuropaAus);		//Geht der Mousezeiger weiter, wird die Funktion EuropaAus augeführt und die Info schließt sich wieder
				
				function ZeigeEuropa() {
					document.querySelector(".EUROPA").classList.add("ZEIGEN");
				}
				function EuropaAus() {
					document.querySelector(".EUROPA").classList.remove("ZEIGEN");
				}
		
		
				document.querySelector('#DROPAUSTRALIEN').addEventListener('mouseover',ZeigeAustralien);   
				document.querySelector('#DROPAUSTRALIEN').addEventListener('mouseout',AustralienAus);
				
				function ZeigeAustralien() {
					document.querySelector(".AUSTRALIEN").classList.add("ZEIGEN");
				}
				function AustralienAus() {
					document.querySelector(".AUSTRALIEN").classList.remove("ZEIGEN");
				}
		
				document.querySelector('#DROPASIEN').addEventListener('mouseover',ZeigeAsien);   
				document.querySelector('#DROPASIEN').addEventListener('mouseout',AsienAus);
				
				function ZeigeAsien() {
					document.querySelector(".ASIEN").classList.add("ZEIGEN");
				}
				function AsienAus() {
					document.querySelector(".ASIEN").classList.remove("ZEIGEN");
				}
		
				document.querySelector('#DROPSAHARA').addEventListener('mouseover',ZeigeSahara);   
				document.querySelector('#DROPSAHARA').addEventListener('mouseout',SaharaAus);
				
				function ZeigeSahara() {
					document.querySelector(".SAHARA").classList.add("ZEIGEN");
				}
				function SaharaAus() {
					document.querySelector(".SAHARA").classList.remove("ZEIGEN");
				}
		
				document.querySelector('#DROPNIAGARA').addEventListener('mouseover',ZeigeNiagara);   
				document.querySelector('#DROPNIAGARA').addEventListener('mouseout',NiagaraAus);
				
				function ZeigeNiagara() {
					document.querySelector(".NIAGARA").classList.add("ZEIGEN");
				}
				function NiagaraAus() {
					document.querySelector(".NIAGARA").classList.remove("ZEIGEN");
				}
		
				document.querySelector('#DROPAMAZONAS').addEventListener('mouseover',ZeigeAmazonas);   
				document.querySelector('#DROPAMAZONAS').addEventListener('mouseout',AmazonasAus);
				
				function ZeigeAmazonas() {
					document.querySelector(".AMAZONAS").classList.add("ZEIGEN");
				}
				function AmazonasAus() {
					document.querySelector(".AMAZONAS").classList.remove("ZEIGEN");
				}
		
				document.querySelector('#DROPATLANTIK').addEventListener('mouseover',ZeigeAtlantik);   
				document.querySelector('#DROPATLANTIK').addEventListener('mouseout',AtlantikAus);
				
				function ZeigeAtlantik() {
					document.querySelector(".ATLANTIK").classList.add("ZEIGEN");
				}
				function AtlantikAus() {
					document.querySelector(".ATLANTIK").classList.remove("ZEIGEN");
				}
		
		
		document.querySelector('#DRAGA').addEventListener('dragstart',ElementAufheben);
		document.querySelector('#DRAGB').addEventListener('dragstart',ElementAufheben);
		document.querySelector('#DRAGC').addEventListener('dragstart',ElementAufheben);
		document.querySelector('#DROPEUROPA').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPEUROPA').addEventListener('drop',ElementAblegen);
		document.querySelector('#DROPAUSTRALIEN').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPAUSTRALIEN').addEventListener('drop',ElementAblegen);
		document.querySelector('#DROPASIEN').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPASIEN').addEventListener('drop',ElementAblegen);
		document.querySelector('button').addEventListener('click',AblagePruefen);
		
		function ElementAufheben() {
			event.dataTransfer.setData('text/plain',event.target.id);										// setzt das Drag-Element (Datentyp und Datenwert)
		}
		
		function AblegenErlauben() {
			if (event.target.classList.contains('DROP-ELEMENT') &&											// wenn das Ziel ein Drop-Element ist und
				! event.target.classList.contains('DRAG-ELEMENT')) {										// wenn das Ziel kein Drag-Element ist
				event.preventDefault();																		// dann ist Ablegen erlaubt, durch Verhindern der Default-Aktion des Events ("Öffnen als Link")
			}
		}
		
		function ElementAblegen() {
			event.preventDefault();																			// verhindert Default-Aktion des Events ("Öffnen als Link")
			event.target.appendChild(document.querySelector('#'+event.dataTransfer.getData('text/plain')));	// liest das Drag-Element und verschiebt es ins Drop-Element
			alert('Kreis abgelegt');																		// Platzhalter für weitere Anweisungen
		}
		
		function AblagePruefen() {
			alert(document.querySelectorAll('.DROP-ELEMENT > .DRAG-ELEMENT').length);						// zählt alle abgelegte Elemente
		}
		
		// mögliche Events für das Drag-Element: dragstart, drag, dragend
		// mögliche Events für das Drop-Element: dragenter, dragover, dragleave, drop
		// erforderliche Events: dragstart, dragover, drop
		// alle Events sind für Touch-Geräte nicht geeignet
		
		
		
	</script>
		
	

    <!-- Einbinden des Footers -->
    <footer class="footer-custom">
    <div class="footer-links">
        <a href="../impressum/impressum.php">Impressum</a>
    </div>
</footer>
   
    
    
</body>
</html>


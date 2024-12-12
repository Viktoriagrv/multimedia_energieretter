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
		
		.WINDRAD1{
			position:absolute;
			top: 10%;
			right: 7%;
			height:20%;
			width:auto;
			z-index: 4;
			cursor: pointer;
		}
		
		.WINDRAD2{
			position:absolute;
			top:35%;
			right: 7%;
			height:20%;
			width:auto;
			z-index: 4;
			cursor: pointer;
		}
		
		.WINDRAD3{
			position:absolute;
			top:23%;
			right: 20%;
			height:20%;
			width:auto;
			z-index: 4;
			cursor: pointer;
		}
		
		.HERO{
			position: absolute;
			bottom: 10%;
			right:5%;
			height:25%;
			width:auto;
		}
		
		.INFOBOX{
			position: absolute;
			padding: 25px;
			bottom: 28%;
			right: 18%;
			height:20%;
			width: 10%;
			font-family: verdana;
			color: #285238;
			text-align: left;
			border-radius: 20px 20px 0px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: visible;
			z-index: 4;
		}
		
		.DROP-ELEMENT {
			height: 30px;
			width: 30px;
			border-radius: 40%;
			background-color: lightgrey;
			z-index: 3;
		}
		
		.DROP-ELEMENT:hover{
			cursor: url('../../images/InfoI.gif'),auto;
			background-color: #285238;
		}
		
		.DRAG-ELEMENT {
			z-index: 4;
			cursor: move;
		}
		
		#DROPEUROPA{
			position: absolute;
			top: 22%;
			left: 31%;		
		}
		
		.EUROPABTN{
			visibility: visible;
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
		
		.EUROPAXL{
			position: absolute;
			top:18%;
			left:35%;
			height: auto;
			width: 10%;
			padding: 30px;
			font-family: verdana;
			color: #285238;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:6;
			
		}
		
		.WINDRADEUROPA{
			position: absolute;
			top: 25%;
			left: 33%;
			height:5%;
			width: auto;
			visibility: hidden;
			z-index: 5;
			cursor: pointer;
		}
		
			
		#DROPAUSTRALIEN{
			position: absolute;
			top: 62%;
			right: 39%;
		}
		
		.AUSTRALIENBTN{
			visibility: visible;
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
		
		.AUSTRALIENXL{
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
		
		#DROPASIEN{
			position: absolute;
			top: 30%;
			left: 47%;
		}
		
		.ASIENBTN{
			visibility: visible;
		}
		
		.ASIEN{
			position: absolute;
			top:25%;
			right: 40%;
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
		
		.ASIENXL{
			position: absolute;
			top:25%;
			right: 32%;
			height: auto;
			width: 10%;
			padding: 30px;
			font-family: verdana;
			color: #285238;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:6;
		}
		
		.WINDRADASIEN{
			position: absolute;
			top:35%;
			left: 48%;
			height:5%;
			width: auto;
			visibility: hidden;
			z-index: 5;
		}
		
		#DROPSAHARA{
			position: absolute;
			top: 38%;
			left: 33%;
		}
		
		.SAHARABTN{
			visibility: visible;
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
		
		.SAHARAXL{
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
		
		#DROPNIAGARA{
			position: absolute;
			top: 20%;
			left: 15%;
		}
		
		.NIAGARABTN{
			visibility: visible;
		}
		
		.NIAGARA{
			position: absolute;
			top: 33%;
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
		
		.NIAGARAXL{
			position: absolute;
			top: 33%;
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
		
		#DROPAMAZONAS{
			position: absolute;
			bottom:43%;
			left: 18%;
		}
		
		.AMAZONASBTN{
			visibility: visible;
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
		
		.AMAZONASXL{
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
		
		#DROPATLANTIK{
			position: absolute;
			top:30%;
			left: 22%;
		}
		
		.ATLANTIKBTN{
			visibility: visible;
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
		
		.ATLANTIKXL{
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
		
		#DROPSIBIRIEN{
			position: absolute;
			top:15%;
			left: 45%;
		}
		
		.SIBIRIENBTN{
			visibility: visible;
		}
				
		.SIBIRIEN{
			position: absolute;
			top:20%;
			right: 38%;
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
		
		.SIBIRIENXL{
			position: absolute;
			top:20%;
			right: 38%;
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
		
		.WINDRADSIBIRIEN{
			position: absolute;
			top:20%;
			left: 45%;
			height:5%;
			width: auto;
			visibility: hidden;
			z-index: 5;
		}
		
		#DROPMEXIKO{
			position: absolute;
			top:41%;
			left: 12%;
		}
		
		.MEXIKOBTN{
			visibility: visible;
		}
		
		.MEXIKO{
			position: absolute;
			top:45%;
			left: 19%;
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
		
		.MEXIKOXL{
			position: absolute;
			top:45%;
			left: 19%;
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
		
		.HURRA{
			position: absolute;
			padding: 25px;
			bottom: 28%;
			right: 18%;
			height:30%;
			width: 10%;
			font-family: verdana;
			color: #285238;
			text-align: left;
			border-radius: 20px 20px 0px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			z-index: 5;
			visibility: hidden;
		}
		
		.FEUERWERK{
			position: absolute;
			top:20%;
			right: 5%;
			heigh: auto;
			width:30%;
			visibility: hidden;
			z-index: 4;
		}
		
		.BTNWEITER{
			position: absolute;
			bottom: 15%;
			right: 18%;
            padding: 20px 30px;
            font-family: 'Bangers';
            font-size: 1.5rem;
			text-decoration: none;
            color: white;
            background-color: #285238;
			border: 2px;
			border-color: white;
            border-radius: 8px;	
			cursor: pointer;
			visibility: hidden;
			z-index: 5;
		}
		
		.ZEIGEN{
			visibility: visible;
		}
		
		.WEG{
			visibility: hidden;
		}
		
		.ZU{
			position: relative;
			top: 7px;
			right: 7px;
		}
		
		.CODE{
			font-family: "bangers";
			font-size: 1.5rem;
			color: #285238;
		}
		
		

	</style>
</head>

<body>
	
	<?php include '../../include/nav.php'; ?>
	
	 <!-- Hintergrundvideo -->
		<video autoplay muted loop id="backgroundVideo">
			<source src="../../retterwissen/bilder_retterwissen/background_video.mp4" type="video/mp4">
			<source src="../../retterwissen/bilder_retterwissen/background_video.mp4" type="video/webm">
		</video>
	
    <main>
		
		<div class="PLATZIERUNG">
			<img class="WELTKARTE" src="../../images/Weltkarte_rot.png" alt="Weltkarte in alarm-rot">
			<div class="DROP-ELEMENT EUROPABTN" id='DROPEUROPA'></div>
			<div class="DROP-ELEMENT AUSTRALIENBTN" id='DROPAUSTRALIEN'></div>
			<div class="DROP-ELEMENT ASIENBTN" id='DROPASIEN'></div>
			<div class="DROP-ELEMENT SAHARABTN" id="DROPSAHARA"></div>
			<div class="DROP-ELEMENT NIAGARABTN" id="DROPNIAGARA"></div>
			<div class="DROP-ELEMENT AMAZONASBTN" id="DROPAMAZONAS"></div>
			<div class="DROP-ELEMENT ATLANTIKBTN" id="DROPATLANTIK"></div>
			<div class="DROP-ELEMENT SIBIRIENBTN" id="DROPSIBIRIEN"></div>
			<div class="DROP-ELEMENT MEXIKOBTN" id="DROPMEXIKO"></div>
		</div>
		
		<img class="WINDRAD1 DRAG-ELEMENT" id='DRAGA' draggable='true' src="../../images/windraeder.png" alt="Zwei Windräder">
		<img class="WINDRAD2 DRAG-ELEMENT" id='DRAGB' draggable='true' src="../../images/windraeder.png" alt="Zwei Windräder">
		<img class="WINDRAD3 DRAG-ELEMENT" id='DRAGC' draggable='true' src="../../images/windraeder.png" alt="Zwei Windräder">
		
		
			<img class="HERO" src="../../images/BadGirl.png" alt="Scarlett Shade">
			<div class="INFOBOX">
				<p>Ziehe die Windräder auf die richtigen Stellen auf der Weltkarte. Wenn Du über die Punkte gehst, bekommst du eine Information zu der Region.</p>
			</div>
	
		
		<div class="EUROPA">
			Die windigen Küstenregionen Europas.
		</div>
		
		<div class="EUROPAXL">
			<button class="ZU">&times;</button>
			<p>Die windigen Küstenregionen Europas. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
			</p>	
		</div>
		
		<div class="AUSTRALIEN">
			Die trockenen Weiten Australiens.
		</div>
		
		<div class="AUSTRALIENXL">
			<button class="ZU">&times;</button>
			<p>Die trockenen Weiten Australiens. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
			</p>
		</div>
		
		<div class="ASIEN">
			Die hohen Berge Asiens.
		</div>
		
		<div class="ASIENXL">
			<button class="ZU">&times;</button>
			<p>Die hohen Berge Asiens sind besonders geeignet für Windkraft, weil hier oft starke Winde wehen.</p>
		</div>
		
		<div class="SAHARA">
			Das heiße Wüstenmeer Afrikas.
		</div>
		
		<div class="SAHARAXL">
			<button class="ZU">&times;</button>
			<p>Das heiße Wüstenmeer Afrikas. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
		</div> 
		
		<div class="NIAGARA">
			Die gewaltigen Wasserfälle Nordamerikas.
		</div>
		
		<div class="NIAGARAXL">
			<button class="ZU">&times;</button>
			<p>Die gewaltigen Wasserfälle Nordamerikas. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
		</div>
		
		<div class="AMAZONAS">
			Der mächtige Strom im Herzen des Regenwaldes.
		</div>
		
		<div class="AMAZONASXL">
			<button class="ZU">&times;</button>
			<p>Der mächtige Strom im Herzen des Regenwaldes. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
		</div>
		
		<div class="ATLANTIK">
			Die starken Strömungen des Atlantischen Ozeans.
		</div>
		
		<div class="ATLANTIKXL">
			<button class="ZU">&times;</button>
			<p>Die starken Strömungen des Atlantischen Ozeans. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
		</div>
		
		<div class="SIBIRIEN">
			Die weiten Steppen im Norden Russlands.
		</div>
		
		<div class="SIBIRIENXL">
			<button class="ZU">Schließen</button>
			<p>Die weiten Steppen im Norden Russlands. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
		</div>
		
		<div class="MEXIKO">
			Die sonnigen Gebiete Mittelamerikas.
		</div>
		
		<div class="MEXIKOXL">
			<button class="ZU">&times;</button>
			<p>Die sonnigen Gebiete Mittelamerikas. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
		</div>
		
		<div>
			<img class="WINDRADEUROPA" src="../../images/windraeder.png" alt="Zwei Windräder">
			<img class="WINDRADASIEN" src="../../images/windraeder.png" alt="Zwei Windräder">
			<img class="WINDRADSIBIRIEN" src="../../images/windraeder.png" alt="Zwei Windräder">
		</div>
		
		
			<div class="HURRA">
				<p>Fantastische Arbeit! Das hast du toll gemacht!<br>
					Als Belohnung bekommst du von mir einen geheimen Code.</p>
				<p class="CODE">xdf-338</p>
				<p>Schreibe ihn dir auf und bewahre ihn gut!</p>
			</div>

			<button class="BTNWEITER" onclick="window.location.href='../kapitel2/solar_scarlett.php'">Auf zum nächsten Kapitel!</button>
				
		<div>
			<img class="FEUERWERK" src="../../images/feuerwerk.gif" alt="Feuerwerk">
		
		</div>
			
    </main>
	
			
	<script>
				
			//Funktionen, um Infoboxen der einzelnen Standorte anzeigen zu lassen 
				document.querySelector('#DROPEUROPA').addEventListener('mouseover',ZeigeEuropa);   	//Bei Mouseover wird die Funktion "ZeigeEuropa" ausgeführt und es öffnet sich eine kleine Info zu dem Standort
				document.querySelector('#DROPEUROPA').addEventListener('mouseout',EuropaAus);		//Geht der Mousezeiger weiter, wird die Funktion EuropaAus augeführt und die Info schließt sich wieder
				document.querySelector('.WINDRADEUROPA').addEventListener('mouseover',ZeigeEuropaXL);   	//Bei Mouseover wird die Funktion "ZeigeEuropa" ausgeführt und es öffnet sich eine kleine Info zu dem Standort
				document.querySelector('.WINDRADEUROPA').addEventListener('mouseout',EuropaXLAus);
		
		
				function ZeigeEuropa() {
					document.querySelector(".EUROPA").classList.add("ZEIGEN");
				}
				function EuropaAus() {
					document.querySelector(".EUROPA").classList.remove("ZEIGEN");
				}
		
				function ZeigeEuropaXL() {
					document.querySelector(".EUROPAXL").classList.add("ZEIGEN");
				}
				function EuropaXLAus() {
					document.querySelector(".EUROPAXL").classList.remove("ZEIGEN");
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
		
				document.querySelector('.WINDRADASIEN').addEventListener('mouseover',ZeigeAsienXL);   	
				document.querySelector('.WINDRADASIEN').addEventListener('mouseout',AsienXLAus);
		
		
				function ZeigeAsien() {
					document.querySelector(".ASIEN").classList.add("ZEIGEN");
				}
				function AsienAus() {
					document.querySelector(".ASIEN").classList.remove("ZEIGEN");
				}
		
				function ZeigeAsienXL() {
					document.querySelector(".ASIENXL").classList.add("ZEIGEN");
				}
				function AsienXLAus() {
					document.querySelector(".ASIENXL").classList.remove("ZEIGEN");
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
		
				document.querySelector('#DROPSIBIRIEN').addEventListener('mouseover',ZeigeSibirien);   
				document.querySelector('#DROPSIBIRIEN').addEventListener('mouseout',SibirienAus);
				
				function ZeigeSibirien() {
					document.querySelector(".SIBIRIEN").classList.add("ZEIGEN");
				}
				function SibirienAus() {
					document.querySelector(".SIBIRIEN").classList.remove("ZEIGEN");
				}
		
				document.querySelector('#DROPMEXIKO').addEventListener('mouseover',ZeigeMexiko);   
				document.querySelector('#DROPMEXIKO').addEventListener('mouseout',MexikoAus);
				
				function ZeigeMexiko() {
					document.querySelector(".MEXIKO").classList.add("ZEIGEN");
				}
				function MexikoAus() {
					document.querySelector(".MEXIKO").classList.remove("ZEIGEN");
				}
		
		document.querySelector('#DRAGA').addEventListener('dragstart',ElementAufheben);
		document.querySelector('#DRAGB').addEventListener('dragstart',ElementAufheben);
		document.querySelector('#DRAGC').addEventListener('dragstart',ElementAufheben);
		document.querySelector('#DROPEUROPA').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPEUROPA').addEventListener('drop',ElementAblegenEuropa);
		document.querySelector('#DROPSIBIRIEN').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPSIBIRIEN').addEventListener('drop',ElementAblegenSibirien);
		document.querySelector('#DROPASIEN').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPASIEN').addEventListener('drop',ElementAblegenAsien);
		
		
		let abgelegteElemente = 0;
		
		
		function ElementAufheben() {
			event.dataTransfer.setData('text/plain',event.target.id);										// setzt das Drag-Element (Datentyp und Datenwert)
			AlleAus();
		}
		
		function AblegenErlauben() {
			if (event.target.classList.contains('DROP-ELEMENT') &&											// wenn das Ziel ein Drop-Element ist und
				! event.target.classList.contains('DRAG-ELEMENT')) {										// wenn das Ziel kein Drag-Element ist
				event.preventDefault();																		// dann ist Ablegen erlaubt, durch Verhindern der Default-Aktion des Events ("Öffnen als Link")
			}
		}
		
		function ElementAblegenEuropa() {
			event.preventDefault();																			// verhindert Default-Aktion des Events ("Öffnen als Link")
			event.target.appendChild(document.querySelector('#'+event.dataTransfer.getData('text/plain')));	// liest das Drag-Element und verschiebt es ins Drop-Element
			document.querySelector(".EUROPAXL").classList.add("ZEIGEN");
			document.querySelector('#DROPEUROPA').removeEventListener('dragover',AblegenErlauben);
			abgelegteElemente++;
			WindradZeigenEuropa();
			AbgelegteElementeZaehlen();
		}
		
		
		function ElementAblegenAsien() {
			event.preventDefault();																			// verhindert Default-Aktion des Events ("Öffnen als Link")
			event.target.appendChild(document.querySelector('#'+event.dataTransfer.getData('text/plain')));	// liest das Drag-Element und verschiebt es ins Drop-Element
			document.querySelector(".ASIENXL").classList.add("ZEIGEN");
			document.querySelector('#DROPASIEN').removeEventListener('dragover',AblegenErlauben);
			abgelegteElemente++;
			WindradZeigenAsien();
			AbgelegteElementeZaehlen();
		}
		
		function ElementAblegenSibirien() {
			event.preventDefault();																			// verhindert Default-Aktion des Events ("Öffnen als Link")
			event.target.appendChild(document.querySelector('#'+event.dataTransfer.getData('text/plain')));	// liest das Drag-Element und verschiebt es ins Drop-Element
			document.querySelector(".SIBIRIENXL").classList.add("ZEIGEN");
			document.querySelector('#DROPSIBIRIEN').removeEventListener('dragover',AblegenErlauben);
			abgelegteElemente++;
			WindradZeigenSibirien();
			AbgelegteElementeZaehlen();
			
		}
		
		function WindradZeigenEuropa(){
			document.querySelector(".WINDRADEUROPA").classList.add("ZEIGEN");
			document.querySelector(".EUROPABTN").classList.add("WEG");
		}
		
		function WindradZeigenAsien(){
			document.querySelector(".WINDRADASIEN").classList.add("ZEIGEN");
			document.querySelector(".ASIENBTN").classList.add("WEG");
		}
		
		function WindradZeigenSibirien(){
			document.querySelector(".WINDRADSIBIRIEN").classList.add("ZEIGEN");
			document.querySelector(".SIBIRIENBTN").classList.add("WEG");
		}
		
		
		document.querySelector(".ZU").addEventListener('click',AlleAus);
		function AlleAus() {
				document.querySelector(".EUROPAXL").classList.remove("ZEIGEN");
				document.querySelector(".ASIENXL").classList.remove("ZEIGEN");
				document.querySelector(".AUSTRALIENXL").classList.remove("ZEIGEN");
				document.querySelector(".SAHARAXL").classList.remove("ZEIGEN");
				document.querySelector(".NIAGARAXL").classList.remove("ZEIGEN");
				document.querySelector(".AMAZONASXL").classList.remove("ZEIGEN");
				document.querySelector(".ATLANTIKXL").classList.remove("ZEIGEN");
				document.querySelector(".SIBIRIENXL").classList.remove("ZEIGEN");
				document.querySelector(".MEXIKOXL").classList.remove("ZEIGEN");
		}
		
		
		// zählt alle abgelegte Elemente und startet die Funktion AlleAbgelegt, wenn Ergebnis 3 ist
			function AbgelegteElementeZaehlen(){
				if (abgelegteElemente === 3){
					AlleAbgelegt();
				}																							
			}
		
		
		function AlleAbgelegt() {
			AlleAus();
			document.querySelector(".INFOBOX").classList.add("WEG");
			document.querySelector(".HURRA").classList.add("ZEIGEN");
			document.querySelector(".FEUERWERK").classList.add("ZEIGEN");
			document.querySelector(".BTNWEITER").classList.add("ZEIGEN");
		}
		
		
		
		
	</script>
		
	

    <?php include '../../include/footer.php'; ?>
   
    
    
</body>
</html>


<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Solaranlagen bauen</title>

    <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../../css/styles.css">

	<style>
		
		.INFOBOX {
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
			visibility:visible;
			z-index:5;
			}
		
		.BILDINFOBOX{
			position: absolute;
			top:10%;
			left: 5%;
			height:70%;
			width: auto;
			visibility: visible;
			}
		
		.TEXT-START{
			position: absolute;
			top: 7%;
			left: 50%;
			height: auto;
			width: 48%;
			font-family: "open sans";
			color: #285238;
			font-size: 1.7rem;
			text-align: left;
		}
		
		.KARTE-ANSEHEN{
			position: absolute;
			padding: 15px 20px;
			bottom: 7%;
			right: 12%;
			font-family: "bangers";
			font-size: 2rem;
			color: #e8a723;
			letter-spacing: 0.05em;
			border: 2px solid #285238;
			border-radius: 5px;
			background-color: #285238;
			cursor: pointer;
			}
		
		.KARTE-ANSEHEN:hover{
			color: #285238;
			background-color: #45a049;
			border: 2px solid #285238;
			}
		
		.PLATZIERUNG{
			position: absolute;
			height:90%;
			width: 90%;	
			top:10%;
			left:5%;
		}
		
		.WELTKARTE{
			position:absolute;
			top:5%;
			width:100%;
			height:auto;
			z-index:0;
		}
	
		.SOLARPANEL1{
			position:absolute;
			bottom: 2%;
			left: 18%;
			height:20%;
			width:auto;
			z-index: 4;
			cursor: pointer;
			visibility: hidden;
		}
		
		.SOLARPANEL2{
			position:absolute;
			bottom:2%;
			left: 36%;
			height:20%;
			width:auto;
			z-index: 4;
			cursor: pointer;
			visibility: hidden;
		}
		
		.SOLARPANEL3{
			position:absolute;
			bottom:2%;
			left: 48%;
			height:20%;
			width:auto;
			z-index: 4;
			cursor: pointer;
			visibility: hidden;
		}
		
		.HERO{
			position:absolute;
			bottom:4%;
			left: 2%;
			height:35%;
			visibility: hidden;
		}
		
		.SPRECHBLASE1 {
			position: absolute;
			bottom:29%;
			left:14%;
			height:auto;
			width: 10%;
			padding-top: 15px;
			padding-left: 25px;
			padding-right: 25px;
			padding-bottom: 15px;
			border-radius: 20px 20px 20px 0px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			font-family: "open sans";
			font-size: 1.3rem;
			color:#285238;
			text-align: left;
			visibility: hidden;
		}
		
		.SPRECHBLASE2 {
			position: absolute;
			bottom:29%;
			left:14%;
			height:auto;
			width: 10%;
			padding-top: 15px;
			padding-left: 25px;
			padding-right: 25px;
			padding-bottom: 15px;
			border-radius: 20px 20px 20px 0px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			font-family: "open sans";
			font-size: 1.3rem;
			color:#285238;
			text-align: left;
			visibility: hidden;
		}
		
		.SPRECHBLASE3 {
			position: absolute;
			bottom:29%;
			left:14%;
			height:auto;
			width: 10%;
			padding-top: 15px;
			padding-left: 25px;
			padding-right: 25px;
			padding-bottom: 15px;
			border-radius: 20px 20px 20px 0px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			font-family: "open sans";
			font-size: 1.3rem;
			color:#285238;
			text-align: left;
			visibility: hidden;
		}
		
		.DROP-ELEMENT {
			height: 30px;
			width: 30px;
			border-radius: 40%;
			background-color: #e8a723;
			z-index: 3;
		}
		
		.DROP-ELEMENT:hover{
			cursor: url('../../images/InfoI.gif'),auto;
			background-color: brown;
		}
		
		.DRAG-ELEMENT {
			z-index: 4;
			cursor: pointer;
		}
		
				
		#DROPEUROPA{
			position: absolute;
			top: 18%;
			left: 50%;		
		}
		
		.EUROPABTN{
			visibility: visible;
		}
		
		.EUROPA{
			position: absolute;
			top: 20%;
			left: 52%;
			height: auto;
			width: 10%;
			padding-top: 15px;
			padding-left: 25px;
			padding-right: 25px;
			padding-bottom: 15px;
			font-family: "open sans";
			color: #285238;
			font-size:1.5rem;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.EUROPAXL{
			position: absolute;
			top: 20%;
			left: 53%;
			height: auto;
			width: 25%;
			padding-top: 5px;
			padding-left: 25px;
			padding-right: 25px;
			padding-bottom: 15px;
			font-family: "open sans";
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:6;
			
		}
		
		
		#DROPAUSTRALIEN{
			position: absolute;
			top: 60%;
			right: 8%;
		}
		
		.AUSTRALIENBTN{
			visibility: visible;
		}
		
		.AUSTRALIEN{
			position: absolute;
			top: 65%;
			right: 14%;
			height: auto;
			width: 10%;
			padding-top: 15px;
			padding-left: 25px;
			padding-right: 25px;
			padding-bottom: 15px;
			font-family: "open sans";
			color: #285238;
			font-size:1.5rem;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.AUSTRALIENXL{
			position: absolute;
			bottom:10%;
			right: 11%;
			height: auto;
			width: 10%;
			padding-top: 5px;
			padding-left: 25px;
			padding-right: 25px;
			padding-bottom: 15px;
			font-family: "open sans";
			color: #285238;
			font-size: 1.3rem;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.SOLARPANELAUSTRALIEN{
			position: absolute;
			top: 61%;
			right: 12%;
			height:5%;
			width: auto;
			visibility: hidden;
			z-index: 5;
		}
		
		
		#DROPASIEN{
			position: absolute;
			top: 25%;
			right:20%;
		}
		
		.ASIENBTN{
			visibility: visible;
		}
		
		.ASIEN{
			position: absolute;
			top: 35%;
			right:25%;
			height: auto;
			width: 10%;
			padding-top: 15px;
			padding-left: 25px;
			padding-right: 25px;
			padding-bottom: 15px;
			font-family: "open sans";
			color: #285238;
			font-size:1.5rem;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.ASIENXL{
			position: absolute;
			top: 32%;
			right:24%;
			height: auto;
			width: 25%;
			padding-top: 5px;
			padding-left: 25px;
			padding-right: 25px;
			padding-bottom: 15px;
			font-family: "open sans";
			color: #285238;
			font-size: 1.5rem;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:6;
		}
		
		
		#DROPSAHARA{
			position: absolute;
			top: 35%;
			left: 52%;
		}
		
		.SAHARABTN{
			visibility: visible;
		}
		
		.SAHARA{
			position: absolute;
			top: 42%;
			left: 38%;
			height: auto;
			width: 10%;
			padding-top: 15px;
			padding-left: 25px;
			padding-right: 25px;
			padding-bottom: 15px;
			font-family: "open sans";
			color: #285238;
			font-size:1.5rem;
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
			padding-top: 5px;
			padding-left: 25px;
			padding-right: 25px;
			padding-bottom: 15px;
			font-family: "open sans";
			color: #285238;
			font-size: 1.3rem;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.SOLARPANELSAHARA{
			position: absolute;
			top: 41%;
			left:52%;
			height:5%;
			width: auto;
			visibility: hidden;
			z-index: 5;
		}
		
		#DROPNIAGARA{
			position: absolute;
			top: 16%;
			left: 22%;
		}
		
		.NIAGARABTN{
			visibility: visible;
		}
		
		.NIAGARA{
			position: absolute;
			top: 25%;
			left: 27%;
			height: auto;
			width: 10%;
			padding-top: 15px;
			padding-left: 25px;
			padding-right: 25px;
			padding-bottom: 15px;
			font-family: "open sans";
			color: #285238;
			font-size:1.5rem;
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
			padding-top: 5px;
			padding-left: 25px;
			padding-right: 25px;
			padding-bottom: 15px;
			font-family: "open sans";
			color: #285238;
			font-size: 1.3rem;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		#DROPAMAZONAS{
			position: absolute;
			top:48%;
			left: 31%;
		}
		
		.AMAZONASBTN{
			visibility: visible;
		}
		
		.AMAZONAS{
			position: absolute;
			top:48%;
			left: 36%;
			height: auto;
			width: 10%;
			padding-top: 15px;
			padding-left: 25px;
			padding-right: 25px;
			padding-bottom: 15px;
			font-family: "open sans";
			color: #285238;
			font-size:1.5rem;
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
			padding-top: 5px;
			padding-left: 25px;
			padding-right: 25px;
			padding-bottom: 15px;
			font-family: "open sans";
			color: #285238;
			font-size: 1.3rem;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		#DROPATLANTIK{
			position: absolute;
			top:24%;
			left: 36%;
		}
		
		.ATLANTIKBTN{
			visibility: visible;
		}
		
		.ATLANTIK{
			position: absolute;
			top:31%;
			left: 40%;
			height: auto;
			width: 10%;
			padding-top: 15px;
			padding-left: 25px;
			padding-right: 25px;
			padding-bottom: 15px;
			font-family: "open sans";
			color: #285238;
			font-size:1.5rem;
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
			padding-top: 5px;
			padding-left: 25px;
			padding-right: 25px;
			padding-bottom: 15px;
			font-family: "open sans";
			color: #285238;
			font-size: 1.3rem;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		#DROPSIBIRIEN{
			position: absolute;
			top:12%;
			right:23%;
		}
		
		.SIBIRIENBTN{
			visibility: visible;
		}
				
		.SIBIRIEN{
			position: absolute;
			top:20%;
			right: 28%;
			height: auto;
			width: 10%;
			padding-top: 15px;
			padding-left: 25px;
			padding-right: 25px;
			padding-bottom: 15px;
			font-family: "open sans";
			color: #285238;
			font-size: 1.5rem;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.SIBIRIENXL{
			position: absolute;
			top:20%;
			right: 28%;
			height: auto;
			width: 25%;
			padding-top: 5px;
			padding-left: 25px;
			padding-right: 25px;
			padding-bottom: 15px;
			font-family: "open sans";
			color: #285238;
			font-size: 1.5rem;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:6;
		}
		
		#DROPMEXIKO{
			position: absolute;
			top:34%;
			left: 17.5%;
		}
		
		.MEXIKOBTN{
			visibility: visible;
		}
		
		.MEXIKO{
			position: absolute;
			top:35%;
			left: 23%;
			height: auto;
			width: 10%;
			padding-top: 15px;
			padding-left: 25px;
			padding-right: 25px;
			padding-bottom: 15px;
			font-family: "open sans";
			color: #285238;
			font-size:1.5rem;
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
			padding-top: 5px;
			padding-left: 25px;
			padding-right: 25px;
			padding-bottom: 15px;
			font-family: "open sans";
			color: #285238;
			font-size: 1.3rem;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.SOLARPANELMEXIKO{
			position: absolute;
			top:38%;
			left: 20%;
			height:5%;
			width: auto;
			visibility: hidden;
			z-index: 5;
		}
		
		.FEHLERMELDUNG{
			position: absolute;
			top: 45%;
			left: 40%;
			height:10%;
			width: 15%;
			padding-top: 15px;
			padding-left: 25px;
			padding-right: 25px;
			padding-bottom: 15px;
			font-family: "open sans";
			color: brown;
			font-size: 2rem;
			text-align: center;
			border-radius: 20px 20px 20px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		#SCHLIESSEN{
			position: absolute;
			top:15px;
			right: 15px;
		}
		
		.HURRA{
			position: absolute;
			padding: 25px;
			top:48%;
			left:13%;
			height:20%;
			width: 10%;
			font-family: "open sans";
			color: #285238;
			text-align: left;
			border-radius: 20px 20px 20px 0px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			z-index: 5;
			visibility: hidden;
		}
		
		.FEUERWERK-LINKS{
			position: absolute;
			top:20%;
			left:5%;
			height: auto;
			width:30%;
			visibility: hidden;
			z-index: 4;
		}
		
		.FEUERWERK-RECHTS{
			position: absolute;
			top:20%;
			right:5%;
			height: auto;
			width:30%;
			visibility: hidden;
			z-index: 4;
		}
		
		.INFOBOX-WEITER {
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
			visibility:hidden;
			z-index:5;
			}
		
		.BILDINFOBOX-ENDE{
			position: absolute;
			top:10%;
			left: 5%;
			height:70%;
			width: auto;
			visibility: hidden;
			}
		
		.TEXT-ENDE{
			position: absolute;
			top: 7%;
			left: 50%;
			height: auto;
			width: 48%;
			font-family: "open sans";
			color: #285238;
			font-size: 1.6rem;
			text-align: left;
		}
		
		.BTNWEITER{
			position: absolute;
			padding: 15px 20px;
			bottom: 7%;
			right: 12%;
			font-family: "bangers";
			font-size: 2rem;
			color: #e8a723;
			letter-spacing: 0.05em;
			border: 2px solid #285238;
			border-radius: 5px;
			background-color: #285238;
			cursor: pointer;
			}
		
		.BTNWEITER:hover{
			color: #285238;
			background-color: #45a049;
			border: 2px solid #285238;
			}
		
		
		.ZEIGEN{
			visibility: visible;
		}
		
		.WEG{
			visibility: hidden;
		}
		
		.CODE{
			font-family: "bangers";
			font-size: 3rem;
			color: #285238;
			text-align: center;
		}
		
		

	</style>
</head>

<body>
	
	<?php include '../../include/nav.php'; ?>
	
    <main>
		
		<div class="INFOBOX">
			
			<img class="BILDINFOBOX" src="../../images/BadGirl.png" alt="Scarlet Shade">
			<div class="TEXT-START">
				Das hast du sehr gut gemacht! Den ersten Test hast du bestanden.<br><br>
				Auf der Karte müssen nun an den richtigen Stellen die Solarpanels platziert werden, um die Mission fortzuführen. Wenn Du über die gelben Punkte gehst, bekommst Du wieder die kurze Erklärung über den Standort, die dir hilft, die geeigneten Standorte zu finden. Viel Erfolg!
			</div>
								
			<button class="KARTE-ANSEHEN">Solarpanels platzieren</button>
		</div>
		
		<img class="WELTKARTE" src="../../images/Weltkarte.png" alt="Weltkarte">
		
		<div class="PLATZIERUNG">
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
		
		<img class="SOLARPANEL1 DRAG-ELEMENT" id='DRAGA' draggable='true' src="../../images/solarpanel.png" alt="Solarpanel mit Sonne">
		<img class="SOLARPANEL2 DRAG-ELEMENT" id='DRAGB' draggable='true' src="../../images/solarpanel.png" alt="Solarpanel mit Sonne">
		<img class="SOLARPANEL3 DRAG-ELEMENT" id='DRAGC' draggable='true' src="../../images/solarpanel.png" alt="Solarpanel mit Sonne">
		
		
			<img class="HERO" src="../../images/BadGirl.png" alt="Scarlet Shade">
			<div class="SPRECHBLASE1">
				Ziehe die Solarpanels unten auf die richtigen Stellen auf der Weltkarte.
			</div>
		
			<div class="SPRECHBLASE2">
				Super! Das erste Windrad hast du richtig platziert.
			</div>
		
			<div class="SPRECHBLASE3">
				Sehr gut! Auch das zweite Windrad ist richtig abgelegt.
			</div>
	
		
		<div class="EUROPA">
			Die windigen Küstenregionen Europas.
		</div>
		
		
		<div class="AUSTRALIEN">
			Die trockenen Weiten Australiens.
		</div>
		
		
		<div class="ASIEN">
			Die hohen Berge Asiens.
		</div>
		
		
		<div class="SAHARA">
			Das heiße Wüstenmeer Afrikas.
		</div>
		
		
		<div class="NIAGARA">
			Die gewaltigen Wasserfälle Nordamerikas.
		</div>
		
		
		<div class="AMAZONAS">
			Der mächtige Strom im Herzen des Regenwaldes.
		</div>
		
		
		<div class="ATLANTIK">
			Die starken Strömungen des Atlantischen Ozeans.
		</div>
		
		
		<div class="SIBIRIEN">
			Die weiten Steppen im Norden Russlands.
		</div>
		
		
		<div class="MEXIKO">
			Die sonnigen Gebiete Mittelamerikas.
		</div>
		
		
		<div>
			<img class="SOLARPANELMEXIKO" src="../../images/solarpanel.png" alt="Solarpanel mit Sonne">
			<img class="SOLARPANELAUSTRALIEN" src="../../images/solarpanel.png" alt="Solarpanel mit Sonne">
			<img class="SOLARPANELSAHARA" src="../../images/solarpanel.png" alt="Solarpanel mit Sonne">
		</div>
		
		<div class="FEHLERMELDUNG">
			<button id="SCHLIESSEN">&times;</button>
			<div>Das war leider nicht richtig.</div>
		</div>
		
		
			<div>
				<img class="FEUERWERK-LINKS" src="../../images/feuerwerk.gif" alt="Feuerwerk">
			</div>
			<div>
				<img class="FEUERWERK-RECHTS" src="../../images/feuerwerk.gif" alt="Feuerwerk">
			</div>
		
		
		<div class="INFOBOX-WEITER">
			
			<img class="BILDINFOBOX-ENDE" src="../../images/BadGirl.png" alt="Scarlet Shade">
			
			<div class="TEXT-ENDE">
				<div>
					Fantastische Arbeit! Das hast du toll gemacht!<br>
					Als Belohnung bekommst du von mir einen geheimen Code.<br><br>
					<div class="CODE">sdl-204</div><br>
					Schreibe ihn dir auf und bewahre ihn gut! Wenn du später weitermachen möchtest, kannst Du ihn unter "Spiel fortsetzen" im Menü eingeben, um zum nächsten Kapitel zu kommen.
				</div>
			</div>
								
			<button class="BTNWEITER" onclick="window.location.href='../kapitel3/wasser_scarlet.php'">Auf zum nächsten Kapitel!</button>
		</div>
		
    </main>
	
			
	<script>
		
		document.querySelector(".BILDINFOBOX").addEventListener("mouseover", HeroWeg);
			document.querySelector(".BILDINFOBOX").addEventListener("mouseout", HeroDa);

			function HeroWeg(){
				document.querySelector(".BILDINFOBOX").classList.add("WEG");
			}
			function HeroDa(){
				document.querySelector(".BILDINFOBOX").classList.remove("WEG");
			}
		
		document.querySelector(".KARTE-ANSEHEN").addEventListener("click",ZeigeWeltkarte);
		
			function ZeigeWeltkarte(){
				document.querySelector(".INFOBOX").classList.add("WEG");
				document.querySelector(".BILDINFOBOX").classList.add("WEG");
				document.querySelector(".HERO").classList.add("ZEIGEN");
				document.querySelector(".SPRECHBLASE1").classList.add("ZEIGEN");
				document.querySelector(".SOLARPANEL1").classList.add("ZEIGEN");
				document.querySelector(".SOLARPANEL2").classList.add("ZEIGEN");
				document.querySelector(".SOLARPANEL3").classList.add("ZEIGEN");
			}
		
		
		document.querySelector(".HERO").addEventListener("mouseover",ScarletUnsichtbar);
		document.querySelector(".HERO").addEventListener("mouseout",ScarletSichtbar);
		
		function ScarletUnsichtbar(){
			document.querySelector(".HERO").classList.add("WEG");
		}
		
		function ScarletSichtbar(){
			document.querySelector(".HERO").classList.remove("WEG");
		}
				
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
		document.querySelector('#DROPMEXIKO').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPMEXIKO').addEventListener('drop',ElementAblegenMexiko);
		document.querySelector('#DROPSAHARA').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPSAHARA').addEventListener('drop',ElementAblegenSahara);
		document.querySelector('#DROPAUSTRALIEN').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPAUSTRALIEN').addEventListener('drop',ElementAblegenAustralien);
		document.querySelector('#DROPEUROPA').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPEUROPA').addEventListener('drop',AblegenFalsch);
		document.querySelector('#DROPSIBIRIEN').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPSIBIRIEN').addEventListener('drop',AblegenFalsch);
		document.querySelector('#DROPASIEN').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPASIEN').addEventListener('drop',AblegenFalsch);
		document.querySelector('#DROPNIAGARA').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPNIAGARA').addEventListener('drop',AblegenFalsch);
		document.querySelector('#DROPATLANTIK').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPATLANTIK').addEventListener('drop',AblegenFalsch);
		document.querySelector('#DROPAMAZONAS').addEventListener('dragover',AblegenErlauben);
		document.querySelector('#DROPAMAZONAS').addEventListener('drop',AblegenFalsch);
		
		
		
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
		
		function ElementAblegenMexiko() {
			event.preventDefault();																			// verhindert Default-Aktion des Events ("Öffnen als Link")
			event.target.appendChild(document.querySelector('#'+event.dataTransfer.getData('text/plain')));	// liest das Drag-Element und verschiebt es ins Drop-Element
			document.querySelector('#DROPMEXIKO').removeEventListener('dragover',AblegenErlauben);
			abgelegteElemente++;
			SolarpanelZeigenMexiko();
			AbgelegteElementeZaehlen();
		}
		
		function SolarpanelZeigenMexiko(){
			document.querySelector(".SOLARPANELMEXIKO").classList.add("ZEIGEN");
			document.querySelector(".MEXIKOBTN").classList.add("WEG");
		}
		
		function ElementAblegenSahara() {
			event.preventDefault();																			// verhindert Default-Aktion des Events ("Öffnen als Link")
			event.target.appendChild(document.querySelector('#'+event.dataTransfer.getData('text/plain')));	// liest das Drag-Element und verschiebt es ins Drop-Element
			
			document.querySelector('#DROPSAHARA').removeEventListener('dragover',AblegenErlauben);
			abgelegteElemente++;
			SolarpanelZeigenSahara();
			AbgelegteElementeZaehlen();
		}
		
		function SolarpanelZeigenSahara(){
			document.querySelector(".SOLARPANELSAHARA").classList.add("ZEIGEN");
			document.querySelector(".SAHARABTN").classList.add("WEG");
		}
		
		function ElementAblegenAustralien() {
			event.preventDefault();																			// verhindert Default-Aktion des Events ("Öffnen als Link")
			event.target.appendChild(document.querySelector('#'+event.dataTransfer.getData('text/plain')));	// liest das Drag-Element und verschiebt es ins Drop-Element
			document.querySelector('#DROPAUSTRALIEN').removeEventListener('dragover',AblegenErlauben);
			abgelegteElemente++;
			SolarpanelZeigenAustralien();
			AbgelegteElementeZaehlen();
			
		}
		
		function SolarpanelZeigenAustralien(){
			document.querySelector(".SOLARPANELAUSTRALIEN").classList.add("ZEIGEN");
			document.querySelector(".AUSTRALIENBTN").classList.add("WEG");
		}
		
		function AblegenFalsch(){
			document.querySelector(".FEHLERMELDUNG").classList.add("ZEIGEN");
		}
		
		
		document.querySelector("#SCHLIESSEN").addEventListener("click",AlleAus);
		
		function AlleAus(){
			document.querySelector(".FEHLERMELDUNG").classList.remove("ZEIGEN");
		}
		
			// zählt alle abgelegte Elemente und startet die Funktion die jeweils angebene Funktion
		
		function AbgelegteElementeZaehlen(){
			if (abgelegteElemente === 1){
				EinsAbgelegt();
				}																							
			}
		
		function EinsAbgelegt(){
			document.querySelector(".SPRECHBLASE1").classList.remove("ZEIGEN");
			document.querySelector(".SPRECHBLASE2").classList.add("ZEIGEN");
		}
		
		function AbgelegteElementeZaehlen(){
			if (abgelegteElemente === 2){
				ZweiAbgelegt();
				}																							
			}
		
		function ZweiAbgelegt(){
			document.querySelector(".SPRECHBLASE2").classList.remove("ZEIGEN");
			document.querySelector(".SPRECHBLASE3").classList.add("ZEIGEN");
		}
		
		function AbgelegteElementeZaehlen(){
			if (abgelegteElemente === 3){
				AlleAbgelegt();
				}																							
			}
		
		function AlleAbgelegt(){
			document.querySelector(".HERO").classList.remove("ZEIGEN");
			document.querySelector(".SPRECHBLASE1").classList.remove("ZEIGEN");
			document.querySelector(".INFOBOX-WEITER").classList.add("ZEIGEN");
			document.querySelector(".BILDINFOBOX-ENDE").classList.add("ZEIGEN");
			document.querySelector(".FEUERWERK-LINKS").classList.add("ZEIGEN");
			document.querySelector(".FEUERWERK-RECHTS").classList.add("ZEIGEN");
		}
		
		document.querySelector(".BILDINFOBOX-ENDE").addEventListener("mouseover", HeroWegEnde);
			document.querySelector(".BILDINFOBOX-ENDE").addEventListener("mouseout", HeroDaEnde);

			function HeroWegEnde(){
				document.querySelector(".BILDINFOBOX-ENDE").classList.remove("ZEIGEN");
			}
			function HeroDaEnde(){
				document.querySelector(".BILDINFOBOX-ENDE").classList.add("ZEIGEN");
			}
		
	</script>
	
</body>
</html>


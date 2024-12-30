<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Missions-Start</title>

    

    <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="../../css/styles.css">

	<style>
		main{
			overflow: hidden; /* Verhindert das Scrollen der Seite */
		}	
		
		h1{
			font-family: "open sans";
			color:#e8a723;
			font-size: 2rem;
			padding: 0px;
			margin: 0px;
			margin-bottom: 20px;
		}
		
		.INFOBOX {
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
		
		.BILDINFOBOX-SCARLET{
			position: absolute;
			top:10%;
			left: 5%;
			height:70%;
			width: auto;
			visibility: visible;
			}
		
		.TEXT{
			position: absolute;
			top: 7%;
			left: 50%;
			height: auto;
			width: 45%;
			font-family: "open sans";
			color: #285238;
			font-size: 1.7rem;
			text-align: left;
		}
		
		.KARTE-ANSEHEN{
			position: absolute;
			padding: 15px 20px;
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
		
		.KARTE-ANSEHEN:hover{
			color: #285238;
			background-color: #45a049;
			border: 2px solid #285238;
			}
		
		.WELT{
			position:absolute;
			top:5%;
			width:100%;
			height:auto;
		}
		
		.SCARLET{
			position:absolute;
			bottom:4%;
			left: 2%;
			height:35%;
			background-color: transparent;
			border:5px;
			border-color: transparent;
			visibility: hidden;		
		}
				
		.SPRECHBLASE {
			position: absolute;
			padding-top: 10px;
			padding-left: 20px;
			padding-right: 20px;
			padding-bottom: 10px;
			bottom:29%;
			left:14%;
			height:auto;
			width: 10%;
			border-radius: 20px 20px 20px 0px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			font-family: "open sans";
			font-size: 1.3rem;
			color:#285238;
			text-align: left;
			visibility: hidden;
			}
		
		.LOS{
			position: absolute;
			bottom: 8%;
			left: 18%;
			display: inline-block;
            padding: 15px 20px;
            font-family: 'Bangers';
            font-size: 2rem;
			text-decoration: none;
			letter-spacing: 0.05em;
            color: #e8a723;
            background-color: #285238;
			border: 2px;
			border-color: white;
            border-radius: 8px;	
			cursor: pointer;
			visibility: hidden;
		}
		
		.LOS:hover{
			color: #285238;
			background-color: #45a049;
			border: 2px solid #285238;
		}
		
		
		.PUNKT{
			height: 25px;
			width: 25px;
			border-radius: 40%;
			background-color: #e8a723;
			z-index: 3;
		}
		
		.PUNKT:hover{
			cursor: url('../../images/InfoI.gif'),auto;
			background-color: brown;
		}
				
		.EUROPA-KLIMA{
			position:absolute;
			top: 27%;
			left:50%;
		}
		
		.INFOEUROPA-KLIMA{
			position: absolute;
			top: 28%;
			left:52%;
			height: auto;
			width: 25%;
			padding-top:10%;
			padding: 40px;
			font-family: "open sans";
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.CHINA-KLIMA{
			position:absolute;
			top: 27%;
			left:71%;
		}
		
		.INFOCHINA-KLIMA{
			position: absolute;
			top: 28%;
			right:30%;
			height: auto;
			width: 30%;
			padding: 40px;
			font-family: "open sans";
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.SUEDOSTASIEN-KLIMA{
			position:absolute;
			top: 50%;
			left:82%;
		}
		
		.INFOSUEDOSTASIEN-KLIMA{
			position: absolute;
			bottom: 10%;
			right:19%;
			height: auto;
			width: 40%;
			padding: 40px;
			font-family: "open sans";
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.AUSTRALIEN-KLIMA{
			position:absolute;
			bottom:33%;
			right:12%;
		}
		
		.INFOAUSTRALIEN-KLIMA{
			position: absolute;
			bottom:15%;
			right:14%;
			height: auto;
			width: 30%;
			padding: 40px;
			font-family: "open sans";
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.ANTARKTIS-KLIMA{
			position:absolute;
			bottom:4%;
			right:23%;
		}
		
		.INFOANTARKTIS-KLIMA{
			position: absolute;
			bottom:8%;
			right:25%;
			height: auto;
			width: 30%;
			padding: 40px;
			font-family: "open sans";
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
	
		.CHILE-KLIMA{
			position:absolute;
			top: 70%;
			left:30.5%;
		}
		
		.INFOCHILE-KLIMA{
			position: absolute;
			bottom:15%;
			left:33%;
			height: auto;
			width: 30%;
			padding: 40px;
			font-family: "open sans";
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.AMAZONAS-KLIMA{
			position:absolute;
			top: 53%;
			left:32%;
		}
		
		.INFOAMAZONAS-KLIMA{
			position: absolute;
			bottom:25%;
			left:34%;
			height: auto;
			width: 30%;
			padding: 40px;
			font-family: "open sans";
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.ATLANTIK-KLIMA{
			position:absolute;
			top: 35%;
			left:38%;
		}
		
		.INFOATLANTIK-KLIMA{
			position: absolute;
			top: 25%;
			left:40%;
			height:auto;
			width: 35%;
			padding: 40px;
			font-family: "open sans";
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.KANADA-KLIMA{
			position:absolute;
			top: 12%;
			left:38%;
		}
		
		.INFOKANADA-KLIMA{
			position: absolute;
			top: 17%;
			left:38%;
			height: auto;
			width: 30%;
			padding: 40px;
			font-family: "open sans";
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.USA-KLIMA{
			position:absolute;
			top: 33%;
			left:25%;
		}
		
		.INFOUSA-KLIMA{
			position: absolute;
			top: 25%;
			left:27%;
			height: auto;
			width: 30%;
			padding: 40px;
			font-family: "open sans";
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
				
		.AFRIKA-KLIMA{
			position:absolute;
			top: 41%;
			left:50%;
		}
		
		.INFOAFRIKA-KLIMA{
			position: absolute;
			top: 39%;
			left:52%;
			height: auto;
			width: 30%;
			padding-top: 5px;
			padding: 40px;
			font-family: "open sans";
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.ZEIGEN{
			visibility: visible;
		}
		
		.WEG{
			visibility: hidden;
		}

		
		
	</style>
</head>

<body>
	
	<?php include '../../include/nav.php'; ?>
	
    <main>
		
		<div class="INFOBOX">
			
			<img class="BILDINFOBOX-SCARLET" src="../../images/BadGirl.png" alt="Scarlet Shade">
			
			<div class="TEXT">
				Hallo! <br>
				Ich bin Scarlet Shade. Ich freue mich, dass du mit mir auf diese Mission gehen möchtest. <br>
				Auf dieser Karte kannst du sehen, welche Klimaschäden die Nutzung fossiler Brennstoffe hervorgerufen hat.<br>
				Gehe über die gelben Punkte und erfahre mehr über die Gefahren des Klimawandels.
			</div>
								
			<button class="KARTE-ANSEHEN">Karte ansehen</button>
		</div>
		
		<!--<img id="hintergrund" src="../images/waldbrand_hintergrund_II.png" alt="Brennender Wald">-->
		<img class="WELT" src="../../images/Weltkarte.png" alt="Weltkarte">
			
		<img class="SCARLET" src="../../images/BadGirl.png" alt="Scarlet Shade">
	
		<div class="SPRECHBLASE">
			
			<p>Wenn du genug über Klimaschäden gelernt hast, können wir die Mission starten.</p>
			
		</div>	
		
		<button class="LOS" onclick="window.location.href='../kapitel1/wind_scarlet.php'"> Auf geht's! </button>
		
		<div class="PUNKT EUROPA-KLIMA"></div>
			<div class="PUNKT CHINA-KLIMA"></div>
			<div class="PUNKT SUEDOSTASIEN-KLIMA"></div>
			<div class="PUNKT AUSTRALIEN-KLIMA"></div>
			<div class="PUNKT ANTARKTIS-KLIMA"></div>
			<div class="PUNKT CHILE-KLIMA"></div>
			<div class="PUNKT AMAZONAS-KLIMA"></div>
			<div class="PUNKT ATLANTIK-KLIMA"></div>
			<div class="PUNKT USA-KLIMA"></div>
			<div class="PUNKT KANADA-KLIMA"></div>
			<div class="PUNKT ARKTIS-KLIMA"></div>
			<div class="PUNKT AFRIKA-KLIMA"></div>

	
		<div class="INFOEUROPA-KLIMA">
			<h1>Gesellschaftliche Konflikte</h1>
			<strong>Migration:</strong><br> Menschen aus unbewohnbaren Regionen wie Dürreregionen oder überfluteten Gebieten könnten gezwungen sein, ihre Heimat zu verlassen.<br><br>
			<strong>Konflikte um Ressourcen:</strong><br> Wasser- und Nahrungsknappheit könnten politische Spannungen und Konflikte verstärken.
		</div>
		
		<div class="INFOCHINA-KLIMA">
			<h1>Bedrohung der Landwirtschaft</h1>
			Die Produktivität in der Landwirtschaft wird in vielen Regionen zurückgehen, was die globale Ernährungssicherheit gefährdet.<br><br>
			Veränderte Wachstumsbedingungen können zu Nahrungsknappheit und Preisanstiegen führen.
		</div>
		
		<div class="INFOSUEDOSTASIEN-KLIMA">
			<h1>Abstreben von Korallenriffe</h1>
			Tropische und subtropische Korallenriffe sind Ökosysteme mit der höchsten Biodiversität auf der Erde. Sie haben einen enormen Einfluss auf die Nahrungskette im Meer, den Nähr- und Kohlenstoffkreislauf im Ozean und sind entscheidend für die Lebensbedingungen von Millionen Menschen weltweit. Sie bieten zum Beispiel Küstenschutz und sind wichtig für die Tourismuswirtschaft.<br><br>
			All die oben genannten wichtigen Funktionen der Korallenriffe fallen bei einem Absterben weg.
		</div>
		
		<div class="INFOAUSTRALIEN-KLIMA">
			<h1>Steigende Temperaturen</h1>
			<strong>Hitzetzewellen:</strong><br>
			Extreme Hitzeperioden werden häufiger, intensiver und länger andauern. Dies erhöht die Gesundheitsrisiken wie Hitzeschläge und Herz-Kreislauf-Erkrankungen.<br><br>
			<strong>Schmelzen von Gletschern und Eisschilden:</strong>
			<br> Der Verlust von Eismassen in den Polarregionen und Gebirgen trägt zum Anstieg des Meeresspiegels bei.
		</div>
		
		<div class="INFOANTARKTIS-KLIMA">
			<h1>Meeresspiegelanstieg</h1>
			Die Ostantarktis beherbergt in ihren Eispanzern die größten Süßwasserreserven der Welt.Diese Eismassen entsprechen etwa 50 Metern Meeresspiegelanstieg. Der Verlust von Eismassen in den Polarregionen und Gebirgen trägt zum Anstieg des Meeresspiegels bei.<br><br>
			Bis zum Jahr 2100 könnte der Meeresspiegel um mehr als einen Meter steigen, was Küstenregionen und Inselstaaten bedroht.<br><br>
			Städte wie Hamburg, Jakarta oder Miami sind gefährdet, dauerhaft überflutet zu werden.
		</div>
		
		
		<div class="INFOCHILE-KLIMA">
			<h1>Gefährdung der Wasserversorgung</h1>
			Die Versorgung mit Süßwasser hängt in vielen Gebieten der Welt ganz entscheidend vom jährlich zuverlässig und gleichmäßig auftretenden Schmelzwasser der Gletscher ab. Schmelzende Gletscher und veränderte Niederschlagsmuster könnten die Trinkwasserversorgung von Milliarden Menschen beeinträchtigen.
		</div>
		
		<div class="INFOAMAZONAS-KLIMA">
			<h1>Verlust von Biodiversität</h1>
			Biodiversität bedeutet, dass es auf der Erde viele verschiedene Lebewesen gibt. Dazu gehören Tiere, Pflanzen, Pilze und winzig kleine Lebewesen wie Bakterien. Sie alle leben zusammen in der Natur und brauchen sich gegenseitig, um zu überleben.<br><br>
			Viele Tier- und Pflanzenarten können sich jedoch nicht schnell genug anpassen und könnten aussterben.Ökosysteme wie Korallenriffe sterben ab, was ganze Nahrungsketten bedroht.	
		</div>
		
		<div class="INFOATLANTIK-KLIMA">
			<h1>Atlantische Umwälzzirkulation</h1>
			Die Atlantische Umwälzzirkulation ist wie ein riesiges Fließband im Meer. Sie sorgt dafür, dass warmes Wasser aus den Tropen in den Norden fließt und kaltes Wasser zurück in den Süden. Dadurch bleibt das Klima auf der Erde ausgeglichen. Wenn diese Strömung aber langsamer wird oder sogar ganz stoppt, könnte das schlimme Folgen haben:<br><br>
			In Europa könnte es viel kälter werden, während in anderen Teilen der Welt mehr Stürme und Überschwemmungen auftreten. Das passiert, weil der Klimawandel die Meere erwärmt und viel Süßwasser aus schmelzendem Eis hinzukommt, was das Fließband durcheinanderbringt.
		</div>
		
		<div class="INFOUSA-KLIMA">
			<h1>Extreme Wetterereignisse</h1>
			<strong>Stürme und Hurrikane:</strong><br> Diese werden durch höhere Meerestemperaturen stärker und zerstörerischer.<br>
			<strong>Überschwemmungen:</strong><br> 
			Heftige Regenfälle werden zunehmen, da wärmere Luft mehr Feuchtigkeit aufnehmen kann.<br>
			<strong>Dürren:</strong><br>
			In einigen Regionen wie Südeuropa und Afrika werden Dürreperioden intensiver, was die Landwirtschaft gefährdet.
		</div>
		
		<div class="INFOKANADA-KLIMA">
			<h1>Auftauen der Permafrostböden</h1>
			Permafrostböden sind Böden, die in sehr kalten Regionen das ganze Jahr über gefroren bleiben, wie in der Arktis.<br><br>
			Doch durch den Klimawandel tauen diese Böden langsam auf. Das ist ein Problem, weil im Permafrost riesige Mengen an Treibhausgasen wie Kohlendioxid und Methan gespeichert sind. Wenn der Boden auftaut, gelangen diese Gase in die Luft und verstärken den Klimawandel noch mehr. Außerdem kann der Boden instabil werden, was Häuser und Straßen beschädigen kann.
		</div>
		
		<div class="INFOAFRIKA-KLIMA">
			<h1>Gesundheitsrisiken</h1>
			<strong>Ausbreitung von Krankheiten:</strong><br> 
			Tropische Krankheiten wie Malaria könnten sich durch höhere Temperaturen in neue Regionen ausbreiten.<br><br>
			<strong>Luftqualität:</strong><br>
			Hitzewellen können die Luftverschmutzung verstärken und Atemwegserkrankungen verschlimmern.
		</div>
		
			
    </main>
	
	
	<script>
		
		document.querySelector(".BILDINFOBOX-SCARLET").addEventListener("mouseover", BildInfoboxWeg);
			document.querySelector(".BILDINFOBOX-SCARLET").addEventListener("mouseout", BildInfoboxDa);

			function BildInfoboxWeg(){
				document.querySelector(".BILDINFOBOX-SCARLET").classList.add("WEG");
			}
			function BildInfoboxDa(){
				document.querySelector(".BILDINFOBOX-SCARLET").classList.remove("WEG");
			}
		
		document.querySelector(".KARTE-ANSEHEN").addEventListener("click",ZeigeWeltkarte);
		
			function ZeigeWeltkarte(){
				document.querySelector(".INFOBOX").classList.add("WEG");
				document.querySelector(".BILDINFOBOX-SCARLET").classList.add("WEG");
				document.querySelector(".SCARLET").classList.add("ZEIGEN");
				document.querySelector(".SPRECHBLASE").classList.add("ZEIGEN");
				document.querySelector(".LOS").classList.add("ZEIGEN");
			}
		
		
		document.querySelector(".SCARLET").addEventListener("mouseover", ScarletWeg);
			document.querySelector(".SCARLET").addEventListener("mouseout", ScarletDa);

			function ScarletWeg(){
				document.querySelector(".SCARLET").classList.remove("ZEIGEN");
			}
			function ScarletDa(){
				document.querySelector(".SCARLET").classList.add("ZEIGEN");
			}
	
		
  		//Funktionen, um Infoboxen der einzelnen Standorte anzeigen zu lassen 
		document.querySelector('.EUROPA-KLIMA').addEventListener('mouseover',ZeigeEuropa);   	//Bei Mouseover wird die Funktion "ZeigeEuropa" ausgeführt und es öffnet sich eine kleine Info zu dem Standort
			document.querySelector('.EUROPA-KLIMA').addEventListener('mouseout',EuropaAus);		//Geht der Mousezeiger weiter, wird die Funktion EuropaAus augeführt und die Info schließt sich wieder
				
			function ZeigeEuropa() {
				document.querySelector(".INFOEUROPA-KLIMA").classList.add("ZEIGEN");
			}
			function EuropaAus() {
				document.querySelector(".INFOEUROPA-KLIMA").classList.remove("ZEIGEN");
			} 
		
		document.querySelector('.CHINA-KLIMA').addEventListener('mouseover',ZeigeChina);   	
			document.querySelector('.CHINA-KLIMA').addEventListener('mouseout',ChinaAus);		
				
			function ZeigeChina() {
				document.querySelector(".INFOCHINA-KLIMA").classList.add("ZEIGEN");
				}
			function ChinaAus() {
				document.querySelector(".INFOCHINA-KLIMA").classList.remove("ZEIGEN");
			} 
		
		document.querySelector('.SUEDOSTASIEN-KLIMA').addEventListener('mouseover',ZeigeSuedostasien);   	
			document.querySelector('.SUEDOSTASIEN-KLIMA').addEventListener('mouseout',SuedostasienAus);		
				
			function ZeigeSuedostasien() {
				document.querySelector(".INFOSUEDOSTASIEN-KLIMA").classList.add("ZEIGEN");
				}
			function SuedostasienAus() {
				document.querySelector(".INFOSUEDOSTASIEN-KLIMA").classList.remove("ZEIGEN");
			} 
		
		document.querySelector('.AUSTRALIEN-KLIMA').addEventListener('mouseover',ZeigeAustralien);   	
			document.querySelector('.AUSTRALIEN-KLIMA').addEventListener('mouseout',AustralienAus);		
				
			function ZeigeAustralien() {
				document.querySelector(".INFOAUSTRALIEN-KLIMA").classList.add("ZEIGEN");
				}
			function AustralienAus() {
				document.querySelector(".INFOAUSTRALIEN-KLIMA").classList.remove("ZEIGEN");
			} 
		
		document.querySelector('.ANTARKTIS-KLIMA').addEventListener('mouseover',ZeigeAntarktis);   	
			document.querySelector('.ANTARKTIS-KLIMA').addEventListener('mouseout',AntarktisAus);		
				
			function ZeigeAntarktis() {
				document.querySelector(".INFOANTARKTIS-KLIMA").classList.add("ZEIGEN");
				}
			function AntarktisAus() {
				document.querySelector(".INFOANTARKTIS-KLIMA").classList.remove("ZEIGEN");
			} 
		
		document.querySelector('.CHILE-KLIMA').addEventListener('mouseover',ZeigeChile);   	
			document.querySelector('.CHILE-KLIMA').addEventListener('mouseout',ChileAus);		
				
			function ZeigeChile() {
				document.querySelector(".INFOCHILE-KLIMA").classList.add("ZEIGEN");
			}
			function ChileAus() {
				document.querySelector(".INFOCHILE-KLIMA").classList.remove("ZEIGEN");
			}
		
		document.querySelector('.AMAZONAS-KLIMA').addEventListener('mouseover',ZeigeAmazonas);   	
			document.querySelector('.AMAZONAS-KLIMA').addEventListener('mouseout',AmazonasAus);		
				
			function ZeigeAmazonas() {
				document.querySelector(".INFOAMAZONAS-KLIMA").classList.add("ZEIGEN");
			}
			function AmazonasAus() {
				document.querySelector(".INFOAMAZONAS-KLIMA").classList.remove("ZEIGEN");
			}
		
		document.querySelector('.ATLANTIK-KLIMA').addEventListener('mouseover',ZeigeAtlantik);   	
			document.querySelector('.ATLANTIK-KLIMA').addEventListener('mouseout',AtlantikAus);		
				
			function ZeigeAtlantik() {
				document.querySelector(".INFOATLANTIK-KLIMA").classList.add("ZEIGEN");
			}
			function AtlantikAus() {
				document.querySelector(".INFOATLANTIK-KLIMA").classList.remove("ZEIGEN");
			}
		
		document.querySelector('.USA-KLIMA').addEventListener('mouseover',ZeigeUSA);   	
			document.querySelector('.USA-KLIMA').addEventListener('mouseout',USAAus);		
				
			function ZeigeUSA() {
				document.querySelector(".INFOUSA-KLIMA").classList.add("ZEIGEN");
			}
			function USAAus() {
				document.querySelector(".INFOUSA-KLIMA").classList.remove("ZEIGEN");
			}
		
		document.querySelector('.KANADA-KLIMA').addEventListener('mouseover',ZeigeKanada);   	
			document.querySelector('.KANADA-KLIMA').addEventListener('mouseout',KanadaAus);		
				
			function ZeigeKanada() {
				document.querySelector(".INFOKANADA-KLIMA").classList.add("ZEIGEN");
			}
			function KanadaAus() {
				document.querySelector(".INFOKANADA-KLIMA").classList.remove("ZEIGEN");
			}
		
		document.querySelector('.AFRIKA-KLIMA').addEventListener('mouseover',ZeigeAfrika);   	
			document.querySelector('.AFRIKA-KLIMA').addEventListener('mouseout',AfrikaAus);		
				
			function ZeigeAfrika() {
				document.querySelector(".INFOAFRIKA-KLIMA").classList.add("ZEIGEN");
			}
			function AfrikaAus() {
				document.querySelector(".INFOAFRIKA-KLIMA").classList.remove("ZEIGEN");
			}
		
    </script>
	
</body>
</html>


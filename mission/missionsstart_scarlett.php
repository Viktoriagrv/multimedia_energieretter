<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Missions-Start</title>

    

    <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="../css/styles.css">

	<style>
		 body {
            font-family: Verdana, sans-serif; /* VERDANA FÜR LEICHTE LESBARKEIT */
            margin: 0;
            background-color: #e3f2fd; /* HELLBLAUER HINTERGRUND, WASSER-THEMA background-color: #19325F;*/
            color: #333;
        }
		#hintergrund{
			position: absolute;
			margin: 0px;
			top: 0px;
			left: 0px;
			width: auto;
			height:100%;
			opacity: 0.3;
			z-index:0;
		}
		
		h1{
			font-family: verdana;
			color:#e8a723;
			font-size: 2rem;
			padding-top: 0px;
		}
		
		.WELT{
			position:absolute;
			bottom:12%;
			right:2%;
			height:70%;
			width:auto;
			}
		
		.HERO{
			position:absolute;
			bottom:15%;
			left: 3%;
			height:30%;
			}
		
		.SPRECHBLASE {
			position: absolute;
			padding: 30px;
			bottom:37%;
			left:15%;
			height:25%;
			width: 15%;
			border-radius: 70px 70px 70px 0px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			font-family: verdana;
			font-size: 1rem;
			color:#285238;
			text-align: left;
			visibility: visible;
			}
		
		.LOS{
			position: relative;
			display: inline-block;
            padding: 10px 15px;
            font-family: 'Bangers';
            font-size: 1.5rem;
			text-decoration: none;
            color: white;
            background-color: #285238;
			border: 2px;
			border-color: white;
            border-radius: 8px;	
			cursor: pointer;
			
		}
		
		.PUNKT{
			height: 25px;
			width: 25px;
			border-radius: 40%;
			background-color: grey;
			z-index: 3;
		}
		
				
		.PUNKT:hover{
			cursor: url('../images/InfoI.gif'),auto;
			background-color: #285238;
		}
		
		
		.NORDEUROPA{
			position:absolute;
			top: 22%;
			left:63%;
		}
		
		.INFONORDEUROPA{
			position: absolute;
			top: 22%;
			left:65%;
			height: auto;
			width: 30%;
			padding-top:10%;
			padding: 30px;
			font-family: verdana;
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.SIBIRIEN{
			position:absolute;
			top: 28%;
			left:73%;
		}
		
		.INFOSIBIRIEN{
			position: absolute;
			top: 28%;
			right:28%;
			height: auto;
			width: 30%;
			padding: 30px;
			font-family: verdana;
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.CHINA{
			position:absolute;
			top: 30%;
			left:79%;
		}
		
		.INFOCHINA{
			position: absolute;
			top: 30%;
			right:22%;
			height: auto;
			width: 30%;
			padding: 30px;
			font-family: verdana;
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.SUEDOSTASIEN{
			position:absolute;
			top: 60%;
			left:85%;
		}
		
		.INFOSUEDOSTASIEN{
			position: absolute;
			top: 55%;
			right:16%;
			height: auto;
			width: 30%;
			padding: 30px;
			font-family: verdana;
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.ANTARKTISOST{
			position:absolute;
			bottom:10%;
			right:25%;
		}
		
		.INFOANTARKTISOST{
			position: absolute;
			bottom:10%;
			right:27%;
			height: auto;
			width: 30%;
			padding: 30px;
			font-family: verdana;
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.ANTARKTISMITTE{
			position:absolute;
			bottom:10%;
			right:35%;
		}
		
		.INFOANTARKTISMITTE{
			position: absolute;
			bottom:10%;
			right:37%;
			height: auto;
			width: 30%;
			padding: 30px;
			font-family: verdana;
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.ANTARKTISWEST{
			position:absolute;
			bottom:10%;
			left:53%;
		}
		
		.INFOANTARKTISWEST{
			position: absolute;
			bottom:10%;
			left:55%;
			height: auto;
			width: 30%;
			padding: 30px;
			font-family: verdana;
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.CHILE{
			position:absolute;
			top: 70%;
			left:45%;
		}
		
		.INFOCHILE{
			position: absolute;
			bottom:10%;
			left:47%;
			height: auto;
			width: 30%;
			padding: 30px;
			font-family: verdana;
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.AMAZONAS{
			position:absolute;
			top: 61%;
			left:47%;
		}
		
		.INFOAMAZONAS{
			position: absolute;
			bottom:25%;
			left:49%;
			height: auto;
			width: 30%;
			padding: 30px;
			font-family: verdana;
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.ATLANTIK{
			position:absolute;
			top: 42%;
			left:48%;
		}
		
		.INFOATLANTIK{
			position: absolute;
			top: 20%;
			left:50%;
			height: auto;
			width: 40%;
			padding: 30px;
			font-family: verdana;
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.KANADAOST{
			position:absolute;
			top: 30%;
			left:38%;
		}
		
		.INFOKANADAOST{
			position: absolute;
			top: 30%;
			left:40%;
			height: auto;
			width: 30%;
			padding: 30px;
			font-family: verdana;
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.KANADAWEST{
			position:absolute;
			top: 30%;
			left:42%;
		}
		
		.INFOKANADAWEST{
			position: absolute;
			top: 30%;
			left:44%;
			height: auto;
			width: 30%;
			padding: 30px;
			font-family: verdana;
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.LABRADOR{
			position:absolute;
			top: 25%;
			left:48%;
		}
		
		.INFOLABRADOR{
			position: absolute;
			top: 25%;
			left:50%;
			height: auto;
			width: 30%;
			padding: 30px;
			font-family: verdana;
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.GROENLAND{
			position:absolute;
			top: 22%;
			left:53%;
		}
		
		.INFOGROENLAND{
			position: absolute;
			top: 22%;
			left:55%;
			height: auto;
			width: 30%;
			padding: 30px;
			font-family: verdana;
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
		
		.ARKTIS{
			position:absolute;
			top: 16%;
			left:59%;
		}
		
		.INFOARKTIS{
			position: absolute;
			top: 16%;
			left:61%;
			height: auto;
			width: 30%;
			padding: 30px;
			font-family: verdana;
			font-size: 1.5rem;
			color: #285238;
			text-align: left;
			background-color: white;
			border-radius: 20px 20px 20px 20px;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index:5;
		}
				
		.AFRIKA{
			position:absolute;
			top: 51%;
			left:62%;
		}
		
		.INFOAFRIKA{
			position: absolute;
			top: 51%;
			left:64%;
			height: auto;
			width: 30%;
			padding-top: 5px;
			padding: 25px;
			font-family: verdana;
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

		
		
	</style>
</head>

<body>
	
	<?php include '../include/nav.php'; ?>
	
	 <!-- Hintergrundvideo 
		<video autoplay muted loop id="backgroundVideo">
			<source src="../retterwissen/bilder_retterwissen/background_video.mp4" type="video/mp4">
			<source src="../retterwissen/bilder_retterwissen/background_video.mp4" type="video/webm">
		</video>-->
	
	
    <main>
		
		<!--<img id="hintergrund" src="../images/waldbrand_hintergrund_II.png" alt="Brennender Wald">-->
		<img class="WELT" src="../images/Weltkarte_rot.png" alt="Weltkarte in rot">
			
		<img class="HERO" src="../images/BadGirl.png">
	
		<div class="SPRECHBLASE">
			
			<p>Hallo! Ich freue mich, dass du mit mir auf diese Mission gehen möchtest. ...</p>
			
			<button class="LOS" onclick="window.location.href='kapitel1/wind_scarlett.php'"> Auf geht's! </button>
		</div>	

			<div class="PUNKT NORDEUROPA"></div>
			<div class="PUNKT SIBIRIEN"></div>
			<div class="PUNKT CHINA"></div>
			<div class="PUNKT SUEDOSTASIEN"></div>
			<div class="PUNKT ANTARKTISOST"></div>
			<div class="PUNKT ANTARKTISMITTE"></div>
			<div class="PUNKT ANTARKTISWEST"></div>
			<div class="PUNKT CHILE"></div>
			<div class="PUNKT AMAZONAS"></div>
			<div class="PUNKT ATLANTIK"></div>
			<div class="PUNKT KANADAWEST"></div>
			<div class="PUNKT KANADAOST"></div>
			<div class="PUNKT LABRADOR"></div>
			<div class="PUNKT GROENLAND"></div>
			<div class="PUNKT ARKTIS"></div>
			<div class="PUNKT AFRIKA"></div>
		
		
		<div class="INFONORDEUROPA">
			<h1>Barents Meereis</h1>
			Das Wintermeereis in der Barentssee (zwischen Skandinavien, der Insel Svalbard und Nowaja Semlja gelegen) ist ein Spezialfall im Vergleich zum restlichen Arktischen Meereis.<br>
			Zu den Folgen gehören ein signifikanter Einfluss auf Luftzirkulationen, das europäische Klima sowie möglicherweise auf die Atlantische Umwälzzirkulation.
		</div>
		
		<div class="INFOSIBIRIEN">
			<h1>Permafrostböden</h1>
			In den oberen drei Metern der ganzjährig gefrorenen Permafrostböden in den hohen nördlichen Breiten sind etwa Tausend Milliarden Tonnen Kohlenstoff gespeichert.<br>
			Im Vergleich zum graduellen Abtauen könnte solch ein abrupter Kippprozess den Kohlenstoffausstoß der Permafrostböden um 50-100% steigern und möglicherweise den grossflächigen Kollaps des Borealen Perfamfrosts (siehe unten) auslösen. In jedem Fall würde das Abtauen mit der Freisetzung großer Mengen von Treibhausgasen zur globalen Erhitzung beitragen, und damit zu allen Klimarisiken, von Extremwetter bis Meeresspiegelanstieg.<br>
		</div>
		
		<div class="INFOCHINA">
			<h1>Nordische Nadelwälder</h1>
			Die nordischen Nadelwälder - Fachleute nennen sie 'boreal' - umfassen fast ein Drittel der weltweiten Waldfläche. Sie liegen ringförmig um die Arktis herum, und werden oft auch Taiga genannt. Dieses Kippelement weist zwei Kippprozesse auf: das plötzliche Absterben im Süden und die Ausbreitung in den Norden (siehe unten).<br>			
			Die Nadelwälder werden durch Steppe bzw. Prärie ersetzt. Der dadurch freigesetzte Kohlenstoff und die veränderte Umgebung können zu einer zusätzlichen globalen Erwärmung von etwa 0.2°C beitragen.<br>
		</div>
		
		<div class="INFOSUEDOSTASIEN">
			<h1>Korallenriffe</h1>
			Tropische und subtropische Korallenriffe sind eines der Ökosysteme mit der höchsten Biodiversität auf der Erde. Sie haben einen enormen Einfluss auf die Nahrungskette im Meer, den Nähr- und Kohlenstoffkreislauf im Ozean, und sind entscheidend für die Lebensbedingungen von Millionen Menschen weltweit. Sie bieten zum Beispiel Küstenschutz und sind wichtig für die Tourismuswirtschaft.<br>
			All die oben genannten wichtigen Funktionen der Korallenriffe fallen bei einem Absterben weg.
		</div>
		
		<div class="INFOANTARKTISOST">
			<h1>Ostantarktis</h1>
			Einige Einzugsgebiete der großen Gletscher, mit denen Eis vom Ostantarktischen Eispanzer ins Meer fließt, liegen wie große Teile der Westantarktis auf Boden unterhalb des Meeresspiegels auf. Dazu zählen insbesondere die Wilkes-, Aurora- und Recoverybasins.<br>
			Ein weiterer Beitrag zum Meeresspiegelanstieg.
		</div>
		
		<div class="INFOANTARKTISMITTE">
			<h1>Ostantarktischer Eisschild</h1>
			Die Ostantarktis beherbergt in ihren Eispanzern die größten Süßwasserreserven der Welt.<br>
			Die Eismassen auf der Ostantarktis entsprechen etwa 50 Metern Meeresspiegelanstieg.
		</div>
		
		<div class="INFOANTARKTISWEST">
			<h1>Westantarktischer Eisschild</h1>
			Große Teile der des hoch aufragenden Westantarktischen Eisschildes liegen auf Felsboden, der unterhalb des Meeresspiegels. Dabei fällt dieser Felsboden zum Landesinneren hin sogar noch ab, statt anzusteigen. Der Felsboden befindet sich an den tiefsten Stellen 2,5 Kilometer unter dem Meeresspiegel.<br> 
			Sollte der Westantarktische Eisschild durch diesen Prozess zerfallen, würde der Meeresspiegel weltweit um über drei Meter ansteigen.
		</div>
		
		<div class="INFOCHILE">
			<h1>Gebirgsgletscher</h1>
			Hier geht es um Gebirgsgletscher außerhalb Grönlands und der Antarktis, die oft alpin genannt werden und jeweils ihre eigenen speziellen lokalen Eigenschaften aufweisen.<br>
			Die Versorgung mit Süßwasser hängt in vielen Gebieten der Welt ganz entscheidend vom jährlich zuverlässig und gleichmäßig auftretenden Schmelzwasser ab. Verschwinden die Gletscher, fehlt den Menschen das Schmelzwasser.
		</div>
		
		<div class="INFOAMAZONAS">
			<h1>Amazonas Regenwald</h1>
			Der Amazonas Regenwald in Südamerika ist ein Element der Biosphäre, das jedoch unter anderem wegen der dortigen Wasser- und Kohlenstoffkreisläufe eine wichtige Rolle im gesamten Erdsystem spielt.<br>
			Der Amazonas Regenwald in Südamerika ist ein Element der Biosphäre, das jedoch unter anderem wegen der dortigen Wasser- und Kohlenstoffkreisläufe eine wichtige Rolle im gesamten Erdsystem spielt.
		</div>
		
		<div class="INFOATLANTIK">
			<h1>Atlantische Umwälzzirkulation</h1>
			Die Umwälzzirkulation des Atlantiks stellt ein gewaltiges Energieförderband dar, mit dem warmes Wasser an der Oberfläche in den Norden und nach dem dortigen Abkühlen und Absinken in der Tiefe wieder in den Süden transportiert wird. Dies wird "thermohaline Zirkulation" genannt, weil es ein Kreislauf ist, angetrieben von der Temperatur (thermo) sowie vom Salzgehalt (haline) des Wassers. Der Golfstrom, verantwortlich für das milde Klima in Nordwest-Europa, ist Teil dieses Strömungssystems.<br>
			Dies kann gravierende Auswirkungen haben auf Temperatur und Niederschlagsverteilungen - inklusive einer Erwärmung der südlichen Hemisphäre, einer Verschiebung der Intertropischen Konvergenzzone nach Süden, Monsunabschwächungen in Afrika und Asien und einer Verstärkung in der Südhemisphäre, was zu einer Austrocknung im Sahel und in Teilen des Amazonas führen kann, und verringerte natürliche Kohlenstoffsenken. Außerdem kann es zu einer Abkühlung im Nordatlantikraum kommen – das bedeutet aber nicht, dass dieser Effekt die globale Erwärmung wesentlich abschwächen kann, denn die verschiedenen Prozesse beeinflussen sich auf komplexe Weise, und man kann die Temperaturen nicht einfach zusammenzählen.
		</div>
		
		<div class="INFOKANADAWEST">
			<h1>Nordische Nadelwälder</h1>
			Die nordischen Nadelwälder - von Fachleute 'boreal' genannt - umfassen fast ein Drittel der weltweiten Waldfläche. Sie liegen ringförmig um die Arktis herum, und werden oft auch Taiga genannt. Dieses Kippelement weist zwei Kippprozesse auf: das plötzliche Absterben im Süden (siehe oben) und die Ausbreitung in den Norden.<br>
			Einerseits wird mehr CO2 aufgenommen, andererseits verdunkelt sich die Erdoberfläche, so dass es wohl insgesamt zu einer Verstärkung der Erderwärmung kommt.
		</div>
		
		<div class="INFOKANADAOST">
			<h1>Boreale Permafrostböden</h1>
			Die arktischen Perma- oder Dauerfrostböden, gefroren über Jahrhunderte bis Jahrtausende, befinden sich in Sibirien und Nordamerika und könnten beim Auftauen riesige Mengen der Treibhausgase Kohlenstoffdioxid und Methan freisetzen. In sogenannten Yedoma-Böden sind in Tiefen von mehr als 3 Metern vermutlich mehrere hundert Milliarden Tonnen Kohlenstoff gespeichert.<br>
			Die freigesetzten Kohlenstoffverbindungen könnten zu einer zusätzlichen globalen Erwärmung von 0,2-0,4°C führen.
		</div>
		
		<div class="INFOLABRADOR">
			<h1>Zirkulation im Nordatlantik</h1>
			Im Labrador- und im Irminger-Meer im Nordatlantik gibt es als Teil des sogenannten subploaren Wirbels eine Umwälzströmung.<br>
			Zu den Folgen zählen eine regionale Abkühlung im Nordatlantik um circa 2-3°C und möglicherweise globale Abkühlung um 0,5°C (wobei dies nicht bedeutet, dass ein Kippen die globale Erwärmung regulieren kann). Außerdem rechnet man mit einer Verschiebung des Jet Streams in Richtung Norden, Wetterextremen in Europa sowie eine Verschiebung der intertropischen Konvergenzzone nach Süden.
		</div>
		
		<div class="INFOGROENLAND">
			<h1>Grönlands Eisschild</h1>
			Die Insel Grönland ist ganzjährig von einem stellenweise drei Kilometer starken Eisschild bedeckt.<br>
			Ein vollständiger Verlust des Eisschilds würde zu einem weltweiten Meeresspiegelanstieg von bis zu sieben Metern führen, und andere Kippelemente (insbesondere die Atlantische Umwälzzirkulation) beeinflussen.
		</div>
		
		<div class="INFOARKTIS">
			<h1>Arktisches Winter-Meereis</h1>
			Das Nordpolarmeer ist zu großen Teilen ganzjährig von schwimmendem Meereis bedeckt, dessen Ausdehnung im Jahreslauf natürlich schwankt. Hier geht es um die Meereisbedeckung im Winter, die eine Dicke von wenigen Metern niemals überschreitet. [Nicht zu verwechseln mit den teilweise hunderte Meter dicken Tafeleisbergen. Diese sind abgebrochene Eisschelfe, schwimmende Gletscherzungen, die vom Land kommen. Und außerdem nicht zu verwechseln mit der Meereisbedeckung im Sommer, die bereits stark abgenommen hat, so das der Nordpol möglicherweise noch in diesem Jahrhundert im Sommer eisfrei sein wird.]<br>
			Das Meereis im Winter beeinflusst auch das Meereis im Sommer – und eine offene Meeresfläche trägt auf verschiedenen Wegen dazu bei, dass die Erderwärmung in den hohen nördlichen Breiten etwa doppelt so schnell von statten geht wie im globalen Durchschnitt. Insgesamt ergibt dieses Feedback eine Erhöhung der globalen Mitteltemperatur um 0,6°C.
		</div>
		
		<div class="INFOAFRIKA">
			<h1>Vegetation im Sahel und Westafrikanischer Monsun</h1>
			Der Westafrikanische Monsun und die Vegetation im Sahel sind eng miteinander verknüpft, und ermöglichen ein Ergrünen des Sahel.<br>
			Eine grundlegende Veränderung der Vegetation in der Region.
		</div>
		
			
    </main>
	
	
	<script>
  		//Funktionen, um Infoboxen der einzelnen Standorte anzeigen zu lassen 
		document.querySelector('.NORDEUROPA').addEventListener('mouseover',ZeigeNordeuropa);   	//Bei Mouseover wird die Funktion "ZeigeEuropa" ausgeführt und es öffnet sich eine kleine Info zu dem Standort
			document.querySelector('.NORDEUROPA').addEventListener('mouseout',NordeuropaAus);		//Geht der Mousezeiger weiter, wird die Funktion EuropaAus augeführt und die Info schließt sich wieder
				
			function ZeigeNordeuropa() {
				document.querySelector(".INFONORDEUROPA").classList.add("ZEIGEN");
				
			}
			function NordeuropaAus() {
				document.querySelector(".INFONORDEUROPA").classList.remove("ZEIGEN");
				
				
			} 
		
		
		document.querySelector('.SIBIRIEN').addEventListener('mouseover',ZeigeSibirien);   	
			document.querySelector('.SIBIRIEN').addEventListener('mouseout',SibirienAus);		
				
			function ZeigeSibirien() {
				document.querySelector(".INFOSIBIRIEN").classList.add("ZEIGEN");
			}
			function SibirienAus() {
				document.querySelector(".INFOSIBIRIEN").classList.remove("ZEIGEN");
			} 
    
		
		document.querySelector('.CHINA').addEventListener('mouseover',ZeigeChina);   	
			document.querySelector('.CHINA').addEventListener('mouseout',ChinaAus);		
				
			function ZeigeChina() {
				document.querySelector(".INFOCHINA").classList.add("ZEIGEN");
			}
			function ChinaAus() {
				document.querySelector(".INFOCHINA").classList.remove("ZEIGEN");
			} 
		
		document.querySelector('.SUEDOSTASIEN').addEventListener('mouseover',ZeigeSuedostasien);   	
			document.querySelector('.SUEDOSTASIEN').addEventListener('mouseout',SuedostasienAus);		
				
			function ZeigeSuedostasien() {
				document.querySelector(".INFOSUEDOSTASIEN").classList.add("ZEIGEN");
			}
			function SuedostasienAus() {
				document.querySelector(".INFOSUEDOSTASIEN").classList.remove("ZEIGEN");
			} 
		
		document.querySelector('.ANTARKTISOST').addEventListener('mouseover',ZeigeAntarktisOst);   	
			document.querySelector('.ANTARKTISOST').addEventListener('mouseout',AntarktisOstAus);		
				
			function ZeigeAntarktisOst() {
				document.querySelector(".INFOANTARKTISOST").classList.add("ZEIGEN");
			}
			function AntarktisOstAus() {
				document.querySelector(".INFOANTARKTISOST").classList.remove("ZEIGEN");
			} 
		
		document.querySelector('.ANTARKTISMITTE').addEventListener('mouseover',ZeigeAntarktisMitte);   	
			document.querySelector('.ANTARKTISMITTE').addEventListener('mouseout',AntarktisMitteAus);		
				
			function ZeigeAntarktisMitte() {
				document.querySelector(".INFOANTARKTISMITTE").classList.add("ZEIGEN");
			}
			function AntarktisMitteAus() {
				document.querySelector(".INFOANTARKTISMITTE").classList.remove("ZEIGEN");
			} 
		
		document.querySelector('.ANTARKTISWEST').addEventListener('mouseover',ZeigeAntarktisWest);   	
			document.querySelector('.ANTARKTISWEST').addEventListener('mouseout',AntarktisWestAus);		
				
			function ZeigeAntarktisWest() {
				document.querySelector(".INFOANTARKTISWEST").classList.add("ZEIGEN");
			}
			function AntarktisWestAus() {
				document.querySelector(".INFOANTARKTISWEST").classList.remove("ZEIGEN");
			} 
		
		document.querySelector('.CHILE').addEventListener('mouseover',ZeigeChile);   	
			document.querySelector('.CHILE').addEventListener('mouseout',ChileAus);		
				
			function ZeigeChile() {
				document.querySelector(".INFOCHILE").classList.add("ZEIGEN");
			}
			function ChileAus() {
				document.querySelector(".INFOCHILE").classList.remove("ZEIGEN");
			}
		
		document.querySelector('.AMAZONAS').addEventListener('mouseover',ZeigeAmazonas);   	
			document.querySelector('.AMAZONAS').addEventListener('mouseout',AmazonasAus);		
				
			function ZeigeAmazonas() {
				document.querySelector(".INFOAMAZONAS").classList.add("ZEIGEN");
			}
			function AmazonasAus() {
				document.querySelector(".INFOAMAZONAS").classList.remove("ZEIGEN");
			}
		
		document.querySelector('.AMAZONAS').addEventListener('mouseover',ZeigeAmazonas);   	
			document.querySelector('.AMAZONAS').addEventListener('mouseout',AmazonasAus);		
				
			function ZeigeAmazonas() {
				document.querySelector(".INFOAMAZONAS").classList.add("ZEIGEN");
			}
			function AmazonasAus() {
				document.querySelector(".INFOAMAZONAS").classList.remove("ZEIGEN");
			}
		
		document.querySelector('.ATLANTIK').addEventListener('mouseover',ZeigeAtlantik);   	
			document.querySelector('.ATLANTIK').addEventListener('mouseout',AtlantikAus);		
				
			function ZeigeAtlantik() {
				document.querySelector(".INFOATLANTIK").classList.add("ZEIGEN");
			}
			function AtlantikAus() {
				document.querySelector(".INFOATLANTIK").classList.remove("ZEIGEN");
			}
		
		document.querySelector('.KANADAWEST').addEventListener('mouseover',ZeigeKanadaWest);   	
			document.querySelector('.KANADAWEST').addEventListener('mouseout',KanadaWestAus);		
				
			function ZeigeKanadaWest() {
				document.querySelector(".INFOKANADAWEST").classList.add("ZEIGEN");
			}
			function KanadaWestAus() {
				document.querySelector(".INFOKANADAWEST").classList.remove("ZEIGEN");
			}
		
		document.querySelector('.KANADAOST').addEventListener('mouseover',ZeigeKanadaOst);   	
			document.querySelector('.KANADAOST').addEventListener('mouseout',KanadaOstAus);		
				
			function ZeigeKanadaOst() {
				document.querySelector(".INFOKANADAOST").classList.add("ZEIGEN");
			}
			function KanadaOstAus() {
				document.querySelector(".INFOKANADAOST").classList.remove("ZEIGEN");
			}
		
		document.querySelector('.LABRADOR').addEventListener('mouseover',ZeigeLabrador);   	
			document.querySelector('.LABRADOR').addEventListener('mouseout',LabradorAus);		
				
			function ZeigeLabrador() {
				document.querySelector(".INFOLABRADOR").classList.add("ZEIGEN");
			}
			function LabradorAus() {
				document.querySelector(".INFOLABRADOR").classList.remove("ZEIGEN");
			}
		
		document.querySelector('.GROENLAND').addEventListener('mouseover',ZeigeGroenland);   	
			document.querySelector('.GROENLAND').addEventListener('mouseout',GroenlandAus);		
				
			function ZeigeGroenland() {
				document.querySelector(".INFOGROENLAND").classList.add("ZEIGEN");
			}
			function GroenlandAus() {
				document.querySelector(".INFOGROENLAND").classList.remove("ZEIGEN");
			}
		
		document.querySelector('.ARKTIS').addEventListener('mouseover',ZeigeArktis);   	
			document.querySelector('.ARKTIS').addEventListener('mouseout',ArktisAus);		
				
			function ZeigeArktis() {
				document.querySelector(".INFOARKTIS").classList.add("ZEIGEN");
			}
			function ArktisAus() {
				document.querySelector(".INFOARKTIS").classList.remove("ZEIGEN");
			}
		
		document.querySelector('.AFRIKA').addEventListener('mouseover',ZeigeAfrika);   	
			document.querySelector('.AFRIKA').addEventListener('mouseout',AfrikaAus);		
				
			function ZeigeAfrika() {
				document.querySelector(".INFOAFRIKA").classList.add("ZEIGEN");
			}
			function AfrikaAus() {
				document.querySelector(".INFOAFRIKA").classList.remove("ZEIGEN");
			}
		
    </script>
	
	<?php include '../include/footer.php'; ?>
	
</body>
</html>


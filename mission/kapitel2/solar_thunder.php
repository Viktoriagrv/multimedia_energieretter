<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Kapitel Solarenergie</title>

    

    <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../../css/styles.css">

	<style>
		
		body {
            margin: 0;
            background-color: #e3f2fd; /* HELLBLAUER HINTERGRUND, WASSER-THEMA background-color: #19325F;*/
        }

		.BTNLINKS{
			display: inline-block;
            padding: 20px 30px;
            font-family: 'Bangers';
            font-size: 2rem;
			text-decoration: none;
			letter-spacing: 0.05em;
            color: #e8a723;
            background-color: #285238;
			border: 2px;
			border-color: #285238;
            border-radius: 8px;	
			cursor: pointer;
		}
		
		.BTNLINKS:hover{
			color: #285238;
			background-color: #45a049;
			border: 2px solid #285238;
			
		}
		
		
		.HEADER{
			position: absolute;
			top: 16%;
			left: 8%;
			font-family: "bangers";
			color: #e8a723;
			font-size: 5rem;
			}
			
		.SOLARPANEL{
			position:absolute;
			bottom:7%;
			left: 3%;
			height:60%;
			width:auto;
			}
		
		.INFOBLASE{
			position: absolute;
			top: 26%;
			left: 37%;
			height: 12%;
			width: auto;
			z-index:4;
			cursor: pointer;
		}
		
		.INFOTEXT{
			position: absolute;
			top: 31%;
			left: 43%;
			font-family: "open sans";
			font-size: 1.5rem;
			color: #e8a723;
			text-align: left;
			cursor: pointer;
		}
		
		.TEXTBLOCK{
			position: absolute;
			right:5%;
			top: 13%;
			width:39%;
			height: auto;
			font-family: "open sans";
			font-size: 2rem;
			color: #285238;
			text-align: left;
			visibility: visible;
		}
		
		.ANTWORTEN{
			position: absolute;
			left: 15%;
			
		}
		
		.TEXT{
			font-family: "open sans";
			font-size: 2rem;
			color:#285238;
			text-align:left;
			}
		
		.PRUEFEN{
			display: inline-block;
            padding: 20px 30px;
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
		}
		
		.PRUEFEN:hover{
			color: #285238;
			background-color: #45a049;
			border: 2px solid #285238;
		}
		
		.ABSCHLUSSTEXT{
			position: absolute;
			top: 23%;
			right: 8%;
			font-family: "open sans";
			font-size: 2rem;
			color: #285238;
			text-align: left;
			width: 32%;
			height: auto;
			visibility:hidden;
		}
		
		.FEHLERMELDUNG{
			position: absolute;
			padding: 30px;
			right: 20%;
			top: 20%;
			height:auto;
			width: 30%;
			border-radius: 20px 20px 0px 20px;
			background-color: white;
			box-shadow: 5px 5px 10px 0px gray;
			visibility: hidden;
			z-index: 5;
		}
		
		.WEG{
			
			visibility: hidden;
		}
		
		.ZEIGEN{
			visibility: visible;
		}
		
		#ZU{
			position:absolute;
			top: 20px;
			right: 20px;
		}
		
		.CHECKBOX{
			height: 1.5rem;
			width:1.5rem;
			cursor: pointer;
		}
		
		
	</style>
</head>

<body>
	
	<?php include '../../include/nav.php'; ?>
	
    <main>
		
		<div class="HEADER">Solaranlagen</div>
		<img class="SOLARPANEL" src="../../images/Solarenergie.png" alt="Landschaft mit Solarpaneelen">
		
		<div>
			<img class="INFOBLASE" onclick="window.location.href='../../retterwissen/zukunftsenergien/solar_thunder.php'" src="../../images/InfoBlase.png" alt="Infoblase">
			<p class="INFOTEXT" onclick="window.location.href='../../retterwissen/zukunftsenergien/solar_thunder.php'">
				Erfahre mehr <br>
				über Solarenergie!
			</p>
		</div>
		
		<div class="TEXTBLOCK">
			<p>
				Solaranlagen brauchen Orte, an denen viel Sonnenlicht vorhanden ist. Besonders wichtig ist, dass sie möglichst lange und direkt von der Sonne beschienen werden. Außerdem sollten diese Orte flach oder leicht geneigt sein, damit die Solarpanels optimal ausgerichtet werden können. Klicke <strong>DREI</strong> geeignete Standorte an:
			</p>
			
				
			<div class="ANTWORTEN">
					<input  class="CHECKBOX" type="checkbox" id="KUESTE"> Küsten	
						<br>
					<input class="CHECKBOX" type="checkbox" id="WUESTE"> Wüsten
						<br>
					<input class="CHECKBOX" type="checkbox" id="FELDER"> Offene Felder
						<br>
					<input class="CHECKBOX" type="checkbox" id="SUMPF"> Sümpfe
						<br>
					<input class="CHECKBOX" type="checkbox" id="BERGE"> Berge
						<br>
					<input class="CHECKBOX" type="checkbox" id="DAECHER"> Gebäude	
						<br><br>
					<button class="PRUEFEN">Überprüfen</button>	
			</div>
		</div>
		
		<div class="GRATULATION">
			<p>Herzlichen Glückwunsch, das war richtig! Errichte nun an den eigneten Standorten auf der Weltkarte deine Solaranlagen.</p>
		</div>
		
		<div class="ABSCHLUSSTEXT-KAPITELSTART">
			<button  class="BTNLINKS" onclick="window.location.href='karte_solar_thunder.php'">Zur Weltkarte</button>
		</div>
		
		<div class="FEHLERMELDUNG">
				<button id="ZU">&times;</button>	
			
				<div class="TEXT">
					<br>
					Das war leider nicht richtig. Versuche es noch einmal.
					<br><br>
					
					Oder lese noch mehr über Solarenergie:
					<br><br>
					<button  class="BTNLINKS" onclick="window.location.href='../../retterwissen/zukunftsenergien/solar_thunder.php'">Zum Retterwissen Solarenergie</button>
						
				</div>						
		</div>
		
		<img class="THUNDER-KAPITELSTART" src="../../images/AquaBoy.png" alt="Thunderbolt">
		
	</main>

    <script>	
				
		document.querySelector(".PRUEFEN").addEventListener("click",AuswahlAuswerten);
		document.querySelector("#ZU").addEventListener('click',FehlermeldungZu);
		
		function AuswahlAuswerten(){
			if ((document.querySelector ("#WUESTE").checked &&		
				document.querySelector ("#FELDER").checked &&
				document.querySelector ("#DAECHER").checked) &&
				(!document.querySelector ("#KUESTE").checked &&
				!document.querySelector ("#BERGE").checked &&
				!document.querySelector ("#SUMPF").checked)
				)		
				
			{WeiterleitenStarten();}
			
			else{		
				ZeigeFehlermeldung();
			}
			
		}
		
		function WeiterleitenStarten(){
			document.querySelector(".TEXTBLOCK").classList.add("WEG");
			document.querySelector(".GRATULATION").classList.add("ZEIGEN");
			document.querySelector(".ABSCHLUSSTEXT-KAPITELSTART").classList.add("ZEIGEN");
			document.querySelector(".THUNDER-KAPITELSTART").style.animationPlayState = "running";
			
		}
		
		function ZeigeFehlermeldung (){
			document.querySelector(".FEHLERMELDUNG").classList.add("ZEIGEN");
				
		}
	
		function FehlermeldungZu() {
			document.querySelector(".FEHLERMELDUNG").classList.remove("ZEIGEN");
			 const checkboxes = document.querySelectorAll(".CHECKBOX");
    			checkboxes.forEach(checkbox => {
        			checkbox.checked = false;                                           // Zustand auf "nicht ausgewählt" setzen (Programmiert mit ChatGPT)
    		});
		}
		
	</script>
	

</body>
</html>
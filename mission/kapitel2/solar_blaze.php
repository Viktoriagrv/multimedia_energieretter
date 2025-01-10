<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Kapitel Solarenergie</title>

    

    <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../../css/styles.css">
	
</head>

<body>
	
	<div class="ALLES">

		<?php include '../../include/nav.php'; ?>

		<main>

			<div class="HEADER-SOLAR">Solaranlagen</div>
			<img class="SOLARPANEL" src="../../images/Solarenergie.png" alt="Landschaft mit Solarpaneelen">

			<div>
				<img class="INFOBLASE" onclick="window.location.href='../../retterwissen/zukunftsenergien/solar/solar_blaze.php'" src="../../images/InfoBlase.png" alt="Infoblase">
				<p class="INFOTEXT" onclick="window.location.href='../../retterwissen/zukunftsenergien/solar/solar_blaze.php'">
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
				<button  class="BTNLINKS" onclick="window.location.href='karte_solar_blaze.php'">Zur Weltkarte</button>
			</div>

			<div class="FEHLERMELDUNG">
					<button id="ZU">&times;</button>	

					<div class="TEXT">
						<br>
						Das war leider nicht richtig. Versuche es noch einmal.
						<br><br>

						Oder lese noch mehr über Solarenergie:
						<br><br>
						<button  class="BTNLINKS" onclick="window.location.href='../../retterwissen/zukunftsenergien/solar/solar_blaze.php'">Zum Retterwissen Solarenergie</button>

					</div>						
			</div>

			<img class="BLAZE-KAPITELSTART" src="../../images/Prinzessin.png" alt="Green Blaze">

		</main>
	</div>
	
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
			document.querySelector(".BLAZE-KAPITELSTART").style.animationPlayState = "running";
			
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
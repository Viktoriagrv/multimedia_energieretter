<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Kapitel Wasserkraft</title>

    <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../../css/styles.css">

</head>

<body>
	
	<div class="ALLES">
	
		<?php include '../../include/nav.php'; ?>

		<main>

			<div class="HEADER-WASSER">Wasserkraftwerke</div>
			<img class="LANDSCHAFT-WASSERKRAFTWERK" src="../../images/wasserkraftwerk.png" alt="Landschaft mit Wasserkraftwerk">

			<div>
				<img class="INFOBLASE-WASSER" onclick="window.location.href='../../retterwissen/zukunftsenergien/wasser/wasser_scarlet.php'" src="../../images/InfoBlase.png" alt="Infoblase">
				<p class="INFOTEXT-WASSER" onclick="window.location.href='../../retterwissen/zukunftsenergien/wasser/wasser_scarlet.php'">
					Erfahre mehr <br>
					über Wasserkraft!
				</p>
			</div>

			<div class="TEXTBLOCK-WASSER">
				<p>
					Wasserkraftwerke nutzen die Energie von fließendem oder fallendem Wasser, um Strom zu erzeugen. Besonders gut eignen sich Gegenden, wo Flüsse schnell fließen oder große Mengen Wasser aus Höhenunterschieden Energie freisetzen können. Klicke <strong>DREI</strong> geeignete Standorte an:
				</p>

				<div class="ANTWORTEN-WASSER">
						<input  class="CHECKBOX" type="checkbox" id="KUESTE"> Küsten mit Gezeiten	
							<br>
						<input class="CHECKBOX" type="checkbox" id="TAL"> Täler
							<br>
						<input class="CHECKBOX" type="checkbox" id="WUESTE"> Wüste	
							<br>
						<input class="CHECKBOX" type="checkbox" id="FLUSS"> Flüsse
							<br>
						<input class="CHECKBOX" type="checkbox" id="SUMPF"> Sümpfe
							<br>
						<input class="CHECKBOX" type="checkbox" id="STAUSEEN"> Stauseen	
							<br><br>
						<button class="PRUEFEN-WASSER">Überprüfen</button>	
				</div>
			</div>

			<div class="GRATULATION">
				<p>Herzlichen Glückwunsch, das war richtig! Errichte nun an den eigneten Standorten auf der Weltkarte deine Wasserkraftwerke.</p>
			</div>

			<div class="ABSCHLUSSTEXT-KAPITELSTART">
				<button  class="BTNLINKS-WASSER" onclick="window.location.href='karte_wasser_scarlet.php'">Zur Weltkarte</button>
			</div>

			<div class="FEHLERMELDUNG">
					<button id="ZU">&times;</button>	

					<div class="TEXT-WASSER">
						<br>
						Das war leider nicht richtig. Versuche es noch einmal.
						<br><br>

						Oder lese noch mehr über Wasserkraft
						<br><br>
						<button  class="BTNLINKS-WASSER" onclick="window.location.href='../../retterwissen/zukunftsenergien/wasser/wasser_scarlet.php'">Zum Retterwissen Wasserkraft</button>

					</div>						
			</div>

			<img class="SCARLET-KAPITELSTART" src="../../images/BadGirl.png" alt="Scarlet Shade">

		</main>
	</div>

    <script>	
				
		document.querySelector(".PRUEFEN-WASSER").addEventListener("click",AuswahlAuswerten);
		document.querySelector("#ZU").addEventListener('click',FehlermeldungZu);
		
		function AuswahlAuswerten(){
			if ((document.querySelector ("#FLUSS").checked &&		
				document.querySelector ("#KUESTE").checked &&
				document.querySelector ("#STAUSEEN").checked) &&
				(!document.querySelector ("#TAL").checked &&
				!document.querySelector ("#WUESTE").checked &&
				!document.querySelector ("#SUMPF").checked)
				)		
				
			{WeiterleitenStarten();}
			
			else{		
				ZeigeFehlermeldung();
			}
			
		}
		
		function WeiterleitenStarten(){
			document.querySelector(".TEXTBLOCK-WASSER").classList.add("WEG");
			document.querySelector(".GRATULATION").classList.add("ZEIGEN");
			document.querySelector(".ABSCHLUSSTEXT-KAPITELSTART").classList.add("ZEIGEN");
			document.querySelector(".SCARLET-KAPITELSTART").style.animationPlayState = "running";
			
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


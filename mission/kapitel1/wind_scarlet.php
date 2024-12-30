<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Kapitel Windenergie</title>
    
    <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../../css/styles.css">

	<style>
		
		body{
			background-color: #e3f2fd; /* HELLBLAUER HINTERGRUND, WASSER-THEMA background-color: #19325F;*/
		}
	
	</style>
</head>

<body>
	
	<?php include '../../include/nav.php'; ?>
	
	
    <main>
		
		<div class="HEADER-WIND">Windkraftanlagen</div>
		<img class="LANDSCHAFT-WINDRAD" src="../../images/Windenergie.png" alt="Landschaft mit Windrädern">
		
		<div>
			<img class="INFOBLASE-WIND" onclick="window.location.href='../../retterwissen/zukunftsenergien/wind_scarlet.php'" src="../../images/InfoBlase.png" alt="Infoblase">
			<p class="INFOTEXT-WIND" onclick="window.location.href='../../retterwissen/zukunftsenergien/wind_scarlet.php'">
				Erfahre mehr <br>
				über Windkraft!
			</p>
		</div>
		
		<div class="TEXTBLOCK-WIND">
			<p>
				Windkraftanlagen, auch Windräder genannt, sind große Maschinen, die mit Wind Strom erzeugen.<br>
				Windräder brauchen Orte, an denen es viel Wind gibt, damit sie sich schnell drehen können. Wichtig dabei ist, dass nichts im Weg steht, was den Wind blockieren könnte. Klicke <strong>DREI</strong> geeignete Standorte an:
			</p>
			
				
			<div class="ANTWORTEN-WIND">
					<input  class="CHECKBOX" type="checkbox" id="KUESTE"> Küsten	
						<br>
					<input class="CHECKBOX" type="checkbox" id="TAL"> Täler
						<br>
					<input class="CHECKBOX" type="checkbox" id="WALD"> Wälder
						<br>
					<input class="CHECKBOX" type="checkbox" id="STEPPE"> Steppe	
						<br>
					<input class="CHECKBOX" type="checkbox" id="BERGE"> Berge
						<br>
					<input class="CHECKBOX" type="checkbox" id="SUMPF"> Sümpfe	
						<br><br>
					<button class="PRUEFEN-WIND">Überprüfen</button>	
			</div>
		</div>
		
		<div class="ABSCHLUSSTEXT-WIND">
			<p>Herzlichen Glückwunsch, das war richtig! Errichte nun an den eigneten Standorten auf der Weltkarte deine Windkraftanlagen.</p>
			<button  class="BTNLINKS-WIND" onclick="window.location.href='karte_wind_scarlet.php'">Zur Weltkarte</button>
		
		</div>
		
		<div class="FEHLERMELDUNG">
				<button id="ZU">&times;</button>	
			
				<div class="TEXT-WIND">
					<br>
					Das war leider nicht richtig. Versuche es noch einmal.
					<br><br>
					
					Oder lese noch mehr über Windkraft:
					<br><br>
					<button  class="BTNLINKS-WIND" onclick="window.location.href='../../retterwissen/zukunftsenergien/wind_scarlet.php'">Zum Retterwissen Windenergie</button>
						
				</div>						
		</div>
		
		<img class="SCARLET-KAPITELSTART" src="../../images/BadGirl.png" alt="Scarlet Shade">
		
	</main>

    <script>	
				
		document.querySelector(".PRUEFEN-WIND").addEventListener("click",AuswahlAuswerten);
		document.querySelector("#ZU").addEventListener('click',FehlermeldungZu);
		
		function AuswahlAuswerten(){
			if ((document.querySelector ("#KUESTE").checked &&		
				document.querySelector ("#BERGE").checked &&
				document.querySelector ("#STEPPE").checked) &&
				(!document.querySelector ("#TAL").checked &&
				!document.querySelector ("#WALD").checked &&
				!document.querySelector ("#SUMPF").checked)
				)		
				
			{WeiterleitenStarten();}
			
			else{		
				ZeigeFehlermeldung();
			}
			
		}
		
		function WeiterleitenStarten(){
			document.querySelector(".TEXTBLOCK-WIND").classList.add("WEG");
			document.querySelector(".ABSCHLUSSTEXT-WIND").classList.add("ZEIGEN");
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


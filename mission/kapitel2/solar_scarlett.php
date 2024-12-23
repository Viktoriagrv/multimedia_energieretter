<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title>Kapitel Sonnenenergie</title>

    

    <!-- Einbinden der Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="../../css/styles.css">

	<style>
		
		body {
            font-family: Verdana, sans-serif; /* VERDANA FÜR LEICHTE LESBARKEIT */
            margin: 0;
            background-color: #e3f2fd; /* HELLBLAUER HINTERGRUND, WASSER-THEMA background-color: #19325F;*/
            color: #333;
        }
		
		.KNOPF{
			display: inline-block;
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
		}
		
		.HERO{
			position: absolute;
			bottom: 20%;
			right:10%;
			height:30%;
			width:auto;
		}
		
		.HEADER{
			position: absolute;
			top: 12%;
			left: 8%;
			font-family: "bangers";
			color: #e8a723;
			font-size: 5rem;
			}
			
		.WINDRAD{
			position:absolute;
			top:38%;
			left: 3%;
			height:40%;
			width:auto;
			}
		
		.INFOBLASE{
			position: absolute;
			top: 20%;
			left: 38%;
			height: 12%;
			width: auto;
			z-index:4;
			cursor: pointer;
		}
		
		.INFOTEXT{
			position: absolute;
			top: 28%;
			left: 42%;
			font-family: verdana;
			font-size: 1.5rem;
			color: #e8a723;
			text-align: left;
			cursor: pointer;
		}
		
		.TEXTBLOCK{
			position: absolute;
			right: 8%;
			top: 15%;
			font-family: verdana;
			font-size: 2rem;
			color: #e8a723;
			text-align: left;
			width: 32%;
			height: auto;
			visibility: visible;
		}
		
		.TEXT{
			font-family: verdana;
			font-size: 1.5rem;
			color:#285238;
			text-align:left;
			}
		
		.PRUEFEN{
			display: inline-block;
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
		}
		
		.ABSCHLUSSTEXT{
			position: absolute;
			right: 8%;
			top: 15%;
			font-family: verdana;
			font-size: 2rem;
			color: #e8a723;
			text-align: left;
			width: 32%;
			height: auto;
			visibility:hidden;
		}
		
		.FEHLERMELDUNG{
			position: absolute;
			padding: 30px;
			right: 25%;
			top: 25%;
			height:30%;
			width: 20%;
			border-radius: 20px 20px 20px 20px;
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
			top: 15px;
			right: 15px;
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
	
	 <!-- Hintergrundvideo 
		<video autoplay muted loop id="backgroundVideo">
			<source src="../../retterwissen/bilder_retterwissen/background_video.mp4" type="video/mp4">
			<source src="../../retterwissen/bilder_retterwissen/background_video.mp4" type="video/webm">
		</video>-->
	
		
    <main>
		
		<div class="HEADER">Solaranlagen</div>
		<img class="WINDRAD" src="../../images/Solarenergie.png" alt="Landschaft mit Solarmodulen">
		
		<div>
			<img class="INFOBLASE" onclick="window.location.href='../../retterwissen/zukunftsenergien/solar.php'" src="../../images/InfoBlase.png" alt="Infoblase">
			<p class="INFOTEXT" onclick="window.location.href='../../retterwissen/zukunftsenergien/solar.php'">
				Erfahre mehr <br>
				über die Kraft der Sonne!
			</p>
		</div>
		
		<div class="TEXTBLOCK">
			<p>
				Windkraftanlagen sind das und das und benötigen das und das, um effizient arbeiten zu können. Welche drei Standorte eignen sich besonders für den Bau von Windparks?
			</p>
			
				
			<div class="ANTWORTEN">
				<input  class="CHECKBOX" type="checkbox" id="KUESTE"> Küsten	
					<br>
				<input class="CHECKBOX" type="checkbox" id="TAL"> Täler
					<br>
				<input class="CHECKBOX" type="checkbox" id="WALD"> Wälder
					<br>
				<input class="CHECKBOX" type="checkbox" id="WUESTE"> Wüsten	
					<br>
				<input class="CHECKBOX" type="checkbox" id="BERGE"> Berge
					<br>
				<input class="CHECKBOX" type="checkbox" id="SUMPF"> Sümpfe	
					<br><br>
				<button class="PRUEFEN">Überprüfen</button>
			</div>	
		
		</div>
		
		<div class="ABSCHLUSSTEXT">
			<p>Herzlichen Glückwunsch, das war richtig! Errichte nun an den eigneten Standorten auf der Weltkarte deine Windkraftanlagen.</p>
			<button  class="KNOPF" onclick="window.location.href='karte_wind_scarlett.php'">Zur Weltkarte</button>
		
		</div>
		
		<div class="FEHLERMELDUNG">
				<button id="ZU">&times;</button>	
			
				<div class="TEXT">
					Das war leider noch nicht richtig. Versuche es noch einmal.
					<br><br>
					
					Oder lese noch mehr über Windkraft
					<br><br>
					<button  class="KNOPF" onclick="window.location.href='../../retterwissen/zukunftsenergien/wind.php'">Zum Retterwissen Windenergie</button>
						
				</div>						
		</div>
		
		<img class="HERO" src="../../images/BadGirl.png" alt="Scarlett Shade">		
	</main>

    <script>	
		document.querySelector(".PRUEFEN").addEventListener("click",AuswahlAuswerten);
		document.querySelector("#ZU").addEventListener('click',FehlermeldungZu);
		
		function AuswahlAuswerten(){
			if ((document.querySelector ("#KUESTE").checked &&		
				document.querySelector ("#BERGE").checked &&
				document.querySelector ("#WUESTE").checked) &&
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
			document.querySelector(".TEXTBLOCK").classList.add("WEG");
			document.querySelector(".ABSCHLUSSTEXT").classList.add("ZEIGEN");
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
	
    <?php include '../../include/footer.php'; ?>
    
    
</body>
</html>


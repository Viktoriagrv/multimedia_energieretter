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
		
		.HERO{
			position: absolute;
			bottom: 10%;
			right:5%;
			height:35%;
			width:auto;
			animation-name: DREHEN;							/* Name (keyframe) */
			animation-duration: 2s;							/* Dauer (n) */
			animation-timing-function: linear;				/* Geschwindigkeit (ease, ease-in, ease-out, ease-in-out, linear) */
			animation-delay: 0s;							/* Verzögerung (n) */
			animation-iteration-count: 1;					/* Wiederholungen (n, infinite) */
			animation-direction: normal;					/* Abspielrichtung (normal, reverse, alternate, alternate-reverse) */
			animation-fill-mode: none;						/* Endzustand (none, forwards, backwards, both) */
			animation-play-state: paused;
			visibility: visible;
		}
		
		.HERO:hover{
			visibility: hidden;
		}
		
		@keyframes DREHEN {									/* Prozentwerte beziehen sich auf die Dauer der Animation */
			50% {											/* bei 50% der Dauer werden die folgenden Deklarationen dargestellt */
				transform: rotate(180deg);
			}
			100% {											/* bei 100% der Dauer werden die folgenden Deklarationen dargestellt */
				transform: rotate(360deg);
			}
		}
		
		
		.HEADER{
			position: absolute;
			top: 16%;
			left: 8%;
			font-family: "bangers";
			color: #e8a723;
			font-size: 5rem;
			}
			
		.WINDRAD{
			position:absolute;
			bottom:10%;
			left: 3%;
			height:40%;
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
			left: 18%;
			
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
	
	
    <main>
		
		<div class="HEADER">Windkraftanlagen</div>
		<img class="WINDRAD" src="../../images/Windenergie.png" alt="Landschaft mit Windrädern">
		
		<div>
			<img class="INFOBLASE" onclick="window.location.href='../../retterwissen/zukunftsenergien/wind_scarlet.php'" src="../../images/InfoBlase.png" alt="Infoblase">
			<p class="INFOTEXT" onclick="window.location.href='../../retterwissen/zukunftsenergien/wind_scarlet.php'">
				Erfahre mehr <br>
				über Windkraft!
			</p>
		</div>
		
		<div class="TEXTBLOCK">
			<p>
				Windkraftanlagen, auch Windräder genannt, sind große Maschinen, die mit Wind Strom erzeugen.<br>
				Windräder brauchen Orte, an denen es viel Wind gibt, damit sie sich schnell drehen können. Wichtig dabei ist, dass nichts im Weg steht, was den Wind blockieren könnte. Klicke <strong>DREI</strong> geeignete Standorte an:
			</p>
			
				
			<div class="ANTWORTEN">
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
					<button class="PRUEFEN">Überprüfen</button>	
			</div>
		</div>
		
		<div class="ABSCHLUSSTEXT">
			<p>Herzlichen Glückwunsch, das war richtig! Errichte nun an den eigneten Standorten auf der Weltkarte deine Windkraftanlagen.</p>
			<button  class="BTNLINKS" onclick="window.location.href='karte_wind_scarlet.php'">Zur Weltkarte</button>
		
		</div>
		
		<div class="FEHLERMELDUNG">
				<button id="ZU">&times;</button>	
			
				<div class="TEXT">
					<br>
					Das war leider nicht richtig. Versuche es noch einmal.
					<br><br>
					
					Oder lese noch mehr über Windkraft:
					<br><br>
					<button  class="BTNLINKS" onclick="window.location.href='../../retterwissen/zukunftsenergien/wind_scarlet.php'">Zum Retterwissen Windenergie</button>
						
				</div>						
		</div>
		
		<img class="HERO" src="../../images/BadGirl.png" alt="Scarlet Shade">
		
	</main>

    <script>	
				
		document.querySelector(".PRUEFEN").addEventListener("click",AuswahlAuswerten);
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
			document.querySelector(".TEXTBLOCK").classList.add("WEG");
			document.querySelector(".ABSCHLUSSTEXT").classList.add("ZEIGEN");
			document.querySelector(".HERO").style.animationPlayState = "running";
			
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


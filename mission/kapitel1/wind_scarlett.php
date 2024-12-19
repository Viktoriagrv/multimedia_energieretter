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
            background-color: #b9e5ef; /* HELLBLAUER HINTERGRUND, WASSER-THEMA background-color: #19325F;*/
        }

		.BTNLINKS{
			display: inline-block;
            padding: 20px 30px;
            font-family: 'Bangers';
            font-size: 1.5rem;
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
			bottom:5%;
			left: 5%;
			height:30%;
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
			top: 15%;
			left: 8%;
			font-family: "bangers";
			color: #e8a723;
			font-size: 5rem;
			}
			
		.WINDRAD{
			position:absolute;
			bottom:8%;
			right: 5%;
			height:40%;
			width:auto;
			}
		
		.INFOBLASE{
			position: absolute;
			top: 25%;
			right:10%;
			height: 12%;
			width: auto;
			z-index:4;
			cursor: pointer;
		}
		
		.INFOTEXT{
			position: absolute;
			top: 34%;
			right:15%;
			font-family: verdana;
			font-size: 1.5rem;
			color: #e8a723;
			text-align: left;
			cursor: pointer;
		}
		
		.TEXTBLOCK{
			position: absolute;
			top: 23%;
			left: 8%;
			font-family: verdana;
			font-size: 2rem;
			color: #285238;
			text-align: left;
			width: 60%;
			height: auto;
			visibility: visible;
		}
		
		.ANTWORTEN{
			position: absolute;
			left: 22%;
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
			left: 8%;
			font-family: verdana;
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
		
		<div class="HEADER">Windkraftanlagen</div>
		<img class="WINDRAD" src="../../images/Windenergie.png" alt="Landschaft mit Windrädern">
		
		<div>
			<img class="INFOBLASE" onclick="window.location.href='../../retterwissen/zukunftsenergien/wind.php'" src="../../images/InfoBlase.png" alt="Infoblase">
			<p class="INFOTEXT" onclick="window.location.href='../../retterwissen/zukunftsenergien/wind.php'">
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
				<input class="CHECKBOX" type="checkbox" id="WUESTE"> Steppe	
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
			<button  class="BTNLINKS" onclick="window.location.href='karte_wind_scarlett.php'">Zur Weltkarte</button>
		
		</div>
		
		<div class="FEHLERMELDUNG">
				<button id="ZU">&times;</button>	
			
				<div class="TEXT">
					Das war leider noch nicht richtig. Versuche es noch einmal.
					<br><br>
					
					Oder lese noch mehr über Windkraft
					<br><br>
					<button  class="BTNLINKS" onclick="window.location.href='../../retterwissen/zukunftsenergien/wind.php'">Zum Retterwissen Windenergie</button>
						
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

